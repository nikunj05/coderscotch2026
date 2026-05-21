<?php /* Template Name: About us Page Template */
get_header();

$featured_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
if (!$featured_img) {
    $alt_text = 'No Image';
}
?>
 <!-- Banner Section Start -->
  <section class="common-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content">
        <div class="connect-section">
          <div class="heading_section text-center">
            <h1 class="section-title" data-aos="fade" data-aos-duration="800">
              About
              <span class="highlight-text"> Coder Scotch </span>
            </h1>
            <p class="section-description" data-aos="fade" data-aos-duration="800">
             <?= strip_tags(get_the_content(), '<a><strong><em><ul><ol><li><br>'); ?>
            </p>

          </div>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary mx-auto">
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
        <?php if($featured_img) {?>
        <div class="common-banner-bottom-image">
          <img src="<?= $featured_img ?>" alt="<?= get_the_title() ?>" width="1184" height="286"
            class="common-banner-bottom-image">
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->
  <!-- Coder Scotch Journey Section Start -->
  <section class="section-space-tb coder-journey-section">
    <div class="container">
      <div class="heading_section">
        <h2 class="section-title" data-aos="fade" data-aos-duration="800">
          <?= get_field('title'); ?> <br>
          <span class="highlight-text"> <?= get_field('title_2'); ?> </span>
        </h2>
        <p class="section-description" data-aos="fade" data-aos-duration="800">
          <?= get_field('info'); ?>
        </p>
      </div>
      
      <div class="our-achievement-section">
        <div class="achievement-container">
            <?php
            if (have_rows('award_section')) :
            while (have_rows('award_section')) : the_row(); ?>
          <div class="achievement-box-img">
            <div class="achievement-item">
              <span class="achievement-number"><?= get_sub_field('numbers'); ?></span>
              <span class="achievement-text"><?= get_sub_field('award_box_title'); ?></span>
            </div>
            <div class="achievement-item-icon">
              <img src="<?php the_sub_field('icon') ?>" alt="<?= get_sub_field('award_box_title'); ?>" width="165" height="154"
                class="achievement-icon">
            </div>
          </div>
          <?php endwhile;
            endif;
            ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Coder Scotch Journey Section End -->
<!-- Mission & Vision Section start -->
  <section class="our-projects-service section-space-tb">
    <div class="container">
      <div class="our-projects-service-wrapper">
        <div class="our-projects-service-list">
          <div class="our-projects-service-item">
            <div class="our-projects-service-item-inner">
              <div class="our-projects-service-item-content">
                <h3 class="our-projects-service-item-title">Our Mission</h3>
                <p class="our-projects-service-item-description"><?= get_field('our_mission'); ?></p>
              </div>
            </div>
          </div>

        </div>
        <div class="our-projects-service-list">
          <div class="our-projects-service-item">
            <div class="our-projects-service-item-inner">
              <div class="our-projects-service-item-content">
                <h3 class="our-projects-service-item-title">Our Vision</h3>
                <p class="our-projects-service-item-description"><?= get_field('our_vision'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Mission & Vision Section end -->

  <!-- Our Values section start -->
  <section class="our-values-section">
    <div class="our-values-inner max-width-95">
      <div class="values-outer-box">

        <div class="values-timeline-container">
          <div class="heading_section">
            <h2 class="section-title">
              <?= get_field('our_values_title'); ?>
            </h2>
            <p class="section-description">
              <?= get_field('our_values_details'); ?>
            </p>
          </div>
          <svg class="values-svg-path" width="1159" height="337" viewBox="0 0 1159 337" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path class="main-path"
              d="M2.50011 316.998C77.0001 322.5 156.353 359.573 242.5 305.498C358 232.998 390.886 222.59 492 232.999C628 246.999 646.5 232.999 807.484 141.838C921.102 77.5002 977.903 121.943 1055.5 77.5002C1110.5 46.0002 1108.5 32.0002 1156.5 2.50024"
              stroke="#00BEC5" stroke-width="5" stroke-linecap="round" />
          </svg>

          <div class="values-flex-wrapper">
            <div class="values-mobile-line">
              <div class="values-mobile-line-fill"></div>
            </div>
            <!-- Milestones positioned via Flexbox -->
            <?php
            $count = 1;
            if (have_rows('our_process')) :
            while (have_rows('our_process')) : the_row(); 

            ?>
            <div class="value-milestone value-milestone-<?php echo $count; ?>">
              <div class="milestone-dot">
                <img src="<?php the_sub_field('icon') ?>" alt="<?php the_sub_field('title') ?>">
              </div>
              <div class="milestone-content">
                <h4 class="milestone-title"><?php the_sub_field('title') ?></h4>
                <p class="milestone-description"><?php the_sub_field('description') ?>
                </p>
              </div>
            </div>
            <?php 
              $count++;
              endwhile;
            endif;
            ?>
            <div class="value-milestone value-milestone-5">
              <div class="milestone-dot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-values-icon5.svg" alt="Innovation">
              </div>
            </div>
          </div>

          <!-- Illustration -->
          <div class="values-illustration">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-value-shape.svg" width="147" height="311" alt="Illustration">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Values section end -->
  <!-- Technological Focus section start -->
  <section class="tech-focus-section section-space-tb">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="heading_section">
            <h2 class="section-title"><?= get_field('technology_focus_title'); ?></h2>
            <p class="section-description">
              <?= get_field('technology_focus_details'); ?>
            </p>
          </div>
          <div class="tech-main-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technological-focus-img.png" width=" 570" height="440" alt="Technological Focus"
              class="technological-focus-img">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="tech-feature-cards-stack">
            <?php
            if (have_rows('technology_focus_points')) :
            while (have_rows('technology_focus_points')) : the_row(); ?>
            <div class="tech-feature-card">
              <div class="card-icon-box">
                <img src="<?php the_sub_field('icon') ?>" width="40" height="40" alt="<?php the_sub_field('title') ?>">
              </div>
              <div class="card-content">
                <h4 class="tech-card-title"><?php the_sub_field('title') ?></h4>
                <p class="tech-card-description"><?php the_sub_field('details') ?></p>
              </div>
            </div>
            <?php endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Technological Focus section end -->
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
                if (have_rows('testmonials_repeater', 'options')) :
                    while (have_rows('testmonials_repeater', 'options')) : the_row(); ?>
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
                  <img src="<?= get_sub_field('client_photo'); ?>" width="40" height="40" alt="<?= get_sub_field('client_name'); ?>">
                </div>
              </div>
            </div>
            <?php endwhile;
                endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- client review section end -->
<?php get_footer(); ?>