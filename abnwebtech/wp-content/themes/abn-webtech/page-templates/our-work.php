<?php
/* Template Name: Our Work*/
 get_header();
?>
<link rel="stylesheet"  href="<?php bloginfo('template_directory');?>/css/case-study.css">
<link rel="stylesheet"  href="<?php bloginfo('template_directory');?>/css/web-portfolio.css">
<section class="intro-text">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="title">
						<h2>We don’t just design stunning looking sites . We  also create strategies that help you more revenue through your door.</h2>
					</div>
					<div class="text">
						<p>Following are some examples of  how we have helped other <br>business owners just like you.</p>
					</div>
				</div>
			</div>
		</div>  
	</section>
	
    <div class="web-portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="title">
						<h2>Web Design</h2>
					</div>
					<div class="text">
					<p>Check out the most recent of our stunning web design examples below.</p>
					</div>
				</div>
			</div>
		</div> 
		
		<div class="container">
			<div class="row">
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/Mathoura.jpg" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/Relish-Mama-Final-portfolio.jpg" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4">
				<div class="imgbox">
				<img src="<?php bloginfo('template_directory');?>/images/websites/Cao-Limo.jpg" class="img-fluid">
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/mulch-centre.jpg" class="img-fluid">
				</div>
			
			</div>
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/Solar-Professionals.jpg" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/college-website-in-kolkata.jpg" class="img-fluid">
				</div>		
			</div>
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/solo-connections.png" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/chironmom.jpg" class="img-fluid">
				</div>
			</div>
				
			<div class="col-md-4">
				<div class="imgbox">
					<img src="<?php bloginfo('template_directory');?>/images/websites/website-for-shop-perfecttechnologies.jpg" class="img-fluid">
				</div>
			</div>	
			
			
		</div>	
    </div>
</div>
	

	<section class="footer-form">
		<div class="container">
			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="section-title">
						<h3>Get In Touch Today!</h3>
					</div>
					<div class="section-description text-center">
					<p class="lead">We’re always up for a yarn, give us a call on <span class="font-weight-bold">+91 881 881 0334</span>
					and let us know all about your business and online goals. If have an email, enter your email, details using this form and we’ll be in touch soon. Can’t wait to hear from you! </p>

					</div>
				
				</div>
			</div>	
			<div class="col-md-12 text-center">
						<p class="font-weight-bold " id="msg">Don't hesitate to talk to us, even if it is a tiny requirement you have.</p>
					</div>
			<div class="row">
				<div class="col-md-10 mx-auto contact-body">
					<form class="contact-form" id="contact-us" action="#" method="post" novalidate="novalidate">
						<input type="hidden" name="page_type" value="Our Work">
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
								<button class="btn btn-success btn-block btn-lg" type="submit"><i class="fa fa-paper-plane-o"></i> Send Message </button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--   Contact Form End  -->

		</div>
	</section>
<?php
  get_footer();
?>