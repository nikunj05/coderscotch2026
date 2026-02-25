<?php
get_header();
?>
<?php
$page_id = get_queried_object_id(); // Get the page ID
$page_title = get_the_title($page_id);
$page_content = get_post_field('post_content', $page_id);
?>
<section class="hero hero--inner csbolg_bg">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <div class="section-subhead pb-3"><?= $page_title ?></div>
                <?= apply_filters('the_content', $page_content); ?>
            </div>
        </div>
    </div>
</section>
<!-- Hero ENDS -->
<section class="section-inner section-casestudylisting bg-sky rightbottomart lefttopart">
    <div class="container-fluid container-large">
        <div class="ourblog-grid">
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
                $featured_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
                $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                ?>
                <div class="ourblog-block">
                    <div class="ourblog-img">
                    <?php if($featured_img) {?>
                    <a class="blog_img" href="<?= get_permalink(); ?>"><img src="<?= $featured_img ?>" alt="<?= $alt_text ?>" title="<?= get_the_title() ?>"></a>
                    <?php } ?>
                    </div>
                    <div class="ourblog-body">
                        <a href="<?= the_permalink(); ?>">
                            <h3 class="ourblog-title"><?= get_the_title(); ?></h3>
                        </a>
                        <p><?php echo wp_trim_words(get_the_content(), 20,); ?></p>
                        <a href="<?= the_permalink(); ?>" title="Know More" class="anchor-link">
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
</section>
<?php get_footer(); ?>