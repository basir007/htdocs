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
<main class="page-wrap">
	<section class="blog-details-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<article class="page-content">
						<h2 class="blog-title"></h2>
						<div class="post-meta d-flex">
							<span class="author-name">
								<i class="far fa-user"></i>
								<a href="#">Editorial Staff</a>
							</span>
							<span class="cat-links">
								<i class="far fa-folder-open"></i>
								<?php the_category(',');?>
							</span>
							<span class="posted-on ml-auto">
								<a href="#"><i class="far fa-calendar-alt"></i> Updated: <?php echo get_the_date();?> </a>	
							</span>
							
						</div>
						<?php the_content();?>
					</article>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar();?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php 
	get_footer();
?>

