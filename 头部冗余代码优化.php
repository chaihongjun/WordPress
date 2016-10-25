<?php
/*
优化wp_head头部代码。去除无用的内容
 */
//remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
remove_action( 'wp_head', 'feed_links', 2 );   //去除文章和评论feed
remove_action( 'wp_head', 'feed_links_extra', 3 );   //额外的feed ，category tag页
remove_action( 'wp_head', 'rsd_link' );   //去除离线编辑器
remove_action( 'wp_head', 'wlwmanifest_link' );   //wlwmanifest是针对微软Live Writer编辑器的
remove_action( 'wp_head', 'index_rel_link' );   //去除主页链接信息
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );   // 父篇
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );   //开始篇
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   //上一篇，下一篇
//remove_action( 'wp_head', 'locale_stylesheet' );
remove_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 );
//remove_action( 'wp_head', 'noindex', 1 );
//remove_action( 'wp_head', 'wp_print_styles', 8 );
//remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
remove_action( 'wp_head', 'wp_generator' );   //清除WP版本信息  <meta name="generator" content="WordPress 4.5.3" />
//remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_footer', 'wp_print_footer_scripts' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

add_action('widgets_init', 'my_remove_recent_comments_style');
function my_remove_recent_comments_style() {
global $wp_widget_factory;
remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
