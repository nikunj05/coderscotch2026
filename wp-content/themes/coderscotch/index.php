<?php
/**
 * The main template file (index.php)
 *
 * @package coderscotch
 */

get_header();

// Get the page for posts ID
$page_for_posts_id = get_option('page_for_posts');
$banner_title = 'Explore Our <span class="highlight-text"> Captivating Blog Insights </span>';
$banner_desc = 'At CoderScotch, we combine passion and precision to deliver outstanding digital solutions. <br> Our commitment to excellence drives us to exceed expectations.';
?>

<!-- Banner Section Start -->
<section class="common-banner-section position-relative z-index-0">
  <div class="container">
    <div class="banner-section-content">
      <div class="connect-section">
        <div class="heading_section text-center">
          <h1 class="section-title">
            <?php echo $banner_title; ?>
          </h1>
          <p class="section-description">
            <?php echo $banner_desc; ?>
          </p>
        </div>
      </div>
      <div class="common-banner-bottom-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-list-banner-image.svg" alt="blog list banner image" width="832" height="321" class="common-banner-bottom-image mx-auto">
      </div>
    </div>
  </div>
</section>
<!-- Banner Section End -->

<!-- Blog Listing Section Start -->
<section class="blog-listing-section section-space80-t section-space-b">
  <div class="container">
    <div class="blog-listing-content">
      <div class="ourblog-card-list d-grid">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 12,
            'paged'          => $paged,
        );
        $all_posts_query = new WP_Query($args);

        if ($all_posts_query->have_posts()) :
          while ($all_posts_query->have_posts()) : $all_posts_query->the_post();
            $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$featured_img) {
              $featured_img = get_template_directory_uri() . '/assets/images/blog-image/blog-card-img1.png';
            }
            ?>
            <div class="ourblog-card-items">
              <a href="<?php the_permalink(); ?>" class="ourblog-card-items-img">
                <img src="<?php echo esc_url($featured_img); ?>" width="360" height="230" alt="<?php echo esc_attr(get_the_title()); ?>">
              </a>
              <div class="ourblog-card-items-content">
                    <?php
                    $first_name = get_the_author_meta('first_name');
                    $last_name  = get_the_author_meta('last_name');
                    $full_name  = trim($first_name . ' ' . $last_name);
                    if (empty($full_name)) {
                        $full_name = get_the_author();
                    }
                    ?>
                    <div class="ourblog-card-items-date">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo esc_html($full_name); ?></a> • <?php echo get_the_date('M d, Y'); ?> • <?php echo cs_estimate_reading_time(get_the_content()); ?> min</div>
                <a href="<?php the_permalink(); ?>" class="ourblog-card-items-title"><?php the_title(); ?></a>
                <p class="ourblog-card-items-des"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-article-link">Read More 
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.125 4.5L14.625 9M14.625 9L10.125 13.5M14.625 9H3.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
      </div>
      
      <!-- Pagination -->
      <nav class="pagination-theme" aria-label="Page navigation">
          <ul class="pagination justify-content-center">
              <?php
              $links = paginate_links(array(
                  'total'        => $all_posts_query->max_num_pages,
                  'current'      => $paged,
                  'format'       => '?paged=%#%',
                  'show_all'     => false,
                  'type'         => 'array',
                  'prev_next'    => true,
                  'prev_text'    => '<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.2329 4.68414C10.4626 4.923 10.4551 5.30282 10.2163 5.5325L7.06605 8.5L10.2163 11.4675C10.4551 11.6972 10.4626 12.077 10.2329 12.3159C10.0032 12.5547 9.62339 12.5622 9.38452 12.3325L5.78452 8.9325C5.66688 8.81938 5.60039 8.66321 5.60039 8.5C5.60039 8.33679 5.66688 8.18062 5.78452 8.0675L9.38452 4.6675C9.62339 4.43782 10.0032 4.44527 10.2329 4.68414Z" fill="#626262" /></svg> Back',
                  'next_text'    => 'Next <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.76711 12.3159C5.53743 12.077 5.54488 11.6972 5.78374 11.4675L8.93395 8.5L5.78374 5.5325C5.54488 5.30282 5.53743 4.923 5.76711 4.68413C5.99679 4.44527 6.37661 4.43782 6.61548 4.6675L10.2155 8.0675C10.3331 8.18062 10.3996 8.33679 10.3996 8.5C10.3996 8.66321 10.3331 8.81938 10.2155 8.9325L6.61548 12.3325C6.37661 12.5622 5.99679 12.5547 5.76711 12.3159Z" fill="#626262" /></svg>',
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
      <?php wp_reset_postdata(); else : ?>
        <p>No blogs found.</p>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- Blog Listing Section End -->

<?php
get_footer();
?>