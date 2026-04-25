<?php
/**
 * The template for displaying the Product Engineering category page
 *
 * @package coderscotch
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- Banner Section Start -->
  <section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
        <div class="connect-section">
          <div class="heading_section text-left">
            <h1 class="section-title">
              Product Engineering <span class="highlight-text"> Services </span>
            </h1>
            <p class="section-description">
              At Coder Scotch, we help startups, enterprises, and ISVs turn ideas into scalable, high-performance digital products. From concept to launch and beyond, we deliver end-to-end product engineering with a strong focus on speed, scalability, and long-term success.
            </p>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-engineering-banner.png" alt="Product Engineering banner image" width="405" height="453" class="common-banner-bottom-image">
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
            <h2 class="section-title">Build Products <span class="highlight-text"> That Scale </span></h2>
            <p class="section-description">
              We don’t just write code — we engineer products that solve real business problems. Whether you're building an MVP, modernizing an existing system, or scaling to millions of users, we bring the right mix of strategy, design, and engineering.
            </p>
          </div>
          <div class="tech-main-image-wrapper mt-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technological-focus-img.png" width="570" height="440" alt="Product Engineering" class="technological-focus-img rounded-4 shadow-lg">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="tech-feature-cards-stack">
            <!-- Card 1 -->
            <div class="tech-feature-card">
              <div class="card-icon-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" width="40" height="40" alt="MVP">
              </div>
              <div class="card-content">
                <h4 class="tech-card-title">MVP to Production-ready platforms</h4>
                <p class="tech-card-description">We take your concept from a lean MVP to a robust, production-grade system designed for the long haul.</p>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="tech-feature-card">
              <div class="card-icon-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon2.svg" width="40" height="40" alt="Architecture">
              </div>
              <div class="card-content">
                <h4 class="tech-card-title">Scalable architecture & clean code</h4>
                <p class="tech-card-description">We build systems that grow with you. Clean, maintainable code is our baseline, not an afterthought.</p>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="tech-feature-card">
              <div class="card-icon-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon3.svg" width="40" height="40" alt="AI">
              </div>
              <div class="card-content">
                <h4 class="tech-card-title">AI-powered and data-driven solutions</h4>
                <p class="tech-card-description">Integrating intelligent workflows and automation to keep your business ahead of the curve.</p>
              </div>
            </div>
            <!-- Card 4 -->
            <div class="tech-feature-card">
              <div class="card-icon-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon4.svg" width="40" height="40" alt="Agile">
              </div>
              <div class="card-content">
                <h4 class="tech-card-title">Fast iterations with agile delivery</h4>
                <p class="tech-card-description">Two-week sprints and real demos. You see working software every step of the way.</p>
              </div>
            </div>
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
        <h2 class="section-title">Our Product Engineering <span class="highlight-text"> Capabilities </span></h2>
      </div>

      <div class="healthcare-navigator-wrapper mt-5">
        <div class="row gt-0">
          <div class="col-lg-4">
            <div class="navigator-sidebar-list nav flex-column nav-pills" id="product-pills-tab" role="tablist" aria-orientation="vertical">

              <button class="nav-link active" id="pills-strategy-tab" data-bs-toggle="pill" data-bs-target="#pills-strategy" type="button" role="tab" aria-controls="pills-strategy" aria-selected="true">
                <span class="nav-number">01</span>
                <span class="nav-label">Product Strategy & Discovery</span>
                <span class="nav-accent"></span>
              </button>

              <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill" data-bs-target="#pills-design" type="button" role="tab" aria-controls="pills-design" aria-selected="false">
                <span class="nav-number">02</span>
                <span class="nav-label">UI/UX Design</span>
                <span class="nav-accent"></span>
              </button>

              <button class="nav-link" id="pills-dev-tab" data-bs-toggle="pill" data-bs-target="#pills-dev" type="button" role="tab" aria-controls="pills-dev" aria-selected="false">
                <span class="nav-number">03</span>
                <span class="nav-label">Web & Mobile Development</span>
                <span class="nav-accent"></span>
              </button>

              <button class="nav-link" id="pills-ai-tab" data-bs-toggle="pill" data-bs-target="#pills-ai" type="button" role="tab" aria-controls="pills-ai" aria-selected="false">
                <span class="nav-number">04</span>
                <span class="nav-label">AI & Automation Integration</span>
                <span class="nav-accent"></span>
              </button>

              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-cloud" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
                <span class="nav-number">05</span>
                <span class="nav-label">Cloud & DevOps</span>
                <span class="nav-accent"></span>
              </button>

              <button class="nav-link" id="pills-maintenance-tab" data-bs-toggle="pill" data-bs-target="#pills-maintenance" type="button" role="tab" aria-controls="pills-maintenance" aria-selected="false">
                <span class="nav-number">06</span>
                <span class="nav-label">Maintenance & Scaling</span>
                <span class="nav-accent"></span>
              </button>

            </div>
          </div>

          <div class="col-lg-8">
            <div class="tab-content healthcare-content-display h-100" id="product-pills-tabContent">

              <!-- Tab 1: Strategy -->
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
                    <ul class="feature-checklist list-unstyled mt-3">
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Idea Validation & Market Research</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Technical Audit & Constraint Mapping</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Strategic Product Roadmap</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Business Goal Alignment</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Tab 2: Design -->
              <div class="tab-pane fade h-100" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                <div class="content-card glass-premium">
                  <div class="card-header-flex">
                    <div class="service-icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon2.svg" alt="Design">
                    </div>
                    <div class="header-text">
                      <h3 class="display-title">UI/UX Design</h3>
                      <p class="tagline">Intuitive & Engaging Experiences</p>
                    </div>
                  </div>
                  <div class="card-body-content">
                    <p class="summary-text">Clean, modern, and intuitive designs focused on user experience and engagement using industry-leading tools like Figma.</p>
                    <ul class="feature-checklist list-unstyled mt-3">
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> User Experience (UX) Architecture</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Visual Interface (UI) Design</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Interactive Prototyping</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> User Testing & Feedback Loops</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Tab 3: Development -->
              <div class="tab-pane fade h-100" id="pills-dev" role="tabpanel" aria-labelledby="pills-dev-tab">
                <div class="content-card glass-premium">
                  <div class="card-header-flex">
                    <div class="service-icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon3.svg" alt="Dev">
                    </div>
                    <div class="header-text">
                      <h3 class="display-title">Web & Mobile Development</h3>
                      <p class="tagline">Modern Tech Stacks, High Performance</p>
                    </div>
                  </div>
                  <div class="card-body-content">
                    <p class="summary-text">We build high-quality applications using modern tech stacks for web, mobile, and backend systems.</p>
                    <div class="row g-4 g-lg-5 mt-2">
                      <!-- Web -->
                      <div class="col-md-4">
                        <h5 class="f18 cs_QuicksandBold color_green mb-4">Web Development</h5>
                        <div class="tech-item mb-4">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">React / Next.js</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">High-speed SSR & static site generation</p>
                        </div>
                        <div class="tech-item">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">Laravel / PHP</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">Secure, robust, and scalable backends</p>
                        </div>
                      </div>

                      <!-- Mobile -->
                      <div class="col-md-4">
                        <h5 class="f18 cs_QuicksandBold color_green mb-4">Mobile Apps</h5>
                        <div class="tech-item mb-4">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">React Native</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">Native performance for iOS & Android</p>
                        </div>
                        <div class="tech-item">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">Flutter</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">Rich, expressive UIs from one codebase</p>
                        </div>
                      </div>

                      <!-- Backend -->
                      <div class="col-md-4">
                        <h5 class="f18 cs_QuicksandBold color_green mb-4">Backend & Cloud</h5>
                        <div class="tech-item mb-4">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">Node.js / Express</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">Fast, scalable event-driven services</p>
                        </div>
                        <div class="tech-item">
                          <div class="d-flex align-items-center mb-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="16" height="16" class="me-2" alt="check" />
                            <span class="f16 cs_MuliBold text-dark">AWS / Vercel</span>
                          </div>
                          <p class="small-text mb-0 ps-4 opacity-75">Serverless & globally optimized hosting</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tab 4: AI -->
              <div class="tab-pane fade h-100" id="pills-ai" role="tabpanel" aria-labelledby="pills-ai-tab">
                <div class="content-card glass-premium">
                  <div class="card-header-flex">
                    <div class="service-icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon4.svg" alt="AI">
                    </div>
                    <div class="header-text">
                      <h3 class="display-title">AI & Automation Integration</h3>
                      <p class="tagline">Intelligent Products, Smarter Workflows</p>
                    </div>
                  </div>
                  <div class="card-body-content">
                    <p class="summary-text">Leverage AI to enhance product capabilities and automate complex clinical or business processes.</p>
                    <ul class="feature-checklist list-unstyled mt-3">
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> AI Agents & Workflow Automation</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Data Analytics & Real-time Insights</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Predictive Systems & ML Models</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Generative AI Integration</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Tab 5: Cloud -->
              <div class="tab-pane fade h-100" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                <div class="content-card glass-premium">
                  <div class="card-header-flex">
                    <div class="service-icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon5.svg" alt="Cloud">
                    </div>
                    <div class="header-text">
                      <h3 class="display-title">Cloud & DevOps</h3>
                      <p class="tagline">Secure, Scalable & Optimized</p>
                    </div>
                  </div>
                  <div class="card-body-content">
                    <p class="summary-text">Secure, scalable, and optimized infrastructure to ensure your product performs under any load.</p>
                    <ul class="feature-checklist list-unstyled mt-3">
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> AWS, Vercel & DigitalOcean Hosting</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Automated CI/CD Pipelines</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Infrastructure as Code (IaC)</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Performance & Security Optimization</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Tab 6: Maintenance -->
              <div class="tab-pane fade h-100" id="pills-maintenance" role="tabpanel" aria-labelledby="pills-maintenance-tab">
                <div class="content-card glass-premium">
                  <div class="card-header-flex">
                    <div class="service-icon-box">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" alt="Maintenance">
                    </div>
                    <div class="header-text">
                      <h3 class="display-title">Maintenance & Scaling</h3>
                      <p class="tagline">Long-term Success & Growth</p>
                    </div>
                  </div>
                  <div class="card-body-content">
                    <p class="summary-text">We support your product post-launch with continuous improvements, active monitoring, and scaling for growth.</p>
                    <ul class="feature-checklist list-unstyled mt-3">
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> 24/7 Monitoring & Incident Response</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Regular Security Updates & Patching</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Feature Enhancements & Optimization</li>
                      <li class="mb-2 d-flex align-items-start"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-verified-icon.svg" width="18" height="18" class="me-2 mt-1" alt="check" /> Scalability Audits & Implementation</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Industries Section Start -->
  <section class="section section-space-tb bg-white">
    <div class="container">
      <div class="heading_section text-center mb-5">
        <h2 class="section-title">Industries <span class="highlight-text"> We Serve </span></h2>
        <p class="section-description mx-auto mw-740">We are architects of innovation across industries. Our profound expertise in crafting industry-specific solutions redefines excellence.</p>
      </div>

      <div class="industry-grid-wrapper border-top border-start">
        <div class="row g-0">
          <?php
          $industries = [
              ['name' => 'Healthcare', 'icon' => 'specialized-ser-icon2.svg'],
              ['name' => 'Fintech', 'icon' => 'specialized-ser-icon3.svg'],
              ['name' => 'Retail', 'icon' => 'bag-icon.svg'],
             
              ['name' => 'Banking', 'icon' => 'medal-icon.svg'],
              ['name' => 'Supply Chain', 'icon' => 'specialized-ser-icon6.svg'],
              ['name' => 'Transportation', 'icon' => 'specialized-ser-icon7.svg'],
              ['name' => 'ECommerce', 'icon' => 'specialized-ser-icon4.svg'],
              ['name' => 'Real Estate', 'icon' => 'key-icon.svg'],
              
              ['name' => 'Automotive', 'icon' => 'specialized-ser-icon5.svg'],
             
              ['name' => 'Oil & Gas', 'icon' => 'specialized-ser-icon1.svg'],
              ['name' => 'Education', 'icon' => 'student-cap-icon.svg'],
              ['name' => 'AI and ML', 'icon' => 'coding-icon.svg'],
          ];

          foreach ($industries as $industry) :
              $icon_path = get_template_directory_uri() . '/assets/images/icon/' . $industry['icon'];
          ?>
            <div class="col-lg-4 col-md-6 border-bottom border-end">
              <div class="industry-grid-item p-4 d-flex align-items-center transition-all bg-white shadow-hover-inset">
                <div class="industry-grid-icon me-3">
                  <div class="theme-gradient-icon" style="-webkit-mask-image: url('<?php echo $icon_path; ?>'); mask-image: url('<?php echo $icon_path; ?>');"></div>
                </div>
                <h4 class="f18 cs_QuicksandBold text-dark mb-0"><?php echo $industry['name']; ?></h4>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries Section End -->

  <!-- Our Approach Section Start -->
  <section class="section section-space-tb bg-light-soft">
    <div class="container">
      <div class="heading_section text-center mb-5">
        <h2 class="section-title">Our <span class="highlight-text"> Approach </span></h2>
        <p class="section-description mx-auto mw-740">A robust delivery framework focused on transparency and excellence.</p>
      </div>
      
      <div class="row g-4 justify-content-center">
        <div class="col-lg-10">
          <div class="row g-4">
            <!-- Step 1 -->
            <div class="col-md-6">
              <div class="tech-feature-card h-100 bg-white border-0 shadow-sm p-4 rounded-4 d-flex align-items-start">
                <div class="card-icon-box me-3 flex-shrink-0 bg-sky p-3 rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon1.svg" width="32" height="32" alt="Discovery">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title cs_QuicksandBold f20 text-dark mb-2">01. Discovery & Planning</h4>
                  <p class="tech-card-description small-text opacity-75 mb-0">We align technology with your business goals through deep market research and strategic roadmapping.</p>
                </div>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-6">
              <div class="tech-feature-card h-100 bg-white border-0 shadow-sm p-4 rounded-4 d-flex align-items-start">
                <div class="card-icon-box me-3 flex-shrink-0 bg-sky p-3 rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon2.svg" width="32" height="32" alt="Design">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title cs_QuicksandBold f20 text-dark mb-2">02. UI/UX Design</h4>
                  <p class="tech-card-description small-text opacity-75 mb-0">Our designers create intuitive, user-centric interfaces that enhance engagement and define your brand identity.</p>
                </div>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-6">
              <div class="tech-feature-card h-100 bg-white border-0 shadow-sm p-4 rounded-4 d-flex align-items-start">
                <div class="card-icon-box me-3 flex-shrink-0 bg-sky p-3 rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon3.svg" width="32" height="32" alt="Dev">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title cs_QuicksandBold f20 text-dark mb-2">03. Development & Integration</h4>
                  <p class="tech-card-description small-text opacity-75 mb-0">We build scalable architectures using modern tech stacks, ensuring seamless integration with your existing systems.</p>
                </div>
              </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-6">
              <div class="tech-feature-card h-100 bg-white border-0 shadow-sm p-4 rounded-4 d-flex align-items-start">
                <div class="card-icon-box me-3 flex-shrink-0 bg-sky p-3 rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon4.svg" width="32" height="32" alt="Testing">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title cs_QuicksandBold f20 text-dark mb-2">04. Testing & Quality Assurance</h4>
                  <p class="tech-card-description small-text opacity-75 mb-0">Rigorous automated and manual testing to guarantee a bug-free, secure, and high-performance product.</p>
                </div>
              </div>
            </div>

            <!-- Step 5 -->
            <div class="col-md-6">
              <div class="tech-feature-card h-100 bg-white border-0 shadow-sm p-4 rounded-4 d-flex align-items-start">
                <div class="card-icon-box me-3 flex-shrink-0 bg-sky p-3 rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-card-icon5.svg" width="32" height="32" alt="Launch">
                </div>
                <div class="card-content">
                  <h4 class="tech-card-title cs_QuicksandBold f20 text-dark mb-2">05. Launch & Scaling</h4>
                  <p class="tech-card-description small-text opacity-75 mb-0">Continuous monitoring and post-launch support to ensure your product scales effortlessly with your user base.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Approach Section End -->
  <!-- Our Approach Section End -->
  

</main><!-- #main -->

  <!-- Slider Initialization Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof Swiper !== 'undefined') {
        new Swiper('.industry-slider', {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            }
          }
        });
      }
    });
  </script>

<?php get_footer(); ?>
