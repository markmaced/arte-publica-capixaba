<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class="bg-light-gray w-full py-4 font-lato">
			<div class="w-full max-w-5xl mx-auto">
				<div class="w-full flex">
					<div class="w-2/5 flex items-center">
						<img class="w-14" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
					</div>
					<div class="w-3/5 flex items-center">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-principal',
							'container' => 'nav',
							'container_class' => 'menu-container',
							'menu_class' => 'menu flex gap-5',
							'fallback_cb' => false,
						));
						?>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>