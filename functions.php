<?php
  /* Удаление лишнего кода */
  // Отключаем emoji
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  // add_filter( 'tiny_mce_plugins', array($this, 'disable_emojis_tinymce') );

  // Отключаем REST API
  // filter('rest_enabled', '__return_false');
  remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
  remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
  remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
  remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
  remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
  remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
  remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
  remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
  remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
  remove_action( 'init',          'rest_api_init' );
  remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
  remove_action( 'parse_request', 'rest_api_loaded' );
  remove_action( 'rest_api_init',          'wp_oembed_register_route');
  remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

  // Удаляем meta generator
  remove_action( 'wp_head', 'wp_generator' );
  add_filter( 'the_generator', '__return_empty_string' );

  // Удаляем короткую ссылку
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );

  // Удаляем RSD, WLW ссылки, на главную, предыдущую, первую запись
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

  // Удаляем RSS ссылки
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );

  // Удаляем dns prefetch
  remove_action( 'wp_head', 'wp_resource_hints', 2 );

  // Functions ////////////////////////////////////////////////////////////

  /* Подключение стилей, скриптов и картинок */
  define("B_THEME_ROOT", get_template_directory_uri());
  define("B_CSS_DIR", B_THEME_ROOT . "/css");
  define("B_JS_DIR", B_THEME_ROOT . "/js");
  define("B_IMG_DIR", B_THEME_ROOT . "/img");

  add_action( 'wp_enqueue_scripts', 'up_style' );

  function up_style() {
    wp_enqueue_style( 'bootstrap', B_CSS_DIR . '/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'main', B_CSS_DIR . '/style.css' );
    wp_enqueue_style( 'media-css', B_CSS_DIR . '/media.css' );
    wp_enqueue_style( 'fonts', B_CSS_DIR . '/fonts.min.css' );
    wp_enqueue_style( 'animate', B_CSS_DIR . '/animate/animate.css' );
    wp_enqueue_style( 'font-awesome', B_CSS_DIR . '/font-awesome/font-awesome.css' );
    wp_enqueue_style( 'magnific-popup', B_CSS_DIR . '/magnific-popup/magnific-popup.css' );
    wp_enqueue_style( 'owl.carousel', B_CSS_DIR . '/owl.carousel/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.carousel.default', B_CSS_DIR . '/owl.carousel/owl.theme.default.min.css' );

    wp_deregister_script( "jquery" );
    wp_enqueue_script( 'jquery', B_JS_DIR . '/jquery/jquery.min.js' );
    wp_enqueue_script( 'bootstrap', B_JS_DIR . '/bootstrap/bootstrap.js' );
    wp_enqueue_script( 'magnific-popup', B_JS_DIR . '/magnific-popup/magnific-popup.min.js' );
    wp_enqueue_script( 'parallax', B_JS_DIR . '/parallax/parallax.min.js' );
    wp_enqueue_script( 'page-scroll', B_JS_DIR . '/page-scroll-to-id/jquery.malihu.PageScroll2id.js' );
    wp_enqueue_script( 'wow', B_JS_DIR . '/wow/wow.min.js' );
    wp_enqueue_script( 'isotope', B_JS_DIR . '/isotope/isotope.pkgd.min.js' );
    wp_enqueue_script( 'countUp', B_JS_DIR . '/countUp/jquery.countup.min.js' );
    wp_enqueue_script( 'waypoints', B_JS_DIR . '/waypoints/jquery.waypoints.min.js' );
    wp_enqueue_script( 'html5shiv', B_JS_DIR . '/html5shiv-master/html5shiv.js' );
    wp_enqueue_script( 'slideout', B_JS_DIR . '/slideout/slideout.min.js' );
    wp_enqueue_script( 'functions', B_JS_DIR . '/functions.js' );
    wp_enqueue_script( 'send', B_JS_DIR . '/send.js' );
  }

  /* Регистрация меню */
  add_action( 'after_setup_theme', 'top_menu' );
  function top_menu() {
    register_nav_menu( 'top', 'Верхнее меню' );
    register_nav_menu( 'mob', 'Мобильное меню' );
  }

  /* Регистрация сайтбара */
  add_action( 'widgets_init', 'register_my_widgets' );
  function register_my_widgets(){

    register_sidebar( array(
      'name'          => 'Right sidebar',
      'id'            => 'sidebar-right',
      'description'   => 'Правое меню',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div><div class="space x-small"></div>',
      'before_title'  => '<h5 class="blog-text-uppercase">',
      'after_title'   => "</h5>\n",
    ) );
  }

  // удаляет H2 из шаблона пагинации
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
    return '
    <div class="col-md-12"
      <nav class="box-pagination text-center navigation %1$s" role="navigation">
        <div class="blog-pagination nav-links">%3$s</div>
      </nav> 
    </div>   
    ';
  }

  /* Размеры картинок */
  add_image_size( 'image-thum', 360, 270, array( 'center', 'center' ) );
  add_image_size( 'image-med', 360, 360, array( 'center', 'center' ) );
  add_image_size( 'image-lar', 754, 400, array( 'center', 'center' ) );
 




 









?>