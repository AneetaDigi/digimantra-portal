<?php
/**
 * Template Name: Playbutton Page
 * Template Page Type: Playbutton, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
<section class="banner_section">
	<div class="container bnrr-cntnt">
		<div class="banner_wrapper">
			<div class="banner_logo">
				<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/Digimantra-Logo-white-1.png" alt="">
			</div>
			<div class="banner_content">
				<h1 class="smpl-title">Interview Assessment</h1>
				<p class="smpl-sub-title">By DigiMantra Labs</p>
			</div>
		</div>
	</div>
</section>
<section class="clock_section">
	<div class="container bg-white bnr-btm">
		<div class="clock_wrapper bnr-btm-box">
			<div class="minuts">
                 <div class="clock_img">
					 <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/time-left.png" alt="timer">
				 </div>
				 <div class="clock_content">
				 	<?php
          global $wpdb;
        $current_user_id = get_current_user_id();   
        //echo $current_user_id;
        $author_field = get_field('time_set', 'user_'. $current_user_id );
//$variable = get_field('time_set', $current_user_id);
        if( $author_field){
//echo $author_field;
?>

					 <h5 class="minut"><?php echo $author_field; ?> Minutes</h5>
					
					<?php }else{ ?>
					<h5 class="minut">30 Minutes</h5>
				<?php } ?>
					 <p class="assmnt">To take this assessment</p>
				 </div>
			</div>
			<div class="problems">
                 <div class="clock_img">
					 <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/hypothesis-1.png" alt="problems">
				 </div>
				 <div class="clock_content">
					 <h5 class="minut">30</h5>
					 <p class="assmnt">Problems to be solved</p>
				 </div>
			</div>
		</div>
	</div>
</section>
<section class="playbutton_section mt-5 play-btnn">
    <div class="container bg-white py-4 play-page-new">
        
        <ul class="play_btn_content text-center mt-4 intrnt-txt">
			<li>Do not closed tab in between test. Do not click the “Submit” button unless you want to leave early.</li>
			<li>Do not use any textbook, course notes, or receive help from a test or any other outside source.</li>
			<li>Please make sure you are on a good internet connection</li>
            <li>Camera will be accessed</li>
            <li>Time will begin</li>
			</ul>
		<div class="playbutton_wrap text-center proced-ques">
            <a href="/questions/" class="btn play_btn"> </a>
			
        </div>
    </div>
</section>
</main><!-- #site-content -->

