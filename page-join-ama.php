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

include("/parts/page-header.php"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <form method="post" action="<?php home_url(); ?>">
                <textarea name="message"></textarea>
                <input type="submit">
            </form>
            
            <?php 
            
                
                if($_POST["message"]) {
                    mail("BenKincaidWeb@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
                    echo("<script>console.log('200')</script>");
                }

               ?>
                            
           
            
		</main><!-- #main -->
	</div><!-- #primary -->
poop
<?php

get_footer();
