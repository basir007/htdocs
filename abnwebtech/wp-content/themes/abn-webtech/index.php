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
<div class="blog-wrap sec-py">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
					<div class="row">
						<?php
						if (have_posts()) :
							while (have_posts()) : the_post();
						    get_template_part('content');
							
							endwhile;
						else :
							get_template_part('content-none');
						endif;
						?>
					<div class="page-navigation d-none">
						<?php // echo paginate_links($args); ?>
						<div class="row">
							<div class="col-lg-2 offset-lg-0 col-md-2 offset-md-0 col-4 offset-4">
								<div class="prev-page">
									<a href="#">Prev</a>
								</div>
							</div>
							<div class="col-lg-8 col-md-8">
								<ul class="page-nav">
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">10</a></li>
								</ul>
							</div>
							<div class="col-lg-2 offset-lg-0 col-md-2 offset-md-0 col-4 offset-4">
								<div class="next-page">
									<a class="active" href="#">Next</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>