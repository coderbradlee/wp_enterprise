<?php 
//自定义函数接口，在此文件你可以输入任意自定义函数，注意若使用了自定义函数，请备份此文件，在主题更新之后，重新覆盖即可
function annointed_admin_bar_remove() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
add_filter('admin_title', 'wpdx_custom_admin_title', 10, 2);
function wpdx_custom_admin_title($admin_title, $title){
return $title.' &lsaquo; '.get_bloginfo('name');
}
?>