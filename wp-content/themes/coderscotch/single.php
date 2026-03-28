<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package coderscotch
 */

get_header();
?>

<?php
while (have_posts()) : the_post();
    $id = get_the_ID();
    $first_name = get_the_author_meta('first_name');
    $last_name  = get_the_author_meta('last_name');
    $full_name  = trim($first_name . ' ' . $last_name);
    if (empty($full_name)) {
        $full_name = get_the_author();
    }
?>

  <!-- Blog Detail Banner Section Start -->
  <section class="blog-detail-banner-section">
    <div class="container">
      <div class="banner-section-content">
        <div class="heading_section black_font m-0">
          <h1 class="section-title m-0">
            <?php the_title(); ?>
          </h1>
          <div class="blog-detail-banner-meta mt-2">
            By <span class="blog-detail-author"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo esc_html($full_name); ?></a></span> • <?php echo get_the_date('M d, Y'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Detail Banner Section End -->

  <!-- Blog Detail Content Section Start -->
  <section class="blog-detail-content section-space-b">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="left-side-content">
            <div class="blog-detail-conetnt-box">
              <div class="blog-detail-image-link">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full', ['class' => 'blog-detail-image', 'width' => '770', 'height' => '462']); ?>
                <?php else : ?>
                  <img src="<?= get_template_directory_uri() ?>/assets/images/blog-image/blog-detail-main-image.png" width="770" height="462" alt="blog img" class="blog-detail-image">
                <?php endif; ?>
              </div>
            </div>

            <div class="blog-detail-conetnt-box">
              <?php the_content(); ?>
            </div>

            <?php
            // Using existing job_specs if available to match the box structure
            if (have_rows('job_specs', $id)) :
                while (have_rows('job_specs', $id)) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
            ?>
            <div class="blog-detail-conetnt-box">
              <?php if ($title) : ?>
                <h3 class="blog-detail-conetnt-heading "><?php echo $title; ?></h3>
              <?php endif; ?>
              <div class="blog-detail-conetnt-description d-flex align-items-start">
                <img src="<?= get_template_directory_uri() ?>/assets/images/icon/checked-icon.svg" width="28" height="28" alt="tick icon" class="blog-detail-tick-icon">
                <p><?php echo $content; ?></p>
              </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>

            <!-- Author Bio Section Start -->
            <div class="blog-author-box mt-5 p-4 d-flex align-items-center">
              <div class="author-avatar me-4">
                <?php echo get_avatar(get_the_author_meta('ID'), 100, '', '', ['class' => 'rounded-circle shadow-sm border border-2 border-white']); ?>
              </div>
              <div class="author-info">
                <h4 class="author-label text-uppercase mb-1" style="font-size: 0.8rem; letter-spacing: 1px; color: #00BEC5; font-weight: 700;">About The Author</h4>
                <h3 class="author-name mb-2" style="font-weight: 700;"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo esc_html($full_name); ?></a></h3>
                <p class="author-bio mb-0" style="color: #626262; line-height: 1.6;"><?php echo get_the_author_meta('description'); ?></p>
              </div>
            </div>
            <!-- Author Bio Section End -->

          </div>
        </div>
        <div class="col-lg-4">
          <div class="right-side-content">
            <div class="blog-detail-box-card content-box-card">
              <h3 class="blog-detail-box-card-title ">Launch Your Vision With Us</h3>
              <p class="blog-detail-box-card-desc">Join CoderScotch to unlock tech possibilities! Collaborate on innovative projects, get expert support, and turn ideas into success with your trusted partner</p>

              <a href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>" class="button button-secondary blog-box-card-btn">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="46" height="46" rx="10" fill="white"></rect>
                  <path
                    d="M28.625 18V26.125C28.625 26.2908 28.5591 26.4497 28.4419 26.5669C28.3247 26.6842 28.1657 26.75 28 26.75C27.8342 26.75 27.6753 26.6842 27.558 26.5669C27.4408 26.4497 27.375 26.2908 27.375 26.125V19.5086L18.4422 28.4422C18.3249 28.5595 18.1658 28.6253 18 28.6253C17.8341 28.6253 17.6751 28.5595 17.5578 28.4422C17.4405 28.3249 17.3746 28.1659 17.3746 28C17.3746 27.8341 17.4405 27.6751 17.5578 27.5578L26.4914 18.625H19.875C19.7092 18.625 19.5502 18.5592 19.433 18.4419C19.3158 18.3247 19.25 18.1658 19.25 18C19.25 17.8342 19.3158 17.6753 19.433 17.5581C19.5502 17.4408 19.7092 17.375 19.875 17.375H28C28.1657 17.375 28.3247 17.4408 28.4419 17.5581C28.5591 17.6753 28.625 17.8342 28.625 18Z"
                    fill="#00BEC5"></path>
                </svg>
                Inquiry Now
              </a>
            </div>
            <div class="blog-detail-box-card recent-blog-box-card">
              <h3 class="blog-detail-recent-blog-title ">Recent Blogs</h3>
              <div class="recent-blog-card-listing">
                <?php
                $recent_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'post__not_in' => array($id)
                ]);
                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                ?>
                <div class="recent-blog-card-item d-flex align-items-center">
                  <a href="<?php the_permalink(); ?>" class="blog-detail-image-link">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail([64, 60], ['class' => 'recent-blog-image']); ?>
                    <?php else : ?>
                      <img src="<?= get_template_directory_uri() ?>/assets/images/blog-image/recent-blog-img1.png" width="64" height="60" alt="blog img" class="recent-blog-image">
                    <?php endif; ?>
                  </a>
                  <div class="recent-blog-content">
                    <a href="<?php the_permalink(); ?>" class="recent-blog-card-item-title "><?php the_title(); ?></a>
                    <div class="recent-blog-date-time d-flex align-items-center">
                      <span class="recent-blog-date"><?php echo get_the_date('M d, Y'); ?></span>
                      <?php
                        $reading_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
                      ?>
                      <span class="recent-blog-date recent-blog-time"><?php echo $reading_time; ?> min</span>
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
            <div class="blog-detail-box-card recent-blog-box-card tag-blog-card">
              <h3 class="blog-detail-recent-blog-title ">Tags</h3>
              <div class="blog-card-tag-list d-flex align-items-center">
                <?php
                $tags = get_the_tags();
                if ($tags) :
                    foreach ($tags as $tag) :
                ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="blog-card-tag">
                  <span class="blog-tag-text"><?php echo $tag->name; ?></span>
                </a>
                <?php
                    endforeach;
                endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Detail Content Section End -->

<?php
endwhile;
?>

<?php
get_footer(); ?>