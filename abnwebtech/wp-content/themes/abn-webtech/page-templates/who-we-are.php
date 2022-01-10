<?php
/* Template Name: Who We are*/
 get_header();		
while ( have_posts() ) : the_post();
?>
<section class="contact-us">

	<div class="container">
	    <div class="col-md-12 ">
		<div class="section-title">
			<h3>Who we are</h3>
		</div>
		<div class="section-description">
			<p>Abbot ABN WEBETCH</p>
		</div>
		<div class="row">
			<!--   Contact Form Star  -->
			<div class="col-md-12 ">
				<p><?php the_content();?></p>
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