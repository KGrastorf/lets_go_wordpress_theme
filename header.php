<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let\'s_Go_Adventure_Tours
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./images/vanfav.ico">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Asap|Berkshire+Swash|Cinzel|Questrial|Quicksand|Raleway|Work+Sans|PT+Serif+Caption|EB+Garamond" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lets-go-adventure-tours' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">

		</div><!-- .site-branding -->



			<div class="upper-third">

			</div><!-- Upper Third Header -->

			<div class="container-nav">


			<div id="site-navigation" class="main-navigation nav">
			<img class="header-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/Buckle.png" alt=""><!-- Logo in Header -->

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lets-go-adventure-tours' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>

			</div><!-- Navigation Menu -->
</div>




		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
