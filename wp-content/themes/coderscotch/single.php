<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package coderscotch
 */

get_header();
?>
<?php
while (have_posts()) : the_post();
    $id = get_the_ID();
    $featured_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
    $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    if (!$featured_img) {
        $alt_text = 'No Image';
    }
?>
    <section class="section section-WhoWeAre">
        <div class="container container-blog">
            <div class="cs_boxImgText myclass">
                <div class="container-fluid casestudy__content">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="laradev"><?= get_the_title(); ?></h1>
                            <?php if (!empty($featured_img)) { ?>
                                <img src="<?= $featured_img ?>" width="100%" height="" alt="<?= $alt_text ?>" title="<?= get_the_title(); ?>" />
                            <?php } ?>
                            <?php
                            if (have_rows('job_specs', $id)) :
                                while (have_rows('job_specs', $id)) : the_row();
                            ?>
                                    <p><strong><?= get_sub_field('title'); ?></strong> : <?= get_sub_field('content'); ?></p>
                            <?php endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <?= the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<!--     <section class="section section-contact-blog bg-lightblue">
        <div class="container">
            <div class="section-contact-main">
                <div class="section-contact-form  order-2 order-md-1">
                    <h2><?= get_field('contact_form_title', 695); ?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="718" title="Laravel Form"]'); ?>
                </div>
                <div class="section-contact-author text-center  order-1 order-md-2">
                    <h2><?= get_field('contact_name', 581); ?></h2>
                    <p><?= get_field('name_info', 581); ?></p>
                    <a href="mailto:<?= get_field('button_url', 581); ?>" class="bttn bttn-white bg-transparent">
                        <?= get_field('button_name', 581); ?>
                    </a>
                </div>
            </div>
        </div>
    </section> -->
<?php
endwhile;
wp_reset_postdata(); ?>
<?php
get_footer(); ?>