<?php
/*
主题添加摘要功能
*/
function my_init() {
     add_post_type_support('page', array('excerpt'));
}
add_action('init', 'my_init');

//200为自定义摘要字数 150
function custom_excerpt_length( $length ) {
    return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');
//更改摘要末尾的显示样式 将[...]改成...
function new_excerpt_more($excerpt) {
return str_replace("[...]", "...", $excerpt);
}
add_filter("wp_trim_excerpt", "new_excerpt_more");