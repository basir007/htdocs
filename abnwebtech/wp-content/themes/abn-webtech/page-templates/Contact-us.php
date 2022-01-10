<?php
/* Template Name: Contact Us*/
 get_header();
 while ( have_posts() ) : the_post(); 
 $bannar_img=get_post_meta($post->ID,'page_banner_img',true);
 if(empty($bannar_img))
 {
     $bannar_img=get_template_directory_uri().'/images/bridge.jpg';
 }
  $bannar_title=get_post_meta($post->ID,'page_banner_title', true);
 if(empty($bannar_title))
 {
     $bannar_title=get_the_title();
 } 
?>
<!--header end--> 
<style>
	.page-banner {
		background-image: url(<?php echo $bannar_img; ?>);
		background-position: 50% 0;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>
<section class="page-banner page-banner bg-blue-red pd-tb-150">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 style="color:#fff" class="text-uppercase">Let's Talk</h2>
				<span style="color:#fff"><p class="font-weight-bold">We'd love to answer any questions you may have. Contact us and discuss your business objectives.</p></span>
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
<section class="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="section-title">
					<h3>Get In Touch Today!</h3>
				</div>
				<div class="section-description text-center">
				<p class="lead">We’re always up for a yarn, give us a call on <span class="font-weight-bold">+91 881 881 0334</span>
				and let us know all about your business and online goals. <br>If have an email, enter your email, details using this form and we’ll be in touch soon. Can’t wait to hear from you! </p>
					
				</div>
				<div class="row">
					<!--   Contact Form Star  -->
					<div class="col-md-12 text-center">
						<p class="font-weight-bold " id="msg">Don't hesitate to talk to us, even if it is a tiny requirement you have.</p>
					</div>
				</div>
			</div>
		</div>			
		<div class="row">
			<div class="col-md-10 mx-auto contact-body">
				<form class="contact-form" id="contact-us" action="#" method="post">
					<div class="row">
						<div class="col-md-6 mb-3">
							<input type="text" class="form-control" placeholder="Fullname" value="" name="fname">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" name="email" class="form-control" placeholder="Email" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<input type="text" name="mobile" class="form-control" placeholder="Mobile" value="">
						</div>
						<div class="col-md-6 mb-3">
							<input type="text" name="subject" class="form-control" placeholder="Subject">						
						</div>
					
					</div>

					<div class="row">
						<div class="col-md-12  mb-3">
							<input type="text" name="website" class="form-control" placeholder="Website ( If you have )" value="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  mb-3">
							<textarea class="form-control" name="message" placeholder="Write Your Message ..."></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  mb-3">
							<button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-paper-plane-o"></i> Send Message </button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--   Contact Form End  -->

	</div>
</section>
<?php
endwhile;
  get_footer();
?>