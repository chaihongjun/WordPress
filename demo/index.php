<?php
/*
Template Name: 首页模板
*/
?>
<?php get_header();?>
<!-- 调用header.php -->
<div id="container">
	<div id="main">
		<div id="place">
		 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
		</div>
		<br/>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   <!--  主循环 -->
		<!-- post -->
		<div id="listArticle">
			<div class="listtitle">
				<h3><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h3><!--  分别是链接和标题 ，需要在主循环内容使用  -->
			</div>
			<span class="info">
				<small>日期：<?php the_time('Y-m-d');?></small> ｜     <!--  POST发布时间 ，需要在主循环内容使用  -->
				<small>分类：<a target="_blank" href="<?php echo $cat_links; ?>"><?php single_cat_title(); ?></a></small> ｜
				<small>标签：</small> ｜
			</span>
			<div class="preview">
			</div>
			<p class="intro">
				<?php the_excerpt();?>      <!--  摘要 ，需要在主循环内容使用  -->
			</p>
			<p class="readMore">
				<a href="<?php the_permalink();?>">阅读剩余部分...</a>
			</p>
		</div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
		<!-- 分页 -->
		<?php pagination($query_string);?>     <!-- 分页代码  -->
		<!-- /pages -->
	</div>
	<?php get_sidebar();?>          <!-- 侧栏  -->
	<?php get_footer(); ?>    <!-- 底部  -->