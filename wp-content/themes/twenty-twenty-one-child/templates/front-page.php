<?php
global $wpdb;


$table_name = $wpdb->prefix . "users";
$results = $wpdb->get_results( "SELECT * FROM $table_name");
foreach ($results as  $row){
	//echo '<td>' $row->user_email.'</td>';
	$mail = $row->user_email;
	$id = $row->user_login;
	
//	die;



if(isset($_POST["submit"])) {
	session_start();
    $_SESSION['user_login'] = $session['user_status'];
    $_SESSION['user_status'] = $session;
	
	session_start();  //check for wp_session storage 
            $_SESSION["user_status"] = '0';
           
$usr_email = $_POST['user_email'];

   if($mail==$usr_email){

   	header("Location: /instructions/
");
   	
   }
   
}
   



  }


get_header(); ?>


<?php //if (is_user_logged_in()) : ?>
   <!--- <a href="<?php //echo wp_logout_url(get_permalink()); ?>">Logout</a>
<?php //else : ?>
    <a href="<?php //echo wp_login_url(get_permalink()); ?>">Login</a> -->
<?php //endif;?>

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
<section class="confirm_form">
	<div class="container bg-white bg-frm">
		<div class="confirm_form_wrap">
		    <h2 class="frm-details-title">Please enter your details to proceed</h2>
			<form method="post">
				<div class="confirm_input">
					<input type="text" placeholder="First name*" name="user_login" required>
				</div>
				<div class="confirm_input">
					<input type="text" placeholder="Last name" name="user_nicename">
				</div>
				<div  class="confirm_input">
					<input type="email" placeholder="Email id*" name="user_email" required>
				</div>
				<div  class="confirm_input">
					<input type="number" placeholder="Phone number*" required>
				</div>
				<div  class="confirm_checkbox"><input type="checkbox" ><label>
					By proceeding, you are agree to our <a href="https://digimantralabs.com/privacypolicy/" target="_blank">Privacy Policy.</a></label></div>
				<div class="confirm_btn">
					<button type="submit" name="submit">confirm and proceed</button>
				</div>
			</form>

		</div>
	</div>
</section>


</main><!-- #site-content -->

