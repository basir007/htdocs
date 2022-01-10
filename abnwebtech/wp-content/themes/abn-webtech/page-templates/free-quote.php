<?php
/* Template Name: FREE Quote*/
 get_header();
?>
<section class="contact-us free-quote bg-blue-red pd-a-50">

	<div class="container bg-white-op-6 bdr-3 ">
	    <div class="col-md-10 mx-auto">
		<div class="section-title">
			<h3>Get a Free, No Obligation Quote Today And Transform Your Website Into a Sales Workhorse</h3>
		</div>
		<div class="section-description text-center">
			<p>Explore how we can help you create a sales weapon that’ll capture and convert more customers, fill out your details below and we’ll be in touch within the next two hours.</p>
		</div>
		<div class="row">
			<!--   Contact Form Star  -->
			<div class="col-md-12 text-center">
				<p class="font-weight-bold text-uppercase" id="msg">Don't hesitate to talk to us, even if it is a tiny requirement you have.</p>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-10 mx-auto contact-body">
				<form class="contact-form" action="#" method="post" id="free-quote">
					<input type="hidden" name="page_type" value="Free Quote">
					<div class="row">
						<div class="col-md-6 mb-3">
							<input type="text" name="fname" class="form-control" placeholder="Fullname" value="">
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
							<input type="text" name="subject" class="form-control" placeholder="Subject" value="">
						</div>
					</div>
					

					<div class="row">
						<div class="col-md-12  mb-3">
							<input type="text" name="website" class="form-control" placeholder="Website (if you have)">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  mb-3">
							<input type="text" name="timeline" class="form-control" placeholder="When you need it ( Timeline )">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  mb-3">
							<textarea name="message" class="form-control" placeholder="Project Details ..."></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12  mb-3">
							<button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-paper-plane-o"></i> Submit Request</button>
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