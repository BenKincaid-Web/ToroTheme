<?php /* Template Name: Example Template */ ?>












<?php include "parts/page-header.php"; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php global $post; // required
        $args = array('category' => 35); // include category 9
        $custom_posts = get_posts($args);
        foreach($custom_posts as $post) : setup_postdata($post);
        $by = "by";
        ?>

        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="entry-meta"><?php the_time(get_option('date_format')); ?></a></div>
        <article class = "news-cont">
        <div class="entry-content">
        <p class=""><?php the_content(); ?></p>
      </div>
    </article>

      <?php endforeach; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();

