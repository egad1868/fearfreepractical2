<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geekpack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header-section full">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geekpack' ); ?></a>
<div class="hero">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif;
                    $geekpack_description = get_bloginfo( 'description', 'display' );
                    if ( $geekpack_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description"><?php echo $geekpack_description; /* WPCS: xss ok. */ ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'geekpack' ); ?></button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
            <div class="hero-left">
                <h1 class="hero-heading">Like you, we love our pets</h1>
                <p class="hero-paragraph">At Fear Free&reg;, our mission is to prevent and alleviate fear, anxiety & stress in pets by inspiring and educating the people who care for them. Sign up to access our programs, education, and our ever-growing community.</p>
            <input class="hero-button" type="text" placeholder="Search our xx,xxx of resources">
            </div>
        </div><!-- .hero-section -->
		</div><!-- .header-section -->
	<div class="main-content-section full">
			<div id="content" class="site-content">
