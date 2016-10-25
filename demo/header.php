<?php
/*
Template Name: 首页模板
*/
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <!--  TDK  Info  -->
    <title>
        <?php
        /* 如果是首页, 显示博客标题 */
        if(is_front_page() || is_home()) {
        
        $title=trim(strip_tags(bloginfo('name')));
        echo $title;
        /*如果是 文章页 或者 单页 显示文章 TITLE_网站名称*/
        } else if(is_single() || is_page()) {
        
        trim(strip_tags(single_post_title()));
        echo "_";
        trim(strip_tags(bloginfo('name')));
        
        if ( $paged > 1 ) { echo ('第'); echo ($paged); echo '页';}
        
        //文章标题_网站标题
        /*如果是分类页面*/
        } else if(is_category()) {
        /*   两种方式
        //1.显示： XXX类目的文章存档
        // printf('%1$s 类目的文章存档', single_cat_title('', false));
        // 2.显示: 栏目标题_网站标题
        */
        single_cat_title( '', true );
        echo "_";
        trim(strip_tags(bloginfo('name')));
        /* 如果是搜索页面, 显示搜索表述 */
        } else if(is_search()) {
        printf('%1$s 的搜索结果', wp_specialchars($s, 1));
        /*如果是TAG页面, 显示标签表述 */
        } else if(is_tag()) {
        printf('%1$s 标签的文章存档', single_tag_title('', false));
        /* 如果是日期页面, 显示日期范围描述 */
        } else if(is_date()) {
        $title = '';
        if(is_day()) {
        $title = get_the_time('Y年n月j日');
        } else if(is_year()) {
        $title = get_the_time('Y年');
        } else {
        $title = get_the_time('Y年n月');
        }
        printf('%1$s的文章存档', $title);
        /*其他页面显示博客标题*/
        } else {
        $title=trim(strip_tags(bloginfo('name')));
        echo $title;
        }?>
    </title>
    <?php
        //页面关键词和描述的判断及书写
        //如果是首页
        if (is_home()){
        $keywords = "WP仿站,wordpress仿站";
        $description = "这是一个wordpress仿站练习项目，旨在熟悉WP仿站过程以及关键代码的使用";
        }
        //如果是文章页
        elseif (is_single()){
        //默认使用文章页添加关键字
        $keywords = get_post_meta($post->ID, "keywords", true);
        //如果为空，使用标签作为关键字
        if($keywords == ""){
        $tags = wp_get_post_tags($post->ID);
        foreach ($tags as $tag){
        $keywords = $keywords.$tag->name.",";
        }
        //去掉最后一个逗号
        $keywords = rtrim($keywords, ', ');
        }
        //默认使用文章页添加描述
        $description = get_post_meta($post->ID, "description", true);
        //如果为空，使用文章前100个字作为描述
        if($description == ""){
        if($post->post_excerpt){
        $description = $post->post_excerpt;
        }else{
        $description = mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200);
        }
        }
        }
        //如果是页面，使用页面添加的关键字和描述
        elseif (is_page()){
        $keywords = get_post_meta($post->ID, "keywords", true);
        $description = get_post_meta($post->ID, "description", true);
        }
        //如果是分类页，使用分类名作为关键字，分类描述作为描述
        elseif (is_category()){
        $keywords = single_cat_title('', false);
        $description = category_description();
        }
        //如果是标签页，使用标签名作为关键字，标签描述作为描述
        elseif (is_tag()){
        $keywords = single_tag_title('', false);
        $description = tag_description();
        }
        //最后格式化一下，去掉两端空格
        $keywords = trim(strip_tags($keywords));
        $description = trim(strip_tags($description));
        ?>
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />
        <!--  TDK  Info  -->
        <!-- CSS -->
        <link href="<?php bloginfo(stylesheet_url); ?>" rel="stylesheet" media="screen" type="text/css" />
        <!-- jS -->
        <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
        <?php wp_head();?>
</head>

<body>
    <a name="gettop" id="gettop"></a>
    <div id="header">
        <div id="nav">
            <div id="navBar">
                <?php
                    /**
                    *  导航菜单
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                    'theme_location' => 'header_menu',
                    'menu' => '',
                    'container' => 'div',
                    'container_id' => 'navMenu',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '<span>',
                    'after' => '</span>',
                    'link_before' => '',
                    'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'depth' => 0,
                'walker' => ''
                );
                wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </div>
    <!-- //End header -->
    <!-- /header -->
