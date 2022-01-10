<?php
require_once dirname( __FILE__ ) . '/abn_lib/abn-custom-function.php';
	if ( file_exists( dirname( __FILE__ ) . '/abn_lib/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/abn_lib/init.php';
	} 
	elseif ( file_exists( dirname( __FILE__ ) . '/abn_lib/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/abn_lib/init.php';
}
     /*Attach Post/ Page*/
//require_once dirname( __FILE__ ) . '/abn_lib/cmb2-attached-posts/cmb2-attached-posts-field.php';
class my_Admin {
   
    private $key = 'nkhan_option';
    public $option_metabox = array();
    protected $title = 'khan-opt';
    protected $options_pages = array();
 
    public function __construct() {
       
        $this->title = __( 'ABN Settings', 'theme_textdomain' );
    }
 
 
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) ); //create tab pages
    }
 
 
    public function init() {
    	$option_tabs = self::option_fields();
        foreach ($option_tabs as $index => $option_tab) {
        	register_setting( $option_tab['id'], $option_tab['id'] );
        }
    }
 
   
    public function add_options_page() {        
        $option_tabs = self::option_fields();
        foreach ($option_tabs as $index => $option_tab) {
        	if ( $index == 0) {
        		$this->options_pages[] = add_menu_page( $this->title, $this->title, 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) ); //Link admin menu to first tab
        		add_submenu_page( $option_tabs[0]['id'], $this->title, $option_tab['title'], 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) ); //Duplicate menu link for first submenu page
        	} else {
        		$this->options_pages[] = add_submenu_page( $option_tabs[0]['id'], $this->title, $option_tab['title'], 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) );
        	}
        }
    }
 
 
    public function admin_page_display() {
    	$option_tabs = self::option_fields();
    	$tab_forms = array();     	   	
        ?>
        <div class="wrap cmb_options_page <?php echo $this->key; ?>">        	
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            
            <!-- Options Page Nav Tabs -->           
            <h2 class="nav-tab-wrapper">
            	<?php foreach ($option_tabs as $option_tab) :
            		$tab_slug = $option_tab['id'];
            		$nav_class = 'nav-tab';
            		if ( $tab_slug == $_GET['page'] ) {
            			$nav_class .= ' nav-tab-active';
            			$tab_forms[] = $option_tab;
            		}
            	?>            	
            	<a class="<?php echo $nav_class; ?>" href="<?php menu_page_url( $tab_slug ); ?>"><?php esc_attr_e($option_tab['title']); ?></a>
            	<?php endforeach; ?>
            </h2>
            <!-- End of Nav Tabs -->
 
            <?php foreach ($tab_forms as $tab_form) : ?>
            <div id="<?php esc_attr_e($tab_form['id']); ?>" class="group">
            	<?php cmb2_metabox_form( $tab_form, $tab_form['id'] ); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
    public function option_fields() {
     $prefix='abn_';	
        if ( ! empty( $this->option_metabox ) ) {
            return $this->option_metabox;
        } 
		$link_post_types = array('charter', 'page');       
        $this->option_metabox[] = array(
            'id'         => 'home_page',
            'title'      => 'Home Page',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'home_page' ), ),
            'fields'     => array(
				array(
					'name' => __('Logo', 'theme_textdomain'),
					'desc' => __('Upload Logo. ( 300 x 150 )', 'theme_textdomain'),
					'id' => $prefix.'logo',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Header Logo' ),
					'attributes'  => array(
								//'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
				),	
			   array(
					'name' => __('Footer Logo', 'theme_textdomain'),
					'desc' => __('Upload Logo. ( 300 x 150 )', 'theme_textdomain'),
					'id' => $prefix.'footer_logo',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Footer Logo' ),
					'attributes'  => array(
								//'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
				),	
			  	array(
					'name' => __('Favicon', 'theme_textdomain'),
					'desc' => __('Upload Favicon (64 x64)', 'theme_textdomain'),
					'id' => $prefix.'favicon',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Favicon' ) ,
					'attributes'  => array(
								//'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
					
				),
				
				array(
						'name'    => __( 'Home Page', 'cmb2' ),
						'desc'    => __( 'Select Front page', 'cmb2' ),
						'id'      => $prefix . 'home_page',
						'type'    => 'select',
						'options' => cmb2_get_post_options( array( 'post_type' => 'page', 'numberposts' => -1 ) ),
						'attributes'  => array(
								//'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
				),
				
						
				array(
						'name'    => 'Contact Email',
						'desc'    => 'abnwebtech@gmail.com',
						'id'      => $prefix.'contact_email',
						'type'    => 'text_email',
						'attributes'  => array(
								//'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
						
				),
				
				array(
						'name'    => 'Contact No',
						'desc'    => '+ 91 8145 6161 91 ',
						'id'      => $prefix . 'contact_no',
						'type'        => 'text',
						'attributes'  => array(
							//	'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
						
				),
				
			array(
					'name' => __('Left Side Image ', 'theme_textdomain'),
					'desc' => __('Upload Image (700 x 600)', 'theme_textdomain'),
					'id' => $prefix.'digi_right_img',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Image' ) ,
					'attributes'  => array(
							//	'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
					
				),
			    array(
					'name' => __('Footer Left Image ', 'theme_textdomain'),
					'desc' => __('Upload Image (700 x 600)', 'theme_textdomain'),
					'id' => $prefix.'footer-left',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Image' ) ,
					'attributes'  => array(
							//	'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
					
				),
					array(
						'name'    => 'About Us   [Footer Section]',
						'desc'    => 'About Us Left Section in Footer',
						'id'      => $prefix.'about_us',
						'type'    => 'wysiwyg',
						'options' => array(
							'wpautop' => true,
						//	'media_buttons' => true, 
							'textarea_name' => $editor_id, 
							'textarea_rows' => get_option('default_post_edit_rows', 5), 
							'tabindex' => '',
							'editor_css' => '',
							 'editor_class' => '', 
							'teeny' => false, 
							'dfw' => false,
							'tinymce' => true, 
							'quicktags' => true 
						),
					),
				
			     array(
							'name' => 'Copyright info',
							'desc' => 'field description (optional)',
							'default' => 'Copyright info',
							'id' => $prefix . 'copyright',
							'type' => 'textarea_code',
							'attributes'  => array(
										'style'		=>'width:400px;height:50px;',
								 	 ),
							
							),
					
							)
      				  );		
 			$this->option_metabox[] = array(
            'id'         => 'manage_banner',
            'title'      => 'Manage Banner',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'manage_banner' ), ),
            'show_names' => true,
            'fields'     => array(
					
			array(
			'id'          => $prefix.'banner',
			'type'        => 'group',
			'description' => __('Manage Banner', 'cmb2' ),
			'options'     => array(
				'group_title'   => __( 'Banner {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
				'add_button'    => __( 'Add Another Banner', 'cmb2' ),
				'remove_button' => __( 'Remove Banner', 'cmb2' ),
				'sortable'      => true, // beta
			),
			// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
			'fields'      => array(
				array(
					'name' => 'Banner Title',
					'id'   => 'title',
					'type' => 'text',
					// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
				),
				
				array(
					'name' => 'Banner Image',
					'id'   => 'image',
					'type' => 'file',
				),
					
			),
			
			),			
			));
		
		    $this->option_metabox[] = array(
            'id'         => 'contact_us',
            'title'      => 'Contact Us',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'contact_details' ), ),
            'show_names' => true,
            'fields'     => array(
				array(
					'name' => __('Address', 'theme_textdomain'),
					'desc' => __('Type Your Office Address', 'theme_textdomain'),
					'id' => $prefix .'address',
					'default' => '',					
					'type' => 'textarea_small',
					'attributes'  => array(
									'placeholder' => 'Enter Address',
									'rows'        => 2,
								    'style'		=>'width:400px;height:100px;',
								  ),
					),
				array(
					'name' => __('Phone No', 'theme_textdomain'),
					'desc' => __('Type Office Phone no', 'theme_textdomain'),
					'id' => $prefix .'phone',
					'default' => '',					
					'type' => 'text',
					'attributes'  => array(
									'placeholder' => '',
								    'required'    => 'required',
									'style'		=>'width:400px;',
									
								  ),
				),
				
				array(
					'name' => __('Email Address', 'theme_textdomain'),
					'desc' => __('Type admin email', 'theme_textdomain'),
					'id' => $prefix .'email',
					'default' => '',					
					'type' => 'text_email',
					'attributes'  => array(
									'placeholder' => 'Enter Email Address',
									'required'    => 'required',
									'style'		=>'width:400px;',
									
								  ),
					),
			    
			)
        );
	    $this->option_metabox[] = array(
            'id'         => 'social_options',
            'title'      => 'Social Link',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'social_options' ), ),
            'show_names' => true,
            'fields'     => array(
				
			     array(
					'name' => __('Facebook Url', 'theme_textdomain'),
					'desc' => __('eg : https://facebook.com/developer', 'theme_textdomain'),
					'id' => $prefix .'fb_link',
					'default' => '',					
					'type' => 'text_url',
					'attributes'  => array(
									'placeholder' => 'Facebook URL',
									'style'		=>'width:400px;'
									//'required'    => 'required',
								  ),
				),
				
				array(
					'name' => __('Twitter Url', 'theme_textdomain'),
					'desc' => __('eg : https://twitter.com/abnwebtech', 'theme_textdomain'),
					'id' => $prefix .'tweet_link',
					'default' => '',					
					'type' => 'text_url',
					'attributes'  => array(
									'placeholder' => 'Twitter URL',
									'style'		=>'width:400px;'
									//'required'    => 'required',
								  ),
				),
				
				array(
					'name' => __('Google+ Url', 'theme_textdomain'),
					'desc' => __('eg: https://plus.google.com/', 'theme_textdomain'),
					'id' => $prefix .'gp_link',
					'default' => '',					
					'type' => 'text_url',
					'attributes'  => array(
									'placeholder' => 'Google+ URL',
									'style'		=>'width:400px;'
									//'required'    => 'required',
								  ),
				),
				array(
					'name' => __('LinkedIn Url', 'theme_textdomain'),
					'desc' => __('eg :https://www.linkedin.com/abnwebtech/', 'theme_textdomain'),
					'id' => $prefix .'li_link',
					'default' => '',					
					'type' => 'text_url',
					'attributes'  => array(
									'placeholder' => 'Linkedin  URL',
									'style'		=>'width:400px;'
									//'required'    => 'required',
								  ),
				),
				
			   array(
					'name' => __('Instagram  Url', 'theme_textdomain'),
					'desc' => __('eg: https://www.instagram.com/', 'theme_textdomain'),
					'id' => $prefix .'ig_link',
					'default' => '',					
					'type' => 'text_url',
					'attributes'  => array(
									'placeholder' => 'Instagram URL',
									'style'		=>'width:400px;'
									//'required'    => 'required',
								  ),
				),
			   
			
			)
        );
 	return $this->option_metabox;
   }
    public function get_option_key($field_id) {
    	$option_tabs = $this->option_fields();
    	foreach ($option_tabs as $option_tab) { 
    		foreach ($option_tab['fields'] as $field) { 
    			if ($field['id'] == $field_id) {
    				return $option_tab['id'];
    			}
    		}
    	}
    	return $this->key; 
    }
    public function __get( $field ) {
        if ( in_array( $field, array( 'key', 'fields', 'title', 'options_pages' ), true ) ) {
            return $this->{$field};
        }
        if ( 'option_metabox' === $field ) {
            return $this->option_fields();
        }
 
        throw new Exception( 'Invalid property: ' . $field );
    }
 
}

 
// Get it started
$my_Admin = new my_Admin();
$my_Admin->hooks();
function abn_option($key = '' ) {
    global $my_Admin;
    return cmb2_get_option ( $my_Admin->get_option_key($key), $key );
}


function js_limit_group_repeat($cmb) {	
?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		var limit            = 4;
		var fieldGroupId     = '_home_widget';
		var $fieldGroupTable = $( document.getElementById( fieldGroupId + '_repeat' ) );
		var countRows = function() {
			return $fieldGroupTable.find( '> .cmb-row.cmb-repeatable-grouping' ).length;
		};
		var disableAdder = function() {
			$fieldGroupTable.find('.cmb-add-group-row.button').prop( 'disabled', true );
		};
		var enableAdder = function() {
			$fieldGroupTable.find('.cmb-add-group-row.button').prop( 'disabled', false );
		};
		$fieldGroupTable
			.on( 'cmb2_add_row', function() {
				if ( countRows() >= limit ) {
					disableAdder();
				}
			})
			.on( 'cmb2_remove_row', function() {
				if ( countRows() < limit ) {
					enableAdder();
				}
			});
	});
	</script>
	<?php
}
add_action( 'admin_footer', 'js_limit_group_repeat',10);
include('abn_lib/abn_manage_page_func.php');

?>