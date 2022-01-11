<?php
/* Template Name: FAQ Page */
get_header();
while (have_posts()) : the_post();
    $bannar_img = get_post_meta($post->ID, 'page_banner_img', true);
    if (empty($bannar_img)) {
        $bannar_img = get_template_directory_uri() . '/images/bridge.jpg';
    }
    $bannar_title = get_post_meta($post->ID, 'page_banner_title', true);
    if (empty($bannar_title)) {
        $bannar_title = get_the_title();
    }
?>
    <section class="breadcrumb-wrap blog-breadcrumb bg-warning">
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

    <!-- start faq section -->
    <section class="faq-sec sec-py">
        <div class="container">
            <div class="sec-header">
                <h2 class="heading">Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                     <ul>
                         <li><a href=""><i class="fab fa-wordpress" aria-hidden="true"></i>WordPress Development</a></li>
                         <li><a href=""> <i class="fab fa-wpbeginner" aria-hidden="true"></i>asdsadad</a></li>
                         <li><a href=""></a></li>
                         <li><a href=""></a></li>
                     </ul> 
                </div>
                <div class="col-lg-9">
                    <h2>FAQ: WordPress Development </h2>
                    <div class="accordion" id="accordionExample">
                        <?php
                        // Start the loop.
                        $c = 1;
                        $args = array('post_type' => 'abn-faqs', 'posts_per_page' => -1);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();


                            if ($c == 1) {
                                $cl = 'show';
                                $cls = '';
                                $d = 'true';
                            } else {
                                $cl = '';
                                $cls = 'collapsed';
                                $d = 'false';
                            }
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $c; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>">
                                        <?php the_title(); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $c; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $c; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $c++;
                        endwhile;
                        ?>
                    </div>
                    <h2>FAQ: Online Marketing </h2>
                    <div class="accordion" id="accordionExample">
                        <?php
                        // Start the loop.
                        $c = 1;
                        $args = array('post_type' => 'abn-faqs', 'posts_per_page' => -1);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();


                            if ($c == 1) {
                                $cl = 'show';
                                $cls = '';
                                $d = 'true';
                            } else {
                                $cl = '';
                                $cls = 'collapsed';
                                $d = 'false';
                            }
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $c; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>">
                                        <?php the_title(); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $c; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $c; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $c++;
                        endwhile;
                        ?>
                    </div>
                    <h2>FAQ: Laravel Development </h2>
                    <div class="accordion" id="accordionExample">
                        <?php
                        // Start the loop.
                        $c = 1;
                        $args = array('post_type' => 'abn-faqs', 'posts_per_page' => -1);
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();


                            if ($c == 1) {
                                $cl = 'show';
                                $cls = '';
                                $d = 'true';
                            } else {
                                $cl = '';
                                $cls = 'collapsed';
                                $d = 'false';
                            }
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $c; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>">
                                        <?php the_title(); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $c; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $c; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $c++;
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end faq section -->

<?php
endwhile;
get_footer();
?>