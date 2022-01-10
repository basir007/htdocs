<?php
/* Template Name: Logo Design*/
get_header();
while ( have_posts() ) : the_post();
$bannar_img = get_post_meta( $post->ID, 'page_banner_img', true );
if ( empty( $bannar_img ) ) {
	$bannar_img = get_template_directory_uri() . '/images/best-website-design-company-kolkata.jpg';
}

$page_subtitle = get_post_meta( $post->ID, 'page_subtitle', true );
if ( empty( $page_subtitle ) ) {
	$page_subtitle = get_the_title();
}
$page_subtitle_color = get_post_meta( $post->ID, 'page_subtitle_color', true );
if ( empty( $page_subtitle_color ) ) {
	$page_subtitle_color ='#fff';
}

$bannar_title_color = get_post_meta( $post->ID, 'page_banner_title_color', true );
if ( empty( $bannar_title_color ) ) {
	$bannar_title_color ='#fff';
}
$bannar_title = get_post_meta( $post->ID, 'page_banner_title', true );
if ( empty( $bannar_title ) ) {
	$bannar_title = get_the_title();
}
?>
<!--header end--> 
<section class="page-banner">
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="<?php echo $bannar_img; ?>" alt="<?php echo $bannar_title; ?>" class="img-fluid">
				
			</div>
		</div>
	</div>
</section>

<div class="container page">
	<div class="row">
		<div class="col-md-12">
			<div class="conat">
				<h2 class="page-title text-center">
					<?php the_title(); ?>
				</h2>
			<div class="lead">
				<figure class="figure d-none">
					<img class="size-full img-fluid " src="http://localhost/abnweb/wp-content/uploads/2018/01/wordpress-kolkata.jpg" alt="Free WordPress Consultant in Kolkata" width="600" height="500">
					<figcaption class="wp-caption-text">WordPress Consultant in Kolkata</figcaption>
				</figure>
				
				
				<?php
				the_content();
				?>
			</div>
			</div>
			<hr class="separator">
			<div class="logos">
				<div class="row">
					<div class="col-md-4">
						<div class="logo-demo">
							<img src="http://www.abnwebtech.com/wp-content/uploads/2018/01/webiste-Logo-design-kolkata.jpg" >
							<div class="logo-for">Deen-Ultimate Power Solutions </div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="logo-demo">
							<img src="http://www.abnwebtech.com/wp-content/uploads/2018/01/Logo-design-company-Kolkata-plendid-academy.jpg" >
							<div class="logo-for">Splendid Academy </div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="logo-demo">
							<img src="<?php bloginfo('template_directory');?>/images/Logo-design-company-Kolkata-Akbar-webetch.jpg" >
							<div class="logo-for">Akbar Webtech </div>
						</div>
					</div>
					
					
					
				 
				 </div>	
			 </div>	
			
			<!-- /.row -->
			
		</div>
		

		
	</div>
</div>
<section class="pagge-bottom-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			 <img src="<?php bloginfo('template_directory');?>/images/wordpress-development-kolkata-team.jpg" class="img-fluid" title="Best Website Development Company in Kolkata"> 
			</div>
		</div>
	</div>
</section>

<?php
endwhile;
get_footer();
?>