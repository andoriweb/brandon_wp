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















?>