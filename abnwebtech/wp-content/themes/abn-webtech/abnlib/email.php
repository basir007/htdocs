<?php
//require('../../../../wp-load.php');
require('../../../../wp-blog-header.php');
$url =get_template_directory_uri();
  
$site_title='ABN WEBTECH';

$errors = '';

function insert_abn_data(){
	global $wpdb;
	$errors=array();
	$name = $_POST[ "fname" ];
	$mobile = $_POST[ "mobile" ];
	$email  = $_POST[ "email" ];
	$subject  = $_POST[ "subject" ];
	$timeline = $_POST[ "timeline" ];
	$website = $_POST[ "website" ];
	$page_type = $_POST[ "page_type" ];
	$message = $_POST[ "message" ];
	
	$new_post = wp_insert_post( array(
		'ID' => '',
		'post_type' =>   'contact',
		'post_status' => 'publish',
		'post_title' => $name,
		'post_content' => $message,
	));

	if ( $new_post ) {

		update_post_meta( $new_post, 'mobile', $mobile );
		update_post_meta( $new_post, 'email',  $email );
		update_post_meta( $new_post, 'subject',$subject );
		update_post_meta( $new_post, 'timeline',$timeline );
		update_post_meta( $new_post, 'website',$website );
		update_post_meta( $new_post, 'page_type',$page_type );
	
	}	
}

if(!empty($_POST['email']))
{ 

		$subject="Contact Us  From  ".$site_title."";
	
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

	//	$body = "A user  $name submitted the contact form:\n\n".

		//$admin_email = 'nasiruddin.vwc@gmail.com';
 		date_default_timezone_set('Asia/Kolkata');
		$admin_email		= 'khan.nasiruddin2012@gmail.com';
		$store_name    		= $site_title;
		$store_owner 		=$site_title;
		$store_email 		= $admin_email;
	    $store_email_cc 	= 'abnwebtech@gmail.com';
		$email_from 		= $_POST['email'];
		$fullname			= $_POST['fname'];

		$body             = file_get_contents($url.'/abnlib/contact_email_template.html');
		$body			  = str_replace("{SITE_URL}", $url, $body);
		$body			  = str_replace("{SITE_LOGO}", '<img src="http://www.abnwebtech.com/wp-content/themes/abn-webtech/images/logo.png" border="0"  style="width:230px; height:auto;"/>', $body);		
		$body			  = str_replace("{SITE_NAME}", $store_name, $body);
		$body			  = str_replace("{Form}", "ABN WEBTECH : Contac US", $body);
		$body			  = str_replace("{Name}", $fullname, $body);		
		$body			  = str_replace("{Mobile}", $_POST['mobile'], $body);
		$body			  = str_replace("{Email}", $_POST['email'], $body);
    	$body			  = str_replace("{Subject}", $_POST['subject'], $body);
		$body			  = str_replace("{Datetime}", date("d-m-Y h:i:sa"), $body);
	    $body			  = str_replace("{Timeline}", $_POST['timeline'], $body);
	    $body			  = str_replace("{Website}", $_POST['website'], $body);
	    $body			  = str_replace("{Page_type}", $_POST['page_type'], $body);
		$body			  = str_replace("{Comments}", $_POST['message'], $body);
		$body			  = str_replace("{YEAR}", date(Y), $body);

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		/* additional headers */
		$headers .= "To:".$site_title."  <".$store_email.">\r\n";
		$headers .= "From: ".$_POST['fname']." <".$_POST['email']."> \r\n";
		$headers .= "cc: ".$store_email_cc."\r\n";

		$subject      = "ABN Webtech - Contact Us";
		mail($store_email,$subject,$body,$headers);			

		//========== auto responder mail =============//



		$body2            = file_get_contents($url.'/abnlib/auto_responder.html');

		$body2			  = str_replace("{SITE_URL}", $url, $body2);

		$body2			  = str_replace("{SITE_LOGO}", '<img src="http://www.abnwebtech.com/wp-content/themes/abn-webtech/images/logo.png" border="0"  width="50%"/>', $body2);		

		$body2			  = str_replace("{SITE_NAME}", $store_name, $body2);

		$body2			  = str_replace("{Name}", $fullname, $body2);
		$body2			  = str_replace("{YEAR}", date(Y), $body2);

		$headers1  = "MIME-Version: 1.0\r\n";

		$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";

		$headers1 .= "To: ".$fullname." <".$_POST['email'].">\r\n";

		$headers1 .= "From:".$site_title." <".$admin_email."> \r\n";

		$subject1      = 'Auto-Responder';			

		$chk=mail($_POST['email'],$subject1,$body2,$headers1);	

	   if($chk==true)
		{
			 insert_abn_data();
			 echo "ok";
	      
		}
		else
		{
			echo "error";
		
		}
}
?>