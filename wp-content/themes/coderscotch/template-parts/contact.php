<?php /* Template Name: Contact-Us Page Template */
get_header();
?>
<section class="hero hero--inner hero--contactus">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <div class="section-subhead pb-3"><?= the_title(); ?></div>
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Hero ENDS -->
<section class="section section-getintouch bg-lightblue lefttopart">
    <div class="container-large container-fluid">
        <div class="getintouch__block site__card p-0">
            <div class="row no-gutters">
                <div class="col-md-6 col-12 order-md-1">
                    <div class="d-flex align-items-end">
                        <img src="<?= get_field('contact_image'); ?>" width="660" height="396" alt="Get in Touch" title="Get in Touch" />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <p>We'd love to learn from you.</p>
                    <div class="getintouch__links">
                        <?php if (have_rows('connect', 'options')) :
                            while (have_rows('connect', 'options')) : the_row(); ?>
                                <div class="getintouch__item">
                                    <i class="<?= get_sub_field('fas_fa_text', 'options'); ?>"></i>
                                    <span class="getintouch__label"><?= get_sub_field('fas_fa_text_name', 'options'); ?></span>
                                    <a href="<?= get_sub_field('connect_url', 'options'); ?>" title="info@coderscotch.com"><?= get_sub_field('connect_name', 'options'); ?></a>
                                </div>
                        <?php endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-officeform bg-lightblue rightbottomart">
    <div class="container-large container-fluid">
        <div class="officeform__block site__card">
            <div class="row no-gutters">
                <div class="col-md-12 col-12 order-md-1">
                    <h2><?= get_field('form_title'); ?></h2>
                    <div class="site__contact">
                        <?php echo do_shortcode( '[contact-form-7 id="283" title="Contact form 1"]' ); ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>