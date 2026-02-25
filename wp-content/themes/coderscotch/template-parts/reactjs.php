<?php /* Template Name: ReactJS Page Template */
 get_header();?>
<section class="hero hero--inner react_bg ">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <?php $args = array('post_type' => 'page',);
                $the_query = new WP_Query($args);
                while ($the_query->have_posts()) : $the_query->the_post();
                    $post_id = get_the_ID();
                    if ($post_id === 817) { ?>
                        <div class="section-subhead pb-3"><?= get_the_title(); ?></div>
                        <?= the_content(); ?>
                <?php
                    };
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<section class="section section-aboutcs">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-7">
                <h2 class="hiredev"><?= get_field('title') ?></h2>
                <p><?= get_field('info'); ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 mt-0">
                <div class="about-picture">
                    <img src="<?= get_field('right_image'); ?>" title="Hire React Developer" alt="Hire React Developer" width="510" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-inner section-webdevservies bg-sky rightbottomart">
    <div class="container-fluid">

        <div class="section-top-content pt-5 text-center">
            <h2 class="mt-5"><?= get_field('dev_from_india_title'); ?></h2>
            <p><?= get_field('dev_from_india_Info'); ?></p>
        </div>
    </div>
    <div class="serviceboxwrapper">
        <div class="serviceboxlist">
            <?php if (have_rows('work_list')) :
                while (have_rows('work_list')) : the_row(); ?>
                    <div class="serviceboxcol">
                        <div class="serviceboxitem">
                            <img src="<?= get_sub_field('list_image'); ?>" width="50" height="50" alt="Front-end Development" />
                            <h3><?= get_sub_field('list_title'); ?></h3>
                            <p><?= get_sub_field('list_info'); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    </div>
</section>
<section class="section section-contact bg-lightblue">
    <div class="container">
        <div class="section-contact-main">
            <div class="section-contact-form  order-2 order-md-1">
                <h2><?=get_field('contact_form_title');?></h2>
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
</section>
<section class="section section-sitecta">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-sm-auto col-md-8 col-xl-6 text-center text-md-left">
                <h2 class="sitecta-title hirebtm"><?=get_field('botton_line')?></h2>
            </div>
            <div class="col-auto mt-4 pt-2 mt-lg-0">
                <a href="<?= get_permalink(263); ?>" class="bttn bttn-primary bttn-primary-black bttn-wide--cta" title="Hire Top Developers">
                    <span class="bttn-right-arrow"><?=get_field('button_name')?></span>
                </a>
            </div>
        </div>
    </div>
</section>
<!--Web Services ENDS-->
<?= get_footer();?>