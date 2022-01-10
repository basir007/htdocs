<?php
/* Template Name:Full Width*/
get_header();
while ( have_posts() ) : the_post();
?>
<!--header end--> 


<div class="container page">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="full-content">
				<h2 class="page-title text-center">
					<?php the_title(); ?>
				</h2>
			<div class="lead">
				<?php
				the_content();
				?>
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