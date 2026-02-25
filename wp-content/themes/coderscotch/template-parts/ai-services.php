<?php /* Template Name: AI Services Page Template */
get_header();
?>
<section class="hero hero--inner hero--service-ai">
    <div class="container-large container-fluid">
        <div class="hero-wrapper">
            <div class="ourservices-head about-us hero__head">
                <div class="section-subhead pb-3"><?= the_title(); ?></div>
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="section section-service-page-top-ai explore-ai-section">
<div class="container-fluid container-large">
    <div class="ourblog-grid">
                <?php $args = array(
                    'post_type' => 'ai_services',
                    'posts_per_page' => 6,
                    'orderby'        => 'ID',
                    'order'          => 'ASC',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );
                $the_query = new WP_Query($args);
                ?>
               <?php 
                while ($the_query->have_posts()) : $the_query->the_post(); 
                    $featured_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
                ?>
                <div class="ourblog-block">
                    <div class="ourblog-img">
                        <?php if($featured_img) {?>
                    <img src="<?= $featured_img ?>" alt="<?= $alt_text ?>" title="<?= get_the_title() ?>">
                   <?php } ?>
                    </div>
                    <div class="ourblog-body">
                        <h3 class="ourblog-title">
                            <?= the_title(); ?> 
                        </h3>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
     
            <?php
                    $num++;
                endwhile;
                wp_reset_postdata();
           ?>
    </div>
</div>
</section>
<section class="section innovation-ai-tools">
    <div class="container">
        <h2 class="text-center innovation-section-title">Transforming Ideas with Next-Gen <br> AI Technologies</h2>
        <div class="innovationai-grid">
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/tensorflow-icon.svg" alt="TensorFlow" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">TensorFlow</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/pytorch-icon.svg" alt="pytorch" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">PyTorch</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/opencv-icon.svg" alt="opencv" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">OpenCV</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/chatgpt-icon.svg" alt="OpenAI" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">OpenAI</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/gemini-ai-icon.svg" alt="Gemini" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">Gemini</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/claude-icon.svg" alt="Claude" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">Claude</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/perplexity-ai-icon.svg" alt="Perplexity AI" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">Perplexity AI</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/keras-icon.svg" alt="Keras" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title"> Keras</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/hugging-face-icon.svg" alt="Hugging Face" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title">Hugging Face</h3>
                </div>
            </div>
            <div class="innovationai-card">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/tech-ai-icon/n8n-icon.svg" alt="N8n" width="85" height="85" alt="tensorflow"/>
                <div class="innovationai-card-content">
                    <h3 class="innovationai-card-title"> N8n</h3>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section section-faq">
    <div class="container">
        <h2 class="text-center"><?= get_field('questions_title'); ?></h2>
        <div class="section-faq-main" id="accordion">
            <?php
            if (have_rows('questions_list')) :
                $index = 1;
                while (have_rows('questions_list')) : the_row(); ?>
                    <div class="card">
                        <div class="card-header border-0 p-0" id="faq<?= $index ?>">
                            <h5 class="mb-0" data-toggle="collapse" data-target="#faq-collapse<?= $index ?>" aria-expanded="false" aria-controls="faq-collapse<?= $index ?>">
                                <i class="fas fa-angle-right"></i><?= get_sub_field('questions'); ?>
                            </h5>
                        </div>
                        <div id="faq-collapse<?= $index ?>" class="collapse" aria-labelledby="faq<?= $index ?>" data-parent="#accordion">
                            <div class="card-body px-0">
                                <?= get_sub_field('answer'); ?>
                            </div>
                        </div>
                    </div>
            <?php
                    $index++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<section class="section industry-focus ai-industry-focus">
    <div class="container">
        <div class="text-center">
            <h2><?= get_field('serve_title', 77); ?></h2>
            <p>
                CoderScotch delivers AI-powered solutions tailored to diverse industries, including healthcare, finance, legal, logistics, education, and retail. Our expertise spans intelligent automation, predictive analytics, chatbots, and machine learning applications that solve real business challenges. By blending innovation with industry knowledge, we help organizations drive efficiency, improve decision-making, and accelerate growth with AI.
            </p>
        </div>
        <div class="industry-focus-main">
            <div class="row">
                <?php while (have_rows('industries', 'options')) : the_row(); ?>
                    <div class="col-lg-3 col-sm-6 col-6">
                        <div class="media">
                            <img src="<?= get_sub_field('industries_image', 'options'); ?>" alt="<?= get_sub_field('industries_name', 'options'); ?>" />
                            <div class="media-body">
                                
                                <p><?= get_sub_field('industries_name', 'options'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<section class="section section-contact bg-lightblue ai-contact-section">
    <div class="container">
        <div class="section-contact-main">
            <div class="section-contact-form  order-2 order-md-1">
                <h2>Tell us about your AI development needs</h2>
                <p>Our AI experts can join your team in less than two weeks and start delivering secure, scalable solutions.</p>
            </div>
            <div class="section-contact-author text-center  order-1 order-md-2">
               <!--  <h2><?=get_field('contact_name');?></h2>
                <p><?=get_field('name_info');?></p> -->
                <a href="mailto:<?=get_field('button_url');?>" class="bttn bttn-white bg-transparent">
                    <?=get_field('button_name');?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- TechStack Logos ENDS -->
<?php get_footer(); ?>

</html>