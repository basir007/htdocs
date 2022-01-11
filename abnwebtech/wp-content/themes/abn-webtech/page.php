<?php
get_header();
?>
<section class="breadcrumb-wrap blog-breadcrumb bg-warning">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="breadcrumb-content">
					<h1 class="breadcrumb-title fw-bold display-5">WordPress Kolkata Blog </h1>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home </a><i class="fas fa-angle-double-right"></i></li>
						<li class="breadcrumb-item active">Blog</li>
					</ul>
				</div>
				<!-- /Breadcrumb Content -->
			</div>
		</div>
	</div>
</section>
<!-- /breadcrumb-wrap -->
<section class="page-wrap sec-py">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<article class="post-content me-3">
					<h1 class="post-title"><?php the_title(); ?></h1>

					<?php the_content(); ?>
				</article>
			</div>

			<div class="col-md-4 sidebar">
				<div class="widget contact-content">
					<div class="contact-header">
						<h4 class="widget-title">Get in Touch With Us</h4>
					</div>
					<div class="widget-body" id="msg">
						<form id="contact" novalidate="novalidate" method="post" action="#">
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

				<?php
				$sidebar_ads = get_post_meta($post->ID, 'page_sidebar_ads', true);
				if (!empty($sidebar_ads)) {
				?>
					<div class="sidebar-ads">
						<div class="sidebar-img">
							<img src="<?php echo $sidebar_ads; ?>" class="img-fluid" alt="<?php the_title(); ?>">
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
						<span>Visit : <a href="<?php echo get_site_url(); ?>">www.abnwebtech.com</a></span>
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
</section>


<?php
get_footer();
?>