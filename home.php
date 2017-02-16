<?php
include("/parts/home-header.php"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
        $home1 = 1735;//This is page id or post id
        $home1_post = get_post($home1);
        $home1_content = $home1_post->post_content;
          
        $card_1 = 1737; // MEMBER BENEFITS META
        $card_2 = 1739; //Calendar of EVENTS META
        $card_3 = 1741; // MEET THE BOARD META
            
        $card_1link = 1747; // MEMBER BENEFITS PL
        $card_2link = 1729; //Calendar of EVENTS PL
        $card_3link = 1721; // MEET THE BOARD PL
            
        $card1_post = get_post($card_1);
        $card2_post = get_post($card_2);
        $card3_post = get_post($card_3);
            
        $card1_title = $card1_post->post_title;
        $card2_title = $card2_post->post_title;
        $card3_title = $card3_post->post_title;
            
        $card1_content = $card1_post->post_content;
        $card2_content = $card2_post->post_content;
        $card3_content = $card3_post->post_content;

            
		if ( have_posts() ) :

			if ( $home1_content ) : ?>
            <div class="home1 clear">
                <p class="home1-text">
				    <?php echo $home1_content; ?>
                </p>
           
            
            <div class="home-card">
                <div class="card">
                    <div class="card-top">
                        <i class="fa fa-user-o fa-3x redlogos" aria-hidden="true"></i>
                        <a href="<?php the_permalink($card_1link) ?>"><button class="more-1" >more...</button></a>
                    </div>
                    <div class="card-text">
                        <h4><?php echo $card1_title ?></h4>
                        <p><?php echo  $card1_content; ?></p>
                    </div>
                </div>
            </div>
            
             <div class="home-card">
                <div class="card">
                    <div class="card-top">
                        <i class="fa fa-calendar fa-3x redlogos" aria-hidden="true"></i>
                        <a href="<?php the_permalink($card_2link) ?>"><button class="more-2" >more...</button></a>
                    </div>
                    <div class="card-text">
                        <h4><?php echo  $card2_title; ?></h4>
                        <p><?php echo  $card2_content; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="home-card">
                <div class="card">
                    <div class="card-top">
                        <i class="fa fa-star-o fa-3x redlogos" aria-hidden="true"></i>
                        <a href="<?php the_permalink($card_3link) ?>"><button class="more-3" >more...</button></a>
                    </div>
                    <div class="card-text">
                        <h4><?php echo  $card3_title; ?></h4>
                        <p><?php echo  $card3_content; ?></p>
                    </div>
                </div>
            </div>
                
             </div>
            <div class="home2">
                <h3>Latest News</h3>
                <p>See what ToroAMA is up to!</p>
                <ul class="news-ul">
                    <?php

                    $args = array( 'numberposts' => '5',
                                    'category' => '34');
                    $recent_posts = wp_get_recent_posts( $args );
                    
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                    
                    foreach( $recent_posts as $recent ){
                        echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" ><li class = "news-li"><p>' .  $recent["post_title"].  '</p> </li></a> ';
                    }

                    ?>
                </ul>
            </div>
			<?php
			endif;

			


	

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
