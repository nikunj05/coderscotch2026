<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coderscotch
 */

?>
<section class="common-banner-section mobile-development-banner-section position-relative z-index-0">
    <div class="container">
      <div class="banner-section-content content-with-img">
			<div class="connect-section">
				<div class="heading_section text-left">
					<h1 class="section-title">
              <?php
              $banner_title = get_field('solutions_banner_title');
              if ($banner_title) {
                  $banner_title = str_replace('{', '<span class="highlight-text">', $banner_title);
                  $banner_title = str_replace('}', '</span>', $banner_title);
                  echo wp_kses($banner_title, array('span' => array('class' => array())));
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
            
					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="tech-focus-section section-space-tb bg-sky">
	<div class="container">
		<p class="section-description">
					 <?php echo wp_kses_post(get_the_content()); ?>
					</p>
	</div>
</section>

