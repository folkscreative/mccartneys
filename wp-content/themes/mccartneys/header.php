<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mccartneys
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
<?php wp_body_open(); ?>
<div id="page" class="site">
<header class="site-header">
		<div class="top-nav">
		<div class="container">
			<div class="inner-wrap">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'Header-top-menu',
				)
			);
			?>
			
			<img src="<?php echo get_template_directory_uri()?>/assets/images/Icon - Search.svg" alt="">
			</div>
		</div>
		</div>

	<div class="main-header">
	<div class="container">
		<div class="header-inner-wrap">
		<?php
    	$website_logo = get_field('upload_logo', 'option');
		if( !empty($website_logo) ):?>
		<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo $website_logo['url']; ?>" alt="<?php echo $website_logo['alt']; ?>"></a>
	<?php endif; ?>
		<div class="col-right">
		<?php
			// wp_nav_menu(
			// 	array(
			// 		'menu' => 'Header-main-menu',
			// 	)
			// );
			?>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			<?php 
				$header_main_btn = get_field('header_main_button', 'option');
				if( $header_main_btn ): 
					$header_main_btn_url = $header_main_btn['url'];
					$header_main_btn_title = $header_main_btn['title'];
					$header_main_btn_target = $header_main_btn['target'] ? $header_main_btn['target'] : '_self';
					?>
					<a class="btn-cs-darker" href="<?php echo esc_url( $header_main_btn_url ); ?>" target="<?php echo esc_attr( $header_main_btn_target ); ?>"><?php echo esc_html( $header_main_btn_title ); ?></a>
				<?php endif; ?>
		</div>
		</div>
	</div>
	</header>
