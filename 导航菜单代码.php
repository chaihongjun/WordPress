<?php
/* 
注册导航菜单
*/
if (function_exists('register_nav_menus')){
register_nav_menus( array(
'header_menu' => __('顶部导航'),
'footer_menu' => __('底部导航'),
'sidebar_menu' => __('侧栏导航')
));
}