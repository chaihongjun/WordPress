<?php
/*
给图片自动添加ALT属性
 */   
/** Auto-Generate ALT tag for images */
function image_alt_tag($content)
{global $post;preg_match_all('/<img (.*?)\/>/', $content, $images);
if(!is_null($images)) {foreach($images[1] as $index => $value)
{if(!preg_match('/alt=/', $value)){
$new_img = str_replace('<img', '<img alt="'.get_the_title().'"', $images[0][$index]);
$content = str_replace($images[0][$index], $new_img, $content);}}}
return $content;
}
add_filter('the_content', 'image_alt_tag', 99999);