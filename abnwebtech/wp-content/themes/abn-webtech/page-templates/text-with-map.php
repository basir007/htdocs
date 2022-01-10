<?php
/* Template Name: Text with MAP*/
get_header();
while ( have_posts() ): the_post();
?>
<section class="page-banner pd-tb-150 grd-green-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="color:#fff" class="text-uppercase">WordPress Training In Kolkata</h2>
				<span style="color:#fff"><p class="font-weight-bold">Don't hesitate to talk to us, even if it is a tiny requirement you have.</p></span>
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
			<div class="gl-map">
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
						<button class="btn btn-block" type="submit"><i class="fa fa-send"></i>Send Message</button>

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
			<hr class="separator">
			<div class="seo-tags">
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

<?php
endwhile;
get_footer();
?>