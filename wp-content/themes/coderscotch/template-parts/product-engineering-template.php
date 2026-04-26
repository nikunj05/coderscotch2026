<?php /* Template Name: Product Engineering Template */ 
get_header(); ?>

  <!-- Banner Section Start -->
  <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
        <div class="connect-section">
          <div class="heading_section text-left">
            <h1 class="section-title">
              <?php
              $title = get_the_title();
              if (strpos($title, ' ') !== false) {
                  $title_parts = explode(' ', $title);
                  $last_word = array_pop($title_parts);
                  $highlighted_part = implode(' ', $title_parts);
                  echo '<span class="highlight-text"> ' . esc_html($highlighted_part) . ' </span> ' . esc_html($last_word);
              } else {
                  echo esc_html($title);
              }
              ?>
            </h1>
            <p class="section-description">
              <?php echo wp_strip_all_tags( get_the_content() ); ?>
            </p>

          </div>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary">
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
          <?php 
          if (has_post_thumbnail()) {
              the_post_thumbnail('full', array('class' => 'common-banner-bottom-image'));
          } else {
              ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-development-banner-img.svg" alt="product engineering img" width="405" height="453" class="common-banner-bottom-image">
              <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- Product Engineering Services slider section start -->
  <?php if (have_rows('engineering_services')) : ?>
    <section class="mob-service-slider-two section-space-t">
      <div class="container">
        <!-- mob serive slider thumb -->
        <div class="swiper serviceSlider overflow-visible lg:block hidden service_two_thumb_slider">
          <div class="swiper-wrapper overflow-visible ">
            <?php while (have_rows('engineering_services')) : the_row(); 
              $icon = get_sub_field('icon');
              $title = get_sub_field('title');
            ?>
              <div class="swiper-slide">
                <div class="mobile-service-card">
                  <div class="mobile-service-header">
                    <div class="mobile-service-icon">
                      <?php if ($icon) : ?>
                        <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>" width="40" height="40" />
                      <?php endif; ?>
                    </div>
                    <div class="mobile-service-action">
                      <a href="#" class="mobile-service-link section-tag-button">
                        <div class="section-tag">
                          <div class="section-tag-circle">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="12.5" cy="12.5" r="12.5" fill="#00BEC5"></circle>
                              <path
                                d="M16.5107 8.85377L11.3547 8.85377C11.2182 8.85614 11.088 8.91205 10.9923 9.00945C10.8966 9.10685 10.8429 9.23796 10.8429 9.37452C10.8429 9.51109 10.8966 9.64219 10.9923 9.73959C11.088 9.83699 11.2182 9.8929 11.3547 9.89528L15.2534 9.89528L8.77671 16.3719C8.67904 16.4696 8.62417 16.6021 8.62417 16.7402C8.62417 16.8784 8.67904 17.0108 8.77671 17.1085C8.87439 17.2062 9.00687 17.261 9.145 17.261C9.28313 17.261 9.41561 17.2062 9.51328 17.1085L15.9899 10.6318L15.9899 14.5305C15.9887 14.5997 16.0013 14.6684 16.027 14.7326C16.0526 14.7968 16.0907 14.8553 16.1392 14.9046C16.1877 14.954 16.2455 14.9931 16.3093 15.0199C16.3731 15.0466 16.4415 15.0604 16.5107 15.0604C16.5799 15.0604 16.6483 15.0466 16.7121 15.0199C16.7759 14.9931 16.8337 14.954 16.8822 14.9046C16.9306 14.8553 16.9688 14.7968 16.9944 14.7326C17.0201 14.6684 17.0327 14.5997 17.0314 14.5305L17.0314 9.37452C17.0314 9.23642 16.9766 9.10397 16.8789 9.00632C16.7812 8.90866 16.6488 8.85379 16.5107 8.85377Z"
                                fill="white"></path>
                            </svg>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <h3 class="mobile-service-title"><?php echo esc_html(str_replace(array('{', '}'), '', $title)); ?></h3>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>

        <?php reset_rows(); ?>

        <!-- mob serive slider -->
        <div class="swiper serviceSlider2 md:mb-10">
          <div class="swiper-wrapper">
            <?php while (have_rows('engineering_services')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="feature-slide-item">
                  <div class="feature-slide-row">
                    <div class="feature-slider-left">
                      <div class="feature-slide-image">
                        <?php if ($image = get_sub_field('main_image')) : ?>
                          <img src="<?php echo esc_url($image); ?>" width="470" height="300" 
                            alt="<?php echo esc_attr(get_sub_field('title')); ?>" class="mob-service-slider" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="feature-slider-right">
                      <div class="feature-slide-content">
                        <div class="heading_section text-left">
                          <h3 class="section-title">
                            <?php 
                              $title = get_sub_field('title');
                              $title = str_replace('{', '<span class="highlight-text">', $title);
                              $title = str_replace('}', '</span>', $title);
                              echo wp_kses($title, array('span' => array('class' => array())));
                            ?>
                          </h3>
                          <p class="section-description">
                            <?php echo wp_kses_post(get_sub_field('description')); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- mob service contact box section start -->
  <section class="mob-projects-service section-space-b">
    <div class="container">
      <div class="mob-projects-service-wrapper">
        <div class="mob-projects-service-list">
          <div class="mob-projects-service-item">
            <div class="mob-projects-service-item-inner">
              <div class="mob-projects-service-item-content">
                <h3 class="mob-projects-service-item-title">Start Your Project</h3>
                <p class="mob-projects-service-item-description">Turn your idea into a scalable product. 
                  <br> Build, optimize, and launch faster with our expert team.
                </p>
              </div>
              <div class="mob-projects-service-item-icon">
                <a href="#" class="section-tag-button">
                  <div class="section-tag">
                    <div class="section-tag-circle">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="#00BEC5" />
                        <path
                          d="M16.5107 8.85377L11.3547 8.85377C11.2182 8.85614 11.088 8.91205 10.9923 9.00945C10.8966 9.10685 10.8429 9.23796 10.8429 9.37452C10.8429 9.51109 10.8966 9.64219 10.9923 9.73959C11.088 9.83699 11.2182 9.8929 11.3547 9.89528L15.2534 9.89528L8.77671 16.3719C8.67904 16.4696 8.62417 16.6021 8.62417 16.7402C8.62417 16.8784 8.67904 17.0108 8.77671 17.1085C8.87439 17.2062 9.00687 17.261 9.145 17.261C9.28313 17.261 9.41561 17.2062 9.51328 17.1085L15.9899 10.6318L15.9899 14.5305C15.9887 14.5997 16.0013 14.6684 16.027 14.7326C16.0526 14.7968 16.0907 14.8553 16.1392 14.9046C16.1877 14.954 16.2455 14.9931 16.3093 15.0199C16.3731 15.0466 16.4415 15.0604 16.5107 15.0604C16.5799 15.0604 16.6483 15.0466 16.7121 15.0199C16.7759 14.9931 16.8337 14.954 16.8822 14.9046C16.9306 14.8553 16.9688 14.7968 16.9944 14.7326C17.0201 14.6684 17.0327 14.5997 17.0314 14.5305L17.0314 9.37452C17.0314 9.23642 16.9766 9.10397 16.8789 9.00632C16.7812 8.90866 16.6488 8.85379 16.5107 8.85377Z"
                          fill="white" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="mob-projects-service-list">
          <div class="mob-projects-service-item">
            <div class="mob-projects-service-item-inner">
              <div class="mob-projects-service-item-content">
                <h3 class="mob-projects-service-item-title">Other Services</h3>
                <p class="mob-projects-service-item-description">Discover services built to accelerate your growth.
                  <br> From product engineering to AI, we help you scale efficiently.
                </p>
              </div>
              <div class="mob-projects-service-item-icon">
                <a href="#" class="section-tag-button">
                  <div class="section-tag">
                    <div class="section-tag-circle">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="#00BEC5" />
                        <path
                          d="M16.5107 8.85377L11.3547 8.85377C11.2182 8.85614 11.088 8.91205 10.9923 9.00945C10.8966 9.10685 10.8429 9.23796 10.8429 9.37452C10.8429 9.51109 10.8966 9.64219 10.9923 9.73959C11.088 9.83699 11.2182 9.8929 11.3547 9.89528L15.2534 9.89528L8.77671 16.3719C8.67904 16.4696 8.62417 16.6021 8.62417 16.7402C8.62417 16.8784 8.67904 17.0108 8.77671 17.1085C8.87439 17.2062 9.00687 17.261 9.145 17.261C9.28313 17.261 9.41561 17.2062 9.51328 17.1085L15.9899 10.6318L15.9899 14.5305C15.9887 14.5997 16.0013 14.6684 16.027 14.7326C16.0526 14.7968 16.0907 14.8553 16.1392 14.9046C16.1877 14.954 16.2455 14.9931 16.3093 15.0199C16.3731 15.0466 16.4415 15.0604 16.5107 15.0604C16.5799 15.0604 16.6483 15.0466 16.7121 15.0199C16.7759 14.9931 16.8337 14.954 16.8822 14.9046C16.9306 14.8553 16.9688 14.7968 16.9944 14.7326C17.0201 14.6684 17.0327 14.5997 17.0314 14.5305L17.0314 9.37452C17.0314 9.23642 16.9766 9.10397 16.8789 9.00632C16.7812 8.90866 16.6488 8.85379 16.5107 8.85377Z"
                          fill="white" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Key Points section start -->
  <section class="mob-project-key-points section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          <?php 
          $kp_title = get_field('key_points_section_title');
          if ($kp_title) {
              $kp_title = str_replace('{', '<span class="highlight-text">', $kp_title);
              $kp_title = str_replace('}', '</span>', $kp_title);
              echo wp_kses($kp_title, array('span' => array('class' => array())));
          } else {
              echo 'Project Key Points';
          }
          ?>
        </h2>
        <?php if ($kp_description = get_field('key_points_section_description')) : ?>
          <p class="section-description" data-aos="fade" data-aos-duration="800">
            <?php echo wp_kses_post($kp_description); ?>
          </p>
        <?php endif; ?>
      </div>

      <div class="key-points-wrapper">
        <?php 
        $key_points = get_field('key_points_repeater');
        if ($key_points) : 
            $count = count($key_points);
            $half = ceil($count / 2);
            $left_col = array_slice($key_points, 0, $half);
            $right_col = array_slice($key_points, $half);
        ?>
          <div class="key-points-col left-col">
            <?php foreach ($left_col as $point) : ?>
              <div class="key-point-card">
                <div class="key-point-icon">
                  <?php if ($point['icon']) : ?>
                    <img src="<?php echo esc_url($point['icon']); ?>" alt="<?php echo esc_attr($point['title']); ?>" width="50" height="50">
                  <?php endif; ?>
                </div>
                <div class="key-point-content">
                  <h3 class="key-point-title"><?php echo esc_html($point['title']); ?></h3>
                  <p class="key-point-desc"><?php echo esc_html($point['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="key-points-col middle-col">
            <div class="key-middle-effect effect-left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/key-point-effect-left.svg" width="181" height="342"
                alt="Key Middle Effect Left">
            </div>
            <div class="key-points-center">
              <div class="center-key-circle">
                <div class="pulse-ring"></div>
                <div class="pulse-ring delay-1"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/key-icon.svg" alt="Key Icon" width="50" height="50"
                  class="key-point-key-icon">
              </div>
            </div>
            <div class="key-middle-effect effect-right">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/key-point-effect-right.svg" width="181" height="342"
                alt="Key Middle Effect Right">
            </div>
          </div>

          <div class="key-points-col right-col">
            <?php foreach ($right_col as $point) : ?>
              <div class="key-point-card">
                <div class="key-point-icon">
                  <?php if ($point['icon']) : ?>
                    <img src="<?php echo esc_url($point['icon']); ?>" alt="<?php echo esc_attr($point['title']); ?>" width="50" height="50">
                  <?php endif; ?>
                </div>
                <div class="key-point-content">
                  <h3 class="key-point-title"><?php echo esc_html($point['title']); ?></h3>
                  <p class="key-point-desc"><?php echo esc_html($point['description']); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!--  Project Key Points section end -->

  <!-- Offered Another Services section -->
  <section class="offered-another-services-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $oas_title = get_field('offered_services_section_title');
          if ($oas_title) {
              $oas_title = str_replace('{', '<span class="highlight-text">', $oas_title);
              $oas_title = str_replace('}', '</span>', $oas_title);
              echo wp_kses($oas_title, array('span' => array('class' => array())));
          } else {
              echo 'Coderscotch <span class="highlight-text"> Offered Another Services </span>';
          }
          ?>
        </h2>
        <?php if ($oas_description = get_field('offered_services_section_description')) : ?>
          <p class="section-description">
            <?php echo wp_kses_post($oas_description); ?>
          </p>
        <?php endif; ?>
      </div>
      
      <?php if (have_rows('offered_services_repeater')) : ?>
        <div class="other-services-wrapper">
          <?php while (have_rows('offered_services_repeater')) : the_row(); 
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $card_class = get_sub_field('card_class');
            $link = get_sub_field('link');
          ?>
            <div class="other-service-card <?php echo esc_attr($card_class); ?>">
              <div class="card-header-top">
                <div class="service-icon">
                  <?php if ($icon) : ?>
                    <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>" width="32" height="32">
                  <?php endif; ?>
                </div>
                <a href="<?php echo esc_url($link ? $link : '#'); ?>" class="section-tag-button">
                  <div class="section-tag">
                    <div class="section-tag-circle">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12.5" r="12.5" fill="#00BEC5"></circle>
                        <path
                          d="M16.5107 8.85377L11.3547 8.85377C11.2182 8.85614 11.088 8.91205 10.9923 9.00945C10.8966 9.10685 10.8429 9.23796 10.8429 9.37452C10.8429 9.51109 10.8966 9.64219 10.9923 9.73959C11.088 9.83699 11.2182 9.8929 11.3547 9.89528L15.2534 9.89528L8.77671 16.3719C8.67904 16.4696 8.62417 16.6021 8.62417 16.7402C8.62417 16.8784 8.67904 17.0108 8.77671 17.1085C8.87439 17.2062 9.00687 17.261 9.145 17.261C9.28313 17.261 9.41561 17.2062 9.51328 17.1085L15.9899 10.6318L15.9899 14.5305C15.9887 14.5997 16.0013 14.6684 16.027 14.7326C16.0526 14.7968 16.0907 14.8553 16.1392 14.9046C16.1877 14.954 16.2455 14.9931 16.3093 15.0199C16.3731 15.0466 16.4415 15.0604 16.5107 15.0604C16.5799 15.0604 16.6483 15.0466 16.7121 15.0199C16.7759 14.9931 16.8337 14.954 16.8822 14.9046C16.9306 14.8553 16.9688 14.7968 16.9944 14.7326C17.0201 14.6684 17.0327 14.5997 17.0314 14.5305L17.0314 9.37452C17.0314 9.23642 16.9766 9.10397 16.8789 9.00632C16.7812 8.90866 16.6488 8.85379 16.5107 8.85377Z"
                          fill="white"></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
              <h3 class="service-title"><?php echo esc_html($title); ?></h3>
              <p class="service-desc">
                <?php echo esc_html($description); ?>
              </p>
              <div class="service-divider"></div>
              <?php if (have_rows('features')) : ?>
                <ul class="service-features">
                  <?php while (have_rows('features')) : the_row(); ?>
                    <li>
                      <div class="list-box-icon"></div><?php echo esc_html(get_sub_field('feature_text')); ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- connect with us section start -->
  <section class="connect-with-us-section section-space-b">
    <div class="container">
      <div class="connect-banner">
        <div class="banner-decoration left-decoration">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/connect-effect-left.png" alt="connect-effect" width="280" height="216">
        </div>
        <div class="banner-decoration right-decoration">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/connect-effect-left.png" alt="connect-effect" width="280" height="216">
        </div>
        <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="connect-content">
          <h2 class="connect-title">Connect with us</h2>
          <span class="section-tag-button">
            <div class="section-tag">
              <div class="section-tag-circle">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="12.5" cy="12.5" r="12.5" fill="#00BEC5"></circle>
                  <path
                    d="M16.5107 8.85377L11.3547 8.85377C11.2182 8.85614 11.088 8.91205 10.9923 9.00945C10.8966 9.10685 10.8429 9.23796 10.8429 9.37452C10.8429 9.51109 10.8966 9.64219 10.9923 9.73959C11.088 9.83699 11.2182 9.8929 11.3547 9.89528L15.2534 9.89528L8.77671 16.3719C8.67904 16.4696 8.62417 16.6021 8.62417 16.7402C8.62417 16.8784 8.67904 17.0108 8.77671 17.1085C8.87439 17.2062 9.00687 17.261 9.145 17.261C9.28313 17.261 9.41561 17.2062 9.51328 17.1085L15.9899 10.6318L15.9899 14.5305C15.9887 14.5997 16.0013 14.6684 16.027 14.7326C16.0526 14.7968 16.0907 14.8553 16.1392 14.9046C16.1877 14.954 16.2455 14.9931 16.3093 15.0199C16.3731 15.0466 16.4415 15.0604 16.5107 15.0604C16.5799 15.0604 16.6483 15.0466 16.7121 15.0199C16.7759 14.9931 16.8337 14.954 16.8822 14.9046C16.9306 14.8553 16.9688 14.7968 16.9944 14.7326C17.0201 14.6684 17.0327 14.5997 17.0314 14.5305L17.0314 9.37452C17.0314 9.23642 16.9766 9.10397 16.8789 9.00632C16.7812 8.90866 16.6488 8.85379 16.5107 8.85377Z"
                    fill="white"></path>
                </svg>
              </div>
            </div>
          </span>
        </a>
      </div>
    </div>
  </section>
  <!-- connect with us section end -->

  <!-- mobapp We are Specialized section start -->
  <section class="mobapp-we-are-specialized technologies-use-section section-space-t">
    <div class="technologies-use-inner max-width-95">
      <div class="container">
        <div class="heading_section text-center">
          <h2 class="section-title">
            Sorts of Apps
            <span class="highlight-text"> We are Specialized In</span>
          </h2>
          <p class="section-description">
            Discover the innovative technologies that power our cutting-edge digital solutions at Coder Scotch.
          </p>
        </div>
        <div class="technologies-tab section-space80-b">
          <div class="technologies-tab-nav we-are-specialized-tab">
            <ul class="nav nav-pills justify-content-center category-tabs">
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon1.svg" alt="manufacturing" width="32" height="32">
                  <span class="tech-link-title">Manufacturing</span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon2.svg" alt="health-fitness" width="32" height="32">
                  <span class="tech-link-title"> Health & Fitness </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon3.svg" alt="education" width="32" height="32">
                  <span class="tech-link-title"> Education </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon4.svg" alt="finance-banking" width="32"
                    height="32">
                  <span class="tech-link-title"> Finance & Banking </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon5.svg" alt="food-beverages" width="32" height="32">
                  <span class="tech-link-title"> Food & Beverages </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon6.svg" alt="e-commerce" width="32" height="32">
                  <span class="tech-link-title"> E-Commerce </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon7.svg" alt="real-estate" width="32" height="32">
                  <span class="tech-link-title"> Real Estate </span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="technologies-tab-details">
        <div class="container">
          <div class="technologies-tab-content section-space80-t">
            
            <div class="heading_section text-center">
              <h2 class="section-title">
                <?php 
                $tech_title = get_field('specialized_tech_title');
                if ($tech_title) {
                    $tech_title = str_replace('{', '<span class="highlight-text">', $tech_title);
                    $tech_title = str_replace('}', '</span>', $tech_title);
                    echo wp_kses($tech_title, array('span' => array('class' => array())));
                } else {
                    echo '<span class="highlight-text"> Technologies We Use For</span> ' . get_the_title();
                }
                ?>
              </h2>
              <?php if ($tech_desc = get_field('specialized_tech_description')) : ?>
                <p class="section-description">
                  <?php echo wp_kses_post($tech_desc); ?>
                </p>
              <?php endif; ?>
            </div>

            <?php if (have_rows('specialized_tech_list')) : ?>
              <div class="technologies-list">
                <?php while (have_rows('specialized_tech_list')) : the_row(); 
                  $tech_name = get_sub_field('tech_name');
                  $tech_icon = get_sub_field('tech_icon');
                ?>
                  <div class="technologies-items d-flex">
                    <div class="technologies-items-icon">
                      <?php if ($tech_icon) : ?>
                        <img src="<?php echo esc_url($tech_icon); ?>" width="30" height="30" alt="<?php echo esc_attr($tech_name); ?>" />
                      <?php endif; ?>
                    </div>
                    <div class="technologies-items-title"><?php echo esc_html($tech_name); ?></div>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- we are specialized in section end -->

  <!-- Why Brands Trust section start -->
  <section class="why-brands-trust-section section-space-tb">
    <div class="technologies-use-inner max-width-95">
      <div class="container">
        <div class="row why-brands-trust-row align-items-center">
          <div class="col-lg-5 mb-lg-0 why-brands-trust-content">
            <div class="heading_section text-left">
              <h2 class="section-title">
                Why Brands Trust <br>
                <span class="highlight-text"> CoderScotch </span>
              </h2>
              <p class="section-description">
                Trusted by growing businesses and enterprises, we combine deep technical expertise with a product-first approach to build reliable, secure, and scalable digital solutions that deliver measurable results.
              </p>
            </div>
            <a href="#" class="button button-secondary">
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="46" height="46" rx="10" fill="white"></rect>
                <path
                  d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                  fill="#00BEC5"></path>
              </svg>
              Let’s connect with us
            </a>
          </div>
          <div class="col-lg-7 why-brands-trust-image">
            <div class="trust-stats-grid our-achievement-section">
              <div class="trust-stat-card ">
                <div class="stat-icon-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/medal-icon.svg" alt="Experience" width="50" height="50">
                </div>
                <div class="stat-content">
                  <h3 class="stat-number achievement-number">10+</h3>
                  <p class="stat-label">Years of Experience</p>
                </div>
              </div>
              <div class="trust-stat-card">
                <div class="stat-icon-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/laptop-with-mobile-icon.svg" alt="Projects" width="50" height="50">
                </div>
                <div class="stat-content">
                  <h3 class="stat-number achievement-number">150+</h3>
                  <p class="stat-label">Completed Projects</p>
                </div>
              </div>
              <div class="trust-stat-card">
                <div class="stat-icon-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/smile-icon.svg" alt="Happy Clients" width="50" height="50">
                </div>
                <div class="stat-content">
                  <h3 class="stat-number achievement-number">200+</h3>
                  <p class="stat-label">Happy Clients</p>
                </div>
              </div>
              <div class="trust-stat-card">
                <div class="stat-icon-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/team-icon.svg" alt="Team Members" width="50" height="50">
                </div>
                <div class="stat-content">
                  <h3 class="stat-number achievement-number">20+</h3>
                  <p class="stat-label">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Brands Trust section end -->

 <!-- Digital Creations slider start -->
  <section class="digital-creations-section section-space-b">
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
          $args = array(
              'post_type' => 'our_work',
              'posts_per_page' => -1,
              'offset' => 0,
              'orderby' => 'ID',
              'order' => 'DESC',
              'post_status' => 'publish',
              'suppress_filters' => true
          );

          // Filter by category if on a specific page
          global $post;
          if (isset($post->post_name) && $post->post_name === 'mobile-app-development-company') {
              $args['tax_query'] = array(
                  array(
                      'taxonomy' => 'our_work_cat',
                      'field'    => 'name',
                      'terms'    => 'Mobile Application Development',
                  ),
              );
          }
          
          $the_query = new WP_Query($args);

          if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
                  $post_id = get_the_ID();
                  $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
                  $button_url = get_field('button_url', $post_id) ?: get_permalink();
                  $tags = get_the_tags();
          ?>
          <div class="swiper-slide">
            <div class="digital-creation-card">
              <div class="creation-image">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>"
                  width="500" height="300">
              </div>
              <div class="creation-content">
                <h3 class="creation-title"><?php the_title(); ?></h3>
                <div class="creation-desc">
                  <?php the_excerpt(); ?>
                </div>
                <?php if ($tags) : ?>
                <div class="creation-tags">
                  <?php foreach ($tags as $tag) : ?>
                  <span class="creation-tag"><?php echo esc_html($tag->name); ?></span>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <a href="<?php echo esc_url($button_url); ?>" class="button button-secondary">
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
          <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Digital Creations slider end -->

<?php get_footer(); ?>
