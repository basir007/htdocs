<?php 
 require('../../../../wp-blog-header.php');
 echo $url =bloginfo('template_directory');
 

 $site_title='ABN WEBTECH';
?>
<?php

$errors = '';

if(!empty($_POST['email']))

{ 

		$subject="An enquiry from  ".$site_title."";
	
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

	//	$body = "A user  $name submitted the contact form:\n\n".

		//$admin_email = 'nasiruddin.vwc@gmail.com';

		$admin_email = 'abnwebtech@gmail.com';
		$store_name    	= $site_title;
		$store_owner 		=$site_title;
		$store_email 		= $admin_email;
		//$store_email_cc 	= 'shenikwastratford07@gmail.com';
		$email_from 		= $_POST['email'];

		$body             = file_get_contents($url.'/abnlib/contact_email_template.html');
		$body			  = str_replace("{SITE_URL}", $url, $body);
		$body			  = str_replace("{SITE_LOGO}", '<img src="'.$url.'/images/logo.png" border="0" height="80" width="50%"/>', $body);		
		$body			  = str_replace("{SITE_NAME}", $store_name, $body);
		$body			  = str_replace("{Form}", "Contact Us", $body);
		$body			  = str_replace("{Name}", $_POST['name'], $body);		
		$body			  = str_replace("{Telephone}", $_POST['phone'], $body);
		$body			  = str_replace("{Email}", $_POST['email'], $body);
	//	$body			  = str_replace("{Subject}", $_POST['subject'], $body);
		$body			  = str_replace("{Comments}", $_POST['message'], $body);
		$body			  = str_replace("{YEAR}", date(Y), $body);

		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		/* additional headers */
		$headers .= "To:".$site_title."  <".$store_email.">\r\n";
		$headers .= "From: ".$_POST['name']." <".$_POST['email']."> \r\n";
		$headers .= "cc: ".$store_email_cc."\r\n";

		$subject      = "Contact Us";
		mail($store_email,$subject,$body,$headers);			

		//========== auto responder mail =============//



		$body2            = file_get_contents($url.'/abnlib/auto_responder.html');

		$body2			  = str_replace("{SITE_URL}", $url, $body2);

		$body2			  = str_replace("{SITE_LOGO}", '<img src="'.$url.'/images/logo.png" border="0"  height="80" width="50%"/>', $body2);		

		$body2			  = str_replace("{SITE_NAME}", $store_name, $body2);

		$body2			  = str_replace("{Name}", $_POST['name'], $body2);

		$headers1  = "MIME-Version: 1.0\r\n";

		$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";

		$headers1 .= "To: ".$_POST['name']." <".$_POST['email'].">\r\n";

		$headers1 .= "From:".$site_title." <".$admin_email."> \r\n";

		$subject1      = 'Auto-Responder';			

		$chk=mail($_POST['email'],$subject1,$body2,$headers1);	

	//	header('Location:http://'.$url.'/contact-us/?sucmsg=success#suc');

	   if($chk==true)
		{
		    //	echo $_SESSION['6_letters_code'];
			 echo "ok";
	       //echo "Form Submitted Succesfully";
		}
		else
		{
			echo "2";
			//echo "There was a problem in mail";
		}
	}
	

