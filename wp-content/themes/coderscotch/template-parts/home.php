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
      <div class="trusted-client-content">Trusted by Industry Leaders</div>
    </div>
    <div class="heading_section">
      <h1 class="section-title">
        <span class="highlight-text"><?= get_field('first_title') ?></span> <br />
            <?= get_field('second_title') ?>
      </h1>
      <p class="section-description">
       <?= get_field('title_content') ?>
      </p>
    </div>
    <div class="banner-card-box">
      <a target="_blank" href="https://www.google.com/search?q=coder+scotch+technologies&rlz=1C1RXQR_enIN1087IN1089&oq=coder+scotch+technologies&gs_lcrp=EgZjaHJvbWUqCggAEAAY4wIYgAQyCggAEAAY4wIYgAQyDQgBEC4YrwEYxwEYgAQyCAgCEAAYFhgeMggIAxAAGBYYHjINCAQQABiGAxiABBiKBTINCAUQABiGAxiABBiKBTINCAYQABiGAxiABBiKBTIGCAcQRRg90gEHMjE0ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8&sei=3AgMap-uD72y4-EPqq7O-Aw" class="banner-card-box-items d-flex align-items-center justify-content-center">
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
      </a>
      <a target="_blank" href="https://clutch.co/profile/coder-scotch-technologies" class="banner-card-box-items d-flex align-items-center justify-content-center">
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
      </a>
      <a target="_blank" href="https://www.upwork.com/freelancers/nikunjgoriya5" class="banner-card-box-items d-flex align-items-center justify-content-center">
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
      </a>
    </div>

    <div class="banner-button-with-animation-line d-flex align-items-center">
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
              <span class="achievement-number">20+</span>
              <span class="achievement-text">Team Members</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">14+</span>
              <span class="achievement-text">Years of Experience</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">30+</span>
              <span class="achievement-text">Happy Clients</span>
            </div>

            <div class="achievement-item">
              <span class="achievement-number">45+</span>
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

  <!-- Home Leadership/Team Section Start -->
  <?php 
  $about_page_id = 96;
  if (have_rows('about_leadership_list', $about_page_id)) : 
  ?>
  <section class="home-leadership-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          <?php 
          $leader_title = get_field('about_leadership_title', $about_page_id);
          if ($leader_title) {
              $leader_title = str_replace('{', '<span class="highlight-text">', $leader_title);
              $leader_title = str_replace('}', '</span>', $leader_title);
              echo wp_kses($leader_title, array('span' => array('class' => array())));
          } else {
              echo 'Meet Our <span class="highlight-text"> Leadership Team </span>';
          }
          ?>
        </h2>
        <p class="section-description" data-aos="fade" data-aos-duration="800">
          <?php 
          $leader_desc = get_field('about_leadership_description', $about_page_id);
          echo $leader_desc ? wp_kses_post($leader_desc) : 'Our experts bring decades of combined experience to drive innovation and success.'; 
          ?>
        </p>
      </div>

      <div class="leadership-grid">
        <?php 
        $count = 0;
        while (have_rows('about_leadership_list', $about_page_id)) : the_row(); 
          if ($count >= 3) {
              break;
          }
          $photo = get_sub_field('photo');
          $name = get_sub_field('name');
          $role = get_sub_field('role');
          $desc = get_sub_field('description');
          $linkedin = get_sub_field('linkedin_url');
          $count++;
        ?>
          <div class="leadership-card" data-aos="fade-up" data-aos-duration="800">
            <div class="member-image-wrapper">
              <?php if ($photo) : ?>
                <img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($name); ?>" class="member-image" width="300" height="300" loading="lazy">
              <?php else : ?>
                <div class="member-image d-flex align-items-center justify-content-center" style="background: #e9ecef; width: 100%; height: 100%;">
                  <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ced4da" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                  </svg>
                </div>
              <?php endif; ?>
              
              <?php if ($linkedin) : ?>
                <div class="member-social-overlay">
                  <a href="<?php echo esc_url($linkedin); ?>" class="social-btn" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr($name); ?> LinkedIn Profile">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.8v8.37h2.8v-4.87c0-.25.05-.5.12-.69a1 1 0 0 1 .93-.68c.55 0 1 .43 1 1v5.24h2.8M6.5 8.37a1.37 1.37 0 1 0 0-2.75 1.37 1.37 0 0 0 0 2.75M8 18.5V10.13H5V18.5h3Z"/>
                    </svg>
                  </a>
                </div>
              <?php endif; ?>
            </div>
            
            <div class="member-info">
              <h3 class="member-name"><?php echo esc_html($name); ?></h3>
              <span class="member-role"><?php echo esc_html($role); ?></span>
              <p class="member-bio"><?php echo esc_html($desc); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!-- Home Leadership/Team Section End -->

  <!-- our project portfolio section start -->

<!-- Digital Creations slider start -->
  <section class="digital-creations-section section-space-tb">
    <div class="container">
      <div class="d-flex justify-content-between digital-creations-section-header">
        <div class="heading_section text-start mb-0">
          <h2 class="section-title" data-aos="fade" data-aos-duration="800">
            Showcasing Our <span class="highlight-text"> Finest Digital Creations </span>
          </h2>
          <p class="section-description mb-0" data-aos="fade" data-aos-duration="800">
            We help businesses reinvent and accelerate their digital identity by providing premium software <br>
            development solutions in Europe and around different parts of the world.
          </p>
        </div>
        <div class="digital-slider-nav d-flex">
          <div class="digital-button-prev">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.48674 10.4421L8.23199 16.1873C8.3492 16.3045 8.50817 16.3704 8.67393 16.3704C8.83969 16.3704 8.99866 16.3045 9.11587 16.1873C9.23308 16.0701 9.29893 15.9111 9.29893 15.7454C9.29893 15.5796 9.23308 15.4206 9.11587 15.3034L4.43736 10.6249L17.0708 10.6255C17.2367 10.6255 17.3957 10.5596 17.513 10.4423C17.6303 10.325 17.6962 10.166 17.6962 10.0001C17.6962 9.83427 17.6303 9.67521 17.513 9.55793C17.3957 9.44066 17.2367 9.37477 17.0708 9.37477L4.43737 9.37532L9.11587 4.69682C9.23308 4.57961 9.29893 4.42064 9.29893 4.25488C9.29893 4.08912 9.23308 3.93014 9.11587 3.81293C8.99866 3.69572 8.83969 3.62988 8.67393 3.62988C8.50817 3.62988 8.3492 3.69572 8.23199 3.81293L2.48674 9.55818C2.36953 9.67539 2.30369 9.83436 2.30369 10.0001C2.30369 10.1659 2.36953 10.3249 2.48674 10.4421Z"
                fill="url(#paint0_linear_430_1855)" />
              <defs>
                <linearGradient id="paint0_linear_430_1855" x1="6.0224" y1="6.02252" x2="13.9776" y2="13.9777"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#43CEA2" />
                  <stop offset="1" stop-color="#185A9D" />
                </linearGradient>
              </defs>
            </svg>

          </div>
          <div class="digital-button-next">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M17.5133 10.4421L11.768 16.1873C11.6508 16.3045 11.4918 16.3704 11.3261 16.3704C11.1603 16.3704 11.0013 16.3045 10.8841 16.1873C10.7669 16.0701 10.7011 15.9111 10.7011 15.7454C10.7011 15.5796 10.7669 15.4206 10.8841 15.3034L15.5626 10.6249L2.92918 10.6255C2.76333 10.6255 2.60427 10.5596 2.48699 10.4423C2.36971 10.325 2.30383 10.166 2.30383 10.0001C2.30383 9.83427 2.36972 9.67521 2.48699 9.55793C2.60427 9.44066 2.76333 9.37477 2.92918 9.37477L15.5626 9.37532L10.8841 4.69682C10.7669 4.57961 10.7011 4.42064 10.7011 4.25488C10.7011 4.08912 10.7669 3.93014 10.8841 3.81293C11.0013 3.69572 11.1603 3.62988 11.3261 3.62988C11.4918 3.62988 11.6508 3.69572 11.768 3.81293L17.5133 9.55818C17.6305 9.67539 17.6963 9.83436 17.6963 10.0001C17.6963 10.1659 17.6305 10.3249 17.5133 10.4421Z"
                fill="url(#paint0_linear_430_1853)" />
              <defs>
                <linearGradient id="paint0_linear_430_1853" x1="13.9776" y1="6.02252" x2="6.0224" y2="13.9777"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#43CEA2" />
                  <stop offset="1" stop-color="#185A9D" />
                </linearGradient>
              </defs>
            </svg>

          </div>
        </div>
      </div>

      <div class="swiper digital-creations-slider">
        <div class="swiper-wrapper">
          <?php 
                $transient_key = 'home_our_work_query';
                $the_query = get_transient($transient_key);
                
                if (false === $the_query) {
                    $args = array(
                        'post_type' => 'our_work',
                        'posts_per_page' => 5,
                        'offset' => 0,
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'post_status' => 'publish',
                        'suppress_filters' => true
                    );
                    $the_query = new WP_Query($args);
                    set_transient($transient_key, $the_query, 12 * HOUR_IN_SECONDS);
                }
                ?>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                    $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); 
                ?>
          <div class="swiper-slide">
            <div class="digital-creation-card">
              <div class="creation-image">
                <img src="<?= esc_url($url_img) ?>" alt="<?= esc_attr(get_the_title()); ?>" width="500" height="300" loading="lazy">
              </div>
              <div class="creation-content">
                <h3 class="creation-title"><?= the_title(); ?></h3>
                <p class="creation-desc">
                  <?= the_content() ?>
                </p>
                <div class="creation-tags">
                  <span class="creation-tag">UI/UX Design</span>
                  <span class="creation-tag">Mobile App Development</span>
                  <span class="creation-tag">Online Appointment Booking</span>
                </div>
                <a href="<?= the_permalink(); ?>" class="button button-secondary">
                  <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="46" height="46" rx="10" fill="white"></rect>
                    <path
                      d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                      fill="#00BEC5"></path>
                  </svg>
                  View Case Study
                </a>
              </div>
            </div>
          </div>
           <?php endwhile;
                wp_reset_postdata() ?>
          
        </div>
      </div>
    </div>
  </section>
  <!-- Digital Creations slider end -->
  <!-- our project portfolio section end -->

  <!-- technologies use section start -->
  <section class="technologies-use-section home-tech-section section-space-t">
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
        <div class="tech-rows-container">
          <?php if (have_rows('tech_stacks')) : while (have_rows('tech_stacks')) : the_row();
            $title = get_sub_field('tech_title');
          ?>
            <div class="tech-row">
              <div class="tech-category-col">
                <h3 class="tech-category-title"><?= esc_html($title); ?></h3>
              </div>
              <div class="tech-list-col">
                <div class="tech-list-inline">
                  <?php if (have_rows('tech_list')) : while (have_rows('tech_list')) : the_row(); ?>
                    <span class="tech-item"><?= esc_html(get_sub_field('tech_name')); ?></span>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
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
                          <img src="<?= esc_url(get_sub_field('client_photo')); ?>" width="40" height="40" alt="Client Photo" loading="lazy">
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
                  <img src="<?= esc_url(get_sub_field('testimonials_image')); ?>" width="40" height="40" alt="Client Photo" loading="lazy">
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
                  <img src="<?php echo esc_url(get_sub_field('client_photo')); ?>" width="40" height="40" alt="<?= esc_attr(get_sub_field('client_name')); ?>" loading="lazy">
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
            <?php 
            $transient_key_blogs = 'home_blogs_query';
            $the_query = get_transient($transient_key_blogs);
            
            if (false === $the_query) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'offset' => 0,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $the_query = new WP_Query($args);
                set_transient($transient_key_blogs, $the_query, 12 * HOUR_IN_SECONDS);
            }
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
                        <img src="<?= esc_url($featured_img) ?>" alt="<?= esc_attr($alt_text) ?>" width="370" height="300" title="<?= esc_attr(get_the_title()) ?>" loading="lazy"></a>
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

  <!-- FAQ Section Start -->
  <section class="faq-accordion-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $faq_title = get_field('home_faq_title');
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
          $faq_desc = get_field('home_faq_description');
          echo $faq_desc ? wp_kses_post($faq_desc) : 'Find answers to common queries about our services and process.'; 
          ?>
        </p>
      </div>

      <?php if (have_rows('home_faq_list')) : ?>
      <div class="faq-accordion" id="homeFAQ">
        <?php $f = 1; while (have_rows('home_faq_list')) : the_row(); ?>
          <div class="accordion-item <?php echo $f == 1 ? 'open' : ''; ?>">
            <h2 class="accordion-header" id="headingFAQ<?php echo $f; ?>">
              <button class="accordion-button <?php echo $f == 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFAQ<?php echo $f; ?>" aria-expanded="<?php echo $f == 1 ? 'true' : 'false'; ?>" aria-controls="collapseFAQ<?php echo $f; ?>">
                <?php echo str_pad($f, 2, '0', STR_PAD_LEFT); ?>. <?php the_sub_field('question'); ?>
                <span class="accordion-icon"></span>
              </button>
            </h2>
            <div id="collapseFAQ<?php echo $f; ?>" class="accordion-collapse collapse <?php echo $f == 1 ? 'show' : ''; ?>" aria-labelledby="headingFAQ<?php echo $f; ?>"
              data-bs-parent="#homeFAQ">
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