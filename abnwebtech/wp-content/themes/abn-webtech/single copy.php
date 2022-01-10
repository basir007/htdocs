<?php
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
<style>
	.page-banner {
		background: url(<?php echo $bannar_img; ?>);
		background-position: 50% 0;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	
</style>
<section class="page-banner pd-tb-150 grd-green-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="color:<?php echo $bannar_title_color;?>">
					<?php echo $bannar_title; ?>
				</h2>
				
				<span style="color:<?php echo $page_subtitle_color;?>">Posted by <?php  the_author();?></span>
				
				<ol class="breadcrumb d-none">
					<li class="breadcrumb-item"><a href="#">Home</a>
					</li>
					<li class="breadcrumb-item active">
						<a href="#">Website Development Course in Kolkata</a>
					</li>
				</ol>
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
				<div class="contact-header">
					<h4>Get in Touch With Us</h4>
				</div>
				<div class="contact-body" id="msg">
					<form id="contact"  novalidate="novalidate" method="post" action="#">
						<input type="hidden" name="page_type" value="Sidebar">
					
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
							<label for="name" class="sr-only">Subject</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-sliders"></i></span>
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Message</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								<textarea class="form-control" name="message" rows="4" placeholder="Type Your Text"></textarea>
							</div>
							<label id="message-error" class="error" for="message"></label>
						</div>
						<button class="btn btn-block" type="submit"><i class="fa fa-send"></i>
Send Message
</button>

					</form>
				</div>
			</div>
			<hr class="separator">
			
			<div class="contact-email-mobile">
					<div class="contact-header">
						<h4>Let's Talk</h4>
					</div>
					<div class="contact-details">
						<span>E-Mail : abnwebtech@gmail.com </span>
						<span>Mobile : +91 881 881 0334</span>
						<span>Visit  : www.abnwebetch.com</span>
						</div>
					
			</div>
			
			<div class="seo-tags d-none">
				<hr class="separator">
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