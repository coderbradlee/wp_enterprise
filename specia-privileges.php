分享一个WordPress限定用户投稿的方法，即只允许用户在指定或者特定的分类下投稿，这样就省的编辑了，让用户投稿在特定目录下即可，

也可以设置不在首页显示这个分类，比如无作为的dux主题就自带此功能，让某个分类不在首页下显示：WordPress让用户在指定的分类投稿

好了让我们来看看实现方法：

WordPress让用户在指定的分类投稿

还是一样的，我们这里需要用到的是function.php的功能代码，在倒数第二行加入如下代码：

 add_action( 'show_user_profile', 'restrict_user_form' );
 add_action( 'edit_user_profile', 'restrict_user_form' );
 
 function restrict_user_form( $user ) {
 if ( ! current_user_can('add_users'))
 return false;
 $args = array(
 'show_option_all' => '',
 'show_option_none' => '未选择',
 'orderby' => 'ID', 
 'order' => 'ASC',
 'show_count' => 0,
 'hide_empty' => 0,
 'child_of' => 0,
 'exclude' => '',
 'echo' => 1,
 'selected' => get_user_meta( $user->ID, '_access', true),
 'hierarchical' => 0, 
 'name' => 'allow',
 'id' => '',
 'class' => 'postform',
 'depth' => 0,
 'tab_index' => 0,
 'taxonomy' => 'category',
 'hide_if_empty' => false,
 'walker' => ''
 );
 ?>
 
 <h3>限制该用户只能投稿到分类</h3>
 
 <table class="form-table">
 <tr>
 <th><label for="access">选择分类:</label></th>
 
 <td>
 <?php wp_dropdown_categories($args); ?>
 <br />
 <span class="description">用于限制投稿者的分类目录</span>
 </td>
 </tr>
 
 </table>
 <?php }
 
 /* save the data from admin */
 add_action( 'personal_options_update', 'restrict_save_data' );
 add_action( 'edit_user_profile_update', 'restrict_save_data' );
 
 function restrict_save_data( $user_id ) {
 if ( ! current_user_can( 'add_users' ) )
 return false;
 update_user_meta( $user_id, '_access', $_POST['allow'] );
 }
 
 // check if the user loggin in is author and be restricted
 function is_restrict() {
 if ( get_user_meta(get_current_user_id(), '_access', true) > 0 )
 return true;
 else
 return false;
 }
 
 
 /* auto register category to post that the author's being restricted */
 add_action( 'save_post', 'save_restrict_post' );
 function save_restrict_post( $post_id ) {
 if ( ! wp_is_post_revision( $post_id ) && is_restrict() ){
 remove_action('save_post', 'save_restrict_post');
 wp_set_post_categories( $post_id, get_user_meta( get_current_user_id() , '_access', true) );
 add_action('save_post', 'save_restrict_post');
 }
 }
 
 /* warning author */
 add_action( 'edit_form_after_title', 'restrict_warning' );
 function restrict_warning( $post_data = false ) {
 if (is_restrict()) {
 $c = get_user_meta( get_current_user_id() , '_access', true);
 $data = get_category($c);
 echo 'You are allowing to post to category: <strong>'. $data->name .'</strong><br /><br />';
 }
 }
 
 /* remove category dropdown box in editor */
 function restrict_remove_meta_boxes() {
 if (is_restrict() )
 remove_meta_box('categorydiv', 'post', 'normal');
 }
 add_action( 'admin_menu', 'restrict_remove_meta_boxes' );