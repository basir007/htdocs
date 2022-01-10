<?php
add_action( 'cmb2_init', 'pages_link' );

function pages_link() {
	$prefix = 'page_';
	$page = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Manage Page', 'cmb2' ),
		'object_types' => array( 'page', 'post' ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$page->add_field(

		array(
			'name' => __( 'Banner Caption', 'theme_textdomain' ),
			'desc' => __( 'Banner Title', 'theme_textdomain' ),
			'id' => $prefix . 'banner_title',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Banner Title',
				'style' => 'width:430px;'
			)

		) );
	$page->add_field(

		array(
			'name' => __( 'Banner Subtitle ', 'theme_textdomain' ),
			'desc' => __( 'Page Subtitle', 'theme_textdomain' ),
			'id' => $prefix . 'banner_subtitle',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Page  Subtitle Title',
				'style' => 'width:430px;'
			)

		) );

	$page->add_field(

		array(
			'name' => __( 'Banner Title Color ', 'theme_textdomain' ),
			'desc' => __( 'Banner Title Color', 'theme_textdomain' ),
			'id' => $prefix . 'banner_title_color',
			'default' => '',
			'type' => 'colorpicker',

		) );

	$page->add_field(

		array(
			'name' => __( 'Subtitle Color ', 'theme_textdomain' ),
			'desc' => __( 'Subtitle Title Color', 'theme_textdomain' ),
			'id' => $prefix . 'subtitle_color',
			'default' => '',
			'type' => 'colorpicker',

		) );

	$page->add_field( array(
		'name' => __( 'Banner Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL [1024 x 175].', 'cmb2' ),
		'id' => $prefix . 'banner_img',
		'type' => 'file',
		'options' => array( 'add_upload_file_text' => 'Upload Page Banner Image' )
	) );
	
	$page->add_field( array(
		'name' => __( 'Sidebar Ads Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL [400 x 600].', 'cmb2' ),
		'id' => $prefix . 'sidebar_ads',
		'type' => 'file',
		'options' => array( 'add_upload_file_text' => 'Upload Sidebar Ads Image' )
	) );
	$page->add_field( array(
		'name' => 'Location',
		'desc' => 'Drag the marker to set the exact location',
		'id' => $prefix . 'location',
		'type' => 'pw_map',
		// 'split_values' => true, // Save latitude and longitude as two separate fields
	));
}
add_action( 'init', 'page_tags' );
/* Page Tags*/
function page_tags() {
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' => __( 'Search Tags' ),
		'popular_items' => __( 'Popular Tags' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Tag' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items' => __( 'Add or remove tags' ),
		'choose_from_most_used' => __( 'Choose from the most used tags' ),
		'menu_name' => __( 'Tags' ),
	);

	register_taxonomy( 'page_tag', 'page', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'page-tag' ),
	) );
}

/*Managen Testimonial*/
function abn_testimonial() {
	$labels = array(
		'name' => _x( 'Testimonial', 'post type general name' ),
		'singular_name' => _x( 'Testimonial Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Testimonial', 'Testimonial' ),
		'add_new_item' => __( 'Add New Testimonial' ),
		'edit_item' => __( 'Edit Testimonial' ),
		'new_item' => __( 'New Testimonial' ),
		'all_items' => __( 'All Testimonials' ),
		'view_item' => __( 'View Testimonial' ),
		'search_items' => __( 'Search Testimonial' ),
		'not_found' => __( 'No Testimonial found' ),
		'not_found_in_trash' => __( 'No Testimonial  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'ABN Testimonial'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Testimonial  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'abn_testimonial' );


add_action( 'cmb2_init', 'testimonial' );

function testimonial() {
	$prefix = 'cl_';
	$testimonial = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Client Details', 'cmb2' ),
		'object_types' => array( 'testimonial', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	$testimonial->add_field(
		array(
			'name' => __( 'Photo', 'theme_textdomain' ),
			'desc' => __( 'Upload Client Photo [ 120 x 120 ]', 'theme_textdomain' ),
			'id' => $prefix . 'photo',
			'default' => '',
			'type' => 'file',
			'options' => array( 'add_upload_file_text' => 'Upload Client Photo' ),
			'attributes' => array(
				'required' => 'required',
				'style' => 'width:400px;height:30px;',
			),
		) );

	$testimonial->add_field(
		array(
			'name' => __( 'Designation', 'theme_textdomain' ),
			'desc' => __( 'Client Designation', 'theme_textdomain' ),
			'id' => $prefix . 'designation',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Client Designation',
				'style' => 'width:400px;'
			)
		) );

	$testimonial->add_field(
		array(
			'name' => __( 'Address', 'theme_textdomain' ),
			'desc' => __( 'Client Addres', 'theme_textdomain' ),
			'id' => $prefix . 'address',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Client Address',
				'style' => 'width:400px;'
			)
		) );
}



/*Managen Portfolio*/

function abn_portfolio() {
	$labels = array(
		'name' => _x( 'Portfolio', 'post type general name' ),
		'singular_name' => _x( 'Portfolio Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Portfolio', 'Portfolio' ),
		'add_new_item' => __( 'Add New Portfolio' ),
		'edit_item' => __( 'Edit Portfolio' ),
		'new_item' => __( 'New Portfolio' ),
		'all_items' => __( 'All Portfolios' ),
		'view_item' => __( 'View Portfolio' ),
		'search_items' => __( 'Search Portfolio' ),
		'not_found' => __( 'No Portfolio found' ),
		'not_found_in_trash' => __( 'No Portfolio  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage Portfolio'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Portfolio  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'thumbnail', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'abn_portfolio' );




function portfolio_meta() {
	$prefix = 'portfolio_';
	
	$portfolio = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Portfolio Meta', 'cmb2' ),
		'object_types' => array( 'portfolio' ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$portfolio->add_field(

		array(
			'name' => __( 'Taget Url', 'theme_textdomain' ),
			'desc' => __( 'Tragel Url', 'theme_textdomain' ),
			'id' => $prefix . 'target_url',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Taget Url',
				'style' => 'width:430px;'
			)

		) );
	
	$portfolio->add_field( array(
		'name' => __( 'Upload Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL [1024 x 175].', 'cmb2' ),
		'id' => $prefix . 'img',
		'type' => 'file',
		'options' => array( 'add_upload_file_text' => 'Upload Portfolio Image' )
	) );
}

add_action( 'cmb2_init', 'portfolio_meta' );


function abn_portfolio_cat() {
	$labels = array(
		'name' => _x( 'Category', 'taxonomy general name' ),
		'singular_name' => _x( 'About Product Category', 'taxonomy singular name' ),
		'search_items' => __( 'Search Category' ),
		'popular_items' => __( 'Popular Category' ),
		'all_items' => __( 'All Category' ),
		'parent_item' => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent:' ),
		'edit_item' => __( 'Edit Category' ),
		'update_item' => __( 'Update' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
	);
	register_taxonomy( 'portfolio_type', array( 'portfolio' ), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-type' ),
	) );

}
add_action( 'init', 'abn_portfolio_cat', 0 );

//add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"

/* Portfolio Tags*/
function create_tag_taxonomies() {
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' => __( 'Search Tags' ),
		'popular_items' => __( 'Popular Tags' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Tag' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items' => __( 'Add or remove tags' ),
		'choose_from_most_used' => __( 'Choose from the most used tags' ),
		'menu_name' => __( 'Tags' ),
	);

	register_taxonomy( 'portfolio-tag', 'portfolio', array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-tag' ),
	) );
}
//add_action( 'init', 'create_tag_taxonomies' );

/*Managen Partner*/
function abn_partner() {
	$labels = array(
		'name' => _x( 'Partner', 'post type general name' ),
		'singular_name' => _x( 'Partner Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Partner', 'Partner' ),
		'add_new_item' => __( 'Add New Partner' ),
		'edit_item' => __( 'Edit Partner' ),
		'new_item' => __( 'New Partner' ),
		'all_items' => __( 'All Partners' ),
		'view_item' => __( 'View Partner' ),
		'search_items' => __( 'Search Partner' ),
		'not_found' => __( 'No Partner found' ),
		'not_found_in_trash' => __( 'No Partner  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage Partner'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Partner  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'partner', $args );
}

add_action( 'init', 'abn_partner' );

add_action( 'cmb2_init', 'partner_metabox' );

function partner_metabox() {
	$prefix = 'pn_';
	$partner = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Partner Details', 'cmb2' ),
		'object_types' => array( 'partner', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	$partner->add_field(
		array(
			'name' => __( 'Partner Logo', 'theme_textdomain' ),
			'desc' => __( 'Upload  Partner Logo', 'theme_textdomain' ),
			'id' => $prefix . 'logo',
			'default' => '',
			'type' => 'file',
			'options' => array( 'add_upload_file_text' => 'Upload Partner Photo' ),
			'attributes' => array(
				'required' => 'required',
				'style' => 'width:400px;height:30px;',
			),
		) );

}

/*Partner Section End*/


/*Managen Project*/
function abn_project() {
	$labels = array(
		'name' => _x( 'Project', 'post type general name' ),
		'singular_name' => _x( 'Project Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Project', 'Project' ),
		'add_new_item' => __( 'Add New Project' ),
		'edit_item' => __( 'Edit Project' ),
		'new_item' => __( 'New Project' ),
		'all_items' => __( 'All Projects' ),
		'view_item' => __( 'View Project' ),
		'search_items' => __( 'Search Project' ),
		'not_found' => __( 'No Project found' ),
		'not_found_in_trash' => __( 'No Project  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage Projects'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Project  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'thumbnail', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'project', $args );
}

add_action( 'init', 'abn_project' );


function project_meatbox() {
	$prefix = 'project-';
	$project = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Project Details', 'cmb2' ),
		'object_types' => array( 'project', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	$project->add_field(
		array(
			'name' => __( 'Photo', 'theme_textdomain' ),
			'desc' => __( 'Upload Project Photo [ 500 x 700 ]', 'theme_textdomain' ),
			'id' => $prefix . 'photo',
			'default' => '',
			'type' => 'file',
			'options' => array( 'add_upload_file_text' => 'Upload Project Photo' ),
			'attributes' => array(
				//	'required'    => 'required',
				'style' => 'width:400px;height:30px;',
			),
		) );

	$project->add_field(
		array(
			'name' => __( 'Address', 'theme_textdomain' ),
			'desc' => __( 'Office Address', 'theme_textdomain' ),
			'id' => $prefix . 'address',
			'default' => '',
			'type' => 'textarea_small',

		) );

	$project->add_field(
		array(
			'name' => __( 'Working Hours', 'theme_textdomain' ),
			'desc' => __( 'Working Hours', 'theme_textdomain' ),
			'id' => $prefix . 'working_hours',
			'default' => '',
			'type' => 'textarea_small',

		) );

	$project->add_field(
		array(
			'name' => __( 'Contact Us', 'theme_textdomain' ),
			'desc' => __( 'contact us', 'theme_textdomain' ),
			'id' => $prefix . 'phone',
			'default' => '',
			'type' => 'textarea_small',

		) );




	$project->add_field(
		array(
			'name' => __( 'Email ', 'theme_textdomain' ),
			'desc' => __( 'Email', 'theme_textdomain' ),
			'id' => $prefix . 'email',
			'default' => '',
			'type' => 'textarea_small',

		) );
	$project->add_field(
		array(
			'name' => __( 'External  Link', 'theme_textdomain' ),
			'desc' => __( 'External Link ', 'theme_textdomain' ),
			'id' => $prefix . 'external',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Demo Link',
				'style' => 'width:430px;'
			)
		) );


}


add_action( 'cmb2_init', 'project_meatbox' );

/* portfolio Tags */

function project_tags() {

	$labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' => __( 'Search Tags' ),
		'popular_items' => __( 'Popular Tags' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Tag' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items' => __( 'Add or remove tags' ),
		'choose_from_most_used' => __( 'Choose from the most used tags' ),
		'menu_name' => __( 'Tags' ),
	);

	register_taxonomy( 'project_tag', array( 'project', 'portfolio' ), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tag' ),
	) );
}
add_action( 'init', 'project_tags' );


/*Managen FAQ*/
function abn_faq() {
	$labels = array(
		'name' => _x( 'FAQ', 'post type general name' ),
		'singular_name' => _x( 'FAQ Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Question', 'Question' ),
		'add_new_item' => __( 'Add New Question' ),
		'edit_item' => __( 'Edit Question' ),
		'new_item' => __( 'New Question' ),
		'all_items' => __( 'All Questions' ),
		'view_item' => __( 'View Question' ),
		'search_items' => __( 'Search Question' ),
		'not_found' => __( 'No Question found' ),
		'not_found_in_trash' => __( 'No Question  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage FAQ'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Question  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'abn-faqs', $args );
}

add_action( 'init', 'abn_faq' );


function abn_faq_cat() {
	$labels = array(
		'name' => _x( 'FAQ Category', 'taxonomy general name' ),
		'singular_name' => _x( 'FAQ Category', 'taxonomy singular name' ),
		'search_items' => __( 'Search FAQ Category' ),
		'popular_items' => __( 'Popular FAQ Category' ),
		'all_items' => __( 'All FAQ Category' ),
		'parent_item' => __( 'Parent FAQ Category' ),
		'parent_item_colon' => __( 'Parent:' ),
		'edit_item' => __( 'Edit FAQ Category' ),
		'update_item' => __( 'Update' ),
		'add_new_item' => __( 'Add New FAQ Category' ),
		'new_item_name' => __( 'New FAQ Category Name' ),
	);
	register_taxonomy( 'faq-cat', array( 'abn-faqs' ), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'faq-cat' ),
	) );

}
add_action( 'init', 'abn_faq_cat', 0 );






/* FAQ Section END  */

/*Our Team  Start*/

function abn_team() {
	$labels = array(
		'name' => _x( 'Team', 'post type general name' ),
		'singular_name' => _x( 'Team Management', 'post type singular name' ),
		'add_new' => _x( 'Add New Member', 'Member' ),
		'add_new_item' => __( 'Add New Member' ),
		'edit_item' => __( 'Edit Member' ),
		'new_item' => __( 'New Member' ),
		'all_items' => __( 'All Members' ),
		'view_item' => __( 'View Member' ),
		'search_items' => __( 'Search Member' ),
		'not_found' => __( 'No Member found' ),
		'not_found_in_trash' => __( 'No Member  found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage  Team'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Member  and product specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor' ),
		'has_archive' => true,
	);
	register_post_type( 'team', $args );
}

add_action( 'init', 'abn_team' );



add_action( 'cmb2_init', 'team_metabox' );

function team_metabox() {
	$prefix = 'tm_';
	$tm = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Member Details', 'cmb2' ),
		'object_types' => array( 'team', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	$tm->add_field(
		array(
			'name' => __( 'Member Photo', 'theme_textdomain' ),
			'desc' => __( 'Member Photo', 'theme_textdomain' ),
			'id' => $prefix . 'member_photo',
			'default' => '',
			'type' => 'file',
			'options' => array( 'add_upload_file_text' => 'Upload Member Photo' ),
			'attributes' => array(
				'required' => 'required',
				'style' => 'width:400px;height:30px;',
			),
		) );

	$tm->add_field(
		array(
			'name' => __( 'Member Designation', 'theme_textdomain' ),
			'desc' => __( 'Member Designation', 'theme_textdomain' ),
			'id' => $prefix . 'member_desig',
			'default' => '',
			'type' => 'text',
			'attributes' => array(
				'placeholder' => 'Enter Client Designation',
				'style' => 'width:430px;'
			)
		) );
}


/* Manage Contact */

function abn_Contact() {
	$labels = array(
		'name' => _x( 'Contact', 'post type general name' ),
		'singular_name' => _x( 'Contact Management', 'post type singular name' ),
		'add_new' => _x( 'Add New ', 'Contact' ),
		'add_new_item' => __( 'Add New ' ),
		'edit_item' => __( 'Edit Contact  ' ),
		'new_item' => __( 'New Contact ' ),
		'all_items' => __( 'All Contact ' ),
		'view_item' => __( 'View Contact ' ),
		'search_items' => __( 'Search Contact ' ),
		'not_found' => __( 'No Contact  found' ),
		'not_found_in_trash' => __( 'No Contact   found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Manage Contact'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds our Contact  and product specific data',
		'public' => false,
		'menu_position' => 1,
		'supports' => array( 'title','editor' ),
		'has_archive' => true,
		'publicly_queriable' => true, // you should be able to query it
		'show_ui' => true, // you should be able to edit it in wp-admin
		'exclude_from_search' => true, // you should exclude it from search results
		'show_in_nav_menus' => false, // you shouldn't be able to add it to menus
		'has_archive' => false, // it shouldn't have archive page
		'rewrite' => false,
	);
	register_post_type( 'contact', $args );
}

add_action( 'init', 'abn_contact' );



add_action( 'cmb2_init', 'contact_meta' );

function contact_meta() {

	$contact = new_cmb2_box( array(
		'id' => $prefix . 'metabox',
		'title' => __( 'Contact Full Details - Contact ', 'cmb2' ),
		'object_types' => array( 'contact', ), // Post type

		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		//	'cmb_styles' => true, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );


	

	$contact->add_field(
		array(
			'name' => __( 'Email', 'theme_textdomain' ),
			'desc' => __( 'Enter Email', 'theme_textdomain' ),
			'id' => $prefix . 'email',
			'type' => 'text',
			'column' => array(
				'position' => 2,
				'name' => 'Email',
			),
			'attributes' => array(
				'style' => 'width:430px;'
			) )
	);
	$contact->add_field(
		array(
			'name' => __( 'Mobile', 'theme_textdomain' ),
			'desc' => __( 'Enter  Mobile Number', 'theme_textdomain' ),
			'id' => $prefix . 'mobile',
			'type' => 'text',
			'column' => array(
				'position' =>3,
				'name' => 'Mobile',
			),
			'attributes' => array(
				'style' => 'width:430px;'
			) )
	);
	$contact->add_field(
		array(
			'name' => __( 'Subject', 'theme_textdomain' ),
			'desc' => __( 'Enter Subject', 'theme_textdomain' ),
			'id' => $prefix.'subject',
			'type' => 'text',
			
			'attributes' => array(
				'style' => 'width:430px;'
			) )
	);

	$contact->add_field(
		array(
			'name' => __( 'Project File', 'theme_textdomain' ),
			'desc' => __( 'Upload Project File', 'theme_textdomain' ),
			'id' => $prefix . 'project_file',

			'type' => 'file',

			// Optional:
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'text' => array(
				'add_upload_file_text' => 'Project Files' // Change upload button text. Default: "Add or Upload File"
			),
			// query_args are passed to wp.media's library query.
			'query_args' => array(
				//	'type' => 'jpeg/png/jpg', // Make library only display PDFs.
				//'type' => 'application/pdf',
			),

		) );
	
	$contact->add_field(
		array(
			'name' => __( 'Contact Type', 'theme_textdomain' ),
			'desc' => __( 'Select Contact Type', 'theme_textdomain' ),
			'id' => $prefix . 'page_type',
			'type' => 'select',
			'options' => array(
				'Free Quote' => esc_html__( 'Free Quote', 'cmb2' ),
				'Contact US' => esc_html__( 'Contact US', 'cmb2' ),
				'Quick' => esc_html__( 'Quick', 'cmb2' ),
				'SideBar' => esc_html__( 'Sidebar', 'cmb2' ),

			),
			//'options_cb' => 'cmb_subject_options',	
			'column' => array(
				'sort' => true,
				'position' => 4,
				'name' => 'Page Type',
			),
			'attributes' => array(
				'style' => 'width:430px;'
			) )
	);

}

function ba_metabox_add_for_top_level_posts_only( $display, $meta_box ) {
	if ( !isset( $meta_box[ 'show_on' ][ 'key' ] ) || 'parent-id' !== $meta_box[ 'show_on' ][ 'key' ] ) {
		return $display;
	}

	$post_id = 0;

	// If we're showing it based on ID, get the current ID
	if ( isset( $_GET[ 'Contact' ] ) ) {
		$post_id = $_GET[ 'Contact' ];
	} elseif ( isset( $_POST[ 'post_ID' ] ) ) {
		$post_id = $_POST[ 'post_ID' ];
	}

	if ( !$post_id ) {
		return $display;
	}

	// If the post doesn't have ancestors, show the box
	if ( !get_post_ancestors( $post_id ) ) {
		return $display;
	}

	// Otherwise, it's not a top level post, so don't show it
	return false;
}
add_filter( 'cmb2_show_on', 'ba_metabox_add_for_top_level_posts_only', 10, 2 );

function cmb_subject_options( $field ) {
	$options = array(
		'sapphire' => 'Sapphire Blue',
		'sky' => 'Sky Blue',
		'navy' => 'Navy Blue',
		'ruby' => 'Ruby Red',
		'purple' => 'Amethyst Purple',
	);

	// If in the 'blue' category, only show blue options.
	if ( has_category( 'blue', $field->object_id ) ) {
		$options = array(
			'sapphire' => 'Sapphire Blue',
			'sky' => 'Sky Blue',
			'navy' => 'Navy Blue',
		);
	}

	return $options;
}
?>