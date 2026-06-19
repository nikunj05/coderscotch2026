	<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coderscotch
 */

?>
<!-- footer section Start -->
<footer class="page-footer footer-contact-form position-relative section-space-t">
    <div class="container">
      <?php if ( ! is_page_template( 'template-parts/contact.php' ) && ! is_page_template( 'template-parts/hire_page.php' ) && ! is_page_template( 'template-parts/ai-services.php' ) ) : ?>
      <div class="connect-section section-space80-b">
        <div class="heading_section text-center">
          <h2 class="section-title" data-aos="fade" data-aos-duration="800">
            <?=get_field('launch_your_vision_with_us', 'options');?><br>
            <span class="highlight-text"><?=get_field('connect_collaborate_innovate', 'options');?></span>
          </h2>
          <p class="section-description" data-aos="fade" data-aos-duration="800">
           <?=get_field('join_coderscotch', 'options');?>
          </p>
        </div>
        <div class="contact-with-form-section home-page-contact-form">
          <div class="contact-form-wrapper">
            <?php echo do_shortcode('[contact-form-7 id="e7145ac" title="Contact Us - Footer"]'); ?>
          </div>
        </div>
      </div>
      
      <?php endif; ?>
      <!-- FAQ Section End -->
      <div class="office-address-wrapper">
        <div class="office-address-container">
          <?php while (have_rows('location', 'options')) : the_row(); ?>
          <div class="office-box">
            <h3 class="office-title">
              <img src="<?php the_sub_field('flag_image', 'options') ?>" alt="<?php the_sub_field('title', 'options') ?>"><?php the_sub_field('title', 'options') ?>
            </h3>
            <ul class="office-details-list">
              <li>
                <span class="icon-wrapper">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12 13.4375C13.7259 13.4375 15.125 12.0384 15.125 10.3125C15.125 8.58661 13.7259 7.1875 12 7.1875C10.2741 7.1875 8.875 8.58661 8.875 10.3125C8.875 12.0384 10.2741 13.4375 12 13.4375Z"
                      fill="#00BEC5" />
                    <path
                      d="M12 22C16 16.5 20 14.07 20 10.25C20 5.69 16.41 2 12 2C7.59 2 4 5.69 4 10.25C4 14.07 8 16.5 12 22ZM12 4C15.31 4 18 6.8 18 10.25C18 12.92 14.95 15.13 12 19.34C9.04 15.13 6 12.92 6 10.25C6 6.8 8.69 4 12 4Z"
                      fill="#00BEC5" />
                  </svg>
                </span>
                <a class="office-location-action"
                  href="https://maps.google.com/?q=<?php the_sub_field('address', 'options') ?>" target="_blank">
                  <?php the_sub_field('address', 'options') ?>
                </a>
              </li>
              <li>
                <span class="icon-wrapper">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20 15.5C18.75 15.5 17.55 15.3 16.43 14.92C16.08 14.81 15.69 14.9 15.41 15.18L13.21 17.38C10.38 15.94 8.06 13.63 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.5C21 15.95 20.55 15.5 20 15.5ZM19 12H21C21 7.03 16.97 3 12 3V5C15.86 5 19 8.14 19 12ZM15 12H17C17 9.24 14.76 7 12 7V9C13.66 9 15 10.34 15 12Z"
                      fill="#00BEC5" />
                  </svg>
                </span>
                <a class="office-location-action" href="tel:<?php the_sub_field('phone', 'options') ?>"><?php the_sub_field('phone', 'options') ?></a>
              </li>
              <li>
                <span class="icon-wrapper">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 18H4V8L12 13L20 8V18ZM12 11L4 6H20L12 11Z"
                      fill="#00BEC5" />
                  </svg>
                </span>
                <a class="office-location-action" href="mailto:info@coderscotch.com"><?php the_sub_field('email', 'options') ?></a>
              </li>
            </ul>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <div class="footer-inner">
      <div class="footer-inner-bottom">
        <div class="container">
          <div class="footer-bottom">
            <div class="row m-0">
              <div class="col-xl-7 footer-left-col">
                <div class="row">
                  <div class="col-md-6">
                    <div class="footer-logo-card">

                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coderscotch-footer-logo.png" alt="CoderScotch" class="footer-brand-logo"
                        width="244" height="23" />
                      <p class="footer-description">
                      	
                      </p>
                      <ul class="footer-card-link-list">
                        <li>
                          <a href="<?php echo get_permalink( get_page_by_path('about-us') ); ?>">
                            <div class="footer-card-link-icon d-flex">
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1528_5811)">
                                  <path
                                    d="M2.26056 9C2.26056 6.17157 2.26056 4.75736 3.13924 3.87868C4.01792 3 5.43213 3 8.26056 3H11.2606C14.089 3 15.5032 3 16.3819 3.87868C17.2606 4.75736 17.2606 6.17157 17.2606 9C17.2606 11.8284 17.2606 13.2427 16.3819 14.1213C15.5032 15 14.089 15 11.2606 15H8.26056C5.43213 15 4.01792 15 3.13924 14.1213C2.26056 13.2427 2.26056 11.8284 2.26056 9Z"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path
                                    d="M9.01056 7.5C9.01056 6.67157 8.33901 6 7.51056 6C6.68213 6 6.01056 6.67157 6.01056 7.5C6.01056 8.32845 6.68213 9 7.51056 9C8.33901 9 9.01056 8.32845 9.01056 7.5Z"
                                    stroke="#00BEC5" stroke-linecap="round" stroke-linejoin="round" />
                                  <path
                                    d="M10.5106 12C10.5106 10.3432 9.16738 9 7.51056 9C5.85370 9 4.51056 10.3432 4.51056 12"
                                    stroke="#00BEC5" stroke-linecap="round" stroke-linejoin="round" />
                                  <path d="M12.0106 6.75H15.0106" stroke="#00BEC5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path d="M12.0106 9H15.0106" stroke="#00BEC5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_1528_5811">
                                    <rect width="18" height="18" fill="white" transform="translate(0.760559)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <?= get_the_title(96); ?>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo get_permalink( get_page_by_path('explore-ai') ); ?>">
                            <div class="footer-card-link-icon d-flex">
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1528_5821)">
                                  <path
                                    d="M9.01543 15.75H7.96465C5.27572 15.75 3.93125 15.75 3.09590 14.8988C2.26056 14.0476 2.26056 12.6775 2.26056 9.93749C2.26056 7.19747 2.26056 5.82744 3.09590 4.97622C3.93125 4.125 5.27572 4.125 7.96465 4.125H10.8167C13.5056 4.125 14.8501 4.125 15.6855 4.97622C16.3282 5.63114 16.4764 6.59318 16.5106 8.24999"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round" />
                                  <path
                                    d="M15.7731 15.0175L17.2604 16.5M16.5502 13.1449C16.5502 11.6842 15.366 10.5 13.9053 10.5C12.4445 10.5 11.2604 11.6842 11.2604 13.1449C11.2604 14.6057 12.4445 15.7898 13.9053 15.7898C15.366 15.7898 16.5502 14.6057 16.5502 13.1449Z"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path
                                    d="M12.7604 4.125L12.6859 3.8932C12.3146 2.73817 12.129 2.16065 11.687 1.83032C11.2451 1.5 10.6581 1.5 9.48403 1.5H9.28671C8.11266 1.5 7.52564 1.5 7.08371 1.83032C6.64177 2.16065 6.45614 2.73817 6.08488 3.8932L6.01038 4.125"
                                    stroke="#00BEC5" stroke-width="1.5" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_1528_5821">
                                    <rect width="18" height="18" fill="white" transform="translate(0.760559)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <?= get_the_title(1842); ?>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo get_permalink( get_page_by_path('our-work') ); ?>">
                            <div class="footer-card-link-icon d-flex">
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1528_5829)">
                                  <path
                                    d="M15.3856 1.5H10.8856C9.85003 1.5 9.01056 2.33947 9.01056 3.375V7.875C9.01056 8.91053 9.85003 9.75 10.8856 9.75H15.3856C16.4211 9.75 17.2606 8.91053 17.2606 7.875V3.375C17.2606 2.33947 16.4211 1.5 15.3856 1.5Z"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path
                                    d="M9.01056 4.87549C7.48991 4.87823 6.69362 4.91556 6.18473 5.42444C5.63556 5.97362 5.63556 6.85751 5.63556 8.62527V9.37527C5.63556 11.143 5.63556 12.0269 6.18473 12.5761C6.73391 13.1253 7.61779 13.1253 9.38556 13.1253H10.1356C11.9033 13.1253 12.7872 13.1253 13.3364 12.5761C13.8453 12.0672 13.8826 11.2709 13.8853 9.75027"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                  <path
                                    d="M5.63556 8.25049C4.11491 8.25319 3.31862 8.29054 2.80973 8.79941C2.26056 9.34864 2.26056 10.2325 2.26056 12.0003V12.7503C2.26056 14.518 2.26056 15.4019 2.80973 15.9511C3.35891 16.5003 4.24279 16.5003 6.01056 16.5003H6.76056C8.52831 16.5003 9.41218 16.5003 9.96141 15.9511C10.4703 15.4422 10.5076 14.6459 10.5076 13.1253"
                                    stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_1528_5829">
                                    <rect width="18" height="18" fill="white" transform="translate(0.760559)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <?= get_the_title(120); ?>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo get_permalink( get_page_by_path('our-services') ); ?>">
                            <div class="footer-card-link-icon d-flex">
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M16.1355 10.5V7.5C16.1355 4.67157 16.1355 3.25736 15.2569 2.37868C14.3782 1.5 12.964 1.5 10.1355 1.5H9.38556C6.55718 1.5 5.14298 1.5 4.26430 2.37867C3.38562 3.25734 3.38561 4.67154 3.38559 7.49995L3.38556 10.4999C3.38554 13.3284 3.38552 14.7426 4.26421 15.6213C5.14288 16.5 6.55711 16.5 9.38556 16.5H10.1355C12.964 16.5 14.3782 16.5 15.2569 15.6213C16.1355 14.7427 16.1355 13.3284 16.1355 10.5Z"
                                  stroke="#00BEC5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.76056 5.25H12.7606M6.76056 9H12.7606M6.76056 12.75H9.76056" stroke="#00BEC5"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                            <?= get_the_title(581); ?>
                          </a>
                        </li>
                      </ul>
                      <div class="footer-card-separetion-line"></div>
                      <ul class="footer-social-media">
                        <li>
                          <a href="https://www.facebook.com/coderscotch/" target="_blank" rel="noopener noreferrer">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M8.83924 10.1046L9.32612 6.90508H6.28274V4.82878C6.28274 3.95362 6.70773 3.10001 8.07087 3.10001H9.45428V0.376184C9.45428 0.376184 8.19902 0.160156 6.99854 0.160156C4.49241 0.160156 2.85434 1.69279 2.85434 4.46689V6.90563H0.0683594V10.1052H2.85434V17.8402H6.28274V10.1052L8.83924 10.1046Z"
                                fill="#00BEC5" />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/coderscotch/" target="_blank" rel="noopener noreferrer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M5.64907 0.159912C2.84651 0.159912 0.566162 2.4742 0.566162 5.3175V12.6837C0.566162 15.5266 2.84786 17.8399 5.65111 17.8399H12.9136C15.7165 17.8399 17.9971 15.5256 17.9971 12.6823V5.31543C17.9971 2.47284 15.7155 0.159912 12.9122 0.159912H5.64907ZM14.511 2.98871C14.8958 2.98871 15.2082 3.30554 15.2082 3.69591C15.2082 4.08629 14.8958 4.40311 14.511 4.40311C14.1261 4.40311 13.8137 4.08629 13.8137 3.69591C13.8137 3.30554 14.1261 2.98871 14.511 2.98871ZM9.28166 4.40311C11.7813 4.40311 13.8137 6.4646 13.8137 8.99991C13.8137 11.5352 11.7809 13.5967 9.28166 13.5967C6.78205 13.5967 4.7496 11.5349 4.7496 8.99991C4.7496 6.46495 6.78205 4.40311 9.28166 4.40311ZM9.28166 5.81751C7.54867 5.81751 6.14408 7.24217 6.14408 8.99991C6.14408 10.7577 7.54867 12.1823 9.28166 12.1823C11.0146 12.1823 12.4192 10.7577 12.4192 8.99991C12.4192 7.24217 11.0146 5.81751 9.28166 5.81751Z"
                                fill="#00BEC5" />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.linkedin.com/company/coder-scotch-technologies" target="_blank" rel="noopener noreferrer">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.0872805 1.637C0.0872805 1.24525 0.240709 0.869549 0.513815 0.592542C0.786920 0.315535 1.15733 0.159914 1.54356 0.159914H16.0604C16.2518 0.159597 16.4414 0.197575 16.6183 0.271673C16.7952 0.345771 16.9560 0.454535 17.0914 0.591737C17.2268 0.728939 17.3342 0.891885 17.4075 1.07125C17.4807 1.25061 17.5184 1.44286 17.5183 1.637V16.3612C17.5185 16.5554 17.4809 16.7477 17.4078 16.9272C17.3347 17.1066 17.2273 17.2697 17.0920 17.407C16.9567 17.5443 16.7960 17.6533 16.6191 17.7276C16.4422 17.8018 16.2526 17.84 16.0612 17.8399H1.54356C1.35225 17.8399 1.16282 17.8017 0.986083 17.7274C0.809347 17.6531 0.648773 17.5442 0.513535 17.407C0.378296 17.2698 0.271044 17.1068 0.197906 16.9275C0.124767 16.7482 0.0871764 16.5561 0.0872805 16.362V1.637ZM6.98678 6.90082H9.3471V8.10306C9.68779 7.41193 10.5593 6.78991 11.869 6.78991C14.3799 6.78991 14.9749 8.16654 14.9749 10.6924V15.3711H12.434V11.2678C12.434 9.82927 12.0933 9.01759 11.2281 9.01759C10.0277 9.01759 9.52854 9.89275 9.52854 11.2678V15.3711H6.98678V6.90082ZM2.62904 15.261H5.17079V6.78991H2.62904V15.2602V15.261ZM5.53446 4.02701C5.53926 4.24775 5.50053 4.46723 5.42056 4.67258C5.34059 4.87794 5.22098 5.06502 5.06876 5.22285C4.91654 5.38068 4.73478 5.50608 4.53413 5.5917C4.33348 5.67731 4.11799 5.72141 3.90031 5.72141C3.68263 5.72141 3.46714 5.67731 3.26649 5.5917C3.06584 5.50608 2.88407 5.38068 2.73185 5.22285C2.57963 5.06502 2.46003 4.87794 2.38006 4.67258C2.30009 4.46723 2.26136 4.24775 2.26615 4.02701C2.27556 3.59373 2.45186 3.18142 2.75730 2.87836C3.06274 2.57531 3.47303 2.40561 3.90031 2.40561C4.32759 2.40561 4.73788 2.57531 5.04332 2.87836C5.34876 3.18142 5.52506 3.59373 5.53446 4.02701Z"
                                fill="#00BEC5" />
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://x.com/coderscotch" target="_blank" rel="noopener noreferrer">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1528_5856)">
                                <path
                                  d="M11.2704 8.0452L18.1915 0H16.5514L10.5418 6.98554L5.74200 0H0.205963L7.46425 10.5634L0.205963 19H1.84613L8.19240 11.623L13.2614 19H18.7974L11.2704 8.0452H11.2704ZM9.02397 10.6564L8.28855 9.60456L2.43711 1.23469H4.95631L9.67849 7.98944L10.4139 9.04132L16.5522 17.8215H14.033L9.02397 10.6568V10.6564Z"
                                  fill="#00BEC5" />
                              </g>
                              <defs>
                                <clipPath id="clip0_1528_5856">
                                  <rect width="19" height="19" fill="white" transform="translate(0.00088501)" />
                                </clipPath>
                              </defs>
                            </svg>
                          </a>
                        </li>
                        <li>
                          <a href="https://dribbble.com/coderscotch" target="_blank" rel="noopener noreferrer">
                            <svg width="19" height="20" viewBox="0 0 19 19" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.50052 0C14.7474 0 19.0005 4.25311 19.0005 9.5C19.0005 14.7469 14.7474 19 9.50052 19C4.25362 19 0.000518799 14.7469 0.000518799 9.5C0.000518799 4.25311 4.25362 0 9.50052 0Z"
                                fill="#00BEC5" />
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.944 9.17113C10.8175 8.87908 10.6857 8.58777 10.5454 8.29943C11.7441 7.78027 12.7074 7.0752 13.4251 6.18123C14.1254 7.0084 14.5648 8.05897 14.6297 9.20936C13.2934 8.99041 12.0643 8.97816 10.944 9.17113ZM12.3553 13.7753C12.1278 12.5544 11.7945 11.361 11.3589 10.1965C12.3323 10.0588 13.4036 10.0944 14.5755 10.2981C14.3492 11.7443 13.5238 12.993 12.3553 13.7753ZM6.34243 13.5526C7.36443 11.9495 8.66882 10.9064 10.2853 10.4247C10.7666 11.6805 11.1206 12.9726 11.3459 14.2959C9.66187 14.9468 7.77003 14.667 6.34243 13.5526ZM4.36228 9.3667C6.35913 9.36373 8.08212 9.13439 9.52530 8.68018C9.64628 8.92658 9.76206 9.17410 9.87302 9.42348C8.11960 9.97121 6.67419 11.0949 5.54681 12.7863C4.73523 11.8122 4.33148 10.631 4.36228 9.3667ZM7.17888 4.91395C7.86985 5.81830 8.48179 6.75049 9.01431 7.70680C7.75259 8.07826 6.24780 8.269 4.50700 8.28088C4.86659 6.80949 5.85741 5.586 7.17888 4.91395ZM12.6358 5.43014C12.0109 6.23652 11.1477 6.87406 10.0478 7.33979C9.52085 6.37420 8.91857 5.43236 8.23798 4.51799C9.77876 4.12537 11.3719 4.45416 12.6358 5.43014ZM9.49970 3.27148C6.06040 3.27148 3.27200 6.05988 3.27200 9.49918C3.27200 12.9385 6.06040 15.7269 9.49970 15.7269C12.9390 15.7269 15.7274 12.9385 15.7274 9.49918C15.7274 6.05988 12.9390 3.27148 9.49970 3.27148Z"
                                fill="#343434" style="fill: #343434 !important;" />
                            </svg>
                          </a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="usefull-link">
                    	<?php
							$locations = get_nav_menu_locations();

							if (isset($locations['footer_menu'])) {
							    $menu_obj = wp_get_nav_menu_object($locations['footer_menu']);
							    echo '<h4 class="usefull-link-heading">' . esc_html($menu_obj->name) . '</h4>';
							}
						?>
						<?php
						wp_nav_menu([
						    'theme_location' => 'footer_menu',
						    'container' => false,
						    'menu_class' => '',
						]);
						?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 footer-right-col">
                <div class="row">
                  <div class="col-md-6">
                    <div class="usefull-link">
                      <h4 class="usefull-link-heading">Expertise</h4>
						<?php
						wp_nav_menu([
						    'menu' => 'our-services',
						    'container' => false,
						    'menu_class' => '',
						]);
						?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="usefull-link">
                      <h4 class="usefull-link-heading ">Our Products</h4>
                      <ul>
                        <?php
						wp_nav_menu([
						    'menu' => 'our-products',
						    'container' => false,
						    'menu_class' => '',
						]);
						?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="client-reviews-card-box">
                  <a target="_blank" href="https://www.upwork.com/freelancers/nikunjgoriya5" class="client-reviews-card-box-items d-flex align-items-center justify-content-center">
                    <div class="client-reviews-card-box-items-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upwork-ft-box-icon.svg" width="88" height="26"
                        alt="Upwork Top Rated Developer Badge" />
                    </div>
                    <div class="client-reviews-card-box-items-star">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                    </div>
                  </a>
                  <a target="_blank" href="https://www.google.com/search?q=coder+scotch+technologies&rlz=1C1RXQR_enIN1087IN1089&oq=coder+scotch+technologies&gs_lcrp=EgZjaHJvbWUqCggAEAAY4wIYgAQyCggAEAAY4wIYgAQyDQgBEC4YrwEYxwEYgAQyCAgCEAAYFhgeMggIAxAAGBYYHjINCAQQABiGAxiABBiKBTINCAUQABiGAxiABBiKBTINCAYQABiGAxiABBiKBTIGCAcQRRg90gEHMjE0ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8&sei=3AgMap-uD72y4-EPqq7O-Aw" class="client-reviews-card-box-items d-flex align-items-center justify-content-center">
                    <div class="client-reviews-card-box-items-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-ft-box-icon.svg" width="99" height="26"
                        alt="Google Customer Reviews Badge" />
                    </div>
                    <div class="client-reviews-card-box-items-star">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                    </div>
                  </a>
                  <a target="_blank" href="https://clutch.co/profile/coder-scotch-technologies" class="client-reviews-card-box-items d-flex align-items-center justify-content-center">
                    <div class="client-reviews-card-box-items-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clutch-ft-box-icon.svg" width="94" height="26"
                        alt="Clutch B2B Reviews and Ratings Badge" />
                    </div>
                    <div class="client-reviews-card-box-items-star">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fill-star.svg" alt="star icon" width="20" height="20">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copy-right">
            <p class="copy-right-content"><?php echo esc_html( get_bloginfo('name') ); ?> &copy; Copyright <?php echo esc_html( date('Y') ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section End -->
</body>
</html>
<?php wp_footer(); ?>