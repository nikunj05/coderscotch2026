<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- Banner Section Start -->
  <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
        <div class="connect-section">
          <div class="heading_section text-left">
            <h1 class="section-title">
              <?php the_title(); ?>
            </h1>
            <div class="section-description">
              <?php the_content(); ?>
            </div>

          </div>
          <a href="#" class="button button-primary">
            Speak to our expert
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z"
                fill="url(#paint0_linear_507_314)"></path>
              <path
                d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                fill="white"></path>
              <defs>
                <linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#00BEC5"></stop>
                  <stop offset="1" stop-color="#43CEA2"></stop>
                </linearGradient>
              </defs>
            </svg>
          </a>
        </div>
        <div class="common-banner-bottom-image">
          <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" width="405"
            height="453" class="common-banner-bottom-image">
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>