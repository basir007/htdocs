<div class="col-lg-6 col-md-6">
    <div class="card">
        <div class="card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/post.jpg" alt="" class="card-img-top">
        </div>
        <div class="card-body">
            <div class="blog-meta">
                <span><i class="far fa-calendar-alt"></i> 16, Sept 2021</span>
                <span><i class="fas fa-folder-open"></i> <a href="#" rel="category tag">General</a>,<a href="#" rel="category tag">SEO</a></span>
            </div>
            <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php //the_excerpt(); 
            ?>
        </div>
    </div>
    <!-- /Card -->
</div>