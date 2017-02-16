<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ToroAMA
 */

include("/parts/page-header.php"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="single-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			?> 	<div class="nav-previous"><?php
                    
                    $prev_post = get_previous_post(true, 'homepost');
                    
                    if (!empty( $prev_post )): ?>
                    <a href="<?php echo $prev_post->guid ?>"><?php echo $prev_post->post_title ?></a>
                     <?php endif ?>
                    </div>
				<div class="nav-next"><?php 
                    $next_post = get_next_post(true, 'homepost');
                    
                    if (!empty( $next_post )): ?>
                    <a href="<?php echo $next_post->guid ?>"><?php echo $next_post->post_title ?></a>
                     <?php endif ?>
                    
                    </div>
            <?php


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
