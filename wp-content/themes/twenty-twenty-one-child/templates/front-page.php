<?php
global $wpdb;


$table_name = $wpdb->prefix . "users";
$results = $wpdb->get_results( "SELECT * FROM $table_name");
foreach ($results as $key => $row){
	
	$mail = $row->user_email;
	


if(isset($_POST["submit"])) {
$usr_email = $_POST['user_emails'];

   if($mail==$usr_email){
   	header("Location: digimantra-portal/instructions/?id=.$user_id
");
   	
   }
   

   else { "faild";
}
   

  }

 }
get_header(); ?>

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
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/problems.svg" alt="problems">
				 </div>
				 <div class="clock_content">
					 <h5>3</h5>
					 <p>problems to be solved</p>
				 </div>
			</div>
		</div>
	</div>
</section>
<section class="confirm_form">
	<div class="container bg-white">
		<div class="confirm_form_wrap">
		    <p>Please enter some details to proceed.</p>
			<form method="post">
				<div class="confirm_input">
					<input type="text" placeholder="First name" name="user_nicename">
				</div>
				<div class="confirm_input">
					<input type="text" placeholder="Last name" name="display_name">
				</div>
				<div  class="confirm_input">
					<input type="email" placeholder="Email id" name="user_emails">
				</div>
				<div  class="confirm_input">
					<input type="number" placeholder="Phone">
				</div>
				<div  class="confirm_checkbox"><input type="checkbox" ><label>
					By proceeding, you are agreeing to our<a href="#"> Terms of Service</a> and <a href="#">Privacy Policy.</a></label></div>
				<div class="confirm_btn">
					<button type="submit" name="submit">confirm and proceed <i class="fas fa-arrow-right"></i></button>
				</div>
			</form>

		</div>
	</div>
</section>


</main><!-- #site-content -->
