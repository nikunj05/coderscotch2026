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
	wp_enqueue_style('coderscotch-style', get_stylesheet_uri(), array(), _S_VERSION);
	
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css',  false, '1.1', 'all');
	wp_enqueue_style('slickcss', get_template_directory_uri() . '/assets/css/slick.css',  false, '1.2', 'all');
	wp_enqueue_style('slickthemecss', get_template_directory_uri() . '/assets/css/slick-theme.css',  false, '1.2', 'all');
	wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',  false, '1.2', 'all');
	wp_enqueue_style('mainstyle', get_template_directory_uri() . '/assets/css/style.css',  false, '1.1', 'all');
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
