<?php
/* 修改网站的默认登录路径 */
/*   修改后台路径     
http://127.0.0.1/wp-login.php?admin=login
*/
function login_protection(){ if($_GET['admin'] != 'login')header('Location: http://127.0.0.1/'); } 
add_action('login_enqueue_scripts','login_protection');  