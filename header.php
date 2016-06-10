<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php if(is_front_page()){
			$panelLeftBg  = get_field('panel_left_background_image');
			$panelRightBg = get_field('panel_right_background_image');
		?>
			<style>
				.panel-left:before{ background-image: url(<?php print $panelLeftBg; ?>); }
				.panel-right:before{ background-image: url(<?php print $panelRightBg; ?>); }
			</style>
		<?php } ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if( 'ocn' == get_field( 'menu_type', 'option' ) ): ?>
			<div id="ocn">
				<div id="ocn-inner">
					<div id="ocn-top">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" id="ocn-brand">
							<img src="<?php the_field( 'site_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
						</a>
						<button class="nav-toggle" type="button" id="ocn-close">
							<span></span>
						</button>
					</div>
					<?php wp_nav_menu( array(
						'container' => 'nav',
						'container_id' => 'ocn-nav-primary',
						'theme-location' => 'primary'
					) ); ?>
				</div>
			</div>
		<?php endif; ?>
		<header>
			<div class="container">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
					<img src="<?php the_field( 'site_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
				</a>
				<div class="nav">
					<button class="nav-toggle" type="button" id="nav-toggle">
						<span></span>
						<em>menu</em>
					</button>
					<?php wp_nav_menu( array(
						'container' => 'nav',
						'theme-location' => 'primary'
					) ); ?>
				</div>
			</div>
		</header>
		<?php
			// Set up global call for featured images
			$hero = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

			if (!is_front_page() ) {
		?>
		<figure class="hero" <?php if(has_post_thumbnail()){ ?>style="background-image: url('<?php print $hero; ?>');"<?php } ?>></figure>
		<?php } ?>



