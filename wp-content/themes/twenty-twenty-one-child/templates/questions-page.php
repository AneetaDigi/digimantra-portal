
<?php
/**
 * Template Name: Questions Page1
 * Template Page Type: questions, page
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
<section class="question_section">
	<div class="container bg-white  py-3">
    <form action="">
		   <ol class="questions">
		   	<?php if( have_rows('form_feilds_data') ):
  while( have_rows('form_feilds_data') ): the_row();?>
		   <li><?php echo the_sub_field('form_title'); ?>
			   <ol class="ques_options">
			   	<?php if( have_rows('repeater_field_2_name') ):
      while( have_rows('repeater_field_2_name') ): the_row(); ?>
				   <li><input type="radio" id="" name="language" value="Object-Oriented"> <?php the_sub_field('sub_field_1');?></li>
				   
			   </ol>
		   </li>
		   
	   </ol>
	   </div>
	<?php endwhile;
    endif;

endwhile;
endif;
    ?>
	   <div class="submit_btn text-center">
		   <button type="submit" class="btn">Submit</button>
	   </div>
	</form>
	</div>
</section>

</main><!-- #site-content -->



