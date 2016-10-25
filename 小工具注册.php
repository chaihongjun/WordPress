<?php
/*  开启小工具功能 */

   /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
        'name'          => '首页侧栏',
        'description'   => '网站首页侧栏',
        'class'         => '',
        'before_widget' => '<div class="boxTop"><h2>友情链接</h2>',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="boxContent"><ul class="linksTxt">',
        'after_title'   => '</ul></div>'
    );

    register_sidebar( $args );
       /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
        'name'          => '分类侧栏',
        'description'   => '网站栏目页侧栏',
        'class'         => '',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );
           /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
        'name'          => '内容页侧栏',
        'description'   => '网站文章页侧栏',
        'class'         => '',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );
           /**
    * Creates a sidebar
    * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
    */
    $args = array(
        'name'          => '单页侧栏',
        'description'   => '网站单页页侧栏',
        'class'         => '',
        'before_widget' => '<li>',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    );

    register_sidebar( $args );