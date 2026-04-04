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
    <div class="banner-section-content">
      <div class="connect-section">
        <div class="heading_section text-center">
          <h1 class="section-title">
            <?php echo get_highlighted_title('hire_banner_title'); ?>
          </h1>
          <?php if ($banner_desc = get_field('hire_banner_description')) : ?>
            <p class="section-description">
              <?php echo wp_kses_post($banner_desc); ?>
            </p>
          <?php endif; ?>
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
      <div class="hire-developer-banner-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hire-dev-banner-img1.svg" alt="hire dev banner img 1" width="250" height="236" class="hire-developer-banner-img hire-dev-img1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hire-dev-banner-img2.svg" alt="hire dev banner img 2" width="250" height="236" class="hire-developer-banner-img hire-dev-img2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hire-dev-banner-img3.svg" alt="hire dev banner img 3" width="250" height="236" class="hire-developer-banner-img hire-dev-img3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hire-dev-banner-img4.svg" alt="hire dev banner img 4" width="250" height="236" class="hire-developer-banner-img hire-dev-img4">
      </div>
    </div>
  </div>
</section>
<!-- Banner Section End -->

<!-- Hire Section Start -->
<section class="hire-react-section section-space-tb">
  <div class="container">
    <div class="heading_section text-left">
      <h2 class="section-title">
        <?php echo get_highlighted_title('hire_intro_title'); ?>
      </h2>
      <?php if ($intro_desc = get_field('hire_intro_description')) : ?>
        <p class="section-description">
          <?php echo wp_kses_post($intro_desc); ?>
        </p>
      <?php endif; ?>
    </div>

    <div class="hire-react-content">
      <div class="hire-react-img-wrapper">
        <?php if ($intro_img = get_field('hire_intro_image')) : ?>
            <img src="<?php echo esc_url($intro_img); ?>" alt="Hire Developer" class="hire-react-img"
              width="470" height="402">
        <?php endif; ?>
      </div>

      <?php if (have_rows('hire_intro_checklist')) : ?>
        <ul class="hire-react-checklist">
          <?php while (have_rows('hire_intro_checklist')) : the_row(); ?>
            <li class="hire-react-checklist-item">
              <span class="hire-react-check-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/checked-icon.svg" alt="check icon" width="28" height="28">
              </span>
              <span><?php the_sub_field('item_text'); ?></span>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Hire Section End -->

<!-- Expert Services Section Start -->
<section class="hire-services-section section-space-tb">
  <div class="container">

    <div class="heading_section text-center">
      <h2 class="section-title">
        <?php echo get_highlighted_title('hire_services_title'); ?>
      </h2>
      <?php if ($services_desc = get_field('hire_services_description')) : ?>
        <p class="section-description">
          <?php echo wp_kses_post($services_desc); ?>
        </p>
      <?php endif; ?>
    </div>

    <?php if (have_rows('hire_services_list')) : ?>
      <div class="hire-services-grid">
        <?php while (have_rows('hire_services_list')) : the_row(); ?>
          <div class="hire-service-card">
            <div class="hire-service-card-inner">
              <div class="hire-service-card-icon">
                <?php if ($icon = get_sub_field('icon')) : ?>
                    <img src="<?php echo esc_url($icon); ?>" alt="<?php the_sub_field('title'); ?>" width="32" height="32">
                <?php endif; ?>
              </div>
              <h3 class="hire-service-card-title"><?php the_sub_field('title'); ?></h3>
              <p class="hire-service-card-desc"><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- Expert Services Section End -->

<!-- Hiring Models Section Start -->
<section class="hiring-models-section section-space-tb">
  <div class="container">
    <div class="heading_section text-center">
      <h2 class="section-title">
        <?php echo get_highlighted_title('hiring_models_title'); ?>
      </h2>
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
      <div class="hiring-models-grid">
        <?php while (have_rows('hiring_models_list')) : the_row(); 
          $model_type = get_sub_field('model_type');
        ?>
          <div class="hiring-model-card <?php echo esc_attr($model_type); ?>-model">
            <div class="model-card-inner">
              <div class="model-icon">
                <?php if ($icon = get_sub_field('icon')) : ?>
                  <img src="<?php echo esc_url($icon); ?>" alt="<?php the_sub_field('title'); ?>" width="40" height="40">
                <?php endif; ?>
              </div>
              <h3 class="model-title"><?php the_sub_field('title'); ?></h3>
              <p class="model-desc"><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <?php 
    $cta_text = get_field('hiring_cta_text');
    $cta_link = get_field('hiring_cta_link');
    if ($cta_text && $cta_link) : ?>
      <div class="hiring-cta-wrapper text-center">
        <a href="<?php echo esc_url($cta_link); ?>" class="button button-primary mx-auto">
         <?php echo esc_html($cta_text); ?>
          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="url(#paint0_linear_507_314)"></path>
            <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white"></path>
            <defs>
              <linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571" gradientUnits="userSpaceOnUse">
                <stop stop-color="#00BEC5"></stop>
                <stop offset="1" stop-color="#43CEA2"></stop>
              </linearGradient>
            </defs>
          </svg>
        </a>
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