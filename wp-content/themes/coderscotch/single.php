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

            <!-- Share & Author Section Start -->
            <div class="blog-share-box mt-5 p-4 rounded-4 d-flex flex-column flex-md-row align-items-center justify-content-between mb-4" style="background-color: #f8f9fa;">
                <p class="mb-3 mb-md-0 fw-medium" style="color: #333; font-size: 1.1rem;">Found this post insightful? Don't forget to share it with your network!</p>
                <div class="share-icons d-flex gap-3">
                    <?php
                    $post_url = urlencode(get_permalink());
                    $post_title = urlencode(get_the_title());
                    ?>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded-circle border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded-circle border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded-circle border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                    </a>
                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo $post_url; ?>&description=<?php echo $post_title; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded-circle border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/></svg>
                    </a>
                </div>
            </div>

            <?php
            global $post;
            $author_id = $post->post_author;
            $custom_avatar = get_field('custom_avatar', 'user_' . $author_id);
            $author_linkedin = get_user_meta($author_id, 'linkedin_url', true);
            $author_desc = get_the_author_meta('description', $author_id);
            ?>
            <div class="blog-author-box p-4 p-md-5 rounded-4" style="background-color: #B5EFCE;">
              <div class="d-flex flex-column flex-md-row align-items-md-center mb-3">
                  <div class="author-avatar me-md-4 mb-3 mb-md-0 flex-shrink-0">
                    <?php if ($custom_avatar) : ?>
                        <img src="<?php echo esc_url($custom_avatar); ?>" alt="<?php echo esc_attr($full_name); ?>" class="rounded-circle shadow-sm border border-2 border-white" style="width: 80px; height: 80px; object-fit: cover;">
                    <?php else : ?>
                        <?php echo get_avatar($author_id, 80, '', '', ['class' => 'rounded-circle shadow-sm border border-2 border-white']); ?>
                    <?php endif; ?>
                  </div>
                  <div class="author-info">
                    <p class="author-label mb-1" style="color: #4a4a4a; font-size: 1rem;">Written by</p>
                    <div class="d-flex align-items-center">
                        <h3 class="author-name mb-0" style="font-weight: 700; color: #1a1a1a; font-size: 1.5rem;"><a href="<?php echo get_author_posts_url($author_id); ?>" class="text-dark text-decoration-none"><?php echo esc_html($full_name); ?></a></h3>
                        <?php if (!empty($author_linkedin) && $author_linkedin !== 'https://www.linkedin.com/') : ?>
                            <a href="<?php echo esc_url($author_linkedin); ?>" target="_blank" class="ms-3 d-flex align-items-center justify-content-center rounded-circle border border-dark text-dark" style="width: 32px; height: 32px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';" title="LinkedIn">
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                  </div>
              </div>
              <?php if (!empty($author_desc)) : ?>
              <div class="author-bio-content mt-3" style="color: #2c3e32; font-size: 1.05rem; line-height: 1.7;">
                  <?php echo wp_kses_post(nl2br($author_desc)); ?>
              </div>
              <?php endif; ?>
            </div>
            <!-- Share & Author Section End -->

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
            <div class="blog-detail-box-card recent-blog-box-card tag-blog-card d-none">
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

          <!-- Sticky Form & Share Widget (Direct child of col-lg-4 to ensure sticky works) -->
          <div class="sticky-sidebar-widget" style="position: sticky; top: 100px; padding-bottom: 40px;">
              <div class="blog-detail-box-card content-box-card sidebar-form-card" style="padding: 24px; border: 1px solid #e0e0e0; border-radius: 12px; background: #fff;">
                  <h3 class="blog-detail-box-card-title mb-3" style="font-size: 1.15rem; font-weight: 600; color: #1a1a1a;">Share Your Requirements!</h3>
                  <img src="<?= get_template_directory_uri() ?>/assets/images/blog-image/contact-us-sidebar.png" alt="Share requirements" class="img-fluid rounded-3 mb-4" style="object-fit: cover; height: 140px; width: 100%;">
                  
                  <?php echo do_shortcode('[contact-form-7 id="3593" title="Sidebar Sticky Form"]'); ?>
              </div>

              <div class="sidebar-share-section mt-4">
                  <p class="mb-3 fw-semibold" style="color: #1a1a1a; font-size: 1.05rem;">Share:</p>
                  <div class="share-icons d-flex gap-2 flex-wrap">
                      <?php
                      $post_url = urlencode(get_permalink());
                      $post_title = urlencode(get_the_title());
                      ?>
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                          <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
                      </a>
                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $post_url; ?>&title=<?php echo $post_title; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                          <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/></svg>
                      </a>
                      <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" class="share-icon-link d-flex align-items-center justify-content-center rounded border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                          <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/></svg>
                      </a>
                      <a href="mailto:?subject=<?php echo $post_title; ?>&body=<?php echo $post_url; ?>" class="share-icon-link d-flex align-items-center justify-content-center rounded border border-dark text-dark" style="width: 40px; height: 40px; transition: all 0.3s;" onmouseover="this.style.backgroundColor='#333'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#333';">
                          <svg width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
                      </a>
                  </div>
                  <a href="#" target="_blank" class="btn btn-outline-dark w-100 mt-3 d-flex align-items-center justify-content-center fw-semibold rounded-2" style="padding: 10px; font-size: 0.95rem;">
                      Preferred source on <img src="<?= get_template_directory_uri() ?>/assets/images/google-ft-box-icon.svg" alt="Google" style="width: 20px; height: 20px; margin-left: 8px; object-fit: contain;">
                  </a>
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