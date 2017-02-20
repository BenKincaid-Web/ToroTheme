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

				<form method="post" action = "<?php $_SERVER['PHP_SELF']; ?>">
					<h3>Name:</h3>
					<input type="text" name = "contact-name"  value="<?php echo $name ?>">
						<span class="error"><?php echo $name_error; ?></span>
						<h3>Email:</h3>
					<input type="text" name = "email-name"  value="<?php echo $email ?>">
						<span class="error"><?php echo $email_error; ?></span>

						<h3>CSUDH Identification Number:</h3>
	 				 <input type="text" name = "number-name"  value="<?php echo $number ?>">
	 				 	<span class="error"><?php echo $number_error; ?></span>


						<h3>Major:</h3>
											<input type="text" name = "major-name"  value="<?php echo $major ?>">
						<span class="error"><?php echo $name_error; ?></span>

						<h3>Reason for joining AMA:</h3>
						<select name = "SelectReason[]" multiple>
							<option value="one">Professional Development</option>
							<option value="two">Workshops</option>
							<option value="three">Networking</option>
							<option value="four">Other</option>
							<select>
								<input type="submit" name="submit" value="submit">
					<div class="success"><?php echo $success ?></div>
				</form>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();
