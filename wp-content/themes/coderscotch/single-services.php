<?php get_header(); ?>
<section class="hero hero--inner hero--webdev">
   <div class="container-large container-fluid">
      <div class="hero-wrapper">
         <div class="ourservices-head about-us hero__head">
             <h1 class="text-white"><?= the_title(); ?></h1>
         </div>
      </div>
   </div>
</section>
<!-- Hero ENDS -->
<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
      <section class="section-inner servicefeatured lefttopart bg-sky">
         <div class="servicefeatured-wrapper">
            <div class="container">
               <div class="servicefeatured-row">
                  <div class="servicefeatured-col servicefeatured-content">
                     <h3><?= get_field('banner_title'); ?></h3>
                     <p><?= get_field('banner_text2'); ?></p>
                     <a href="#" title="Know More" class="bttn bttn-outline-black">
                        <span class="bttn-right-arrow">Learn More</span>
                     </a>
                  </div>
                  <div class="servicefeatured-col servicefeatured-img">
                     <img src="<?= get_field('banner_image'); ?>" width="640" height="630" alt="<?= the_title(); ?>" title="<?= the_title(); ?>"/>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php
   endwhile;
endif; ?>
<!-- Service Box ENDS -->
<section class="section section-inner section-webdevservies bg-sky rightbottomart">
   <div class="container-fluid">
      <div class="section-top-content text-center">
         <h2><?= the_title(); ?></h2>
         <p><?= the_content(); ?></p>
      </div>
      <div class="serviceboxwrapper">
         <div class="serviceboxlist">
            <?php if (have_rows('service_box')) :
               while (have_rows('service_box')) : the_row(); ?>
                  <div class="serviceboxcol">
                     <div class="serviceboxitem">
                        <img src="<?= get_sub_field('service_box_image'); ?>" width="50" height="50" alt="<?= get_sub_field('service_box_title'); ?>" />
                        <h3><?= get_sub_field('service_box_title'); ?></h3>
                        <p><?= get_sub_field('service_box_info'); ?></p>
                     </div>
                  </div>
            <?php endwhile;
            endif; ?>
         </div>
      </div>
   </div>
</section>
<!--Web Services ENDS-->
   <?php $post_type = 'our_work';
      $taxonomies = get_object_taxonomies(array('post_type' => $post_type));
      foreach ($taxonomies as $taxonomy) :
         $terms = get_terms(array('taxonomy' => 'our_work_cat'));
         $post_obj = get_the_title();
         foreach ($terms as $term) :
            $cat_name = $term->name;
            if ($cat_name == $post_obj) {
      ?>
               <?php
               $args = array(
                  'post_type' => $post_type,
                  'posts_per_page' => -1,  //show all posts
                  'tax_query' => array(
                     array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                        'operator' => 'IN'
                     )
                  )
               );
               $posts = new WP_Query($args);
               ?>
<?php if( ! empty($term) ) {?>
<section class="section section-inner section-foliolist lefttopart">
   <div class="container-fluid">
      <div class="section-head text-center">
         <h2><?= the_title(); ?> Portfolio</h2>
         <p class="section-head--desc"><?= get_field('portfolio_info') ?></p>
      </div>
      <?php }?>
               <?php
               $num = 1;
               while ($posts->have_posts()) : $posts->the_post();
                  $id = get_the_ID();
                  $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                  <?php if ($num % 2 == 1) { ?>
                     <div class="portfolio-blocks">
                        <div class="portfolio-row">
                           <div class="portfolio-img">
                              <img src="<?= $url_img ?>" width="510" height="410" alt="<?= the_title(); ?>" title="<?= the_title(); ?>" />
                           </div>
                           <div class="portfolio-content">
                              <h3><?= the_title(); ?></h3>
                              <p><?= the_content(); ?></p>
                              <a class="bttn__link bttn__link-black" href="<?= get_field("button_url", $id); ?>">
                                 <span><?= get_field("button_text", $id); ?></span>
                                 <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     <?php } else { ?>
                        <div class="portfolio-row">
                           <div class="portfolio-img">
                              <img src="<?= $url_img ?>" width="510" height="410" alt="<?= the_title(); ?>" title="<?= the_title(); ?>" />
                           </div>
                           <div class="portfolio-content">
                              <h3><?= the_title(); ?></h3>
                              <p><?= the_content(); ?></p>
                              <a class="bttn__link bttn__link-black" href="<?= get_field("button_url", $id); ?>">
                                 <span><?= get_field("button_text", $id); ?></span>
                                 <i class="icon-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     <?php }
                  $num++; ?>
                  <?php endwhile;
               wp_reset_postdata(); ?>
                     </div>
                  <?php } ?>
            <?php endforeach;
      endforeach; ?>
   </div>
</section>

<!-- Portfolio ENDS -->
<!-- <section class="section section-inner section-techstack rightbottomart">
   <div class="container-fluid">
      <div class="text-center">
         <h2>Our <?= $post_obj ?> Tech Stack</h2>
      </div>
      <?php $id = 5;
      while (have_rows('tech_stacks', $id)) : the_row();
         $names = get_sub_field('tech_title', $id);
         if ($names == $post_obj) {
      ?>
            <ul class="inner-techlist clear__list">
               <?php while (have_rows('tech_list', $id)) : the_row();
               ?>
                  <li>
                     <div class="techlist--img"><img src="<?= get_sub_field('tech_image', $id); ?>" alt="<?= get_sub_field('tech_name'); ?>" title="<?= get_sub_field('tech_name'); ?>"/></div>
                     <div class="techlist--label"><?= get_sub_field('tech_name'); ?></div>
                  </li>
               <?php endwhile; ?>
            </ul>
            <?php
            // endif; 
            ?>
      <?php }
      endwhile; ?>
   </div>
</section> -->
<!-- Tech Stacks ENDS -->
<?php $id = 96; ?>
<section class="section section-OurWorkingApproach">
   <div class="container">
      <div class="cs_sectionTitleAndText mw-740 mx-auto d-table">
         <h2 class="mb-0"><?= get_field('working_title', $id); ?></h2>
      </div>
      <div class="row justify-content-center">
         <?php
         if (have_rows('working_list', $id)) :
            while (have_rows('working_list', $id)) : the_row(); ?>
               <div class="col-md-6 col-lg-3">
                  <div class="cs_workingApproachBox">
                     <img src="<?= get_sub_field('working_image', $id); ?>" alt="<?= get_sub_field('working_name', $id); ?>" title="<?= get_sub_field('working_name', $id); ?>" width="100%" />
                     <div class="p-3 p-md-4">
                        <div class="cs_QuicksandBold f18 pb-2 color_green"><?= get_sub_field('working_name', $id); ?></div>
                        <div class="f16 cs_MuliSemiBold"><?= get_sub_field('working_info', $id); ?>
                        </div>
                     </div>
                  </div>
               </div>
         <?php
            endwhile;
         endif;
         ?>
      </div>
</section>
<!-- Our Approach ENDS -->
<section class="section engagement-modal removearts">
   <div class="container">
      <div class="section-top-content text-center">
         <h2><?= get_field('title'); ?></h2>
         <p><?= get_field('choose_us_info'); ?></p>
      </div>
      <div class="engagement-modal-main">
         <div class="row">
            <?php
            if (have_rows('choose_us_list')) :
               while (have_rows('choose_us_list')) : the_row();
            ?>
                  <div class="col-lg-3 col-sm-6 col-12 text-center">
                     <div class="icon-box">
                        <img src="<?= get_sub_field('list_image'); ?>" alt="<?= get_sub_field('list_title'); ?>" />
                     </div>
                     <h4><?= get_sub_field('list_title'); ?></h4>
                     <p><?= get_sub_field('list_info'); ?></p>
                  </div>
            <?php
               endwhile;
            endif;
            ?>
         </div>
      </div>
   </div>
</section>
<!--Why Choose Us-->
<section class="section industry-focus lefttopart rightbottomart">
   <div class="container">
      <div class="section-top-content text-center">
         <h2><?= get_field('serve_title'); ?></h2>
         <p>
            <?= get_field('serve_info'); ?>
         </p>
      </div>

      <div class="industry-focus-main">
         <div class="row">
            <?php while (have_rows('industries', 'options')) : the_row(); ?>
               <div class="col-lg-3 col-sm-6 col-6">
                  <div class="media">
                     <img src="<?= get_sub_field('industries_image', 'options'); ?>" alt="<?= get_sub_field('industries_name', 'options'); ?>" />
                     <div class="media-body">
                        <h4><?= get_sub_field('industries_parentage', 'options'); ?>%</h4>
                        <p><?= get_sub_field('industries_name', 'options'); ?></p>
                     </div>
                  </div>
               </div>
            <?php endwhile; ?>
         </div>
      </div>
   </div>
</section>
<!--Industries ENDS-->
<section class="section section-sitecta">
   <div class="container">
      <div class="row align-items-center justify-content-center">
         <div class="col-12 col-sm-auto col-md-8 col-xl-6 text-center text-md-left">
            <h2 class="sitecta-title"><?= get_field('work_title'); ?></h2>
         </div>
         <div class="col-auto mt-4 pt-2 mt-lg-0">
            <a href="<?= get_permalink(263); ?>" class="bttn bttn-primary bttn-primary-black bttn-wide--cta" title="Hire Top Developers">
               <span class="bttn-right-arrow"><?= get_field('work_button_name'); ?></span>
            </a>
         </div>
      </div>
   </div>
</section>
<!--Site CTA ENDS-->
<?php get_footer(); ?>