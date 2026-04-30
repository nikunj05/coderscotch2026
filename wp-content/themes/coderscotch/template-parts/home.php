<?php /* Template Name: Home Page Template */

get_header();
?>
<!-- Banner Section Start -->
<section class="banner-section position-relative z-index-0 section-space-t">
<!-- Smooth Wave Container -->
<div class="smooth-wave-container">
  <div class="smooth-wave"></div>
  <div class="smooth-wave"></div>
  <div class="smooth-wave"></div>
</div>
<div class="container">
  <div class="banner-section-content">
    <div class="trusted-client d-flex align-items-center justify-content-center">
      <div class="trusted-client-images d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image1.svg" alt="client image" class="client-images" width="34"
          height="34" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image2.svg" alt="client image" class="client-images" width="34"
          height="34" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image3.svg" alt="client image" class="client-images" width="34"
          height="34" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image4.svg" alt="client image" class="client-images" width="34"
          height="34" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-image5.svg" alt="client image" class="client-images" width="34"
          height="34" />
      </div>
      <div class="trusted-client-content">Trusted by 200+ Clients</div>
    </div>
    <div class="heading_section">
      <h1 class="section-title" data-aos="fade" data-aos-duration="800">
        <span class="highlight-text"><?= get_field('first_title') ?></span> <br />
            <?= get_field('second_title') ?>
      </h1>
      <p class="section-description" data-aos="fade" data-aos-duration="800">
       <?= get_field('title_content') ?>
      </p>
    </div>
    <div class="banner-card-box" data-aos="fade" data-aos-duration="800">
      <div class="banner-card-box-items d-flex align-items-center justify-content-center">
        <div class="banner-card-box-items-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-box-icon.svg" width="36" height="32" alt="Google Reviews Rating Icon" />
        </div>
        <div class="banner-card-box-items-star">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
        </div>
      </div>
      <div class="banner-card-box-items d-flex align-items-center justify-content-center">
        <div class="banner-card-box-items-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clutch-box-icon.svg" width="91" height="26" alt="Clutch Reviews Rating Icon" />
        </div>
        <div class="banner-card-box-items-star">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
        </div>
      </div>
      <div class="banner-card-box-items d-flex align-items-center justify-content-center">
        <div class="banner-card-box-items-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upwork-box-icon.svg" width="31" height="22" alt="Upwork Reviews Rating Icon" />
        </div>
        <div class="banner-card-box-items-star">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="21" height="21" />
        </div>
      </div>
    </div>

    <div class="banner-button-with-animation-line d-flex align-items-center" data-aos="fade"
      data-aos-duration="1000">
      <a class="button button-primary" href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>">
        Speak to our expert
        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z"
            fill="url(#paint0_linear_507_314)" />
          <path
            d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
            fill="white" />
          <defs>
            <linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571"
              gradientUnits="userSpaceOnUse">
              <stop stop-color="#00BEC5" />
              <stop offset="1" stop-color="#43CEA2" />
            </linearGradient>
          </defs>
        </svg>
      </a>
    </div>
  </div>
</div>
</section>
<!-- Banner Section End -->

<!-- Home Service slider section start -->
  <?php
    $terms = get_terms(array(
      'taxonomy'   => 'category',
      'hide_empty' => false,
      'orderby'    => 'term_id',
      'order'      => 'DESC',
    ));


    // Filter categories that should show on home page
    $home_categories = array();
    if (!empty($terms) && !is_wp_error($terms)) {
      foreach ($terms as $term) {
        if (get_field('show_on_home_page_services', 'category_' . $term->term_id) === "Yes") {
          $home_categories[] = $term;
        }
      }
    }
    ?>

    <section class="services-slider-section">
      <div class="container">
        <div class="services-slider-inner">

          <!-- Tabs Nav -->
          <div class="services-tabs-nav-wrapper">
            <ul class="nav nav-pills services-tabs-nav justify-content-center" id="services-tab-dynamic" role="tablist">
              <?php
              $n = 0;
              foreach ($home_categories as $term) :
                $n++;
                $isActive = ($n === 1);
                $term_id = $term->term_id;
              ?>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link <?php echo $isActive ? 'active' : ''; ?>"
                    id="home-service-<?php echo $term_id; ?>-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#home-service-<?php echo $term_id; ?>"
                    type="button"
                    role="tab"
                    aria-controls="home-service-<?php echo $term_id; ?>"
                    aria-selected="<?php echo $isActive ? 'true' : 'false'; ?>">
                    <?php echo esc_html($term->name); ?>
                  </button>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>



          <!-- Tab Content -->
          <div class="tab-content services-tab-content" id="services-tabContent-dynamic">
            <?php
            $m = 0;
            foreach ($home_categories as $term) :
              $m++;
              $isActive = ($m === 1);
              $term_id = $term->term_id;
              $acf_term_id = 'category_' . $term_id;
            ?>
              <div
                class="tab-pane fade <?php echo $isActive ? 'show active' : ''; ?>"
                id="home-service-<?php echo $term_id; ?>"
                role="tabpanel"
                aria-labelledby="home-service-<?php echo $term_id; ?>-tab"
                tabindex="0">

                <div class="home-service-tab-content align-items-center">
                  <div class="home-service-tab-content-left">
                    <div class="service-content-left">
                      <h3 class="service-title"><?php echo wp_kses_post(get_field('title2', $acf_term_id)); ?></h3>

                      <p class="service-description">
                        <?php echo wp_kses_post(wp_trim_words($term->description, 100)); ?>
                      </p>

                      <a href="<?php echo esc_url(get_term_link($term)); ?>" class="button button-secondary">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="46" height="46" rx="10" fill="white"></rect>
                          <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="#00BEC5"></path>
                        </svg>
                        Know More
                      </a>
                    </div>
                  </div>

                  <div class="home-service-tab-content-right">
                    <div class="service-process-diagram">
                      <?php if (have_rows('small_services_boxes', $acf_term_id)) : ?>
                        <?php while (have_rows('small_services_boxes', $acf_term_id)) : the_row(); ?>
                          <div class="process-step-card">
                            <div class="step-icon">
                              <img src="<?php echo esc_url(get_sub_field('icon')); ?>"
                                alt="<?php echo esc_attr(get_sub_field('title')); ?>"
                                width="32" height="32">
                            </div>
                            <h4 class="step-title"><?php echo esc_html(get_sub_field('title')); ?></h4>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>

                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>



  <!-- Home About us Section Start -->
  <?php $id = 96; ?>
  <section class="home-aboutus-section">
    <div class="home-aboutus-inner max-width-95">
      <div class="container">
        <div class="reveal-type heading_section">
          <h2 class="section-title">
            Unleashing Innovation: <br>
            <span class="highlight-text">The Coderscotch Journey</span>
          </h2>
        </div>
        <div class="reveal-type about-us-description">
          <p class="word">
            <?= get_field('info', $id); ?>
          </p>
        </div>
        <div class="our-achievement-section">
          <div class="achievement-container">
            <div class="achievement-item">
              <span class="achievement-number">25+</span>
              <span class="achievement-text">Team Members</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">14+</span>
              <span class="achievement-text">Years of Experience</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">200+</span>
              <span class="achievement-text">Happy Clients</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">325+</span>
              <span class="achievement-text">Completed Projects</span>
            </div>
          </div>
        </div>
        <div class="aboutus-section-action">
          <a href="<?= get_permalink($id); ?>" class="button button-secondary">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="46" height="46" rx="10" fill="white" />
              <path
                d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                fill="#00BEC5" />
            </svg>
            Know More
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Home About us Section End -->
<!-- Counters ENDS -->
  <!-- our project portfolio section start -->
  <section class="case-studies-listing-section section-space-t section-space-b">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          Showcasing Our
          <span class="highlight-text">Finest Digital Creations</span>
        </h2>
        <p class="section-description" data-aos="fade" data-aos-duration="800">
          We empower businesses to transform and scale their digital presence by
          delivering high-quality software <br> development solutions across Europe and
          global markets.
        </p>
      </div>
      <div class="tab-content case-studies-listing-content">
        <!-- All tab 1-->
        <div class="case-studies-listing-grid">
          <?php $args = array(
                    'post_type' => 'our_work',
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
                $count = 1;
                while ($the_query->have_posts()) : $the_query->the_post();
                    $id = get_the_ID();
                    $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); 
                ?>
          <div class="case-study-card">
            
            <div class="case-study-img-wrapper">
              <img src="<?=$url_img?>" width="646" height="230"
                alt="<?=the_title();?>" class="case-study-card-img">
              <div class="case-study-card-overlay">
                <a href="<?= get_field("button_url", $id ); ?>" class="case-study-link-icon" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/up-arrow.svg" width="44" height="44">
                </a>
              </div>
            </div>
            <div class="case-study-content">
              <div class="case-study-card-title-wrapper">
                <a href="case-study-detail.html" class="case-study-card-title"><?=the_title();?></a>
                <!-- <div class="case-study-country-flag">
                  <img src="./assets/images/country-icon/india-country-img.svg" width="26" height="26"
                    alt="india country icon" class="case-study-card-flag-icon">
                </div> -->
              </div>
              <p class="case-study-card-desc"><?=the_excerpt();?></p>
            </div>
            <?php 
              $tags = get_the_tags();
            ?>
            <div class="case-study-card-tags">
              <div class="case-study-card-tags-inner">
                <?php
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<span class="case-study-card-tag">' . $tag->name . '</span> ';
                    }
                }
                ?>
              </div>
            </div>
          </div>
          <?php 
                $count++;
                endwhile;
                wp_reset_postdata(); 
            ?>
        </div>
        <!-- Load More Button -->
        <div class="case-studies-load-more text-center" id="">
          <a href="<?php the_permalink('120');?>" class="button button-secondary mx-auto">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="46" height="46" rx="10" fill="white"></rect>
              <path
                d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                fill="#00BEC5"></path>
            </svg>
            View Portfolio
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- our project portfolio section end -->

  <!-- technologies use section start -->
  <section class="technologies-use-section section-space-t">
    <div class="technologies-use-inner max-width-95">
      <div class="container">
        <div class="heading_section text-center">
          <h2 class="section-title" data-aos="fade" data-aos-duration="800">
            <?= get_field('tech_title1', $id); ?>
          </h2>
          <p class="section-description" data-aos="fade" data-aos-duration="800">
            <?= get_field('tech_title2', $id); ?>
          </p>
        </div>
        <div class="technologies-tab">
          <div class="technologies-tab-nav">
            <ul class="nav nav-pills justify-content-center category-tabs" id="tech-pills-tab" role="tablist">
  <?php $count = 0; ?>
  <?php if (have_rows('tech_stacks')) : while (have_rows('tech_stacks')) : the_row();
    $title = get_sub_field('tech_title');
    $slug  = sanitize_title($title);
  ?>
    <li class="nav-item" role="presentation">
      <button
        class="nav-link <?= ($count === 0) ? 'active' : ''; ?>"
        id="tech-pills-<?= $slug; ?>-tab"
        data-bs-toggle="pill"
        data-bs-target="#tech-pills-<?= $slug; ?>"
        type="button"
        role="tab"
        aria-controls="tech-pills-<?= $slug; ?>"
        aria-selected="<?= ($count === 0) ? 'true' : 'false'; ?>"
      >
        <span class="tech-link-title"><?= esc_html($title); ?></span>
      </button>
    </li>
  <?php $count++; endwhile; endif; ?>
</ul>
          </div>
        </div>
      </div>
      <div class="technologies-tab-details">
        <div class="container">
          <div class="technologies-tab-content tab-content pt-0" id="tech-pills-tabContent">
            <?php $count = 0; ?>
            <?php if (have_rows('tech_stacks')) : while (have_rows('tech_stacks')) : the_row();
              $title = get_sub_field('tech_title');
              $slug  = sanitize_title($title);
            ?>
              <div
                class="tab-pane fade <?= ($count === 0) ? 'show active' : ''; ?>"
                id="tech-pills-<?= $slug; ?>"
                role="tabpanel"
                aria-labelledby="tech-pills-<?= $slug; ?>-tab"
                tabindex="0"
              >
                <div class="technologies-list">
                  <?php if (have_rows('tech_list')) : while (have_rows('tech_list')) : the_row(); ?>
                    <div class="technologies-items d-flex">
                      <div class="technologies-items-icon">
                        <img src="<?= esc_url(get_sub_field('tech_image')); ?>" width="25" height="30" alt="<?= esc_attr(get_sub_field('tech_name')); ?>">
                      </div>
                      <div class="technologies-items-title"><?= esc_html(get_sub_field('tech_name')); ?></div>
                    </div>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            <?php $count++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- technologies use section end -->

  <!-- client review section start -->
  <section class="home-client-review-section section-space-b section-space80-t">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          Take A Look At Some Of <br />
          <span class="highlight-text"> Our Amazing Past Clients Review</span>
        </h2>
      </div>

      <div class="client-review-grid">
        <!-- Column 1 -->
        <div class="review-col">
          <div class="review-scroll-track">
            <?php
                if (have_rows('testimonials_repeater', 'options')) :
                    while (have_rows('testimonials_repeater', 'options')) : the_row(); ?>
                    <div class="client-review-card">
                      <div class="card-body">
                        <p><?= get_sub_field('client_review'); ?></p>
                      </div>
                      <div class="card-footer">
                        <div class="user-info">
                          <div class="user-name"><?= get_sub_field('client_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18"
                              height="18" alt="verified" class="verified-icon"></div>
                          <div class="user-role"><?= get_sub_field('client_job_title'); ?></div>
                        </div>
                        <div class="user-image">
                          <img src="<?= get_sub_field('client_photo'); ?>" width="40" height="40" alt="Kathryn Murphy">
                        </div>
                      </div>
                    </div>
            <?php endwhile;
                endif;
            ?>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="review-col">
          <div class="review-scroll-track">
            <?php
                if (have_rows('testimonials')) :
                    while (have_rows('testimonials')) : the_row(); ?>
                        
            <!-- Set 1 -->
            <div class="client-review-card">
              <div class="card-body">
                <p><?= get_sub_field('client_review'); ?></p>
              </div>
              <div class="card-footer">
                <div class="user-info">
                  <div class="user-name"><?= get_sub_field('testimonials_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18"
                      height="18" alt="verified" class="verified-icon"></div>
                  <div class="user-role"><?= get_sub_field('job_title'); ?></div>
                </div>
                <div class="user-image">
                  <img src="<?= get_sub_field('testimonials_image'); ?>" width="40" height="40" alt="Kathryn Murphy">
                </div>
              </div>
            </div>
            <?php endwhile;
                endif;
            ?>
          </div>
        </div>

        <!-- Column 3 -->
        <div class="review-col">
          <div class="review-scroll-track">
            <?php
                if (have_rows('testmonials_repeater', 'option')) :
                    while (have_rows('testmonials_repeater', 'option')) : the_row(); 
            ?>
            <div class="client-review-card">
              <div class="card-body">
                <p><?= get_sub_field('client_review'); ?></p>
              </div>
              <div class="card-footer">
                <div class="user-info">
                  <div class="user-name"><?= get_sub_field('client_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18"
                      height="18" alt="verified" class="verified-icon"></div>
                  <div class="user-role"><?= get_sub_field('client_job_title'); ?></div>
                </div>
                <div class="user-image">
                  <img src="<?php echo esc_url(get_sub_field('client_photo')); ?>" width="40" height="40" alt="<?= get_sub_field('client_name'); ?>">
                </div>
              </div>
            </div>
            <?php 
                  endwhile;
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- client review section end -->
  <!-- Blogs Section Start -->
  <section class="ourblogs-and-news-section section-space-tb">
    <div class="container">
      <div class="home-blog-title-with-action">
        <div class="heading_section ">
          <h2 class="section-title">Our <span class="highlight-text">Blogs Posts</span>
          </h2>
          <p class="section-description">
            
          </p>
        </div>
        <div class="blog-action">
          <a href="<?php echo get_permalink( get_page_by_path('blog') ); ?>" class="button button-secondary">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="46" height="46" rx="10" fill="white"></rect>
              <path
                d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                fill="#00BEC5"></path>
            </svg>
            See All Blogs
          </a>
        </div>
      </div>

      <div class="ourblog-card-list d-grid">
        <?php $page_id = 230 ?>
            <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
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

                if (!$featured_img) {
                    $alt_text = 'No Image';
                }
                ?>
                <div class="ourblog-card-items">
                  <div class="ourblog-card-items-img">
                    <?php if($featured_img) {?>
                    <a class="blog_img" href="<?= get_permalink(); ?>">
                        <img src="<?= $featured_img ?>" alt="<?= $alt_text ?>" width="370" height="300" title="<?= get_the_title() ?>"></a>
                   <?php } ?>
                  </div>
                  <div class="ourblog-card-items-content">
                    <a href="<?= get_permalink(); ?>" class="ourblog-card-items-title redhat-font-family"><?= get_the_title(); ?></a>
                    <p class="ourblog-card-items-des"><?php echo wp_trim_words(get_the_content(), 20,); ?></p>
                    <a href="<?= get_permalink(); ?>" class="read-article-link">Read More 
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.125 4.5L14.625 9M14.625 9L10.125 13.5M14.625 9H3.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
    </div>
  </section>
<!--Our Blog ENDS-->
<?php get_footer(); ?>