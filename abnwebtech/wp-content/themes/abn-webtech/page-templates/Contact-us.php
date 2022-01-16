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
	<section class="breadcrumb-wrap page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb-title fw-bold display-5"><?php the_title(); ?> </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home </a><i class="fas fa-angle-double-right"></i></li>
                            <li class="breadcrumb-item active">FAqs</li>
                        </ul>
                    </div>
                    <!-- /Breadcrumb Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- /breadcrumb-wrap --> 
<section class="contact-wrap sec-py">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="sec-header">
					<h3 class="title">Get In Touch Today!</h3>
				</div>
				<div class="sec-description text-center">
					<p class="w-75 mx-auto">We’re always up for a yarn, give us a call on <span class="font-weight-bold">+91 881 881 0334</span>
						and let us know all about your business and online goals. <br>If have an email, enter your email, details using this form and we’ll be in touch soon. Can’t wait to hear from you! </p>
					<p class="font-weight-bold " id="msg">Don't hesitate to talk to us, even if it is a tiny requirement you have.</p>
				</div>

			</div>
		</div>			
		<div class="row">
			<div class="col-lg-5">
				<div class="contact-info">
					<h3 class="title">Let’s Get In Touch!</h3>
					<p>Contact us at any time. We’d be delighted to hear from you – even if you just want to chat.</p>
					<p>We are especially eager to talk about your website problems and/or related online marketing issues.</p>
					<ul>
						<li><a href="#"> <i class="fab fa-whatsapp"></i> +91 881 881 0334 / 8145 6161 91</a></li>
						<li><a href="#"> <i class="fas fa-envelope"></i> info@abnwebtech.com</a></li>
						<li><a href="#"> <i class="fas fa-globe"></i> https://abnwebtech.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="contact-form">
					<h3 class="title">Contact Us</h3>
					<form id="contact-us" action="#" method="post">
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
							<div class="col-md-12">
								<button class="btn btn-solid" type="submit"><i class="fa fa-paper-plane-o"></i> Send Message </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--   Contact Form End  -->

	</div>
</section>
<?php
endwhile;
  get_footer();
?>