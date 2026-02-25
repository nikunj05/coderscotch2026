<?php /* Template Name: Careers Page Template */
get_header();
?>
<section class="hero hero--inner hero--casestudylisting">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="hero__head">
                <div class="section-subhead pb-3"><?= the_title(); ?></div>
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="section-inner section-casestudylisting bg-sky rightbottomart lefttopart">
    <div class="container-large container-fluid">
        <div class="row">
            <div class="container-fluid">
                <div class="serviceboxwrapper">
                    <div class="serviceboxlist">
                <?php $args = array(
                    'post_type' => 'career',
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
                    $id = get_the_ID();
                ?>
                    <div class="serviceboxcol">
                        <div class="serviceboxitem">
                        <a href="<?= the_permalink(); ?>"><h3><?= the_title(); ?></h3></a>
                        <?php
                            if (have_rows('job_specs',$id)) :
                                while (have_rows('job_specs',$id)) : the_row();
                            ?>
                                    <p><strong><?= get_sub_field('title');?></strong> : <?= get_sub_field('content');?></p>
                            <?php endwhile;
                            endif; ?>
                        
                            <p><?php echo wp_trim_words(get_the_content(), 20,); ?></p>
                            <a href="<?= the_permalink(); ?>" title="view More" class="bttn bttn-outline-black">
                                <span class="bttn-right-arrow">View More</span>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>