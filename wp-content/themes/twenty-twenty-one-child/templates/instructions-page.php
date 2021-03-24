<?php
/**
 * Template Name: Instructions Page
 * Template Page Type: Instructions, page
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
					 <h5 class="minut">30 Minutes</h5>
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
<section class="instructions_section">
	<div class="container bg-white instrctn-box">
		<h2 class="title">Instructions from DigiMantra</h2>
		<p class="ensur-sub-title">To enjoy the best experience on our platform, please ensure that</p>
		<div class="instru_content">
			<ol>
				<li class="mentioned-list">The operating system on your computer is one of the 3 mentioned below :
					<ul class="above-list">
					<li>Windows 7 and above</li>
					<li>Linux distributions or</li>
					<li>Mac OS X 10.6 and above</li>
				</ul>
			    </li>
				<li class="mentioned-list">You are opening the assessment in the latest versions of one of the browsers mentioned below :
					<ul class="above-list">
						<li>Chrome/ Chromium</li>
						<li>Mozilla Firefox</li>
						<li>Microsoft Edge</li>
						<li>Apple Safari</li>
					</ul>
				</li>
				<li class="mentioned-list">You have disabled all the browser extensions and enabled Add-ons.</li>
				<li class="mentioned-list">You open the assessment in incognito  mode.</li>
				<li class="mentioned-list">In between the assessment you can't take break.</li>
				<li class="mentioned-list">If you closed the tab in between your test, It will be automatic submitted</li>
				<li class="mentioned-list">Make sure your browser location is ON</li>
				<li class="mentioned-list">If you have internet connectivity issues or not able to open interview portal, please contact us at <a href="mailto:info@digimantra.com">info@digimantra.com</a></li>
				<li class="mentioned-list">The examination will comprise of Objective type Multiple Choice Questions (MCQs) as well as Subjective type.</li>
				<li class="mentioned-list">All questions are compulsory and each carries One mark.</li>
				<li class="mentioned-list">There will be NO NEGATIVE MARKING for the wrong answers.</li>
				<li class="mentioned-list">The Time remaining is shown in the Right Top Corner of the screen.</li>
				<li class="mentioned-list"> Your online test will be screencast</li>
			</ol>
		</div>
		<div class="text-center start_btn pb-3 strt-btnn-new">
		<a href="<?php bloginfo('url'); ?>/index.php/playbutton/" class="btn">Start Test</a>
		</div>
	</div>
</section>
</main><!-- #site-content -->

