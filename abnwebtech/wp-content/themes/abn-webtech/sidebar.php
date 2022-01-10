<?php

/**
 * The sidebar containing the main widget area
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<aside class="sidebar">
	<div class="search-widget widget">
		<div class="widget-header">
			<h3 class="widget-title">Search</h3>
		</div>
		<div class="widget-body">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="s">
				<span class="input-group-text"><i class="fas fa-search"></i></span>
			</div>
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="latest-post-widget widget">
		<div class="widget-header">
			<h3 class="widget-title">Latest Posts </h3>
		</div>

		<div class="widget-body">
			<?php
			$args = array('post_type' => 'post', 'posts_per_page' => 5, 'order' => 'desc');
			$loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post();
				//$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID,'full' ) );
			?>
				<div class="widget-post-item">
					<div class="widget-post-img">
						<?php //the_post_thumbnail(); ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/post.jpg" alt="" class="img-fluid">
					</div>
					<div class="widget-post-info">
						<h4 class="widget-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</div>
				</div>
			<?php
			endwhile;
			?>

		</div>
	</div>
	<div class="tag-widget widget">
		<div class="widget-header">
			<h3 class="widget-title">Popular Tags </h3>
		</div>
		<div class="widget-body">
			<?php
			$tags = get_tags(array('get' => 'all'));
			$output= '<ul class="tag-cloud-list">';
			if ($tags) {
				foreach ($tags as $tag) :
					$output .= '<li><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
				endforeach;
			} else {
				_e('No tags created.', 'text-domain');
			}
			$output .= '</ul>';
			echo $output;
			?>
		</div>
	</div>
	
</aside>