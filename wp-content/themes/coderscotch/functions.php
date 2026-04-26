<?php

/**
 * coderscotch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coderscotch
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function coderscotch_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on coderscotch, use a find and replace
		* to change 'coderscotch' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('coderscotch', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	function register_my_menu()
	{
		register_nav_menu('header-menu', __('Header Menu'));
	}
	add_action('init', 'register_my_menu');
	function register_my_menu2()
	{
		register_nav_menu('single-menu', __('Single Menu'));
	}
	add_action('init', 'register_my_menu2');

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'coderscotch_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'coderscotch_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coderscotch_content_width()
{
	$GLOBALS['content_width'] = apply_filters('coderscotch_content_width', 640);
}
add_action('after_setup_theme', 'coderscotch_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coderscotch_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'coderscotch'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'coderscotch'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'coderscotch_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function coderscotch_scripts()
{
	wp_enqueue_style('coderscotch-style', get_stylesheet_uri(), array(), time());
	
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css',  false, '1.1', 'all');
	wp_enqueue_style('slickcss', get_template_directory_uri() . '/assets/css/slick.css',  false, '1.2', 'all');
	wp_enqueue_style('slickthemecss', get_template_directory_uri() . '/assets/css/slick-theme.css',  false, '1.2', 'all');
	wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',  false, '1.2', 'all');
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/style.css',  false, time(), 'all');
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css',  false, '1.1', 'all');
	
	wp_enqueue_script('jquery.min', get_template_directory_uri() . '/js/jquery.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('bootstrapbundlemin', get_template_directory_uri() . '/js/bootstrap.bundle.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js',  array('jquery'), _S_VERSION, true);

	wp_enqueue_script('slick.min', get_template_directory_uri() . '/js/slick.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/js/gsap.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('ScrollTrigger', get_template_directory_uri() . '/js/ScrollTrigger.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('SplitType', get_template_directory_uri() . '/js/SplitType.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/js/swiper-bundle.min.js',  array('jquery'), _S_VERSION, true);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/js/gsap.js',  array('jquery'), _S_VERSION, true);

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',  array('jquery'), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'coderscotch_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
// function add_menu_list_item_class($classes, $item, $args)
// {
// 	if (property_exists($args, 'list_item_class')) {
// 		$classes[] = $args->list_item_class;
// 	}
// 	return $classes;
// }
// add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// function add_custom_menu_classes($classes, $item, $args)
// {
// 	if ($args->theme_location == 'header-menu') {
// 		switch ($item->title) {
// 			case 'SERVICES<span class="icon-angle-down"></span>':
// 				$classes[] = 'header-dropdown';
// 				break;	
				
// 		}
// 	}
// 	return $classes;
// }
// add_filter('nav_menu_css_class', 'add_custom_menu_classes', 10, 3);


// function add_custom_class_to_nav_menu_item($atts, $item, $args)
// {
// 	if ($atts['href'] == 'http://local.coderscotch.com/contect-us/') {
// 		$atts['class'] = 'bttn-right-arrow';
// 	}
// 	return $atts;
// }
// add_filter('nav_menu_link_attributes', 'add_custom_class_to_nav_menu_item', 10, 3);

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

register_nav_menus([
  'header_menu' => __('Header Menu', 'theme'),
]);

register_nav_menus([
  'footer_menu' => __('Footer Menu', 'theme'),
]);


function cs_add_li_class($classes, $item, $args) {
    if ($args->theme_location == 'header-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'cs_add_li_class', 10, 3);


function cs_add_anchor_class($atts, $item, $args) {
    if ($args->theme_location == 'header-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'cs_add_anchor_class', 10, 3);

function cs_add_hover_span($item_output, $item, $depth, $args) {
    if ($args->theme_location == 'header-menu' && $depth === 0) {
        $item_output = str_replace(
            '</a>',
            '<span class="header-hover-effect"></span></a>',
            $item_output
        );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'cs_add_hover_span', 10, 4);

// Add nav-item + menu-item + has-submenu on LI when has children
add_filter('nav_menu_css_class', function($classes, $item, $args, $depth){
  if (($args->theme_location ?? '') !== 'header-menu') return $classes;

  $classes[] = 'nav-item';

  if (in_array('menu-item-has-children', $classes, true)) {
    $classes[] = 'menu-item';
    $classes[] = 'has-submenu';
  }

  return array_unique($classes);
}, 10, 4);

// Add nav-link + dropdown-toggle and JS void link for parent items
add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth){
  if (($args->theme_location ?? '') !== 'header-menu') return $atts;

  $atts['class'] = ($depth === 0) ? 'nav-link' : 'submenu-link';

  if ($depth === 0 && in_array('menu-item-has-children', $item->classes, true)) {
    $atts['class'] .= ' dropdown-toggle';
    $atts['href'] = 'javascript:void(0)';
  }

  return $atts;
}, 10, 4);

add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args){
  if (($args->theme_location ?? '') !== 'header-menu') return $item_output;

  // Add hover effect to top-level links
  if ($depth === 0) {
    $item_output = str_replace('</a>', '<span class="header-hover-effect"></span></a>', $item_output);
  }

  // Add arrow svg ONLY for top-level items that have children
  if ($depth === 0 && in_array('menu-item-has-children', $item->classes, true)) {
    $svg = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="submenu-arrow-down-icon">
      <path d="M17.9997 7.05857C18.0046 6.85222 17.9404 6.64958 17.8158 6.47883C17.6912 6.30807 17.5125 6.17769 17.3046 6.1058C17.0967 6.03392 16.87 6.0241 16.6559 6.07772C16.4417 6.13133 16.251 6.24572 16.1099 6.40497L10.5173 12.4813L4.92658 6.40497C4.83959 6.2948 4.72915 6.20255 4.60209 6.13397C4.47502 6.06539 4.33407 6.02198 4.18813 6.00644C4.0422 5.9909 3.89443 6.00357 3.754 6.04366C3.61358 6.08375 3.48352 6.1504 3.37205 6.23943C3.26058 6.32846 3.17015 6.43795 3.10625 6.56105C3.04235 6.68415 3.00646 6.8182 3.00079 6.95482C2.99513 7.09143 3.01975 7.22766 3.07327 7.35498C3.12679 7.48229 3.20798 7.59795 3.31175 7.69471L9.7067 14.6516C9.80686 14.7608 9.93119 14.8485 10.0713 14.9087C10.2114 14.9688 10.3639 15 10.5182 15C10.6725 15 10.825 14.9688 10.9652 14.9087C11.1053 14.8485 11.2297 14.7608 11.3299 14.6516L17.731 7.69471C17.8987 7.51897 17.9938 7.29356 17.9997 7.05857Z" fill="#292929"></path>
    </svg>';

    $item_output = str_replace('</a>', $svg . '</a>', $item_output);
  }

  return $item_output;
}, 10, 4);

class CS_Header_Menu_Walker extends Walker_Nav_Menu {

  private $tab_content = '';
  private $pane_open   = false;
  private $first_tab_id = null;

  public function start_lvl(&$output, $depth = 0, $args = null) {
    // DO NOTHING — we manually handle markup
  }

  public function end_lvl(&$output, $depth = 0, $args = null) {
    // DO NOTHING — we manually handle markup
  }

  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

    $has_children = in_array('menu-item-has-children', (array) $item->classes, true);

    /* =======================
       TOP LEVEL ITEMS
    ========================*/
    if ($depth === 0) {

      $output .= '<li class="nav-item'. ($has_children ? ' menu-item has-submenu' : '') .'">';

      $href = $has_children ? 'javascript:void(0)' : $item->url;

      $output .= '<a class="nav-link'. ($has_children ? ' dropdown-toggle' : '') .'" href="'. esc_url($href) .'">';
      $output .= esc_html($item->title);
      $output .= '<span class="header-hover-effect"></span>';

      if ($has_children) {
        $output .= '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="submenu-arrow-down-icon"><path d="M17.9997 7.05857C18.0046 6.85222 17.9404 6.64958 17.8158 6.47883C17.6912 6.30807 17.5125 6.17769 17.3046 6.1058C17.0967 6.03392 16.87 6.0241 16.6559 6.07772C16.4417 6.13133 16.251 6.24572 16.1099 6.40497L10.5173 12.4813L4.92658 6.40497C4.83959 6.2948 4.72915 6.20255 4.60209 6.13397C4.47502 6.06539 4.33407 6.02198 4.18813 6.00644C4.0422 5.9909 3.89443 6.00357 3.754 6.04366C3.61358 6.08375 3.48352 6.1504 3.37205 6.23943C3.26058 6.32846 3.17015 6.43795 3.10625 6.56105C3.04235 6.68415 3.00646 6.8182 3.00079 6.95482C2.99513 7.09143 3.01975 7.22766 3.07327 7.35498C3.12679 7.48229 3.20798 7.59795 3.31175 7.69471L9.7067 14.6516C9.80686 14.7608 9.93119 14.8485 10.0713 14.9087C10.2114 14.9688 10.3639 15 10.5182 15C10.6725 15 10.825 14.9688 10.9652 14.9087C11.1053 14.8485 11.2297 14.7608 11.3299 14.6516L17.731 7.69471C17.8987 7.51897 17.9938 7.29356 17.9997 7.05857Z" fill="#292929"></path></svg>';
      }

      $output .= '</a>';

      // OPEN MEGA WRAPPER IF HAS CHILDREN
      if ($has_children) {

        // reset buffers per top-level item
        $this->tab_content = '';
        $this->pane_open   = false;
        $this->first_tab_id = null;

        $output .= '
          <div class="header_submenu submenu">
            <div class="submenu-inner">
              <div class="submenu-inner-grid">

                <div class="submenu-col services-col">
                  <h4 class="submenu-title">'. esc_html($item->title) .'</h4>
                  <ul class="submenu-list nav flex-column" role="tablist">';
      }

      return;
    }

    /* =======================
       SUBMENU ITEMS (TABS) - depth 1
       + open tab-pane buffer for right side
    ========================*/
    if ($depth === 1) {

      // icon mapping
      $icon_map = [
        'icon-pe'    => get_template_directory_uri() . '/assets/images/service-card-icon1.svg',
        'icon-cloud' => get_template_directory_uri() . '/assets/images/service-card-icon2.svg',
        'icon-ai'    => get_template_directory_uri() . '/assets/images/service-card-icon3.svg',
        'icon-app'   => get_template_directory_uri() . '/assets/images/service-card-icon4.svg',
        'icon-dm'    => get_template_directory_uri() . '/assets/images/service-card-icon5.svg',
        'icon-all'   => get_template_directory_uri() . '/assets/images/service-card-icon1.svg',
      ];

      // tab id must come from URL like #product-engineering
      $tab_id = ltrim((string) $item->url, '#');
      if (!$tab_id) $tab_id = sanitize_title($item->title);

      $is_first = ($this->first_tab_id === null);
      if ($is_first) $this->first_tab_id = $tab_id;

      // LEFT: tab button
      $output .= '<li class="nav-item">';
      $output .= '<button class="submenu-link'. ($is_first ? ' active' : '') .'"'
        . ' id="tab-' . esc_attr($tab_id) . '"'
        . ' data-bs-toggle="pill"'
        . ' data-bs-target="#' . esc_attr($tab_id) . '"'
        . ' type="button"'
        . ' role="tab"'
        . ' aria-controls="' . esc_attr($tab_id) . '"'
        . ' aria-selected="'. ($is_first ? 'true' : 'false') .'">';

      $icon_url = '';
      foreach ((array) $item->classes as $cls) {
        if (isset($icon_map[$cls])) { $icon_url = $icon_map[$cls]; break; }
      }
      if ($icon_url) {
        $output .= '<img src="'. esc_url($icon_url) .'" class="submenu-icon" width="24" height="24" alt="'. esc_attr($item->title) .' Icon">';
      }

      $output .= esc_html($item->title);
      $output .= '</button>';
      $output .= '</li>';

      // RIGHT: close previous pane
      if ($this->pane_open) {
        $this->tab_content .= "</ul></div>\n";
        $this->pane_open = false;
      }

      // right heading: use Title Attribute if provided, else use tab title
      $heading = !empty($item->attr_title) ? $item->attr_title : $item->title;

      $this->tab_content .= '<div class="submenu-tab-content tab-pane fade'
        . ($is_first ? ' show active' : '') .'"'
        . ' id="'. esc_attr($tab_id) .'"'
        . ' role="tabpanel"'
        . ' aria-labelledby="tab-'. esc_attr($tab_id) .'">' . "\n";

      $this->tab_content .= '<h4 class="submenu-title">'. esc_html($heading) .'</h4>' . "\n";
      $this->tab_content .= '<ul class="submenu-list simple-list">' . "\n";
      $this->pane_open = true;

      return;
    }

    /* =======================
       SUB-SUB MENU ITEMS - depth 2
       (these become <li><a> inside current tab pane)
    ========================*/
    if ($depth === 2) {
      $url = !empty($item->url) ? $item->url : '#';
      $this->tab_content .= '<li><a href="'. esc_url($url) .'" class="submenu-link">'. esc_html($item->title) .'</a></li>' . "\n";
      return;
    }
  }

  public function end_el(&$output, $item, $depth = 0, $args = null) {

    $has_children = in_array('menu-item-has-children', (array) $item->classes, true);

    // CLOSE MEGA WRAPPER at end of top level item
    if ($depth === 0 && $has_children) {

      // close last open pane
      if ($this->pane_open) {
        $this->tab_content .= "</ul></div>\n";
        $this->pane_open = false;
      }

      // close LEFT column, open RIGHT column beside it, print tab panes
      $output .= '
                  </ul>
                </div>

                <div class="submenu-col industry-col tab-content">'
                  . $this->tab_content .
                '</div>

              </div>
            </div>
          </div>';
    }

    if ($depth === 0) {
      $output .= '</li>';
    }
  }
}

//Init Hook for the custom post type

add_action('init', 'create_custom_post_type');

function create_custom_post_type()
{

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
		'name' => _x('Services', 'plural'),
		'singular_name' => _x('Services', 'singular'),
		'menu_name' => _x('Services', 'admin menu'),
		'name_admin_bar' => _x('Services', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New news'),
		'new_item' => __('New Services'),
		'edit_item' => __('Edit Services'),
		'view_item' => __('View Services'),
		'all_items' => __('All Services'),
		'search_items' => __('Search Services'),
		'not_found' => __('No Services found.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'description' => 'Holds our Services and specific data',
		'public' => true,
		'taxonomies' => array('category', 'post_tag'),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'services'),
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-desktop',
	);

	register_post_type('services', $args); // Register Post type
}


//Init Hook for the custom post type

add_action('init', 'create_custom_post_type_2');

function register_custom_taxonomy()
{
	register_taxonomy('our_work_cat', 'our_work', array(
		'label'        => __('Work Category'),
		'rewrite'      => array('slug' => 'our_work_cat'),
		'hierarchical' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	));
}
add_action('init', 'register_custom_taxonomy', 0);

function add_tags_to_our_work() {
    register_taxonomy_for_object_type('post_tag', 'our_work');
}
add_action('init', 'add_tags_to_our_work');


function create_custom_post_type_2()
{

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
		'name' => _x('Our Work', 'plural'),
		'singular_name' => _x('Our Work', 'singular'),
		'menu_name' => _x('Our Work', 'admin menu'),
		'name_admin_bar' => _x('Our Work', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New Our Work'),
		'new_item' => __('New Our Work'),
		'edit_item' => __('Edit Our Work'),
		'view_item' => __('View Our Work'),
		'all_items' => __('All Our Work'),
		'search_items' => __('Search Our Work'),
		'not_found' => __('No Our Work found.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'description' => 'Holds our Services and specific data',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'our_work'),
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-hammer',
	);

	register_post_type('our_work', $args); // Register Post type
}
add_action('init', 'create_custom_post_type_2');

function create_custom_post_type_3()
{

	$supports = array(
		'title', // post title
		'editor', // post content
		'author', // post author
		'thumbnail', // featured images
		'excerpt', // post excerpt
		'custom-fields', // custom fields
		'comments', // post comments
		'revisions', // post revisions
		'post-formats', // post formats
	);

	$labels = array(
		'name' => _x('Career', 'plural'),
		'singular_name' => _x('Career', 'singular'),
		'menu_name' => _x('Career', 'admin menu'),
		'name_admin_bar' => _x('Career', 'admin bar'),
		'add_new' => _x('Add New', 'add new'),
		'add_new_item' => __('Add New Career'),
		'new_item' => __('New Career'),
		'edit_item' => __('Edit Career'),
		'view_item' => __('View Career'),
		'all_items' => __('All Career'),
		'search_items' => __('Search Career'),
		'not_found' => __('No Career found.'),
	);

	$args = array(
		'supports' => $supports,
		'labels' => $labels,
		'description' => 'Holds our Services and specific data',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'career'),
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-businessman',
	);

	register_post_type('career', $args); // Register Post type
}
add_action('init', 'create_custom_post_type_3');

function mytheme_custom_excerpt_length($length) {
    global $post;
    if ($post && $post->post_type === 'our_work') {
        return 50;
    } else {
        return 20; 
    }
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

function add_custom_meta_box()
{
	$screens = array('page'); // Post types where the meta box should appear
	foreach ($screens as $screen) {
		$post_id = get_the_ID();
		if ($post_id === 120) { // Change 120 to the ID of your desired page
			add_meta_box(
				'custom_text_field', // ID of the meta box
				'Banner Title text', // Title of the meta box
				'show_custom_meta_box', // Callback function to display the contents of the meta box
				$screen, // Post type where the meta box should appear
				'normal', // Context where the meta box should appear (e.g. normal, side, advanced)
				'high' // Priority of the meta box in the context
			);
		}
	}
}
add_action('add_meta_boxes', 'add_custom_meta_box');
function show_custom_meta_box($post)
{
	$custom_text = get_post_meta($post->ID, '_custom_text', true);
	echo '<label for="custom_text">Banner Title Text:</label>';
	echo '<input type="text" id="custom_text" name="custom_text" value="' . esc_attr($custom_text) . '" size="50" />';
}
function save_custom_meta_box($post_id)
{
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}
	if (isset($_POST['custom_text'])) {
		update_post_meta($post_id, '_custom_text', sanitize_text_field($_POST['custom_text']));
	}
}
add_action('save_post', 'save_custom_meta_box');

add_filter('wpcf7_autop_or_not', '__return_false');


// Filter & Function to rename the WordPress logout URL
add_filter( 'logout_url', 'my_logout_page', 10, 2 );
function my_logout_page( $logout_url) {
    return home_url( '/cslogin.php');   // The name of your new login file
}
// Filter & Function to rename Lost Password URL
add_filter( 'lostpassword_url', 'my_lost_password_page', 10, 2 );
function my_lost_password_page( $lostpassword_url ) {
    return home_url( '/cslogin.php?action=lostpassword');   // The name of your new login file
}
add_filter('wpseo_opengraph', '__return_false');

// Filter & Function to rename the WordPress login URL
add_filter( 'login_url', 'my_login_page', 10, 3 );
function my_login_page( $login_url, $redirect, $force_reauth ) {
    $login_page = home_url( '/cslogin.php' );   // The name of your new login file
    $login_url = add_query_arg( 'redirect_to', $redirect, $login_page );
    return $login_url;
}
function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?= get_field('login_page_image', 'option') ?>);
        height:60px;
        width:300px;
        background-size: 253px 53px;
        background-repeat: no-repeat;
        padding-bottom: 0px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

function wpb_login_logo_url() {
    return site_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );

function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


if ( ! function_exists( 'cs_estimate_reading_time' ) ) {
    /**
     * Helper function to estimate reading time
     */
    function cs_estimate_reading_time($content) {
        if (!$content) return 0;
        $word_count = str_word_count(strip_tags($content));
        $reading_time = ceil($word_count / 200); // 200 words per minute
        return $reading_time > 0 ? $reading_time : 1;
    }
}

/**
 * Add social media contact methods to user profile
 */
function coderscotch_add_social_contact_methods($user_contact) {
    $user_contact['facebook_url'] = __('Facebook URL', 'coderscotch');
    $user_contact['twitter_url']  = __('Twitter URL', 'coderscotch');
    $user_contact['linkedin_url'] = __('LinkedIn URL', 'coderscotch');
    $user_contact['upwork_url']   = __('Upwork URL', 'coderscotch');
    return $user_contact;
}
add_filter('user_contactmethods', 'coderscotch_add_social_contact_methods');

/**
 * Register ACF Fields
 */
add_action('acf/init', 'coderscotch_register_acf_fields');
function coderscotch_register_acf_fields() {
    if( ! function_exists('acf_add_local_field_group') ) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_product_engineering_page',
        'title' => 'Product Engineering Page',
        'fields' => array(
            array(
                'key' => 'field_engineering_services',
                'label' => 'Engineering Services',
                'name' => 'engineering_services',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_service_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_service_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => 'Enter the full title. Use curly brackets to highlight words, e.g., React Native {App Development}',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_service_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'new_lines' => 'br',
                    ),
                    array(
                        'key' => 'field_service_main_image',
                        'label' => 'Main Image',
                        'name' => 'main_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                ),
            ),
            // Project Key Points Section Fields
            array(
                'key' => 'field_kp_section_tab',
                'label' => 'Project Key Points',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_kp_section_title',
                'label' => 'Section Title',
                'name' => 'key_points_section_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets to highlight text, e.g. Services {You Can Opt From}',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Services You An Opt From {Project Key Points}',
            ),
            array(
                'key' => 'field_kp_section_description',
                'label' => 'Section Description',
                'name' => 'key_points_section_description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Lorem ipsum dolor sit amet consectetur. Elementum imperdiet amet malesuada nunc integer ac sed amet.',
            ),
            array(
                'key' => 'field_kp_repeater',
                'label' => 'Key Points',
                'name' => 'key_points_repeater',
                'type' => 'repeater',
                'instructions' => 'Add key points (will be split into two columns automatically)',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Key Point',
                'sub_fields' => array(
                    array(
                        'key' => 'field_kp_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_kp_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_kp_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                ),
            ),
            // Offered Another Services Section Fields
            array(
                'key' => 'field_offered_services_tab',
                'label' => 'Offered Another Services',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_offered_services_section_title',
                'label' => 'Section Title',
                'name' => 'offered_services_section_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets to highlight text, e.g. Coderscotch {Offered Another Services}',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Coderscotch {Offered Another Services}',
            ),
            array(
                'key' => 'field_offered_services_section_description',
                'label' => 'Section Description',
                'name' => 'offered_services_section_description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Discover the innovative technologies that power our cutting-edge digital solutions at CoderScotch.',
            ),
            array(
                'key' => 'field_offered_services_repeater',
                'label' => 'Services',
                'name' => 'offered_services_repeater',
                'type' => 'repeater',
                'instructions' => 'Add services (e.g., Retail, Finance, Education)',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_offered_service_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_offered_service_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_offered_service_desc',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '25',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_offered_service_class',
                        'label' => 'Card Class',
                        'name' => 'card_class',
                        'type' => 'text',
                        'instructions' => 'e.g., retail-card, finance-card, education-card',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_offered_service_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_offered_service_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '15',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_offered_feature_text',
                                'label' => 'Feature Text',
                                'name' => 'feature_text',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            // Specialized In Section Fields
            array(
                'key' => 'field_specialized_tab',
                'label' => 'Specialized In',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_specialized_title',
                'label' => 'Section Title',
                'name' => 'specialized_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets to highlight text, e.g. Sorts of Apps {We are Specialized In}',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Sorts of Apps {We are Specialized In}',
            ),
            array(
                'key' => 'field_specialized_description',
                'label' => 'Section Description',
                'name' => 'specialized_description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Discover the innovative technologies that power our cutting-edge digital solutions at CoderScotch.',
            ),
            array(
                'key' => 'field_specialized_tech_title',
                'label' => 'Tech Section Title',
                'name' => 'specialized_tech_title',
                'type' => 'text',
                'instructions' => 'Example: Technologies We Use For {Product Engineering}',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => 'field_specialized_tech_desc',
                'label' => 'Tech Section Description',
                'name' => 'specialized_tech_description',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'key' => 'field_specialized_tech_list',
                'label' => 'Technology List',
                'name' => 'specialized_tech_list',
                'type' => 'repeater',
                'instructions' => 'List of technologies',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add Technology',
                'sub_fields' => array(
                    array(
                        'key' => 'field_tech_name_flat',
                        'label' => 'Tech Name',
                        'name' => 'tech_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_tech_icon_flat',
                        'label' => 'Tech Icon',
                        'name' => 'tech_icon',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '50',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-parts/product-engineering-template.php',
                ),
            ),

        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'active' => true,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_hire_page',
        'title' => 'Hire Page Fields',
        'fields' => array(
            // Banner Tab
            array(
                'key' => 'field_hire_banner_tab',
                'label' => 'Banner',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hire_banner_title',
                'label' => 'Banner Title',
                'name' => 'hire_banner_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets for highlights, e.g. Looking For {React Developers?}',
                'default_value' => 'Looking For {React Developers?}',
            ),
            array(
                'key' => 'field_hire_banner_description',
                'label' => 'Banner Description',
                'name' => 'hire_banner_description',
                'type' => 'textarea',
                'default_value' => 'At CoderScotch, we combine passion and precision to deliver outstanding digital solutions. Our commitment to excellence drives us to exceed expectations.',
            ),
// Intro Tab
            array(
                'key' => 'field_hire_intro_tab',
                'label' => 'Introduction',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hire_intro_title',
                'label' => 'Intro Title',
                'name' => 'hire_intro_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets for highlights, e.g. {Hire React Developers} from Coder Scotch',
                'default_value' => '{Hire React Developers} from Coder Scotch',
            ),
            array(
                'key' => 'field_hire_intro_description',
                'label' => 'Intro Description',
                'name' => 'hire_intro_description',
                'type' => 'textarea',
                'default_value' => 'At Coder Scotch, we specialize in providing top-tier developers who are skilled, experienced, and ready to tackle your unique challenges. Here’s why you should choose our team for your next project.',
            ),
            array(
                'key' => 'field_hire_intro_image',
                'label' => 'Intro Illustration/Image',
                'name' => 'hire_intro_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hire_intro_checklist',
                'label' => 'Intro Checklist',
                'name' => 'hire_intro_checklist',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Checklist Item',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hire_intro_checklist_item',
                        'label' => 'Item Text',
                        'name' => 'item_text',
                        'type' => 'text',
                    ),
                ),
            ),
            // Services Tab
            array(
                'key' => 'field_hire_services_tab',
                'label' => 'Expert Services',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hire_services_title',
                'label' => 'Services Title',
                'name' => 'hire_services_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets for highlights, e.g. {Expert React Developers} Services to Your Success',
                'default_value' => '{Expert React Developers} Services to Your Success',
            ),
            array(
                'key' => 'field_hire_services_description',
                'label' => 'Services Description',
                'name' => 'hire_services_description',
                'type' => 'textarea',
                'default_value' => 'We help businesses reinvent and accelerate their digital identity by providing premium software development solutions in Europe and around different parts of the world.',
            ),
            array(
                'key' => 'field_hire_services_list',
                'label' => 'Services List',
                'name' => 'hire_services_list',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Service',
                'sub_fields' => array(
                    array(
                        'key' => 'field_hire_service_icon',
                        'label' => 'Service Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_hire_service_title',
                        'label' => 'Service Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_hire_service_description',
                        'label' => 'Service Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
            // Hiring Models Tab
            array(
                'key' => 'field_hire_models_tab',
                'label' => 'Hiring Models',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hiring_models_title',
                'label' => 'Section Title',
                'name' => 'hiring_models_title',
                'type' => 'text',
                'default_value' => 'Our Hiring Models',
            ),
            array(
                'key' => 'field_hiring_process_steps',
                'label' => 'Hiring Process Steps',
                'name' => 'hiring_process_steps',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_step_number',
                        'label' => 'Step Number',
                        'name' => 'step_number',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_step_title',
                        'label' => 'Step Title',
                        'name' => 'step_title',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_hiring_models_list',
                'label' => 'Hiring Models Cards',
                'name' => 'hiring_models_list',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Model',
                'sub_fields' => array(
                    array(
                        'key' => 'field_model_type',
                        'label' => 'Model Type',
                        'name' => 'model_type',
                        'type' => 'select',
                        'choices' => array(
                            'monthly' => 'Monthly Based',
                            'hourly' => 'Hourly Based',
                            'yearly' => 'Yearly Based',
                        ),
                    ),
                    array(
                        'key' => 'field_model_icon',
                        'label' => 'Model Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_model_title',
                        'label' => 'Model Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_model_description',
                        'label' => 'Model Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
            array(
                'key' => 'field_hiring_cta_text',
                'label' => 'CTA Button Text',
                'name' => 'hiring_cta_text',
                'type' => 'text',
                'default_value' => 'Hire Laravel Developer Now',
            ),
            array(
                'key' => 'field_hiring_cta_link',
                'label' => 'CTA Button Link',
                'name' => 'hiring_cta_link',
                'type' => 'url',
            ),
            // FAQs Tab
            array(
                'key' => 'field_hire_faqs_tab',
                'label' => 'FAQs',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_hire_faq_title',
                'label' => 'FAQ Section Title',
                'name' => 'faq_title',
                'type' => 'text',
                'instructions' => 'Use curly brackets for highlights, e.g. Frequently Asked {Questions}',
                'default_value' => 'Frequently Asked {Questions}',
            ),
            array(
                'key' => 'field_hire_faq_description',
                'label' => 'FAQ Section Description',
                'name' => 'faq_description',
                'type' => 'textarea',
                'default_value' => 'Get clear answers to the most common questions about our Laravel development services and how we can help your business grow.',
            ),
            array(
                'key' => 'field_hire_faq_list',
                'label' => 'FAQ List',
                'name' => 'faq_list',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add FAQ Item',
                'default_value' => array(
                    array(
                        'field_hire_faq_question' => 'Why should I hire a dedicated Laravel developer from CoderScotch?',
                        'field_hire_faq_answer' => 'Our Laravel developers are experts in the framework, ensuring your application is built with security, scalability, and performance in mind. We provide dedicated support and follow clean coding standards to ensure a future-ready product.',
                    ),
                    array(
                        'field_hire_faq_question' => 'How do we handle project communication and updates?',
                        'field_hire_faq_answer' => 'We use agile methodologies and tools like Jira, Trello, and Slack. You’ll receive regular updates and have access to our developers for seamless communication throughout the development cycle.',
                    ),
                    array(
                        'field_hire_faq_question' => 'Can I migrate my existing PHP application to Laravel?',
                        'field_hire_faq_answer' => 'Absolutely. Our experts specialize in migrating legacy systems to Laravel, optimizing the codebase and ensuring data integrity while minimizing downtime.',
                    ),
                    array(
                        'field_hire_faq_question' => 'Do you provide post-launch maintenance and support?',
                        'field_hire_faq_answer' => 'Yes, we offer comprehensive post-launch support, including regular updates, security monitoring, bug fixes, and feature enhancements to keep your Laravel application running at its best.',
                    ),
                    array(
                        'field_hire_faq_question' => 'How do you ensure the security of Laravel applications?',
                        'field_hire_faq_answer' => 'We leverage Laravel\'s built-in security features like CSRF protection, secure authentication, and data encryption. Additionally, we perform regular security audits and follow OWASP best practices.',
                    ),
                ),
                'sub_fields' => array(
                    array(
                        'key' => 'field_hire_faq_question',
                        'label' => 'Question',
                        'name' => 'question',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_hire_faq_answer',
                        'label' => 'Answer',
                        'name' => 'answer',
                        'type' => 'textarea',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-parts/hire_page.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'active' => true,
        'description' => 'Dynamic fields for the Hire Page Template',
    ));

    // Register Dynamic Fields for Categories
    acf_add_local_field_group(array(
        'key' => 'group_category_design',
        'title' => 'Category Design Fields',
        'fields' => array(
            // Banner Tab
            array(
                'key' => 'field_cat_banner_tab',
                'label' => 'Banner',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_cat_banner_image',
                'label' => 'Banner Image',
                'name' => 'cat_banner_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            // Technical Focus Tab
            array(
                'key' => 'field_cat_tech_tab',
                'label' => 'Technical Focus',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_cat_tech_title',
                'label' => 'Section Title',
                'name' => 'cat_tech_title',
                'type' => 'text',
                'default_value' => 'Build Products That Scale',
            ),
            array(
                'key' => 'field_cat_tech_description',
                'label' => 'Section Description',
                'name' => 'cat_tech_description',
                'type' => 'textarea',
                'default_value' => 'We don’t just write code — we engineer products that solve real business problems.',
            ),
            array(
                'key' => 'field_cat_tech_image',
                'label' => 'Main Image',
                'name' => 'cat_tech_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_cat_tech_cards',
                'label' => 'Focus Cards',
                'name' => 'cat_tech_cards',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_cat_tech_card_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_cat_tech_card_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_cat_tech_card_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                    ),
                ),
            ),
            // Capabilities Tab
            array(
                'key' => 'field_cat_cap_tab',
                'label' => 'Capabilities',
                'type' => 'tab',
            ),
            array(
                'key' => 'field_cat_cap_title',
                'label' => 'Section Title',
                'name' => 'cat_cap_title',
                'type' => 'text',
                'default_value' => 'Our Capabilities',
            ),
            array(
                'key' => 'field_cat_cap_items',
                'label' => 'Capability Tabs',
                'name' => 'cat_cap_items',
                'type' => 'repeater',
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_cat_cap_item_label',
                        'label' => 'Tab Label',
                        'name' => 'label',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_cat_cap_item_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_cat_cap_item_title',
                        'label' => 'Display Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_cat_cap_item_tagline',
                        'label' => 'Tagline',
                        'name' => 'tagline',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_cat_cap_item_summary',
                        'label' => 'Summary',
                        'name' => 'summary',
                        'type' => 'textarea',
                    ),
                    array(
                        'key' => 'field_cat_cap_item_checklist',
                        'label' => 'Checklist',
                        'name' => 'checklist',
                        'type' => 'repeater',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_cat_cap_item_check_text',
                                    'label' => 'Check Item',
                                    'name' => 'item',
                                    'type' => 'text',
                                ),
                            ),
                        ),
                    ),
                ),
                // Bento Tab
                array(
                    'key' => 'field_cat_bento_tab',
                    'label' => 'Why Choose (Bento)',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_cat_bento_title',
                    'label' => 'Bento Section Title',
                    'name' => 'cat_bento_title',
                    'type' => 'text',
                    'default_value' => 'Why Choose Coder Scotch?',
                ),
                array(
                    'key' => 'field_cat_bento_description',
                    'label' => 'Bento Section Description',
                    'name' => 'cat_bento_description',
                    'type' => 'textarea',
                    'default_value' => 'We combine engineering excellence with business strategy.',
                ),
                array(
                    'key' => 'field_cat_bento_items',
                    'label' => 'Bento Cards',
                    'name' => 'cat_bento_items',
                    'type' => 'repeater',
                    'layout' => 'block',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_cat_bento_item_number',
                            'label' => 'Number',
                            'name' => 'number',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_cat_bento_item_title',
                            'label' => 'Title',
                            'name' => 'title',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_cat_bento_item_description',
                            'label' => 'Description',
                            'name' => 'description',
                            'type' => 'textarea',
                        ),
                        array(
                            'key' => 'field_cat_bento_item_size',
                            'label' => 'Size',
                            'name' => 'size',
                            'type' => 'select',
                            'choices' => array(
                                'col-lg-8' => 'Large (8 Columns)',
                                'col-lg-4' => 'Small (4 Columns)',
                            ),
                            'default_value' => 'col-lg-4',
                        ),
                    ),
                ),
                // CTA Tab
                array(
                    'key' => 'field_cat_cta_tab',
                    'label' => 'Final CTA',
                    'type' => 'tab',
                ),
                array(
                    'key' => 'field_cat_cta_title',
                    'label' => 'CTA Title',
                    'name' => 'cat_cta_title',
                    'type' => 'text',
                    'default_value' => 'Have a product idea? <br>Let’s build it together.',
                ),
                array(
                    'key' => 'field_cat_cta_description',
                    'label' => 'CTA Description',
                    'name' => 'cat_cta_description',
                    'type' => 'textarea',
                    'default_value' => 'Speak to our product experts today and get a free technical consultation and roadmap for your project.',
                ),
                array(
                    'key' => 'field_cat_cta_btn_text',
                    'label' => 'Button Text',
                    'name' => 'cat_cta_btn_text',
                    'type' => 'text',
                    'default_value' => 'Speak to our expert',
                ),
                array(
                    'key' => 'field_cat_cta_btn_link',
                    'label' => 'Button Link',
                    'name' => 'cat_cta_btn_link',
                    'type' => 'url',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'taxonomy',
                        'operator' => '==',
                        'value' => 'category',
                    ),
                ),
            ),
        ));
}

