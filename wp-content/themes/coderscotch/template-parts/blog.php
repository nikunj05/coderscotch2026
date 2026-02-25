<?php
get_header();
?>
<section class="hero hero--inner hero--casestudylisting">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <div class="section-subhead pb-3"><?= the_title(); ?></div>
                <h2 class="text-white"><?= get_post_meta($post->ID, '_custom_text', true); ?></h2>
            </div>
        </div>
    </div>
</section>
<!-- Hero ENDS -->
<section class="section-inner section-casestudylisting bg-sky rightbottomart lefttopart">
    <div class="container-large container-fluid">
        <div class="casestudy-list">
            <div class="row">
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'offset' => 0,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $the_query = new WP_Query($args);
                ?>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                    $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                    <div class="ourblog-block">
                        <div class="ourblog-img">
                            <img src="<?php echo $url_img ?>" alt="Blog Thumb" width="280" height="220" />
                        </div>
                        <div class="ourblog-body">
                            <h3 class="ourblog-title"><?= get_the_title(); ?></h3>
                            <p><?= get_the_excerpt(); ?></p>
                            <a href="#" title="Know More" class="anchor-link">
                                <span class="bttn-right-arrow">Know More</span>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<section class="section section-sitecta">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-auto col-md-8 col-xl-6 text-center text-md-left">
                <h2 class="sitecta-title">Let's Build Something Great Together!</h2>
            </div>
            <div class="col-auto mt-4 pt-2 mt-lg-0">
                <a href="#" class="bttn bttn-primary bttn-primary-black bttn-wide--cta" title="Hire Top Developers">
                    <span class="bttn-right-arrow">Call To Action</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>