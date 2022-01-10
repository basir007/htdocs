<?php
require_once dirname( __FILE__ ) . '/abn_lib/abn-custom-function.php';
require_once dirname( __FILE__ ) . '/abn_lib/cmb2-fontawesome-picker.php';
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
					'desc' => __('Upload Logo. ( 296 x 71 )', 'theme_textdomain'),
					'id' => $prefix.'logo',
					'default' => '',
					'type' => 'file',
					'options' => array( 'add_upload_file_text' => 'Upload Logo' ),
					'attributes'  => array(
								'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
				),	
			  	
				array(
						'name'    => 'Foundation Name ',
						'desc'    => 'eg: Prochesta',
						'id'      => $prefix . 'foundation_name',
						'type'        => 'text',
						'attributes'  => array(
								'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
								
						),
						
				),
				array(
						'name'    => 'Opening Time',
						'desc'    => 'eg:  9:30 am',
						'id'      => $prefix . 'opening_time',
						'type'        => 'text',
						'attributes'  => array(
								'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
								
						),
						
				),
				array(
						'name'    => 'Closing Time',
						'desc'    => 'eg :8:30 pm',
						'id'      => $prefix . 'closing_time',
						'type'        => 'text',
						'attributes'  => array(
								'required'    => 'required',
								'style'		=>'width:400px;height:30px;',
						),
						
				     ),
				
				));	

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
					'name' => 'Banner Description',
					'id'   => 'description',
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