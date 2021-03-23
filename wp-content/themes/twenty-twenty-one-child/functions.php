<?php
/*This file is part of twentytwentyone-child, twentytwentyone child theme.

 

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

 

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

 
// add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style');
// function enqueue_parent_theme_style() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }
if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
    function twentytwentyone_child_enqueue_child_styles() {
       // loading parent style
        wp_register_style(
          'parente2-style',
          get_template_directory_uri() . '/style.css'
        );
       wp_enqueue_style( 'parente2-style' );
       //font-awesome style
          wp_register_style(
          'font-awesome-style',
          get_stylesheet_directory_uri() .'/assets/css/all.min.css'

        );
         wp_enqueue_style( 'font-awesome-style');
      //bootstrapp style
          wp_register_style(
          'bootstrap-style',
          get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css'

        );
        wp_enqueue_style( 'bootstrap-style');

        // loading child style
        wp_register_style(
          'childe2-style',
          get_stylesheet_directory_uri() .'/assets/css/custom.css'

        );
        wp_enqueue_style( 'childe2-style');
    }
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_enqueue_child_styles' );



function my_custom_post_product() {
  $labels = array(
    'name'               => _x( 'Question Answer', 'post type general name' ),
    'singular_name'      => _x( 'Question Answer', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Question Answer' ),
    'edit_item'          => __( 'Edit Question Answer' ),
    'new_item'           => __( 'New Question Answer' ),
    'all_items'          => __( 'All Question Answer' ),
    'view_item'          => __( 'View Question Answer' ),
    'search_items'       => __( 'Search Question Answer' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ), 
   // 'parent_item_colon'  => ’,
    'menu_name'          => 'Question Answer'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'Question Answer', $args ); 
}
add_action( 'init', 'my_custom_post_product' );





add_shortcode( 'wpshout_frontend_post', 'wpshout_frontend_post' );
function wpshout_frontend_post() {
    ?>
<div id="postbox">
    <form id="new_post" name="new_post" method="post">

    <p><label for="title">Title</label><br />
        <input type="text"  id="title" value="" tabindex="1" size="20" name="title" />
    </p>

    <p>
        <label for="content">Post Content</label><br />
        <textarea id="content" tabindex="3" name="content" cols="50" rows="6"></textarea>
    </p>

    <p><?php wp_dropdown_categories( 'show_option_none=Category&tab_index=4&taxonomy=category' ); ?></p>

    <p><label for="post_tags">Tags</label>

    <input type="text" value="" tabindex="5" size="16" name="post_tags" id="post_tags" /></p>

    <?php wp_nonce_field( 'wps-frontend-post' ); ?>

    <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>
    
    </form>
</div>
    <?php
}


function wpshout_save_post_if_submitted() {
  print_r($_POST);
    // Stop running function if form wasn't submitted
    if ( !isset($_POST['title']) ) {
        return;
    }

    // Check that the nonce was set and valid
    if( !wp_verify_nonce($_POST['_wpnonce'], 'wps-frontend-post') ) {
        echo 'Did not save because your form seemed to be invalid. Sorry';
        return;
    }

    // Do some minor form validation to make sure there is content
    if (strlen($_POST['title']) < 3) {
        echo 'Please enter a title. Titles must be at least three characters long.';
        return;
    }
    if (strlen($_POST['content']) < 100) {
        echo 'Please enter content more than 100 characters in length';
        return;
    }

    // Add the content of the form to $post as an array
    $post = array(
        'post_title'    => $_POST['title'],
        'post_content'  => $_POST['content'],
        'post_category' => $_POST['cat'], 
        'tags_input'    => $_POST['post_tags'],
        'post_status'   => 'draft',   // Could be: publish
        'post_type'   => 'post' // Could be: `page` or your CPT
    );
    wp_insert_post($post);
    echo 'Saved your post successfully! :)';
}