<?php /* Template Name: Hire Page Template */
 get_header();?>
<section class="hero hero--inner page<?php echo get_queried_object_id(); ?>">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <div class="section-subhead pb-3"><?= get_the_title(); ?></div>
                <?= the_content(); ?>
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
                    <img src="<?= get_field('right_image'); ?>" title="<?= get_the_title(); ?>" alt="<?= get_the_title(); ?>" width="510" />
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
                            <img src="<?= get_sub_field('list_image'); ?>" width="50" height="50" alt="" />
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