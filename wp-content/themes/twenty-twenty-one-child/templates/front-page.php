<?php
get_header();
global $wpdb;
$table_name = $wpdb->prefix . "users";
if(isset($_POST["submit"])) {
  $results = $wpdb->get_results("SELECT * FROM $table_name WHERE  user_email='".$_POST['user_email']."'");
  
    $_SESSION['user_login'] = $session['user_status'];
    $_SESSION['user_status'] = $session;

            $_SESSION["user_status"] = '0';
           
$usr_email = $_POST['user_email'];

if(!empty($results[0])){
    echo "<script>;
    window.location = '/digimantra-portal/instructions/'  ;
    </script>";
}
  else{
  echo '<script>';
echo '$( document ).ready(function() {';
echo "$('#myModal').modal('show');";
echo '});</script>';
}
}
?>


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
                    <input type="text" placeholder="First Name*" name="user_login" id="fname" pattern="^[a-zA-Z][\sa-zA-Z]*" title="letters only" required>
                </div>
               
                <div class="confirm_input">
                    <input type="text" placeholder="Last Name" name="user_nicename" id="fnamee" pattern="^[a-zA-Z][\sa-zA-Z]*" title="letters only" required>
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

  <!-- Popup Start -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog popup-dlog">
      <!-- Modal content-->
    <div class="modal-content main-box-popup">
        <div class="modal-header hdr-box">
          <button type="button" class="close cls-ntn" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class="not-reg">The email ID entered above is incorrect, you need to contact DigiMantra Labs for the same.</p>
        </div>
    </div>
    </div>
  </div>
<!-- Popup End -->
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
