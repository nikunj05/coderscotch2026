<?php
/**
 * The template for displaying all single services CPT posts
 *
 * @package coderscotch
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $post_id = get_the_ID();
    $is_product_engineering = is_single('product-engineering');
    
    // Check if the service post uses the new premium category-style layout fields
    $has_category_style = $is_product_engineering || is_single('hire-dedicated-developers') || get_field('cat_cap_items') || get_field('cat_tech_cards') || get_field('cat_bento_items');

    if ($has_category_style) :
        // =========================================================================
        // PREMIUM CATEGORY/SAAS-STYLE SERVICES TEMPLATE
        // =========================================================================
        
        // Banner Image
        $banner_image = get_field('cat_banner_image') ?: get_the_post_thumbnail_url($post_id, 'full');
        if (!$banner_image) {
            $banner_image = get_template_directory_uri() . '/assets/images/product-engineering-banner.png';
        }

        // Tech Focus
        $tech_title = get_field('cat_tech_title') ?: 'Build Products <span class="highlight-text"> That Scale </span>';
        $tech_desc = get_field('cat_tech_description') ?: 'We don’t just write code — we engineer products that solve real business problems. Whether you\'re building an MVP, modernizing an existing system, or scaling to millions of users, we bring the right mix of strategy, design, and engineering.';
        $tech_image = get_field('cat_tech_image') ?: get_template_directory_uri() . '/assets/images/technological-focus-img.png';
        $tech_cards = get_field('cat_tech_cards');

        // Capabilities
        $cap_title = get_field('cat_cap_title') ?: 'Our ' . get_the_title() . ' <span class="highlight-text"> Capabilities </span>';
        $cap_items = get_field('cat_cap_items');

        // Bento
        $bento_title = get_field('cat_bento_title') ?: 'Why Choose <span class="highlight-text"> Coder Scotch? </span>';
        $bento_desc = get_field('cat_bento_description') ?: 'We combine engineering excellence with business strategy to deliver products that win.';
        $bento_items = get_field('cat_bento_items');

        // CTA
        $cta_title = get_field('cat_cta_title') ?: 'Have a product idea? <br>Let’s build it together.';
        $cta_desc = get_field('cat_cta_description') ?: 'Speak to our product experts today and get a free technical consultation and roadmap for your project.';
        $cta_btn_text = get_field('cat_cta_btn_text') ?: 'Speak to our expert';
        $cta_btn_link = get_field('cat_cta_btn_link') ?: get_permalink( get_page_by_path('contact-us') );
        ?>

        <main id="primary" class="site-main">

          <!-- Banner Section Start -->
          <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
            <div class="container">
              <div class="banner-section-content content-with-img">
                <div class="connect-section">
                  <div class="heading_section text-left">
                    <h1 class="section-title">
                      <?php 
                      $title2 = get_field('title2');
                      if ($title2) {
                          echo $title2;
                      } else {
                          $title = get_the_title();
                          if (strpos($title, ' ') !== false) {
                              $title_parts = explode(' ', $title);
                              $last_word = array_pop($title_parts);
                              $highlighted_part = implode(' ', $title_parts);
                              echo '<span class="highlight-text"> ' . esc_html($highlighted_part) . ' </span> ' . esc_html($last_word);
                          } else {
                              echo esc_html($title);
                          }
                      }
                      ?>
                    </h1>
                    <div class="section-description">
                      <?php 
                      $desc = get_the_content();
                      if (empty($desc)) {
                          $desc = get_field('banner_text2') ?: get_field('cat_tech_description');
                      }
                      echo wp_kses_post($desc);
                      ?>
                    </div>
                  </div>
                  <div class="banner-btn-group d-flex align-items-center mt-4">
                    <a href="<?php echo esc_url($cta_btn_link); ?>" class="button button-primary">
                      <?php echo esc_html($cta_btn_text); ?>
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
                  <img src="<?php echo esc_url($banner_image); ?>" alt="<?php the_title_attribute(); ?> banner image" width="405" height="453" class="common-banner-bottom-image">
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
                    <img src="<?php echo esc_url($tech_image); ?>" width="570" height="440" alt="<?php the_title_attribute(); ?>" class="technological-focus-img rounded-4 shadow-lg">
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
                          <img src="<?php echo esc_url($card['icon']); ?>" width="40" height="40" alt="<?php echo esc_attr($card['title']); ?>">
                        </div>
                        <div class="card-content">
                          <h4 class="tech-card-title"><?php echo esc_html($card['title']); ?></h4>
                          <p class="tech-card-description"><?php echo esc_html($card['description']); ?></p>
                        </div>
                      </div>
                    <?php 
                      endforeach; 
                    elseif ($is_product_engineering): 
                      // Hardcoded fallback for Product Engineering
                    ?>
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
                      <div class="tech-feature-card">
                        <div class="card-icon-box">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon3.svg" width="40" height="40" alt="Intelligence">
                        </div>
                        <div class="card-content">
                          <h4 class="tech-card-title">Intelligence-Driven Apps</h4>
                          <p class="tech-card-description">We embed machine learning and predictive analytics directly into your product's core workflows.</p>
                        </div>
                      </div>
                      <div class="tech-feature-card">
                        <div class="card-icon-box">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon4.svg" width="40" height="40" alt="Agile">
                        </div>
                        <div class="card-content">
                          <h4 class="tech-card-title">Fast iterations with agile delivery</h4>
                          <p class="tech-card-description">Two-week sprints and real demos. You see working software every step of the way.</p>
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

              <div class="capabilities-hover-grid mt-5">
                <?php 
                if( $cap_items ): 
                  foreach( $cap_items as $index => $item ): 
                    $icon_index = ($index % 5) + 1; // 1 to 5 for service-card-icon
                ?>
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon<?php echo $icon_index; ?>.svg" alt="Icon">
                      </div>
                      <h3 class="display-title"><?php echo esc_html($item['label']); ?></h3>
                      <p class="tagline"><?php echo esc_html($item['tagline']); ?></p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text"><?php echo esc_html($item['summary']); ?></p>
                      <?php if( !empty($item['checklist']) ): ?>
                        <div class="checklist-grid mt-3">
                          <?php foreach( $item['checklist'] as $check ): ?>
                            <div class="check-item d-flex align-items-start">
                              <svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle>
                                <path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                              <span><?php echo esc_html($check['item']); ?></span>
                            </div>
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>
                      <?php if (!empty($item['link'])) : ?>
                        <div class="mt-3 card-action-btn">
                          <a href="<?php echo esc_url($item['link']); ?>" class="button button-primary py-2 px-4 d-inline-block text-decoration-none" style="font-size: 14px; border-radius: 6px; padding: 8px 16px;">
                            Hire Developers
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php 
                  endforeach; 
                elseif ($is_product_engineering): 
                  // Hardcoded fallback for Product Engineering
                ?>
                  <!-- Strategy -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" alt="Strategy">
                      </div>
                      <h3 class="display-title">Product Strategy & Discovery</h3>
                      <p class="tagline">Validating Ideas, Reducing Risks</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">We validate your idea, define the roadmap, and align technology with business goals to reduce risks and accelerate time-to-market.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Idea Validation & Market Research</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Technical Audit & Constraint Mapping</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Strategic Product Roadmap</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Business Goal Alignment</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- Design -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon2.svg" alt="Design">
                      </div>
                      <h3 class="display-title">UI/UX Design</h3>
                      <p class="tagline">Intuitive & Engaging Experiences</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">Clean, modern, and intuitive designs focused on user experience and engagement using industry-leading tools like Figma.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>User Experience (UX) Architecture</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Visual Interface (UI) Design</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Interactive Prototyping</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>User Testing & Feedback Loops</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- Dev -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon3.svg" alt="Dev">
                      </div>
                      <h3 class="display-title">Web & Mobile Development</h3>
                      <p class="tagline">Modern Tech Stacks, High Performance</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">We build high-quality applications using modern tech stacks for web, mobile, and backend systems.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>React / Next.js / Laravel</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>React Native / Flutter Mobile Apps</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Node.js / Express Backend</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>AWS / Vercel Cloud Hosting</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- AI -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon4.svg" alt="AI">
                      </div>
                      <h3 class="display-title">AI & Automation Integration</h3>
                      <p class="tagline">Intelligent Products, Smarter Workflows</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">Leverage AI to enhance product capabilities and automate complex clinical or business processes.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>AI Agents & Workflow Automation</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Data Analytics & Real-time Insights</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Predictive Systems & ML Models</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Generative AI Integration</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- Cloud -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon5.svg" alt="Cloud">
                      </div>
                      <h3 class="display-title">Cloud & DevOps</h3>
                      <p class="tagline">Secure, Scalable & Optimized</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">Secure, scalable, and optimized infrastructure to ensure your product performs under any load.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>AWS, Vercel & DigitalOcean Hosting</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Automated CI/CD Pipelines</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Infrastructure as Code (IaC)</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Performance & Security Optimization</span></div>
                      </div>
                    </div>
                  </div>

                  <!-- Maintenance -->
                  <div class="hover-grid-card">
                    <div class="card-visible-content">
                      <div class="service-icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" alt="Maintenance">
                      </div>
                      <h3 class="display-title">Maintenance & Scaling</h3>
                      <p class="tagline">Long-term Success & Growth</p>
                    </div>
                    <div class="card-hidden-content">
                      <p class="summary-text">We support your product post-launch with continuous improvements, active monitoring, and scaling for growth.</p>
                      <div class="checklist-grid mt-3">
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>24/7 Monitoring & Incident Response</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Regular Security Updates & Patching</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Feature Enhancements & Optimization</span></div>
                        <div class="check-item d-flex align-items-start"><svg class="me-2 mt-1 flex-shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="12" fill="#e0f9fa"></circle><path d="M16 8L10 14L8 12" stroke="#00bec5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Scalability Audits & Implementation</span></div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </section>
          <!-- Capabilities Section End -->

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
                  <a href="<?php echo esc_url($cta_btn_link); ?>" class="button button-primary">
                    <?php echo esc_html($cta_btn_text); ?>
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
          <!-- Final CTA Section End -->

          <!-- Industries We Serve Section Start -->
          <section class="mobapp-we-are-specialized technologies-use-section section-space-t">
            <div class="technologies-use-inner section-space-b">
              <div class="container">
                <div class="heading_section text-center">
                  <h2 class="section-title">
                    <?php if ($is_product_engineering) : ?>
                      <span class="highlight-text"> Custom AI Agents </span> for Multiple Industries
                    <?php else : ?>
                      <span class="highlight-text"> Industries </span> We Serve
                    <?php endif; ?>
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
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/specialized-ser-icon4.svg" alt="finance-banking" width="32" height="32">
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
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/media-entertainment-icon.svg" alt="media-entertainment" width="32" height="32">
                          <span class="tech-link-title"> Media & Entertainment </span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/information-services-icon.svg" alt="information-services" width="32" height="32">
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
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/telecommunication-icon.svg" alt="telecommunication" width="32" height="32">
                          <span class="tech-link-title"> Telecommunication </span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logistics-transportation-icon.svg" alt="logistics-transportation" width="32" height="32">
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
          <!-- Industries We Serve Section End -->

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
                <div class="review-col">
                  <div class="review-scroll-track">
                    <?php
                    if (have_rows('testimonials')) :
                        while (have_rows('testimonials')) : the_row(); ?>
                        <div class="client-review-card">
                          <div class="card-body">
                            <p><?= get_sub_field('client_review'); ?></p>
                          </div>
                          <div class="card-footer">
                            <div class="user-info">
                              <div class="user-name"><?= get_sub_field('testimonials_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" alt="verified" class="verified-icon"></div>
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

                <div class="review-col">
                  <div class="review-scroll-track">
                    <?php
                    if (have_rows('testimonials')) :
                        while (have_rows('testimonials')) : the_row(); ?>
                        <div class="client-review-card">
                          <div class="card-body">
                            <p><?= get_sub_field('client_review'); ?></p>
                          </div>
                          <div class="card-footer">
                            <div class="user-info">
                              <div class="user-name"><?= get_sub_field('testimonials_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" alt="verified" class="verified-icon"></div>
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
                              <div class="user-name"><?= get_sub_field('client_name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" alt="verified" class="verified-icon"></div>
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
                        <h4 class="cs_SoraBold "><?php echo esc_html($item['title']); ?></h4>
                        <p class="<?php echo $item['size'] === 'col-lg-8' ? 'mw-600' : ''; ?>"><?php echo esc_html($item['description']); ?></p>
                      </div>
                    </div>
                  </div>
                <?php 
                  endforeach; 
                else: 
                  // Fallback Bento for Product Engineering and general fallbacks
                ?>
                  <div class="col-lg-8 col-md-12">
                    <div class="bento-card h-100 p-4 p-md-5">
                      <div class="bento-number position-absolute top-0 end-0 p-4">01</div>
                      <div class="bento-content">
                        <h4 class="cs_SoraBold ">Startup Ownership DNA</h4>
                        <p class="mw-600">We don't just act as vendors; we build with the same urgency and ownership as a founder. Our team understands the hustle required to scale from zero to one.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="bento-card h-100 p-4">
                      <div class="bento-number position-absolute top-0 end-0 p-4">02</div>
                      <div class="bento-content">
                        <h4 class="cs_SoraBold ">Zero Technical Debt</h4>
                        <p>We write code that lasts. Our modular engineering approach ensures your system evolves without costly future rewrites.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="bento-card h-100 p-4">
                      <div class="bento-number position-absolute top-0 end-0 p-4">03</div>
                      <div class="bento-content">
                        <h4 class="cs_SoraBold ">Transparent Engineering</h4>
                        <p>No black boxes. You get real-time access to our bi-weekly sprints, code repositories, and architectural decisions.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-md-12">
                    <div class="bento-card h-100 p-4 p-md-5">
                      <div class="bento-number position-absolute top-0 end-0 p-4">04</div>
                      <div class="bento-content">
                        <h4 class="cs_SoraBold ">Product Growth Roadmap</h4>
                        <p class="mw-600">We don't just ship and leave. We provide the technical strategy to scale your user base from 1k to 1M, ensuring stability at every milestone.</p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </section>
          <!-- Why Choose Coder Scotch Section End -->

          <!-- FAQ Section Start -->
          <?php if (have_rows('questions_list')) : ?>
          <section class="faq-accordion-section section-space-tb">
            <div class="container">
              <div class="heading_section text-center">
                <h2 class="section-title">
                  Frequently Asked <span class="highlight-text">Questions</span>
                </h2>
              </div>
              <div class="faq-accordion" id="serviceFAQ">
                <?php
                $index = 1;
                while (have_rows('questions_list')) : the_row(); ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?= $index ?>">
                    <button class="accordion-button <?= $index === 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index ?>">
                      <?= $index < 10 ? '0' . $index : $index ?>. <?= get_sub_field('questions'); ?>
                      <span class="accordion-icon"></span>
                    </button>
                  </h2>
                  <div id="collapse<?= $index ?>" class="accordion-collapse collapse <?= $index === 1 ? 'show' : '' ?>" aria-labelledby="heading<?= $index ?>" data-bs-parent="#serviceFAQ">
                    <div class="accordion-body">
                      <?= get_sub_field('answer'); ?>
                    </div>
                  </div>
                </div>
                <?php $index++;
                endwhile; ?>
              </div>
            </div>
          </section>
          <?php endif; ?>

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
                      <path d="M2.48674 10.4421L8.23199 16.1873C8.3492 16.3045 8.50817 16.3704 8.67393 16.3704C8.83969 16.3704 8.99866 16.3045 9.11587 16.1873C9.23308 16.0701 9.29893 15.9111 9.29893 15.7454C9.29893 15.5796 9.23308 15.4206 9.11587 15.3034L4.43736 10.6249L17.0708 10.6255C17.2367 10.6255 17.3957 10.5596 17.513 10.4423C17.6303 10.325 17.6962 10.166 17.6962 10.0001C17.6962 9.83427 17.6303 9.67521 17.513 9.55793C17.3957 9.44066 17.2367 9.37477 17.0708 9.37477L4.43737 9.37532L9.11587 4.69682C9.23308 4.57961 9.29893 4.42064 9.29893 4.25488C9.29893 4.08912 9.23308 3.93014 9.11587 3.81293C8.99866 3.69572 8.83969 3.62988 8.67393 3.62988C8.50817 3.62988 8.3492 3.69572 8.23199 3.81293L2.48674 9.55818C2.36953 9.67539 2.30369 9.83436 2.30369 10.0001C2.30369 10.1659 2.36953 10.3249 2.48674 10.4421Z" fill="url(#paint0_linear_430_1855)" />
                      <defs>
                        <linearGradient id="paint0_linear_430_1855" x1="6.0224" y1="6.02252" x2="13.9776" y2="13.9777" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#43CEA2" />
                          <stop offset="1" stop-color="#185A9D" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <div class="digital-button-next">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.5133 10.4421L11.768 16.1873C11.6508 16.3045 11.4918 16.3704 11.3261 16.3704C11.1603 16.3704 11.0013 16.3045 10.8841 16.1873C10.7669 16.0701 10.7011 15.9111 10.7011 15.7454C10.7011 15.5796 10.7669 15.4206 10.8841 15.3034L15.5626 10.6249L2.92918 10.6255C2.76333 10.6255 2.60427 10.5596 2.48699 10.4423C2.36971 10.325 2.30383 10.166 2.30383 10.0001C2.30383 9.83427 2.36972 9.67521 2.48699 9.55793C2.60427 9.44066 2.76333 9.37477 2.92918 9.37477L15.5626 9.37532L10.8841 4.69682C10.7669 4.57961 10.7011 4.42064 10.7011 4.25488C10.7011 4.08912 10.7669 3.93014 10.8841 3.81293C11.0013 3.69572 11.1603 3.62988 11.3261 3.62988C11.4918 3.62988 11.6508 3.69572 11.768 3.81293L17.5133 9.55818C17.6305 9.67539 17.6963 9.83436 17.6963 10.0001C17.6963 10.1659 17.6305 10.3249 17.5133 10.4421Z" fill="url(#paint0_linear_430_1853)" />
                      <defs>
                        <linearGradient id="paint0_linear_430_1853" x1="13.9776" y1="6.02252" x2="6.0224" y2="13.9777" gradientUnits="userSpaceOnUse">
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
                      if ($post->post_name === 'mobile-app-development-company') {
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
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" width="500" height="300">
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
                    <path d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z" fill="#00BEC5"></path>
                  </svg>
                  View Portfolio
                </a>
              </div>
            </div>
          </section>
          <!-- Digital Creations slider end -->

        </main><!-- #main -->

    <?php else : ?>
        <!-- =========================================================================
        LEGACY SERVICES TEMPLATE
        ========================================================================= -->
        <!-- Banner Section Start -->
        <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
          <div class="container">
            <div class="banner-section-content content-with-img">
              <div class="connect-section">
                <div class="heading_section text-left">
                  <h1 class="section-title">
                    <?php the_title(); ?>
                  </h1>
                  <div class="section-description">
                    <?php 
                    $desc = get_the_content();
                    if (empty($desc)) {
                        $desc = get_field('banner_text2') ?: get_field('cat_tech_description');
                    }
                    echo wp_kses_post($desc);
                    ?>
                  </div>

                </div>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact-us'))); ?>" class="button button-primary">
                  Speak to our expert
                  <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23Z"
                      fill="url(#paint0_linear_507_314_legacy)"></path>
                    <path
                      d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                      fill="white"></path>
                    <defs>
                      <linearGradient id="paint0_linear_507_314_legacy" x1="7.80357" y1="5.75" x2="61.8887" y2="67.3571"
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
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if ($thumb_url) :
                ?>
                  <img src="<?= esc_url($thumb_url); ?>" alt="<?php the_title(); ?>" width="405" height="453" class="common-banner-bottom-image">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>
        <!-- Banner Section End -->
        <!-- Service Box Start -->
        <section class="section section-inner section-webdevservies bg-sky rightbottomart">
           <div class="container-fluid">
              <div class="section-top-content text-center">
                 <h2><?= the_title(); ?></h2>
                 <p><?php 
                    $desc = get_the_content();
                    if (empty($desc)) {
                        $desc = get_field('banner_text2') ?: get_field('cat_tech_description');
                    }
                    echo wp_kses_post($desc);
                 ?></p>
              </div>
              <div class="serviceboxwrapper">
                 <div class="serviceboxlist">
                    <?php 
                    $boxes = get_field('small_services_boxes');
                    $service_boxes = get_field('service_box');
                    if (is_array($boxes) && !empty($boxes)) :
                       foreach ($boxes as $box) : 
                           $box_title = isset($box['title']) ? $box['title'] : '';
                           $box_icon = isset($box['icon']) ? $box['icon'] : '';
                           $box_link = isset($box['link']) ? $box['link'] : '';
                           ?>
                           <div class="serviceboxcol">
                              <?php if (!empty($box_link)) : ?>
                                 <a href="<?= esc_url($box_link); ?>" class="serviceboxitem-link text-decoration-none" style="color: inherit;">
                              <?php endif; ?>
                              <div class="serviceboxitem">
                                 <?php if (!empty($box_icon)) : ?>
                                    <img src="<?= esc_url($box_icon); ?>" width="50" height="50" alt="<?= esc_attr($box_title); ?>" />
                                 <?php else: ?>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" width="50" height="50" alt="<?= esc_attr($box_title); ?>" />
                                 <?php endif; ?>
                                 <h3><?= esc_html($box_title); ?></h3>
                              </div>
                              <?php if (!empty($box_link)) : ?>
                                 </a>
                              <?php endif; ?>
                           </div>
                       <?php endforeach;
                    elseif (is_array($service_boxes) && !empty($service_boxes)) :
                       foreach ($service_boxes as $box) : 
                           $box_title = isset($box['service_box_title']) ? $box['service_box_title'] : '';
                           $box_image = isset($box['service_box_image']) ? $box['service_box_image'] : '';
                           $box_info = isset($box['service_box_info']) ? $box['service_box_info'] : '';
                           $box_link = isset($box['link']) ? $box['link'] : '';
                           if (is_numeric($box_image)) {
                               $box_image = wp_get_attachment_url($box_image);
                           }
                           ?>
                           <div class="serviceboxcol">
                              <?php if (!empty($box_link)) : ?>
                                 <a href="<?= esc_url($box_link); ?>" class="serviceboxitem-link text-decoration-none" style="color: inherit;">
                              <?php endif; ?>
                              <div class="serviceboxitem">
                                 <img src="<?= esc_url($box_image); ?>" width="50" height="50" alt="<?= esc_attr($box_title); ?>" />
                                 <h3><?= esc_html($box_title); ?></h3>
                                 <p><?= esc_html($box_info); ?></p>
                              </div>
                              <?php if (!empty($box_link)) : ?>
                                 </a>
                              <?php endif; ?>
                           </div>
                       <?php endforeach;
                    endif; ?>
                 </div>
              </div>
           </div>
        </section>
        <!--Web Services ENDS-->
        
        <?php $post_type = 'our_work';
        $taxonomies = get_object_taxonomies(array('post_type' => $post_type));
        foreach ($taxonomies as $taxonomy) :
           $terms = get_terms(array('taxonomy' => 'our_work_cat'));
           $post_obj = get_the_title();
           foreach ($terms as $term) :
              $cat_name = $term->name;
              if ($cat_name == $post_obj) {
        ?>
                 <?php
                 $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => -1,  //show all posts
                    'tax_query' => array(
                       array(
                          'taxonomy' => $taxonomy,
                          'field' => 'slug',
                          'terms' => $term->slug,
                          'operator' => 'IN'
                       )
                    )
                 );
                 $posts = new WP_Query($args);
                 ?>
        <?php if( ! empty($term) ) {?>
        <section class="section section-inner section-foliolist lefttopart">
           <div class="container-fluid">
              <div class="section-head text-center">
                 <h2><?= the_title(); ?> Portfolio</h2>
                 <p class="section-head--desc"><?= get_field('portfolio_info') ?></p>
              </div>
              <?php }?>
                       <?php
                       $num = 1;
                       while ($posts->have_posts()) : $posts->the_post();
                          $id = get_the_ID();
                          $url_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
                          <?php if ($num % 2 == 1) { ?>
                             <div class="portfolio-blocks">
                                <div class="portfolio-row">
                                   <div class="portfolio-img">
                                      <img src="<?= $url_img ?>" width="510" height="410" alt="<?= the_title(); ?>" title="<?= the_title(); ?>" />
                                   </div>
                                   <div class="portfolio-content">
                                      <h3><?= the_title(); ?></h3>
                                      <p><?= the_content(); ?></p>
                                      <a class="bttn__link bttn__link-black" href="<?= get_field("button_url", $id); ?>">
                                         <span><?= get_field("button_text", $id); ?></span>
                                         <i class="icon-arrow-right"></i>
                                      </a>
                                   </div>
                                </div>
                             <?php } else { ?>
                                <div class="portfolio-row">
                                   <div class="portfolio-img">
                                      <img src="<?= $url_img ?>" width="510" height="410" alt="<?= the_title(); ?>" title="<?= the_title(); ?>" />
                                   </div>
                                   <div class="portfolio-content">
                                      <h3><?= the_title(); ?></h3>
                                      <p><?= the_content(); ?></p>
                                      <a class="bttn__link bttn__link-black" href="<?= get_field("button_url", $id); ?>">
                                         <span><?= get_field("button_text", $id); ?></span>
                                         <i class="icon-arrow-right"></i>
                                      </a>
                                   </div>
                                </div>
                             <?php }
                          $num++; ?>
                          <?php endwhile;
                       wp_reset_postdata(); ?>
                             </div>
                          <?php } ?>
                    <?php endforeach;
              endforeach; ?>
           </div>
        </section>
        
        <section class="section engagement-modal removearts">
           <div class="container">
              <div class="section-top-content text-center">
                 <h2><?= get_field('title'); ?></h2>
                 <p><?= get_field('choose_us_info'); ?></p>
              </div>
              <div class="engagement-modal-main">
                 <div class="row">
                    <?php
                    if (have_rows('choose_us_list')) :
                       while (have_rows('choose_us_list')) : the_row();
                    ?>
                          <div class="col-lg-3 col-sm-6 col-12 text-center">
                             <div class="icon-box">
                                <img src="<?= get_sub_field('list_image'); ?>" alt="<?= get_sub_field('list_title'); ?>" />
                             </div>
                             <h4><?= get_sub_field('list_title'); ?></h4>
                             <p><?= get_sub_field('list_info'); ?></p>
                          </div>
                    <?php
                       endwhile;
                    endif;
                    ?>
                 </div>
              </div>
           </div>
        </section>
        
        <section class="section industry-focus lefttopart rightbottomart">
           <div class="container">
              <div class="section-top-content text-center">
                 <h2><?= get_field('serve_title'); ?></h2>
                 <p>
                    <?= get_field('serve_info'); ?>
                  </p>
               </div>

               <div class="industry-focus-main">
                  <div class="row">
                     <?php while (have_rows('industries', 'options')) : the_row(); ?>
                        <div class="col-lg-3 col-sm-6 col-6">
                           <div class="media">
                              <img src="<?= get_sub_field('industries_image', 'options'); ?>" alt="<?= get_sub_field('industries_name', 'options'); ?>" />
                              <div class="media-body">
                                 <h4><?= get_sub_field('industries_parentage', 'options'); ?>%</h4>
                                 <p><?= get_sub_field('industries_name', 'options'); ?></p>
                              </div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            </div>
         </section>

         <section class="section section-sitecta">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-12 col-sm-auto col-md-8 col-xl-6 text-center text-md-left">
                     <h2 class="sitecta-title"><?= get_field('work_title'); ?></h2>
                  </div>
                  <div class="col-auto mt-4 pt-2 mt-lg-0">
                     <a href="<?= get_permalink(263); ?>" class="bttn bttn-primary bttn-primary-black bttn-wide--cta" title="Hire Top Developers">
                        <span class="bttn-right-arrow"><?= get_field('work_button_name'); ?></span>
                     </a>
                  </div>
               </div>
            </div>
         </section>
    <?php endif; ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>