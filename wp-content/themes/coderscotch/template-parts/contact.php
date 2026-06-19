<?php /* Template Name: Contact-Us Page Template */
get_header();
?>
  <!-- Banner Section Start -->
  <section class="common-banner-section contact-us-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content">
        <div class="connect-section">
          <div class="heading_section text-center">
            <h1 class="section-title">
              Connect with
              <span class="highlight-text"> CoderScotch Today! </span>
            </h1>
            <p class="section-description">
              <?= the_content(); ?>
            </p>
          </div>
        </div>
        <div class="contact-us-banner-image-box">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us-banner-image.png" alt="case studies banner img" width="1170" height="167"
            class="contact-us-banner-image">
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <section class="contact-information-section section-space-tb">
    <div class="container">
      <div class="contact-wrapper">
        <div class="row g-0 contact-info-wrapper align-items-center">
          <div class="col-lg-5 contact-information">
            <div class="contact-info-panel h-100">
              <h2 class="contact-info-title">Contact Information</h2>
              <ul class="contact-info-list list-unstyled m-0">
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/call-icon.svg" alt="call icon" width="20" height="20"
                    class="info-icon">
                  <a href="tel:+918128453853" class="info-text">+91 81284-53853</a>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/call-icon.svg" alt="call icon" width="20" height="20"
                    class="info-icon">
                  <a href="tel:+41443879998" class="info-text">+41 44 387 99 98</a>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mail-icon.svg" alt="mail icon" width="20" height="20"
                    class="info-icon">
                  <a href="mailto:info@coderscotch.com" class="info-text">info@coderscotch.com</a>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/location-icon.svg" alt="location icon" width="20" height="24"
                    class="info-icon">
                  <span class="info-text">A1217, Titanium Business Park, <br> Makarba, Ahmedabad</span>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/location-icon.svg" alt="location icon" width="20" height="24"
                    class="info-icon">
                  <span class="info-text">1500 Broadway New York, NY 10036</span>
                </li>
              </ul>

              <div class="social-links-wrapper mt-auto">
                <ul class="social-links list-unstyled d-flex mb-0">
                  <li>
                    <a href="https://www.facebook.com/coderscotch/">
                      <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M8.83924 10.1046L9.32612 6.90508H6.28274V4.82878C6.28274 3.95362 6.70773 3.10001 8.07087 3.10001H9.45428V0.376184C9.45428 0.376184 8.19902 0.160156 6.99854 0.160156C4.49241 0.160156 2.85434 1.69279 2.85434 4.46689V6.90563H0.0683594V10.1052H2.85434V17.8402H6.28274V10.1052L8.83924 10.1046Z"
                          fill="#00BEC5" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/coderscotch/">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M5.64907 0.159912C2.84651 0.159912 0.566162 2.4742 0.566162 5.3175V12.6837C0.566162 15.5266 2.84786 17.8399 5.65111 17.8399H12.9136C15.7165 17.8399 17.9971 15.5256 17.9971 12.6823V5.31543C17.9971 2.47284 15.7155 0.159912 12.9122 0.159912H5.64907ZM14.511 2.98871C14.8958 2.98871 15.2082 3.30554 15.2082 3.69591C15.2082 4.08629 14.8958 4.40311 14.511 4.40311C14.1261 4.40311 13.8137 4.08629 13.8137 3.69591C13.8137 3.30554 14.1261 2.98871 14.511 2.98871ZM9.28166 4.40311C11.7813 4.40311 13.8137 6.4646 13.8137 8.99991C13.8137 11.5352 11.7809 13.5967 9.28166 13.5967C6.78205 13.5967 4.7496 11.5349 4.7496 8.99991C4.7496 6.46495 6.78205 4.40311 9.28166 4.40311ZM9.28166 5.81751C7.54867 5.81751 6.14408 7.24217 6.14408 8.99991C6.14408 10.7577 7.54867 12.1823 9.28166 12.1823C11.0146 12.1823 12.4192 10.7577 12.4192 8.99991C12.4192 7.24217 11.0146 5.81751 9.28166 5.81751Z"
                          fill="#00BEC5" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/coder-scotch-technologies">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.0872805 1.637C0.0872805 1.24525 0.240709 0.869549 0.513815 0.592542C0.786920 0.315535 1.15733 0.159914 1.54356 0.159914H16.0604C16.2518 0.159597 16.4414 0.197575 16.6183 0.271673C16.7952 0.345771 16.9560 0.454535 17.0914 0.591737C17.2268 0.728939 17.3342 0.891885 17.4075 1.07125C17.4807 1.25061 17.5184 1.44286 17.5183 1.637V16.3612C17.5185 16.5554 17.4809 16.7477 17.4078 16.9272C17.3347 17.1066 17.2273 17.2697 17.0920 17.407C16.9567 17.5443 16.7960 17.6533 16.6191 17.7276C16.4422 17.8018 16.2526 17.84 16.0612 17.8399H1.54356C1.35225 17.8399 1.16282 17.8017 0.986083 17.7274C0.809347 17.6531 0.648773 17.5442 0.513535 17.407C0.378296 17.2698 0.271044 17.1068 0.197906 16.9275C0.124767 16.7482 0.0871764 16.5561 0.0872805 16.362V1.637ZM6.98678 6.90082H9.3471V8.10306C9.68779 7.41193 10.5593 6.78991 11.869 6.78991C14.3799 6.78991 14.9749 8.16654 14.9749 10.6924V15.3711H12.434V11.2678C12.434 9.82927 12.0933 9.01759 11.2281 9.01759C10.0277 9.01759 9.52854 9.89275 9.52854 11.2678V15.3711H6.98678V6.90082ZM2.62904 15.261H5.17079V6.78991H2.62904V15.2602V15.261ZM5.53446 4.02701C5.53926 4.24775 5.50053 4.46723 5.42056 4.67258C5.34059 4.87794 5.22098 5.06502 5.06876 5.22285C4.91654 5.38068 4.73478 5.50608 4.53413 5.5917C4.33348 5.67731 4.11799 5.72141 3.90031 5.72141C3.68263 5.72141 3.46714 5.67731 3.26649 5.5917C3.06584 5.50608 2.88407 5.38068 2.73185 5.22285C2.57963 5.06502 2.46003 4.87794 2.38006 4.67258C2.30009 4.46723 2.26136 4.24775 2.26615 4.02701C2.27556 3.59373 2.45186 3.18142 2.75730 2.87836C3.06274 2.57531 3.47303 2.40561 3.90031 2.40561C4.32759 2.40561 4.73788 2.57531 5.04332 2.87836C5.34876 3.18142 5.52506 3.59373 5.53446 4.02701Z"
                          fill="#00BEC5" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com/coderscotch">
                      <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="https://dribbble.com/coderscotch">
                      <svg width="19" height="20" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.50052 0C14.7474 0 19.0005 4.25311 19.0005 9.5C19.0005 14.7469 14.7474 19 9.50052 19C4.25362 19 0.000518799 14.7469 0.000518799 9.5C0.000518799 4.25311 4.25362 0 9.50052 0Z"
                          fill="#00BEC5" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.944 9.17113C10.8175 8.87908 10.6857 8.58777 10.5454 8.29943C11.7441 7.78027 12.7074 7.0752 13.4251 6.18123C14.1254 7.0084 14.5648 8.05897 14.6297 9.20936C13.2934 8.99041 12.0643 8.97816 10.944 9.17113ZM12.3553 13.7753C12.1278 12.5544 11.7945 11.361 11.3589 10.1965C12.3323 10.0588 13.4036 10.0944 14.5755 10.2981C14.3492 11.7443 13.5238 12.993 12.3553 13.7753ZM6.34243 13.5526C7.36443 11.9495 8.66882 10.9064 10.2853 10.4247C10.7666 11.6805 11.1206 12.9726 11.3459 14.2959C9.66187 14.9468 7.77003 14.667 6.34243 13.5526ZM4.36228 9.3667C6.35913 9.36373 8.08212 9.13439 9.52530 8.68018C9.64628 8.92658 9.76206 9.17410 9.87302 9.42348C8.11960 9.97121 6.67419 11.0949 5.54681 12.7863C4.73523 11.8122 4.33148 10.631 4.36228 9.3667ZM7.17888 4.91395C7.86985 5.81830 8.48179 6.75049 9.01431 7.70680C7.75259 8.07826 6.24780 8.269 4.50700 8.28088C4.86659 6.80949 5.85741 5.586 7.17888 4.91395ZM12.6358 5.43014C12.0109 6.23652 11.1477 6.87406 10.0478 7.33979C9.52085 6.37420 8.91857 5.43236 8.23798 4.51799C9.77876 4.12537 11.3719 4.45416 12.6358 5.43014ZM9.49970 3.27148C6.06040 3.27148 3.27200 6.05988 3.27200 9.49918C3.27200 12.9385 6.06040 15.7269 9.49970 15.7269C12.9390 15.7269 15.7274 12.9385 15.7274 9.49918C15.7274 6.05988 12.9390 3.27148 9.49970 3.27148Z"
                          fill="#343434" style="fill: #fff !important;" />
                      </svg>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-7 contact-information-form">
            <div class="contact-form-panel">
              <?php echo do_shortcode('[contact-form-7 id="bb359a6" title="Contact Us"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
?>