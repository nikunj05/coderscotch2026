<?php
/**
 * The template for displaying author pages
 *
 * @package coderscotch
 */

get_header();

// Get the author data
$author = get_queried_object();
$author_id = $author ? $author->ID : get_the_author_meta('ID');
$first_name = get_the_author_meta('first_name', $author_id);
$last_name  = get_the_author_meta('last_name', $author_id);
$full_name  = trim($first_name . ' ' . $last_name);
if (empty($full_name)) {
    $full_name = $author->display_name ?? get_the_author_meta('display_name', $author_id);
}
$description = get_the_author_meta('description', $author_id);

// Social Links (Meta with fallbacks to ensure icons show)
$facebook = get_user_meta($author_id, 'facebook_url', true) ?: 'https://www.facebook.com/';
$twitter  = get_user_meta($author_id, 'twitter_url', true)  ?: 'https://twitter.com/';
$linkedin = get_user_meta($author_id, 'linkedin_url', true) ?: 'https://www.linkedin.com/';
$upwork   = get_user_meta($author_id, 'upwork_url', true)   ?: 'https://www.upwork.com/';
?>

<!-- Author Hero Section Start -->
<section class="common-banner-section author-hero-section position-relative z-index-0 pb-5">
  <div class="container">
    <div class="banner-section-content">
      <div class="author-hero-box">
        <div class="row align-items-center justify-content-center text-center text-md-start">
          <div class="col-md-auto mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="1000">
            <div class="author-hero-avatar">
              <?php echo get_avatar($author_id, 160, '', '', ['class' => 'rounded-circle author-page-avatar']); ?>
            </div>
          </div>
          <div class="col-md-8 col-lg-9 ps-md-5" data-aos="fade-left" data-aos-duration="1000">
            <div class="author-info-content">
              <h4 class="author-profile-label">Author Profile</h4>
              <h1 class="section-title mb-3">
                <?php echo esc_html($full_name); ?>
              </h1>
              <?php if (!empty($description)) : ?>
                <p class="section-description author-page-bio mb-4">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
              
              <!-- Social Media Icons -->
              <div class="author-social-links d-flex gap-3 justify-content-center justify-content-md-start align-items-center">
                <a href="<?php echo esc_url($facebook); ?>" target="_blank" class="author-social-item" title="Facebook">
                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.83924 10.1046L9.32612 6.90508H6.28274V4.82878C6.28274 3.95362 6.70773 3.10001 8.07087 3.10001H9.45428V0.376184C9.45428 0.376184 8.19902 0.160156 6.99854 0.160156C4.49241 0.160156 2.85434 1.69279 2.85434 4.46689V6.90563H0.0683594V10.1052H2.85434V17.8402H6.28274V10.1052L8.83924 10.1046Z" fill="#00BEC5" />
                    </svg>
                </a>
                <a href="<?php echo esc_url($twitter); ?>" target="_blank" class="author-social-item" title="Twitter">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.2704 8.0452L18.1915 0H16.5514L10.5418 6.98554L5.74200 0H0.205963L7.46425 10.5634L0.205963 19H1.84613L8.19240 11.623L13.2614 19H18.7974L11.2704 8.0452H11.2704ZM9.02397 10.6564L8.28855 9.60456L2.43711 1.23469H4.95631L9.67849 7.98944L10.4139 9.04132L16.5522 17.8215H14.033L9.02397 10.6568V10.6564Z" fill="#00BEC5" />
                    </svg>
                </a>
                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" class="author-social-item" title="LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0872805 1.637C0.0872805 1.24525 0.240709 0.869549 0.513815 0.592542C0.786920 0.315535 1.15733 0.159914 1.54356 0.159914H16.0604C16.2518 0.159597 16.4414 0.197575 16.6183 0.271673C16.7952 0.345771 16.9560 0.454535 17.0914 0.591737C17.2268 0.728939 17.3342 0.891885 17.4075 1.07125C17.4807 1.25061 17.5184 1.44286 17.5183 1.637V16.3612C17.5185 16.5554 17.4809 16.7477 17.4078 16.9272C17.3347 17.1066 17.2273 17.2697 17.0920 17.407C16.9567 17.5443 16.7960 17.6533 16.6191 17.7276C16.4422 17.8018 16.2526 17.84 16.0612 17.8399H1.54356C1.35225 17.8399 1.16282 17.8017 0.986083 17.7274C0.809347 17.6531 0.648773 17.5442 0.513535 17.407C0.378296 17.2698 0.271044 17.1068 0.197906 16.9275C0.124767 16.7482 0.0871764 16.5561 0.0872805 16.362V1.637ZM6.98678 6.90082H9.3471V8.10306C9.68779 7.41193 10.5593 6.78991 11.869 6.78991C14.3799 6.78991 14.9749 8.16654 14.9749 10.6924V15.3711H12.434V11.2678C12.434 9.82927 12.0933 9.01759 11.2281 9.01759C10.0277 9.01759 9.52854 9.89275 9.52854 11.2678V15.3711H6.98678V6.90082ZM2.62904 15.261H5.17079V6.78991H2.62904V15.2602V15.261ZM5.53446 4.02701C5.53926 4.24775 5.50053 4.46723 5.42056 4.67258C5.34059 4.87794 5.22098 5.06502 5.06876 5.22285C4.91654 5.38068 4.73478 5.50608 4.53413 5.5917C4.33348 5.67731 4.11799 5.72141 3.90031 5.72141C3.68263 5.72141 3.46714 5.67731 3.26649 5.5917C3.06584 5.50608 2.88407 5.38068 2.73185 5.22285C2.57963 5.06502 2.46003 4.87794 2.38006 4.67258C2.30009 4.46723 2.26136 4.24775 2.26615 4.02701C2.27556 3.59373 2.45186 3.18142 2.75730 2.87836C3.06274 2.57531 3.47303 2.40561 3.90031 2.40561C4.32759 2.40561 4.73788 2.57531 5.04332 2.87836C5.34876 3.18142 5.52506 3.59373 5.53446 4.02701Z" fill="#00BEC5" />
                    </svg>
                </a>
                <a href="<?php echo esc_url($upwork); ?>" target="_blank" class="author-social-item" title="Upwork">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.561 3.322c-2.544 0-4.535 1.903-5.32 4.093l-.22.569-.328 1.62-.276.993c-.027-.2-.257-2.738-1.574-4.832C9.56 3.733 8.163 3.322 6.554 3.322c-2.784 0-5.042 2.258-5.042 5.042v6.314h2.246v-6.314c0-1.54 1.256-2.796 2.796-2.796 1.157 0 1.918.428 2.378 1.34s.484 2.115.484 2.822v4.948h2.246V9.73c0-.707-.024-1.314-.048-2.029-.026-.644-.067-1.125-.262-1.742l-.248-.73s-.012-.03-.027-.046l.244-.543c.531-1.396 1.76-2.522 3.242-2.522 1.83 0 3.298 1.488 3.298 3.318s-1.468 3.318-3.298 3.318c-.461 0-.91-.1-1.311-.284l-.626-.29-.444 1.546.12.062a4.872 4.872 0 0 0 2.26.541l.006-.002c3.048-.002 5.518-2.472 5.518-5.52-0.001-3.05-2.472-5.52-5.522-5.52z" fill="#00BEC5"/>
                    </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Author Hero Section End -->

<!-- Author Post Listing Section Start -->
<section class="blog-listing-section section-space80-t section-space-b">
  <div class="container">
    <div class="blog-listing-content">
      <div class="section-subtitle-box mb-5 text-center text-md-start" data-aos="fade-up">
        <h2 class="section-subtitle position-relative d-inline-block pb-3">
          All Posts by <?php echo esc_html($first_name ?: $full_name); ?>
          <span class="accent-line position-absolute start-0 bottom-0" style="width: 50px; height: 3px; background: #00BEC5;"></span>
        </h2>
      </div>
      
      <div class="ourblog-card-list d-grid">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$featured_img) {
              $featured_img = get_template_directory_uri() . '/assets/images/blog-image/blog-card-img1.png';
            }
            ?>
            <div class="ourblog-card-items" data-aos="fade-up">
              <a href="<?php the_permalink(); ?>" class="ourblog-card-items-img overflow-hidden d-block">
                <img src="<?php echo esc_url($featured_img); ?>" width="360" height="230" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid transition-transform">
              </a>
              <div class="ourblog-card-items-content">
                    <div class="ourblog-card-items-date mb-2">By <?php echo esc_html($full_name); ?> • <?php echo get_the_date('M d, Y'); ?> • <?php echo cs_estimate_reading_time(get_the_content()); ?> min</div>
                <a href="<?php the_permalink(); ?>" class="ourblog-card-items-title h5 mb-3 d-block"><?php the_title(); ?></a>
                <p class="ourblog-card-items-des mb-0"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
      </div>
      
      <!-- Pagination -->
      <nav class="pagination-theme mt-5" aria-label="Page navigation">
          <ul class="pagination justify-content-center">
              <?php
              $links = paginate_links(array(
                  'prev_next'    => true,
                  'prev_text'    => '<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2329 4.68414C10.4626 4.923 10.4551 5.30282 10.2163 5.5325L7.06605 8.5L10.2163 11.4675C10.4551 11.6972 10.4626 12.077 10.2329 12.3159C10.0032 12.5547 9.62339 12.5622 9.38452 12.3325L5.78452 8.9325C5.66688 8.81938 5.60039 8.66321 5.60039 8.5C5.60039 8.33679 5.66688 8.18062 5.78452 8.0675L9.38452 4.6675C9.62339 4.43782 10.0032 4.44527 10.2329 4.68414Z" fill="#626262" /></svg> Back',
                  'next_text'    => 'Next <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.76711 12.3159C5.53743 12.077 5.54488 11.6972 5.78374 11.4675L8.93395 8.5L5.78374 5.5325C5.54488 5.30282 5.53743 4.923 5.76711 4.68413C5.99679 4.43782 6.37661 4.43782 6.61548 4.6675L10.2155 8.0675C10.3331 8.18062 10.3996 8.33679 10.3996 8.5C10.3996 8.66321 10.3331 8.81938 10.2155 8.9325L6.61548 12.3325C6.37661 12.5622 5.99679 12.5547 5.76711 12.3159Z" fill="#626262" /></svg>',
                  'type'         => 'array',
              ));

              if ($links) {
                  foreach ($links as $link) {
                      $active_class = (strpos($link, 'current') !== false) ? ' active' : '';
                      $item_link = str_replace('page-numbers', 'page-link', $link);
                      echo '<li class="page-item' . $active_class . '">' . $item_link . '</li>';
                  }
              }
              ?>
          </ul>
      </nav>
      <?php else : ?>
        <div class="no-posts-found text-center py-5">
           <h3 class="mb-3">No posts found</h3>
           <p>This author hasn't published any posts yet. Check back later!</p>
           <a href="<?php echo home_url('/blog/'); ?>" class="button button-primary mt-4">Browse All Blogs</a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Author Post Listing Section End -->

<?php
get_footer();
?>
