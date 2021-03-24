<?php
//Simple Ajax Login Form
//Source: http://natko.com/wordpress-ajax-login-without-a-plugin-the-right-way/
?>


<form id="login" action="login" method="post">
    <h1>Site Login</h1>
    <p class="status"></p>
    <label for="username">Username</label>
    <input id="username" type="text" name="username">
    <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
    <input class="submit_button" type="submit" value="Login" name="submit">
    <a class="close" href="">(close)</a>
    <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
</form>


<?php
//add this within functions.php
function ajax_login_init(){

    wp_register_script('ajax-login-script', get_template_directory_uri() . '/ajax-login-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-login-script');

    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}


function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( !is_wp_error($user_signon) ){
        wp_set_current_user($user_signon->ID);
        wp_set_auth_cookie($user_signon->ID);
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}
?>
<script>

//Create a file ajax-login-script.js within theme's directory and paste this js

jQuery(document).ready(function($) {

    // Show the login dialog box on click
    $('a#show_login').on('click', function(e){
        $('body').prepend('<div class="login_overlay"></div>');
        $('form#login').fadeIn(500);
        $('div.login_overlay, form#login a.close').on('click', function(){
            $('div.login_overlay').remove();
            $('form#login').hide();
        });
        e.preventDefault();
    });

    // Perform AJAX login on form submit
    $('form#login').on('submit', function(e){
        $('form#login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#login #username').val(), 
                'password': $('form#login #password').val(), 
                'security': $('form#login #security').val() },
            success: function(data){
                $('form#login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });

});
</script>
