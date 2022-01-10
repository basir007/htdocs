<?php
/* Template Name: Only Banner*/
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
		<div class="col-md-8">
			<div class="content">
				<h2 class="page-title">
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
			<div class="gl-map d-none">
				<div class="gl-map-title">Google Map of Ghatal, West Bengal </div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58909.04984195657!2d87.70194693407451!3d22.660662295054674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f808fcc853abdb%3A0xb7113f44ca31e963!2sGhatal%2C+West+Bengal+721212!5e0!3m2!1sen!2sin!4v1515129827448" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			</div>
			<!-- /.row -->
			
		</div>

		<div class="col-md-4 side-contact col-sm-12">
			<div class="contact-content">
				<div class="contact-header" id="msg">
					<h4>Get in Touch With Us</h4>
				</div>
				<div class="contact-body">
					<form id="contact"  novalidate="novalidate" method="post" action="#">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								<input type="text" class="form-control" name="fname" placeholder="Name">
							</div>
							<label id="fname-error" class="error" for="fname"></label>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Email</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
							<label id="email-error" class="error" for="email"></label>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Mobile</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
								<input type="tel" class="form-control" name="mobile" placeholder="Mobile">
							</div>
							<label id="mobile-error" class="error" for="mobile"></label>
						</div>
						
						<div class="form-group">
							<label for="name" class="sr-only">Message</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								<textarea class="form-control" name="comment" rows="4" placeholder="Type Your Text"></textarea>
							</div>
						</div>
						<button class="btn btn-block" type="submit"><i class="fa fa-send"></i>
Send Message
</button>

					</form>
				</div>
			</div>
			<hr class="separator">
			
			<?php
			$sidebar_ads =get_post_meta( $post->ID, 'page_sidebar_ads', true );
			if (!empty( $sidebar_ads ) ) {
			?>
			<div class="sidebar-ads">
				<div class="sidebar-img">
					<img src="<?php echo $sidebar_ads;?>" class="img-fluid">
				</div>
			</div>
			<hr class="separator">
			<?php
			}
			?>
			<div class="contact-email-mobile">
				<div class="contact-header">
					<h4>Let's Talk</h4>
				</div>
				<div class="contact-details">
					<span>E-Mail : abnwebtech@gmail.com </span>
					<span>Mobile : +91 881 881 0334</span>
					<span>Visit  : <a href="<?php echo get_site_url();?>">http://www.abnwebtech.com</a></span>
				</div>
					
			</div>
			<div class="seo-tags d-none">
					<div class="tag-header">
						<h4>Related Pages</h4>
					</div>
					<div class="tag-list">
						<ul>
							<li><a href="">WordPress Training in n Kolkata</a></li>
							<li><a href="">WordPress Kolkata</a></li>
							<li><a href="">WordPress Training Kolkata</a></li>
							<li><a href="">Advacned WordPress Kolkata</a></li>
						</ul>
					</div>
					
			</div>
			
			
			
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