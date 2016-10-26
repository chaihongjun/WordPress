<!-- 只在首页显示友情链接 -->
<?php if ( is_home() ) { ?>
<div id="blog-roll"><?php wp_list_bookmarks('title_li=&categorize=0'); ?></div>
<?php }?>


<?php
/*   友情链接函数
$args = array(
#链接排列顺序 link_id url name ....
    'orderby'          => 'name',
#  根据orderby 升序或降序 
    'order'            => 'ASC',
    #显示是最大链接数，默认-1为全部
    'limit'            => -1,
    #指定要显示的分类ID，用逗号隔开，不显示，则默认显示全部
    'category'         => ' ',   
    #将被排除的链接分类目录的ID，用逗号隔开。默认不排除                             
    'exclude_category' => ' ',
    # 将要显示的链接所属分类的名称。如果没有指定分类，显示所有含有链接的链接分类。默认显示全部                 
    'category_name'    => ' ',
    #是否显示公开度为“不公开”的链接。
    'hide_invisible'   => 1,
    #是（TRUE）否（FALSE）显示最近更新的时间标记
    'show_updated'     => 0,
    'echo'             => 1,
    #1显示所以分类下的链接
    'categorize'       => 1,  
    #当 categorize =0时 ，显示 的标题                                      
    'title_li'         => __('Bookmarks'),

    #当 categorize=1时，显示在标题前后的内容
    'title_before'     => '<h2>',
    'title_after'      => '</h2>',


    'category_orderby' => 'name',
    'category_order'   => 'ASC',
    'class'            => 'linkcat',
    'category_before'  => '<li id=%id class=%class>',
    'category_after'   => '</li>' ); 
*/

    ?>

    <?php 
/*
    wp_list_bookmarks( $args );
*/
     ?>

