<?php /* Template Name: AI Services Page Template */
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
            <h1 class="section-title">
              Explore AI with 
              <span class="highlight-text"> Coder Scotch </span>
            </h1>
            <p class="section-description">
              <?= the_content(); ?> 
            </p>

          </div>
          <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-primary mx-auto mb-5">
            Talk to Our AI Experts
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

<section class="section-space-tb service-listing-all-service-section">
    <div class="container">
        <div class="heading_section text-center">
            <h2 class="section-title">Harness the power of <span class="highlight-text">Generative AI</span></h2>
            <p class="section-description">From optimizing operations to creating new revenue streams, our AI services help you lead in the digital era.</p>
        </div>
        <div class="all-service-card-listing">
            <?php
            $args = array(
                'post_type' => 'ai_services',
                'posts_per_page' => -1,
                'orderby'        => 'ID',
                'order'          => 'ASC',
                'post_status' => 'publish',
                'suppress_filters' => true
            );
            $the_query = new WP_Query($args);
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $featured_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
                $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
            ?>
                <div class="service-card-item">
                    <div class="service-card-image mb-4">
                        <?php if ($featured_img) { ?>
                            <img src="<?= $featured_img ?>" alt="<?= $alt_text ?>" class="img-fluid w-100" style="height: 250px; object-fit: cover; border-radius: 12px;">
                        <?php } ?>
                    </div>
                    <div class="service-card-body">
                        <h3 class="service-title" style="font-size: 22px;">
                            <?php the_title(); ?>
                        </h3>
                        <p class="service-description" style="font-size: 16px;"><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section class="section-space-tb innovation-ai-tools-section">
    <div class="container">
        <div class="heading_section text-center">
            <h2 class="section-title">Transforming Ideas with <br><span class="highlight-text">Next-Gen AI Technologies</span></h2>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4 justify-content-center">
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/tensorflow-icon.svg" alt="TensorFlow" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">TensorFlow</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/pytorch-icon.svg" alt="pytorch" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">PyTorch</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/opencv-icon.svg" alt="opencv" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">OpenCV</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/chatgpt-icon.svg" alt="OpenAI" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">OpenAI</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/gemini-ai-icon.svg" alt="Gemini" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">Gemini</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/claude-icon.svg" alt="Claude" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">Claude</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/perplexity-ai-icon.svg" alt="Perplexity AI" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">Perplexity AI</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/keras-icon.svg" alt="Keras" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">Keras</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/hugging-face-icon.svg" alt="Hugging Face" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">Hugging Face</h3>
                </div>
            </div>
            <div class="col">
                <div class="innovationai-card text-center">
                    <div class="innovationai-icon-box mx-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/n8n-icon.svg" alt="N8n" width="45" height="45" class="mx-auto" />
                    </div>
                    <h3 class="innovationai-card-title">N8n</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq-accordion-section section-space-tb">
    <div class="container">
        <div class="heading_section text-center">
            <h2 class="section-title">
                Frequently Asked <span class="highlight-text">Questions</span>
            </h2>
        </div>
        <div class="faq-accordion" id="aiServicesFAQ">
            <?php
            if (have_rows('questions_list')) :
                $index = 1;
                while (have_rows('questions_list')) : the_row(); ?>
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

<?php get_footer(); ?>