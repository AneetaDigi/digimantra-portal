<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <script>
    document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    <?php wp_head(); ?>
</head>
<style>
    .header_section {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 9;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/MicrosoftTeams-image-21.png);
    background-size: cover;
    background-repeat: no-repeat;
}
.banner_section {
    padding: 180px 0 150px 0;
    background-image: linear-gradient( 
139deg
 , #10c3de 100%, #26a0f4 0);
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/candidates-waiting-job-interview-1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
}
.bnr-btm-box {
    background-repeat: no-repeat;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/04/blue-concrete-wall-textures-background_74190-7757.jpg);
    background-size: cover;
    background-position: bottom;
}
.confirm_btn button {
    color: #fff !important;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/04/blue-concrete-wall-textures-background_74190-7757.jpg) !important;
    background-size: cover;
    background-position: bottom;
    padding: 12px 24px;
    border: 0;
    text-transform: uppercase;
    font-size: 16px;
}
    
.strt-btnn-new a {
    color: #fff;
    padding: 12px 40px;
    border-radius: 0px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    background-size: cover;
    background-position: bottom;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/blue-concrete-wall-textures-background_74190-7757.jpg);
}
    /*
.strt-btnn-new a:hover {
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/abstract-blue-white-wave-background_41084-451.jpg);
    color: #000 !important;
    background-size: cover;
    background-position: center;
}
    
.play_btn {
    padding: 18px 30px;
    color: #fff;
    font-size: 36px;
    border-radius: 50px;
    background-size: cover;
    background-position: bottom;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/abstract-blue-white-wave-background_41084-451.jpg);
}
.play_btn:hover {
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/abstract-blue-white-wave-background_41084-451.jpg);
    color: #000 !important;
    background-size: cover;
    background-position: inherit;
}
    */
.btnrcdng button {
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/blue-concrete-wall-textures-background_74190-7757.jpg) !important;
    background-size: cover;
    background-position: bottom;
    color: #fff !important;
    padding: 12px 24px;
    border-radius: 5px;
    border: unset;
    text-transform: uppercase;
    font-size: 16px;
}
.btnrcdng button .stp {
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/abstract-blue-white-wave-background_41084-451.jpg);
    color: #000 !important;
    background-size: cover;
    background-position: bottom;
    padding: 12px 24px;
    border-radius: 5px;
    border: unset;
    text-transform: uppercase;
    font-size: 16px;
}
input.qsm-btn.qsm-submit-btn.qmn_btn {
    color: #fff !important;
    padding: 12px 40px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    border: unset;
    background-size: cover;
    background-position: bottom;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/04/blue-concrete-wall-textures-background_74190-7757.jpg);
}
    
    input#next-question {
    color: #fff !important;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/blue-concrete-wall-textures-background_74190-7757.jpg) !important;
    background-size: cover;
    background-position: bottom;
    padding: 12px 38px;
    border: 0;
    text-transform: uppercase;
    font-size: 16px;
    margin-left: 20px;
    }
    input#prev-question {
    color: #fff !important;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/blue-concrete-wall-textures-background_74190-7757.jpg) !important;
    background-size: cover;
    background-position: bottom;
    padding: 12px 24px;
    border: 0;
    text-transform: uppercase;
    font-size: 16px;
}
    input#action-button {
    color: #fff !important;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/blue-concrete-wall-textures-background_74190-7757.jpg) !important;
    background-size: cover;
    background-position: bottom;
    padding: 12px 34px;
    border: 0;
    text-transform: uppercase;
    font-size: 16px;
}
.strt-btnn-new a {
    color: #fff;
    padding: 12px 40px;
    border-radius: 0px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: 600;
    background-size: cover;
    background-position: bottom;
    background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/04/blue-concrete-wall-textures-background_74190-7757.jpg);
}
.submit_bttn:after {
    content: '';
    background: url(<?php bloginfo('url'); ?>/wp-content/uploads/2021/04/Untitled-1.jpg);
    display: block;
    position: absolute;
    width: 272px;
    height: 12px;
    background-repeat: no-repeat;
    text-align: center;
    top: 68px;
    display: none;
    left: 43%;
}
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
    <header id="header_section" class="header_section">
    
      <div class="container-fluid">
          <div class="header_wrapper">
           <?php get_template_part( 'template-parts/header/site-branding' ); ?>
           </div>
     </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                   <script type="text/javascript">
jQuery(function() {
jQuery("#action-button").click(function() {
  //alert("fdghg");
  var delay = 1000; 
        var url = '/thank-you'
        setTimeout(function(){ window.location = url; }, delay);
//var url = '/thank-you';
$(location).attr('href', url);
})
});
</script>   
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>                                
   </header>
<div id="content" class="site-content">
       <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
