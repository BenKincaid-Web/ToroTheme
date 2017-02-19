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
					<input type="text" name = "contact-name"  value="<?php echo $name ?>">
						<span class="error"><?php echo $name_error; ?></span>
					<input type="submit">
					<div class="success"><?php echo $success ?></div>
				</form>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();
