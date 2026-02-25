<?php /* Template Name: Our Work Page Template */
get_header();
?>
<!-- Banner Section Start -->
  <section class="common-banner-section case-studies-listing-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content">
        <div class="connect-section">
          <div class="heading_section text-center">
            <h1 class="section-title" data-aos="fade" data-aos-duration="800">
              Successfully executed
              <span class="highlight-text"> Projects </span>
            </h1>
            <p class="section-description" data-aos="fade" data-aos-duration="800">
             <?= get_post_meta($post->ID, '_custom_text', true); ?>
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
        <div class="case-studies-listing-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies-listing-banner-img.svg" alt="case studies banner img" width="1170"
            height="277" class="case-studies-listing-banner-img">
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->
  <!-- Case Studies Listing Start -->
  <section class="case-studies-listing-section section-space-t section-space-b">
    <div class="container">
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
                    $card_class = ($count % 2 == 0) ? 'case-study-card small-card' : 'case-study-card big-card';
                ?>
          <div class="<?php echo $card_class; ?>">
            <div class="case-study-card-tags">
              <div class="case-study-card-tags-inner">
                <span class="case-study-card-tag">UI/UX Design</span>
                <span class="case-study-card-tag">App Development</span>
                <span class="case-study-card-tag">Online Shopping</span>
              </div>
            </div>
            <div class="case-study-img-wrapper">
              <img src="<?=$url_img?>" width="646" height="230"
                alt="<?=the_title();?>" class="case-study-card-img">
              <div class="case-study-card-overlay">
                <a href="<?= get_field("button_url", $id ); ?>" class="case-study-link-icon">
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
          </div>
          <?php 
                $count++;
                endwhile;
                wp_reset_postdata(); 
            ?>
        </div>
        <!-- Load More Button -->
        <div class="case-studies-load-more text-center" id="case-studies-load-more">
          <a href="#" class="button button-secondary mx-auto">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="46" height="46" rx="10" fill="white"></rect>
              <path
                d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                fill="#00BEC5"></path>
            </svg>
            Load More Projects
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Case Studies Listing End -->
<?php get_footer(); ?>