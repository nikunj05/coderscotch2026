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
            <?php echo esc_html(get_field('prod_eng_banner_btn_label') ?: 'Speak to our expert'); ?>
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

  <!-- Product Engineering Services section start -->
  <section class="healthcare-compliance-section engineering-services-section section-space-t section-space-b">
    <div class="container">
      <div class="heading_section text-center mb-5">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          <?php 
          $eng_title = get_field('engineering_services_title');
          if ($eng_title) {
              $eng_title = str_replace('{', '<span class="highlight-text">', $eng_title);
              $eng_title = str_replace('}', '</span>', $eng_title);
              echo wp_kses($eng_title, array('span' => array('class' => array())));
          } else {
              echo 'Our <span class="highlight-text"> Engineering Services </span>';
          }
          ?>
        </h2>
        <?php if ($eng_desc = get_field('engineering_services_description')) : ?>
          <p class="section-description" data-aos="fade" data-aos-duration="800">
            <?php echo wp_kses_post($eng_desc); ?>
          </p>
        <?php endif; ?>
      </div>
      <?php if (have_rows('engineering_services')) : ?>
        <div class="light-compliance-grid">
          <?php while (have_rows('engineering_services')) : the_row(); ?>
            <div class="light-compliance-card">
              <div class="card-icon">
                <?php if ($icon = get_sub_field('icon')) : ?>
                  <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr(wp_strip_all_tags(get_sub_field('title'))); ?>" width="30" height="30" />
                <?php endif; ?>
              </div>
              <div class="card-content">
                <h3 class="light-compliance-card-title">
                  <?php 
                    $title = get_sub_field('title');
                    $title = str_replace('{', '<span class="highlight-text">', $title);
                    $title = str_replace('}', '</span>', $title);
                    echo wp_kses($title, array('span' => array('class' => array())));
                  ?>
                </h3>
                <div class="light-compliance-card-description">
                  <?php echo wp_kses_post(get_sub_field('description')); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
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
          <h2 class="connect-title">
            <?php 
            $connect_label = get_field('connect_with_us_label');
            echo $connect_label ? esc_html($connect_label) : 'Connect With Us'; 
            ?>
          </h2>
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
   

  <!-- MVP Technologies Section Start -->


  <section class="mobapp-we-are-specialized technologies-use-section section-space-t">
    <div class="technologies-use-inner max-width-95">
      <div class="technologies-tab-details mvp-tech-details">
        <div class="container">
          <div class="technologies-tab-content section-space80-t">
            
            <div class="heading_section text-center mb-5">
              <h2 class="section-title">
                <?php 
                $tech_title = get_field('specialized_tech_title');
                if ($tech_title) {
                    $tech_title = str_replace('{', '<span class="highlight-text">', $tech_title);
                    $tech_title = str_replace('}', '</span>', $tech_title);
                    echo wp_kses($tech_title, array('span' => array('class' => array())));
                } else {
                    echo 'Technologies We Use For <span class="highlight-text">MVP Development</span>';
                }
                ?>
              </h2>
              <?php if ($tech_desc = get_field('specialized_tech_description')) : ?>
                <p class="section-description">
                  <?php echo wp_kses_post($tech_desc); ?>
                </p>
              <?php else: ?>
                <p class="section-description">
                  We choose the technology stack based on your product goals, timeline, budget, scalability needs, and long-term roadmap. Our focus is not only to launch fast, but to build an MVP that can evolve into a stable full product.
                </p>
              <?php endif; ?>
            </div>

            <div class="tech-list-wrapper">
              <?php
              $tech_categories = [
                [
                  'name' => 'Frontend',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>',
                  'techs' => ['React.js', 'Next.js', 'Vue.js', 'Angular', 'Tailwind CSS']
                ],
                [
                  'name' => 'Backend',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg>',
                  'techs' => ['Laravel', 'Node.js', 'Python', 'Django', 'FastAPI']
                ],
                [
                  'name' => 'Mobile',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>',
                  'techs' => ['React Native', 'Flutter']
                ],
                [
                  'name' => 'Database',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>',
                  'techs' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Firebase', 'Supabase', 'Redis']
                ],
                [
                  'name' => 'Cloud & DevOps',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>',
                  'techs' => ['AWS', 'DigitalOcean', 'Vercel', 'Google Cloud', 'Docker', 'GitHub Actions', 'CI/CD']
                ],
                [
                  'name' => 'AI & Automation',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>',
                  'techs' => ['OpenAI', 'LLM integrations', 'AI agents', 'LangChain', 'custom ML models', 'automation APIs']
                ],
                [
                  'name' => 'Payments & Integrations',
                  'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>',
                  'techs' => ['Stripe', 'PayPal', 'Razorpay', 'Apple Pay', 'Checkout.com', 'third-party APIs']
                ]
              ];

              echo '<div class="tech-list-container">';
              foreach ($tech_categories as $cat):
              ?>
                <div class="tech-list-row">
                  <div class="tech-list-left">
                    <h3 class="tech-list-title"><?php echo $cat['name']; ?></h3>
                  </div>
                  <div class="tech-list-right">
                    <?php 
                      $count = count($cat['techs']);
                      foreach ($cat['techs'] as $index => $tech): 
                    ?>
                      <span class="tech-list-item"><?php echo $tech; ?></span>
                      <?php if ($index < $count - 1): ?>
                        <span class="tech-list-divider">|</span>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MVP Technologies Section End -->
   

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
            <?php 
            $dc_title = get_field('digital_creations_section_title');
            if ($dc_title) {
                $dc_title = str_replace('{', '<span class="highlight-text">', $dc_title);
                $dc_title = str_replace('}', '</span>', $dc_title);
                echo wp_kses($dc_title, array('span' => array('class' => array())));
            } else {
                echo 'Showcasing Our <span class="highlight-text"> Finest Digital Creations </span>';
            }
            ?>
          </h2>
          <p class="section-description mb-0" data-aos="fade" data-aos-duration="800">
            <?php 
            $dc_desc = get_field('digital_creations_section_description');
            if ($dc_desc) {
                echo wp_kses_post($dc_desc);
            } else {
                echo 'We help businesses reinvent and accelerate their digital identity by providing premium software <br> development solutions in Europe and around different parts of the world.';
            }
            ?>
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
          if (isset($post->post_name)) {
              if ($post->post_name === 'custom-mobile-app-development-company') {
                  $args['tax_query'] = array(
                      array(
                          'taxonomy' => 'our_work_cat',
                          'field'    => 'name',
                          'terms'    => 'Mobile Application Development',
                      ),
                  );
              } else if ($post->post_name === 'saas-product-development-company') {
                  $args['tax_query'] = array(
                      array(
                          'taxonomy' => 'our_work_cat',
                          'field'    => 'name',
                          'terms'    => 'SAAS',
                      ),
                  );
              } else if ($post->post_name === 'web-development') {
                  $args['tax_query'] = array(
                      array(
                          'taxonomy' => 'our_work_cat',
                          'field'    => 'name',
                          'terms'    => 'Web Application Development',
                      ),
                  );
              }
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
            <a target="_blank" href="<?php echo esc_url($button_url); ?>" class="digital-creation-card">
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
                
              </div>
            </a>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>

      <!-- Load More / CTA Button -->
      <div class="case-studies-load-more text-center">
        <a href="<?php echo esc_url(get_permalink( get_page_by_path('our-work') )); ?>" class="button button-secondary mx-auto">
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
  </section>
  <!-- Digital Creations slider end -->

  <!-- Hiring Models Section Start -->
  <?php 
  $hiring_post_id = get_the_ID();
  ?>
  <section class="hiring-models-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $hiring_title = get_field('solutions_hiring_title', $hiring_post_id);
          if ($hiring_title) {
              $hiring_title = str_replace('{', '<span class="highlight-text">', $hiring_title);
              $hiring_title = str_replace('}', '</span>', $hiring_title);
              echo wp_kses($hiring_title, array('span' => array('class' => array())));
          } else {
              echo 'Our <span class="highlight-text"> Hiring Models </span>';
          }
          ?>
        </h2>
        <?php 
        $hiring_desc = get_field('solutions_hiring_description', $hiring_post_id);
        if ($hiring_desc) : 
            $hiring_desc = str_replace('{', '<span class="highlight-text">', $hiring_desc);
            $hiring_desc = str_replace('}', '</span>', $hiring_desc);
            ?>
            <p class="section-description">
              <?php echo wp_kses_post($hiring_desc); ?>
            </p>
        <?php else : ?>
            <p class="section-description">
              Choose the engagement model that best fits your product requirements, budget, and timeline. <br>
              Our flexible hiring models ensure seamless collaboration, transparent pricing, and maximum efficiency.
            </p>
        <?php endif; ?>
      </div>

      <?php if (have_rows('solutions_hiring_list', $hiring_post_id)) : ?>
      <div class="hiring-models-grid">
        <?php while (have_rows('solutions_hiring_list', $hiring_post_id)) : the_row(); ?>
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

      <?php if ($cta_text = get_field('solutions_hiring_cta_text', $hiring_post_id)) : ?>
      <div class="hiring-cta-wrapper text-center mt-5">
        <a href="<?php echo esc_url(get_field('solutions_hiring_cta_link', $hiring_post_id) ?: get_permalink( get_page_by_path('contact-us') )); ?>" class="button button-primary mx-auto">
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

  <!-- What Happens After You Reach Out Section Start -->
  <section class="what-happens-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $process_title = get_field('process_section_title');
          if ($process_title) {
              $process_title = str_replace('{', '<span class="highlight-text">', $process_title);
              $process_title = str_replace('}', '</span>', $process_title);
              echo wp_kses($process_title, array('span' => array('class' => array())));
          } else {
              echo 'What Happens After You <span class="highlight-text"> Reach Out </span>';
          }
          ?>
        </h2>
        <?php 
        $process_desc = get_field('process_section_description');
        if ($process_desc) : 
            $process_desc = str_replace('{', '<span class="highlight-text">', $process_desc);
            $process_desc = str_replace('}', '</span>', $process_desc);
            ?>
            <p class="section-description">
              <?php echo wp_kses_post($process_desc); ?>
            </p>
        <?php else : ?>
            <p class="section-description">
              Here's how we turn your SaaS idea into a subscription-ready MVP — through a clear, transparent process focused on speed, scalability, and real user validation.
            </p>
        <?php endif; ?>
      </div>

      <?php 
      $process_steps = get_field('process_steps_repeater');
      if ($process_steps) : ?>
        <div class="process-steps-grid">
          <?php $s = 1; foreach ($process_steps as $i => $step) : 
              $step_title = !empty($step['step_title']) ? $step['step_title'] : get_post_meta(get_the_ID(), 'process_steps_repeater_' . $i . '_step_title', true);
              $step_desc = !empty($step['step_description']) ? $step['step_description'] : get_post_meta(get_the_ID(), 'process_steps_repeater_' . $i . '_step_description', true);
          ?>
            <div class="process-step-item">
              <div class="step-number-circle"><?php echo str_pad($s, 2, '0', STR_PAD_LEFT); ?></div>
              <h3 class="step-item-title"><?php echo esc_html($step_title); ?></h3>
              <p class="step-item-desc"><?php echo esc_html($step_desc); ?></p>
            </div>
          <?php $s++; endforeach; ?>
        </div>
      <?php else : ?>
        <!-- Hardcoded fallback steps if ACF is not filled -->
        <div class="process-steps-grid">
          <div class="process-step-item">
            <div class="step-number-circle">01</div>
            <h3 class="step-item-title">Discovery & Business Context</h3>
            <p class="step-item-desc">
              Within one business day, we contact you to schedule a short discovery call. Before the meeting, you'll receive a focused questionnaire covering your target users, core problem, pricing model, and integration needs. This allows us to quickly understand your business and technical goals.
            </p>
          </div>
          <div class="process-step-item">
            <div class="step-number-circle">02</div>
            <h3 class="step-item-title">MVP Blueprint & Product Scope</h3>
            <p class="step-item-desc">
              Based on your input, we prepare a tailored SaaS MVP Blueprint that outlines your core features, user roles, data flows, and system architecture. You receive a clear functional scope designed for fast validation and long-term scalability.
            </p>
          </div>
          <div class="process-step-item">
            <div class="step-number-circle">03</div>
            <h3 class="step-item-title">Walkthrough & Project Proposal</h3>
            <p class="step-item-desc">
              During the call, we review the Blueprint together, refine priorities, and align on the product direction. You then receive a complete project proposal with milestones, responsibilities, and delivery stages — giving you full clarity on how your SaaS MVP will be built and launched.
            </p>
          </div>
        </div>
      <?php endif; ?>

      <?php 
      $cta_text = get_field('process_cta_text') ?: 'START MY MVP';
      $cta_link = get_field('process_cta_link') ?: get_permalink(get_page_by_path('contact-us'));
      ?>
      <div class="process-cta-wrapper text-center">
        <a href="<?php echo esc_url($cta_link); ?>" class="button button-secondary mx-auto">
          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="46" height="46" rx="10" fill="white"></rect>
            <path
              d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
              fill="#00BEC5"></path>
          </svg>
          <?php echo esc_html($cta_text); ?>
        </a>
      </div>
    </div>
  </section>
  <!-- What Happens After You Reach Out Section End -->

  <!-- FAQ Section Start -->
  <section class="faq-accordion-section section-space-tb">
    <div class="container">
      <div class="heading_section text-center">
        <h2 class="section-title">
          <?php 
          $faq_title = get_field('product_faq_title');
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
          $faq_desc = get_field('product_faq_description');
          echo $faq_desc ? wp_kses_post($faq_desc) : 'Find answers to common queries about our product engineering process.'; 
          ?>
        </p>
      </div>

      <?php if (have_rows('product_faq_list')) : ?>
      <div class="faq-accordion" id="productFAQ">
        <?php $f = 1; while (have_rows('product_faq_list')) : the_row(); ?>
          <div class="accordion-item <?php echo $f == 1 ? 'open' : ''; ?>">
            <h2 class="accordion-header" id="heading<?php echo $f; ?>">
              <button class="accordion-button <?php echo $f == 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse<?php echo $f; ?>" aria-expanded="<?php echo $f == 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $f; ?>">
                <?php echo str_pad($f, 2, '0', STR_PAD_LEFT); ?>. <?php the_sub_field('question'); ?>
                <span class="accordion-icon"></span>
              </button>
            </h2>
            <div id="collapse<?php echo $f; ?>" class="accordion-collapse collapse <?php echo $f == 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $f; ?>"
              data-bs-parent="#productFAQ">
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
