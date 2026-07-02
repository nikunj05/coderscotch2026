<?php
/**
 * Template Name: Hire Page Template
 *
 * @package coderscotch
 */

get_header();

// Helper function to handle title highlighting
function get_highlighted_title($field_name) {
    $title = get_field($field_name);
    if (!$title) return '';
    $title = str_replace('{', '<span class="highlight-text">', $title);
    $title = str_replace('}', '</span>', $title);
    return wp_kses($title, array('span' => array('class' => array())));
}
?>

<!-- Banner Section Start -->
<section class="common-banner-section hire-developer-banner-section position-relative z-index-0">
  <div class="container">
    <div class="tuvoc-hero-wrapper">
      <div class="connect-section tuvoc-hero-content" data-aos="fade-right" data-aos-duration="800">
        <div class="heading_section text-start">
          <h1 class="section-title tuvoc-hero-title">
            <?php echo get_highlighted_title('hire_banner_title'); ?>
          </h1>
          <?php if ($banner_desc = get_field('hire_banner_description')) : ?>
            <p class="section-description tuvoc-hero-desc">
              <?php echo wp_kses_post($banner_desc); ?>
            </p>
          <?php endif; ?>
        </div>
        
        <div class="tuvoc-stats-grid">
          <div class="tuvoc-stat-box">
            <h4>95%</h4>
            <p>Development Accuracy</p>
          </div>
          <div class="tuvoc-stat-box">
            <h4>99%</h4>
            <p>Utilization Transparency</p>
          </div>
          <div class="tuvoc-stat-box">
            <h4>85%</h4>
            <p>Increase in ROI</p>
          </div>
          <div class="tuvoc-stat-box">
            <h4>99%</h4>
            <p>Data Security</p>
          </div>
        </div>

        <div class="tuvoc-hero-actions d-flex align-items-center gap-4">
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-secondary">
            Get a Free Consultation
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="46" height="46" rx="10" fill="white"></rect>
              <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="#00BEC5"></path>
            </svg>
          </a>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary">
            Hire Developer
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="#00BEC5"></path>
              <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <div class="tuvoc-hero-image" data-aos="fade-left" data-aos-duration="800">
        <div class="tuvoc-blob"></div>
        <?php 
          $hero_img_data = get_field('hire_intro_image');
          $hero_img_url = '';
          if (is_array($hero_img_data) && isset($hero_img_data['url'])) {
              $hero_img_url = $hero_img_data['url'];
          } elseif (is_string($hero_img_data) && !empty($hero_img_data)) {
              $hero_img_url = $hero_img_data;
          } else {
              $hero_img_url = get_template_directory_uri() . '/assets/images/aboutus-banner-img.png';
          }
        ?>
        <img src="<?php echo esc_url($hero_img_url); ?>" alt="Hire Developer" style="max-width: 80%; margin: 0 auto; display: block; position: relative; z-index: 2;">
      </div>
    </div>
  </div>
</section>
<!-- Banner Section End -->


<!-- Expert Services Section Start -->
<section class="tuvoc-services-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="tuvoc-sticky-sidebar" data-aos="fade-right" data-aos-duration="800">
          <h2 class="tuvoc-services-title">
            <?php echo get_highlighted_title('hire_services_title'); ?>
          </h2>
          <?php if ($services_desc = get_field('hire_services_description')) : ?>
            <p class="tuvoc-services-desc">
              <?php echo wp_kses_post($services_desc); ?>
            </p>
          <?php endif; ?>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="tuvoc-btn-primary">Connect With Developer</a>
        </div>
      </div>
      <div class="col-lg-8">
        <?php if (have_rows('hire_services_list')) : ?>
          <div class="tuvoc-services-list" data-aos="fade-up" data-aos-duration="800">
            <?php while (have_rows('hire_services_list')) : the_row(); ?>
              <div class="tuvoc-service-card">
                <h3 class="tuvoc-service-card-title"><?php the_sub_field('title'); ?></h3>
                <p class="tuvoc-service-card-desc"><?php the_sub_field('description'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Expert Services Section End -->

<!-- Hiring Models Section Start -->
<section class="tuvoc-engagement-section">
  <div class="container">
    <div class="tuvoc-engagement-header">
      <h2><?php echo get_highlighted_title('hiring_models_title'); ?></h2>
    </div>

    <!-- Process Flow -->
    <?php if (have_rows('hiring_process_steps')) : ?>
      <div class="hiring-process-flow">
        <div class="process-line"></div>
        <?php while (have_rows('hiring_process_steps')) : the_row(); ?>
          <div class="process-step">
            <div class="step-marker">
              <span class="step-number"><?php the_sub_field('step_number'); ?></span>
            </div>
            <h3 class="step-title"><?php the_sub_field('step_title'); ?></h3>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <!-- Hiring Models Cards -->
    <?php if (have_rows('hiring_models_list')) : ?>
      <div class="row mt-5 pt-4">
        <?php while (have_rows('hiring_models_list')) : the_row(); ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="tuvoc-engagement-card" data-aos="fade-up" data-aos-duration="800">
              <div class="tuvoc-engagement-icon">
                <?php if ($icon = get_sub_field('icon')) : ?>
                  <img src="<?php echo esc_url($icon); ?>" alt="<?php the_sub_field('title'); ?>" width="60" height="60" style="object-fit: contain;">
                <?php endif; ?>
              </div>
              <h3 class="tuvoc-engagement-title"><?php the_sub_field('title'); ?></h3>
              <hr class="tuvoc-engagement-divider">
              <div class="tuvoc-engagement-desc">
                <?php 
                  $desc = get_sub_field('description'); 
                  echo '<p>' . wp_kses_post($desc) . '</p>';
                ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php 
    $cta_text = get_field('hiring_cta_text');
    $cta_link = get_field('hiring_cta_link');
    $cta_subtitle = 'Partner with Coder Scotch to design, build, and scale custom applications that simplify operations, improve user experience, and support long-term business growth.';
    if ($cta_text && $cta_link) : ?>
      <div class="industry-custom-cta mt-5">
        <div class="cta-glow-1"></div>
        <div class="cta-glow-2"></div>
        <div class="cta-flex-container">
          <div class="cta-text-side">
            <h2 class="cta-main-title" data-aos="fade" data-aos-duration="800">
              <?php echo esc_html($cta_text); ?>
            </h2>
            <p class="cta-sub-title"><?php echo wp_kses_post($cta_subtitle); ?></p>
          </div>
          <div class="cta-button-side" data-aos="fade" data-aos-duration="800">
            <a href="<?php echo esc_url($cta_link); ?>" class="cta-premium-btn">
              Contact Us
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00BEC5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- Hiring Models Section End -->

<!-- FAQ Section Start -->
<?php if (have_rows('faq_list')) : ?>
<section class="faq-accordion-section hire-page-faq section-space-tb">
  <div class="container">
    <div class="heading_section text-center">
      <h2 class="section-title">
        <?php echo get_highlighted_title('faq_title'); ?>
      </h2>
      <?php if ($faq_desc = get_field('faq_description')) : ?>
        <p class="section-description">
          <?php echo wp_kses_post($faq_desc); ?>
        </p>
      <?php endif; ?>
    </div>

    <div class="faq-accordion" id="hirePageFAQ">
      <?php 
      $f = 0;
      while (have_rows('faq_list')) : the_row(); 
        $f++;
        $unique_id = 'collapse' . $f;
        $heading_id = 'heading' . $f;
      ?>
        <div class="accordion-item <?php echo ($f === 1) ? 'open' : ''; ?>">
          <h2 class="accordion-header" id="<?php echo $heading_id; ?>">
            <button class="accordion-button <?php echo ($f === 1) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse"
              data-bs-target="#<?php echo $unique_id; ?>" aria-expanded="<?php echo ($f === 1) ? 'true' : 'false'; ?>" aria-controls="<?php echo $unique_id; ?>">
              <?php printf('%02d. %s', $f, esc_html(get_sub_field('question'))); ?>
              <span class="accordion-icon"></span>
            </button>
          </h2>
          <div id="<?php echo $unique_id; ?>" class="accordion-collapse collapse <?php echo ($f === 1) ? 'show' : ''; ?>" aria-labelledby="<?php echo $heading_id; ?>"
            data-bs-parent="#hirePageFAQ">
            <div class="accordion-body">
              <?php echo wp_kses_post(get_sub_field('answer')); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- FAQ Section End -->
<?php
get_footer();
?>