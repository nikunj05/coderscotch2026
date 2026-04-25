<?php /* Template Name: Solutions Page Template */ 
get_header(); ?>

  <!-- Banner Section Start -->
  <section class="common-banner-section solutions-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
        <div class="connect-section">
          <div class="heading_section text-left">
            <h1 class="section-title">
              <?php
              $banner_title = get_field('solutions_banner_title');
              if ($banner_title) {
                  $banner_title = str_replace('{', '<span class="highlight-text">', $banner_title);
                  $banner_title = str_replace('}', '</span>', $banner_title);
                  echo wp_kses($banner_title, array('span' => array('class' => array())));
              } else {
                  $title = get_the_title();
                  if (strpos($title, ' ') !== false) {
                      $title_parts = explode(' ', $title);
                      $last_word = array_pop($title_parts);
                      $highlighted_part = implode(' ', $title_parts);
                      echo '<span class="highlight-text"> ' . esc_html($highlighted_part) . ' </span> ' . esc_html($last_word);
                  } else {
                      echo esc_html($title);
                  }
              }
              ?>
            </h1>
            <p class="section-description">
              <?php 
              $banner_desc = get_field('solutions_banner_description');
              echo $banner_desc ? wp_kses_post($banner_desc) : wp_strip_all_tags( get_the_content() ); 
              ?>
            </p>
          </div>
          <div class="banner-cta-group">
              <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary">
                Discuss Your Project
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="url(#paint0_linear_507_314)"></path>
                  <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white"></path>
                  <defs><linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571" gradientUnits="userSpaceOnUse"><stop stop-color="#00BEC5"></stop><stop offset="1" stop-color="#43CEA2"></stop></linearGradient></defs>
                </svg>
              </a>
          </div>
        </div>
        <div class="common-banner-bottom-image">
          <?php 
          $banner_image = get_field('solutions_banner_image');
          if ($banner_image) {
              echo '<img src="' . esc_url($banner_image) . '" alt="solution img" class="common-banner-bottom-image">';
          } elseif (has_post_thumbnail()) {
              the_post_thumbnail('full', array('class' => 'common-banner-bottom-image'));
          } else {
              ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-development-banner-img.svg" alt="solution img" class="common-banner-bottom-image">
              <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <?php if (have_rows('solutions_services_list')) : ?>
  <!-- Services We Offer Section Start -->
  <section class="offered-another-services-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $services_title = get_field('solutions_services_title');
          if ($services_title) {
              $services_title = str_replace('{', '<span class="highlight-text">', $services_title);
              $services_title = str_replace('}', '</span>', $services_title);
              echo wp_kses($services_title, array('span' => array('class' => array())));
          } else {
              echo 'CRM <span class="highlight-text"> Services We Offer </span>';
          }
          ?>
        </h2>
        <?php if ($services_desc = get_field('solutions_services_description')) : ?>
          <p class="section-description">
            <?php echo wp_kses_post($services_desc); ?>
          </p>
        <?php endif; ?>
      </div>

      <div class="other-services-wrapper">
        <?php while (have_rows('solutions_services_list')) : the_row(); ?>
          <div class="other-service-card <?php echo esc_attr(get_sub_field('card_class')); ?>">
            <h3 class="service-title"><?php the_sub_field('title'); ?></h3>
            <p class="service-desc"><?php the_sub_field('description'); ?></p>
            <?php if (have_rows('features')) : ?>
              <ul class="service-features">
                <?php while (have_rows('features')) : the_row(); ?>
                  <li><div class="list-box-icon"></div><?php the_sub_field('feature_name'); ?></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- Services We Offer Section End -->
  <?php endif; ?>

  <?php if (have_rows('solutions_platforms_list')) : ?>
    <?php while (have_rows('solutions_platforms_list')) : the_row(); ?>
      <?php 
      $bg_type = get_sub_field('bg_type');
      $row_index = get_row_index();
      $is_even = ($row_index % 2 == 0);
      ?>
      <section class="crm-platform-section section-space-tb <?php echo esc_attr($bg_type); ?>">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 <?php echo $is_even ? 'order-lg-2' : ''; ?>" data-aos="<?php echo $is_even ? 'fade-left' : 'fade-right'; ?>">
              <div class="heading_section text-left">
                <h2 class="section-title">
                  <?php 
                  $title = get_sub_field('title');
                  $title = str_replace('{', '<span class="highlight-text">', $title);
                  $title = str_replace('}', '</span>', $title);
                  echo wp_kses($title, array('span' => array('class' => array())));
                  ?>
                </h2>
                <?php if ($d1 = get_sub_field('description_1')) : ?>
                  <p class="section-description mt-4"><?php echo wp_kses_post($d1); ?></p>
                <?php endif; ?>
                <?php if ($d2 = get_sub_field('description_2')) : ?>
                  <p class="section-description mt-3"><?php echo wp_kses_post($d2); ?></p>
                <?php endif; ?>
                <?php if ($d3 = get_sub_field('description_3')) : ?>
                  <p class="section-description mt-3"><?php echo wp_kses_post($d3); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-6 <?php echo $is_even ? 'order-lg-1' : ''; ?>" data-aos="<?php echo $is_even ? 'fade-right' : 'fade-left'; ?>">
              <div class="feature-image-wrapper text-center p-4">
                <?php if ($image = get_sub_field('image')) : ?>
                  <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(strip_tags(get_sub_field('title'))); ?>" class="img-fluid" style="border-radius: 24px; box-shadow: 0 30px 60px rgba(0,0,0,0.05); border: 1px solid #e0e0e0;">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>

  <!-- Hiring Models Section Start -->
  <section class="hiring-models-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $hiring_title = get_field('solutions_hiring_title');
          if ($hiring_title) {
              $hiring_title = str_replace('{', '<span class="highlight-text">', $hiring_title);
              $hiring_title = str_replace('}', '</span>', $hiring_title);
              echo wp_kses($hiring_title, array('span' => array('class' => array())));
          } else {
              echo 'Our <span class="highlight-text"> Hiring Models </span>';
          }
          ?>
        </h2>
      </div>

      <?php if (have_rows('solutions_hiring_list')) : ?>
      <div class="hiring-models-grid">
        <?php while (have_rows('solutions_hiring_list')) : the_row(); ?>
          <div class="hiring-model-card <?php the_sub_field('model_type'); ?>">
            <div class="model-card-inner">
              <div class="model-icon">
                <?php if ($icon = get_sub_field('icon')) : ?>
                  <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr(get_sub_field('title')); ?>" width="40" height="40">
                <?php endif; ?>
              </div>
              <h3 class="model-title"><?php the_sub_field('title'); ?></h3>
              <p class="model-desc"><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>

      <?php if ($cta_text = get_field('solutions_hiring_cta_text')) : ?>
      <div class="hiring-cta-wrapper text-center mt-5">
        <a href="<?php echo esc_url(get_field('solutions_hiring_cta_link') ?: get_permalink( get_page_by_path('contact-us') )); ?>" class="button button-primary mx-auto">
          <?php echo esc_html($cta_text); ?>
          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="url(#paint0_linear_507_314)"></path>
            <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white"></path>
            <defs><linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571" gradientUnits="userSpaceOnUse"><stop stop-color="#00BEC5"></stop><stop offset="1" stop-color="#43CEA2"></stop></linearGradient></defs>
          </svg>
        </a>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Hiring Models Section End -->
  
  <!-- FAQ Section Start -->
  <section class="faq-accordion-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $faq_title = get_field('solutions_faq_title');
          if ($faq_title) {
              $faq_title = str_replace('{', '<span class="highlight-text">', $faq_title);
              $faq_title = str_replace('}', '</span>', $faq_title);
              echo wp_kses($faq_title, array('span' => array('class' => array())));
          } else {
              echo 'Frequently Asked <span class="highlight-text"> Questions </span>';
          }
          ?>
        </h2>
        <p class="section-description">
          <?php 
          $faq_desc = get_field('solutions_faq_description');
          echo $faq_desc ? wp_kses_post($faq_desc) : 'Find answers to common queries about our CRM solutions and implementation process.'; 
          ?>
        </p>
      </div>

      <?php if (have_rows('solutions_faq_list')) : ?>
      <div class="faq-accordion" id="solutionsFAQ">
        <?php $f = 1; while (have_rows('solutions_faq_list')) : the_row(); ?>
          <div class="accordion-item <?php echo $f == 1 ? 'open' : ''; ?>">
            <h2 class="accordion-header" id="heading<?php echo $f; ?>">
              <button class="accordion-button <?php echo $f == 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse<?php echo $f; ?>" aria-expanded="<?php echo $f == 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $f; ?>">
                <?php echo str_pad($f, 2, '0', STR_PAD_LEFT); ?>. <?php the_sub_field('question'); ?>
                <span class="accordion-icon"></span>
              </button>
            </h2>
            <div id="collapse<?php echo $f; ?>" class="accordion-collapse collapse <?php echo $f == 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $f; ?>"
              data-bs-parent="#solutionsFAQ">
              <div class="accordion-body">
                <?php the_sub_field('answer'); ?>
              </div>
            </div>
          </div>
        <?php $f++; endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- FAQ Section End -->

  <?php get_footer(); ?>
