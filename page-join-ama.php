<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ToroAMA
 */









include "form-process.php";
include "parts/page-header.php"; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">

				<form method="post" class= "form-join" action = "<?php the_permalink(); ?>">
                    <h2 class = "form-header-text">Please fill out this form and a ToroAMA board member will be in touch with you shortly!</h2>
					<h3 class = "form-text">Name:</h3>
					<input type="text" name = "contact-name"  value="<?php if(isset($_POST['contact-name'])) echo $_POST['contact-name'];?>">
						<span class="error"><?php echo $nameError; ?></span>
						<h3 class = "form-text">Email:</h3>
					<input type="text" name = "email-name"  value="<?php if(isset($_POST['email-name'])) echo $_POST['email-name'];?>">
						<span class="error"><?php echo $email_error; ?></span>

						<h3 class = "form-text">CSUDH Identification Number:</h3>
	 				 <input type="text" name = "number-name"  value="<?php if(isset($_POST['number-name'])) echo $_POST['number-name'];?>">
	 				 	<span class="error"><?php echo $numberError; ?></span>


						<h3 class = "form-text">Major:</h3>
				    <input type="text" name = "major-name"  value="<?php if(isset($_POST['major-name'])) echo $_POST['major-name'];?>">
						<span class="error"><?php echo $majorError; ?></span>

						<h3 class = "form-text">Reason for joining AMA:</h3>
						<select name = "SelectReason[]" multiple>
							<option value="one">Professional Development</option>
							<option value="two">Workshops</option>
							<option value="three">Networking</option>
							<option value="four">Other</option>
							<select>
								<input class="submit-input" type="submit" name="submit" value="submit">
                            <?php if(isset($emailSent) && $emailSent == true) { ?>
					               <div class="success">Thank you! You're email has been sent and a board member will be in touch with you shortly.</div>
                            <?php } else { ?>
                                    <p>Sorry, that didnt work!!</p>
                            <?php } ?>
				</form>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();









