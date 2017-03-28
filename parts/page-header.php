<?php
/**
 * The header for the home page.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ToroAMA
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:400,600" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div id = "scrollbar">
    </div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'toroama' ); ?></a>
    
	<header id="masthead" class="site-header site-header-page" role="banner">
        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'toroama' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
        </div>
        
        <div class="hr-cont-2"><div class="horizontal-rule"></div></div>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<?php else : ?>
				<p class="site-title"><?php bloginfo( 'name' ); ?></p>
			<?php
			endif;

	
            $my_postid = 1707;//This is page id or post id
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
          
			if ( $content || is_customize_preview() ) : ?>
				<p class="site-description"><?php   echo $content; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
    
	<div id="content" class="site-content">
