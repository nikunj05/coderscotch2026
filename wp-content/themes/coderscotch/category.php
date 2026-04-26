<?php
get_header();

$category = get_queried_object();
$cat_id = 'category_' . $category->term_id;

// Banner
$banner_image = get_field('cat_banner_image', $cat_id) ?: get_template_directory_uri() . '/assets/images/product-engineering-banner.png';

// Tech Focus
$tech_title = get_field('cat_tech_title', $cat_id) ?: 'Build Products <span class="highlight-text"> That Scale </span>';
$tech_desc = get_field('cat_tech_description', $cat_id) ?: 'We don’t just write code — we engineer products that solve real business problems. Whether you\'re building an MVP, modernizing an existing system, or scaling to millions of users, we bring the right mix of strategy, design, and engineering.';
$tech_image = get_field('cat_tech_image', $cat_id) ?: get_template_directory_uri() . '/assets/images/technological-focus-img.png';
$tech_cards = get_field('cat_tech_cards', $cat_id);

// Capabilities
$cap_title = get_field('cat_cap_title', $cat_id) ?: 'Our ' . single_cat_title('', false) . ' <span class="highlight-text"> Capabilities </span>';
$cap_items = get_field('cat_cap_items', $cat_id);

// Bento
$bento_title = get_field('cat_bento_title', $cat_id) ?: 'Why Choose <span class="highlight-text"> Coder Scotch? </span>';
$bento_desc = get_field('cat_bento_description', $cat_id) ?: 'We combine engineering excellence with business strategy to deliver products that win.';
$bento_items = get_field('cat_bento_items', $cat_id);

// CTA
$cta_title = get_field('cat_cta_title', $cat_id) ?: 'Have a product idea? <br>Let’s build it together.';
$cta_desc = get_field('cat_cta_description', $cat_id) ?: 'Speak to our product experts today and get a free technical consultation and roadmap for your project.';
$cta_btn_text = get_field('cat_cta_btn_text', $cat_id) ?: 'Speak to our expert';
$cta_btn_link = get_field('cat_cta_btn_link', $cat_id) ?: get_permalink( get_page_by_path('contact-us') );
?>

<main id="primary" class="site-main">

  <!-- Banner Section Start -->
  <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
        <div class="connect-section">
          <div class="heading_section text-left">
            <h1 class="section-title">
              <?php echo get_field('title2'); ?>
            </h1>
            <div class="section-description">
              <?php echo category_description(); ?>
            </div>
          </div>
          <div class="banner-btn-group d-flex align-items-center mt-4">
            <a href="#" class="button button-primary">
              Start a project
              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="url(#paint0_linear_507_314)"></path>
                <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 27.6753 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white"></path>
                <defs>
                  <linearGradient id="paint0_linear_507_314" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00BEC5"></stop>
                    <stop offset="1" stop-color="#43CEA2"></stop>
                  </linearGradient>
                </defs>
              </svg>
            </a>
          </div>
        </div>
        <div class="common-banner-bottom-image">
          <img src="<?php echo $banner_image; ?>" alt="<?php single_cat_title(); ?> banner image" width="405" height="453" class="common-banner-bottom-image">
        </div>
      </div>
    </div>
  </section>
  <!-- Banner Section End -->

  <!-- Build Products That Scale Section Start -->
  <section class="tech-focus-section section-space-tb bg-sky">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="heading_section">
            <h2 class="section-title"><?php echo $tech_title; ?></h2>
            <p class="section-description">
              <?php echo $tech_desc; ?>
            </p>
          </div>
          <div class="tech-main-image-wrapper mt-4">
            <img src="<?php echo $tech_image; ?>" width="570" height="440" alt="<?php single_cat_title(); ?>" class="technological-focus-img rounded-4 shadow-lg">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="tech-feature-cards-stack">
            <?php 
            if( $tech_cards ): 
              foreach( $tech_cards as $card ): 
            ?>
              <div class="tech-feature-card">
                <div class="card-icon-box">
                  <img src="<?php echo $card['icon']; ?>" width="40" height="40" alt="<?php echo $card['title']; ?>">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title"><?php echo $card['title']; ?></h4>
                  <p class="tech-card-description"><?php echo $card['description']; ?></p>
                </div>
              </div>
            <?php 
              endforeach; 
            else: 
            ?>
              <!-- Fallback Cards -->
              <div class="tech-feature-card">
                <div class="card-icon-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" width="40" height="40" alt="Concept">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title">Concept-to-Market Speed</h4>
                  <p class="tech-card-description">We bridge the gap between complex ideas and functional prototypes, getting your product in front of users faster.</p>
                </div>
              </div>
              <div class="tech-feature-card">
                <div class="card-icon-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon2.svg" width="40" height="40" alt="Architect">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title">Cloud-Native Architecture</h4>
                  <p class="tech-card-description">High-availability systems designed to handle millions of requests while remaining cost-effective and secure.</p>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Build Products That Scale Section End -->

  <!-- Capabilities Section Start -->
  <section class="section-space-tb healthcare-service-mosaic bg-white">
    <div class="container">
      <div class="heading_section text-center mb-5">
        <h2 class="section-title"><?php echo $cap_title; ?></h2>
      </div>

      <div class="healthcare-navigator-wrapper mt-5">
        <div class="row gt-0">
          <div class="col-lg-4">
            <div class="navigator-sidebar-list nav flex-column nav-pills" id="product-pills-tab" role="tablist" aria-orientation="vertical">
              <?php 
              if( $cap_items ): 
                foreach( $cap_items as $index => $item ): 
              ?>
                <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" id="pills-tab-<?php echo $index; ?>" data-bs-toggle="pill" data-bs-target="#pills-content-<?php echo $index; ?>" type="button" role="tab" aria-controls="pills-content-<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                  <span class="nav-number"><?php echo sprintf('%02d', $index + 1); ?></span>
                  <span class="nav-label"><?php echo $item['label']; ?></span>
                  <span class="nav-accent"></span>
                </button>
              <?php 
                endforeach; 
              else: 
              ?>
                <!-- Fallback Nav -->
                <button class="nav-link active" id="pills-strategy-tab" data-bs-toggle="pill" data-bs-target="#pills-strategy" type="button" role="tab" aria-controls="pills-strategy" aria-selected="true">
                  <span class="nav-number">01</span>
                  <span class="nav-label">Product Strategy & Discovery</span>
                  <span class="nav-accent"></span>
                </button>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="tab-content healthcare-content-display h-100" id="product-pills-tabContent">
              <?php 
              if( $cap_items ): 
                foreach( $cap_items as $index => $item ): 
              ?>
                <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?> h-100" id="pills-content-<?php echo $index; ?>" role="tabpanel" aria-labelledby="pills-tab-<?php echo $index; ?>">
                  <div class="content-card glass-premium">
                    <div class="card-header-flex">
                      <div class="service-icon-box">
                        <img src="<?php echo $item['icon']; ?>" alt="<?php echo $item['title']; ?>">
                      </div>
                      <div class="header-text">
                        <h3 class="display-title"><?php echo $item['title']; ?></h3>
                        <p class="tagline"><?php echo $item['tagline']; ?></p>
                      </div>
                    </div>
                    <div class="card-body-content">
                      <p class="summary-text"><?php echo $item['summary']; ?></p>
                      <?php if( $item['checklist'] ): ?>
                        <ul class="feature-checklist list-unstyled mt-3">
                          <?php foreach( $item['checklist'] as $check ): ?>
                            <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> <?php echo $check['item']; ?></li>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php 
                endforeach; 
              else: 
              ?>
                <!-- Fallback Content -->
                <div class="tab-pane fade show active h-100" id="pills-strategy" role="tabpanel" aria-labelledby="pills-strategy-tab">
                  <div class="content-card glass-premium">
                    <div class="card-header-flex">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" alt="Strategy">
                      </div>
                      <div class="header-text">
                        <h3 class="display-title">Product Strategy & Discovery</h3>
                        <p class="tagline">Validating Ideas, Reducing Risks</p>
                      </div>
                    </div>
                    <div class="card-body-content">
                      <p class="summary-text">We validate your idea, define the roadmap, and align technology with business goals to reduce risks and accelerate time-to-market.</p>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Final CTA Section Start (Relocated) -->
  <section class="section pt-3 pb-5 bg-white">
    <div class="container">
      <div class="cta-split-wrapper">
        <!-- Left Panel: Content + Gradient -->
        <div class="cta-left-panel text-white">
          <div class="position-relative z-index-1">
            <h2 class="f40 cs_SoraBold mb-3 "><?php echo $cta_title; ?></h2>
            <p class="f18 opacity-90 mb-0 max-width-600"><?php echo $cta_desc; ?></p>
          </div>
        </div>

        <!-- Right Panel: CTA Button + White -->
        <div class="cta-right-panel">
          <a href="<?php echo $cta_btn_link; ?>" class="button button-primary">
            <?php echo $cta_btn_text; ?>
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z" fill="url(#paint0_linear_split_cta)" />
              <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="white" />
              <defs>
                <linearGradient id="paint0_linear_split_cta" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571" gradientUnits="userSpaceOnUse">
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



  <!-- Industries We Serve Section Start -->
  <section class="mobapp-we-are-specialized technologies-use-section section-space-t">
    <div class="technologies-use-inner section-space-b">
      <div class="container">
        <div class="heading_section text-center">
          <h2 class="section-title">
            <span class="highlight-text"> Industries </span>  We Serve
          </h2>
          <p class="section-description">
            Discover the innovative technologies that power our cutting-edge digital solutions at CoderScotch.
          </p>
        </div>
        <div class="technologies-tab">
          <div class="technologies-tab-nav we-are-specialized-tab">
            <ul class="nav nav-pills justify-content-center category-tabs">
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon2.svg" alt="health-fitness" width="32" height="32">
                  <span class="tech-link-title"> Health & Fitness </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon1.svg" alt="manufacturing" width="32" height="32">
                  <span class="tech-link-title">Manufacturing</span>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon4.svg" alt="finance-banking" width="32"
                    height="32">
                  <span class="tech-link-title"> Finance & Banking </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/automotive-icon.svg" alt="automotive" width="32" height="32">
                  <span class="tech-link-title"> Automotive </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/media-entertainment-icon.svg" alt="media-entertainment" width="32"
                    height="32">
                  <span class="tech-link-title"> Media & Entertainment </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/information-services-icon.svg" alt="information-services" width="32"
                    height="32">
                  <span class="tech-link-title"> Information Services </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon7.svg" alt="real-estate" width="32" height="32">
                  <span class="tech-link-title"> Real Estate </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/travel-hospitality-icon.svg" alt="real-estate" width="32" height="32">
                  <span class="tech-link-title"> Travel & Hospitality </span>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon5.svg" alt="food-beverages" width="32" height="32">
                  <span class="tech-link-title"> Food & Beverages </span>
                </button>
              </li>

              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/telecommunication-icon.svg" alt="telecommunication" width="32"
                    height="32">
                  <span class="tech-link-title"> Telecommunication </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logistics-transportation-icon.svg" alt="logistics-transportation"
                    width="32" height="32">
                  <span class="tech-link-title"> Logistics & Transportation </span>
                </button>
              </li>
              <li class="nav-item">
                <button class="nav-link">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/sales-marketing-icon.svg" alt="sales-marketing" width="32" height="32">
                  <span class="tech-link-title"> Sales and Marketing </span>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  
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
   <!-- Why Choose Coder Scotch Section Start (Bento Design) -->
  <section class="section section-space-tb bento-section position-relative overflow-hidden">
    <div class="container">
      <div class="heading_section text-center mb-5">
        <h2 class="section-title "><?php echo $bento_title; ?></h2>
        <p class="section-description mx-auto mw-740"><?php echo $bento_desc; ?></p>
      </div>

      <div class="bento-grid row g-4 mt-5">
        <?php 
        if( $bento_items ): 
          foreach( $bento_items as $item ): 
        ?>
          <div class="<?php echo $item['size']; ?> col-md-<?php echo $item['size'] === 'col-lg-8' ? '12' : '6'; ?>">
            <div class="bento-card h-100 p-4 <?php echo $item['size'] === 'col-lg-8' ? 'p-md-5' : ''; ?>">
              <div class="bento-number position-absolute top-0 end-0 p-4"><?php echo $item['number']; ?></div>
              <div class="bento-content">
                <h4 class="cs_SoraBold "><?php echo $item['title']; ?></h4>
                <p class="<?php echo $item['size'] === 'col-lg-8' ? 'mw-600' : ''; ?>"><?php echo $item['description']; ?></p>
              </div>
            </div>
          </div>
        <?php 
          endforeach; 
        else: 
        ?>
          <!-- Fallback Bento -->
          <div class="col-lg-8 col-md-12">
            <div class="bento-card h-100 p-4 p-md-5">
              <div class="bento-number position-absolute top-0 end-0 p-4">01</div>
              <div class="bento-content">
                <h4 class="cs_SoraBold ">Startup Ownership DNA</h4>
                <p class="mw-600">We don't just act as vendors; we build with the same urgency and ownership as a founder.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="bento-card h-100 p-4">
              <div class="bento-number position-absolute top-0 end-0 p-4">02</div>
              <div class="bento-content">
                <h4 class="cs_SoraBold ">Zero Technical Debt</h4>
                <p>We write code that lasts.</p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- Why Choose Coder Scotch Section End -->
  <section class="faq-accordion-section section-space-tb">
    <div class="container">
        <div class="heading_section text-center">
            <h2 class="section-title">
                Frequently Asked <span class="highlight-text">Questions</span>
            </h2>
        </div>
        <div class="faq-accordion" id="aiServicesFAQ">
            <?php
            if (have_rows('questions_list', $cat_id)) :
                $index = 1;
                while (have_rows('questions_list', $cat_id)) : the_row(); ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $index ?>">
                        <button class="accordion-button <?= $index === 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                            <?= $index < 10 ? '0' . $index : $index ?>. <?= get_sub_field('questions'); ?>
                            <span class="accordion-icon"></span>
                        </button>
                    </h2>
                    <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#aiServicesFAQ">
                        <div class="accordion-body">
                            <?= get_sub_field('answer'); ?>
                        </div>
                    </div>
                </div>
            <?php $index++;
                endwhile;
            endif; ?>
        </div>
    </div>
</section>
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



</main><!-- #main -->

<?php get_footer(); ?>
