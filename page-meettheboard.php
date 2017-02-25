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

include "parts/page-header.php"; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>		
            <div class="mtbpage-cont">
            
             <div class="mtb-cont clear">
                <div class="mtb-left">
                    
                    <h4>Olivia Lee</h4>
                    <img src="https://toroama.files.wordpress.com/2016/09/olivia.jpg?w=&h=">
                    <h5>President</h5>
                </div>
                
                <div class="mtb-right">
                    <h4>Darline Zuniga</h4>
                    <img src="https://toroama.files.wordpress.com/2016/09/darline.jpg?w=150&h=150">
                    <h5>VP of Operations</h5>
                </div>
            </div>    
                
            <div class="mtb-cont clear">
                <div class="mtb-left">
                    
                    <h4>Aimee Lopez</h4>
                    <img src="https://toroama.files.wordpress.com/2016/09/aimee.jpg?w=700&h=">
                    <h5>VP of Professional Development</h5>
                </div>
                
                <div class="mtb-right">
                    <h4>Ben Kincaid</h4>
                    <img src = "">
                    <h5>Website Director</h5>
                    
                </div>
            </div>
            
            <div class="mtb-cont clear">
                <div class="mtb-left">
                    <h4>Dr. Kirti Celly</h4>
                    <img src="https://toroama.files.wordpress.com/2016/09/celly.jpg?w=150&h=150">
                    <h5>Faculty Advisor</h5>
                </div>
                
                <div class="mtb-right">
                    <h4>Mathew Warren</h4>
                    <img src="">
                    <h5>VP of Finance</h5>
                </div>
            </div>
                
                <div class="mtb-cont clear">
                <div class="mtb-left">
                    
                    <h4>Alex Phankoea</h4>
                    <img src="https://toroama.files.wordpress.com/2016/09/alex.jpg?w=150&h=150">
                    <h5>Creative Director</h5>
                </div>
                
                <div class="mtb-right">
                    <h4>Kelsey Mckay</h4>
                    <img src = "https://toroama.files.wordpress.com/2016/09/kelsey.jpg?w=150&h=150">
                    <h5>Social Media Director</h5>
                </div>
            </div>
                <div class="mtb-cont clear">
                <div class="mtb-left">
                    
                    <h4>Amanda Reyes</h4>
                    <img src="">
                    <h5>VP of Public Relations</h5>
                </div>
                
                <div class="mtb-right">
                    <h4>Jessica Caramenes</h4>
                    <img src = "">
                    <h5>VP of Social Events</h5>
                </div>
            </div>
               
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
a
<?php

get_footer();
