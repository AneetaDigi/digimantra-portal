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
$umail= trim($usr_email);

   if($mail==$umail){

   	header("Location: /instructions/
");
   	
   }
	else{
	echo '<script language="javascript">';
echo 'alert("Your Email ID not register from HR department.")';
echo '</script>';
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
			
		</div>
	</div>
</section>
<section class="clock_section">
	<div class="container bg-white bnr-btm">
		<div class="clock_wrapper bnr-btm-box">
			<div class="banner_content">
                <h1 class="smpl-title">Interview Assessment <span class="lbs-subtitl">By DigiMantra Labs</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="confirm_form">
	<div class="container bg-white bg-frm">
		<div class="confirm_form_wrap">
		    <h2 class="frm-details-title">Please enter your details to proceed</h2>
			<form method="post"  id="testForm">
				<div class="confirm_input">
					<input type="text" placeholder="First Name*" name="user_login" id="fname" required>
				</div>
				<div class="confirm_input">
					<input type="text" placeholder="Last Name" name="user_nicename" id="fnamee" >
				</div>
				<div  class="confirm_input">
					<input type="email" placeholder="Email ID*" name="user_email" required>
				</div>
				<div  class="confirm_input">
					<input type="text" placeholder="Phone Number*"  id="phone_number" maxlength="10" onkeypress="javascript:return isNumber(event)" required>
				</div>
				<div  class="confirm_checkbox"><input type="checkbox" required><label>
					By proceeding, you are agree to our <a href="https://digimantralabs.com/privacypolicy/" target="_blank">Privacy Policy.</a></label></div>
				<div class="confirm_btn">
					<button type="submit" name="submit" >confirm and proceed</button>
				</div>
			</form>

		</div>
	</div>
</section>


</main><!-- #site-content -->

<script>
	
	 function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }   

</script>
<script>
$('#testForm').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#fname').val());

    // Check if empty of not
    if (name === '') {
        alert('Text-field is empty.');
        return false;
    }
});
$(document).ready(function(){
    $("#testForm").validate({
      onfocusout:false,

        rules: {
          'user_nicename': {
                required: {
                    depends:function(){
                        $(this).val($.trim($(this).val()));
                        return true;
                    }
                }
            },
          'display_name': {
            required: {
              depends: function() {
                $(this).val($.trim($(this).val()));
                return true;
              }
            }
          },
           user_emails: {required: true, email: true}
        },
      submitHandler: function(form){
        alert("submit success")
        form.submit();
      }
    });
});
</script>
