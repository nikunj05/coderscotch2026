<?php /* Template Name: Services Page Template */
get_header();
?>
<!-- Banner Section Start -->
  <section class="common-banner-section service-listing-banner position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content">
        <div class="connect-section">
          <div class="heading_section text-center">
            <h1 class="section-title">
              <?= get_field('solutions_title'); ?>
            </h1>
            <p class="section-description">
              At CoderScotch, we combine passion and precision to deliver outstanding digital solutions. <br>
              Our commitment to excellence drives us to exceed expectations.
            </p>

          </div>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary mx-auto">
            Speak to our experts
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
        <div class="service-listing-technology-section technologies-use-section">
          <div class="technologies-tab-details">
            <div class="technologies-tab-content">
              <div class="technologies-list">
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/flutter-icon.svg" width="25" height="30"
                      alt="Flutter Development Logo" />
                  </div>
                  <div class="technologies-items-title">Flutter</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/android-icon.svg" width="30" height="30"
                      alt="Android Development Logo" />
                  </div>
                  <div class="technologies-items-title">Android</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/apple-icon.svg" width="26" height="30"
                      alt="iOS App Development Logo" />
                  </div>
                  <div class="technologies-items-title">IOS</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/react-icon.svg" width="30" height="30"
                      alt="Flutter Cross-Platform App Development Logo" />
                  </div>
                  <div class="technologies-items-title">React Native</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/jscript-iocn.svg" width="30" height="30"
                      alt="JavaScript Programming Language Logo" />
                  </div>
                  <div class="technologies-items-title">J. Script</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/react-icon.svg" width="30" height="30"
                      alt="React Frontend Framework Logo" />
                  </div>
                  <div class="technologies-items-title">React</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/angular-icon.svg" width="30" height="30"
                      alt="Angular Frontend Framework Logo" />
                  </div>
                  <div class="technologies-items-title">Angular</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/word-press-icon.svg" width="30" height="30"
                      alt="WordPress CMS Logo" />
                  </div>
                  <div class="technologies-items-title">WordPress</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/next-js-icon.svg" width="30" height="30"
                      alt="Next.js React Framework Logo" />
                  </div>
                  <div class="technologies-items-title">Next.js</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/bootstrap-icon.svg" width="38" height="30"
                      alt="Bootstrap CSS Framework Logo" />
                  </div>
                  <div class="technologies-items-title">Bootstrap</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/laravel-icon.svg" width="30" height="30"
                      alt="Laravel PHP Framework Logo" />
                  </div>
                  <div class="technologies-items-title">Laravel</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/adobe-xd-icon.svg" width="31" height="30"
                      alt="Adobe XD UI/UX Design Tool Logo" />
                  </div>
                  <div class="technologies-items-title">Adobe XD</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/figma-icon.svg" width="20" height="30"
                      alt="Figma UI/UX Design Tool Logo" />
                  </div>
                  <div class="technologies-items-title">Figma</div>
                </div>
                <div class="technologies-items d-flex">
                  <div class="technologies-items-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technologies-icon/adobe-illustrator-icon.svg" width="30" height="30"
                      alt="Adobe Illustrator Design Tool Logo" />
                  </div>
                  <div class="technologies-items-title">Illustrator</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->
  <!-- service listing all service section start -->
  <section class="service-listing-all-service-section section-space-tb">
    <div class="container">
      <div class="all-service-card-listing">
        <?php $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    'orderby'        => 'ID',
                    'order'          => 'ASC',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $the_query = new WP_Query($args);
        ?>
                <?php
                $num = 1;
                while ($the_query->have_posts()) : $the_query->the_post();
                    $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                    <a href="<?= the_permalink(); ?>" class="service-card-item">
                      <div class="service-card-header">
                        <div class="service-icon-box">
                          <img src="<?= $url_img ?>" alt="<?= the_title() ?>" width="40" height="40">
                        </div>
                        <div class="section-tag-button">
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
                        </div>
                      </div>
                      <div class="service-card-body">
                        <h3 class="service-title"><?= the_title() ?></h3>
                        <p class="service-description">
                          <?php 
                            $content = get_the_content();
                            echo strip_tags($content);
                          ?>
                        </p>
                      </div>
                    </a>
                    <?php endwhile;
                wp_reset_postdata();
                ?>
      </div>
    </div>
  </section>
  <!-- service listing all service section end -->
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
                ?>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                    $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); 
                ?>
          <div class="swiper-slide">
            <div class="digital-creation-card">
              <div class="creation-image">
                <img src="<?= $url_img ?>" alt="<?= the_title(); ?>" width="500" height="300">
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
<?php get_footer(); ?>

</html>