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
	<div class="container">
		<div class="banner_wrapper">
			<div class="banner_logo">
				<img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/logo-min.png" alt="">
			</div>
			<div class="banner_content">
				<h3>Sample Test</h3>
				<p>By DigiMantra</p>
			</div>
		</div>
	</div>
</section>
<section class="clock_section">
	<div class="container bg-white">
		<div class="clock_wrapper">
			<div class="minuts">
                 <div class="clock_img">
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/timer.svg" alt="timer">
				 </div>
				 <div class="clock_content">
					 <h5>15 Minutes</h5>
					 <p>to take this assessment</p>
				 </div>
			</div>
			<div class="problems">
                 <div class="clock_img">
					 <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/03/problems.svg" alt="problems">
				 </div>
				 <div class="clock_content">
					 <h5>3</h5>
					 <p>problems to be solved</p>
				 </div>
			</div>
		</div>
	</div>
</section>
<section class="playbutton_section mt-5">
    <div class="container bg-white py-4">
        <div class="playbutton_wrap text-center">
            <a href="<?php bloginfo('url'); ?>/questions/" class="btn play_btn"><i class="fas fa-play"></i> Play</a>
        </div>
        <ul class="play_btn_content text-center mt-4 ">

            <li>Camera will be accessed</li>
            <li>Time will begin</li>
            <li>Please make sure you are on a good internet connection</li>
</ul>
    </div>
</section>
</main><!-- #site-content -->

