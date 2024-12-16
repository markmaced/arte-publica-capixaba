<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<!-- <header class="bg-light-gray w-full py-4 font-lato">
			<div class="w-full max-w-screen-tainacan mx-auto">
				<div class="w-full flex">
					<div class="w-2/5 flex items-center">
						<img class="w-14" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
					</div>
					<div class="w-3/5 flex items-center">
						c
					</div>
				</div>
			</div>
		</header>
		-->
		<header class="menu-header">
				<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="bg-light-gray border px-6 py-4" aria-label="penguin ui menu">
					<div class="max-w-screen-tainacan mx-auto flex items-center justify-between">
						<a href="#" class="">
							<img class="w-14" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
						</a>
						<ul class="hidden items-center gap-4 md:flex">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-principal',
									'container' => 'nav',
									'container_class' => 'menu-container',
									'menu_class' => 'md:flex items-center gap-6',
									'fallback_cb' => false,
								));
							?>
						</ul>
						<button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen" :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-neutral-600 dark:text-neutral-300 md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
							<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
							<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
							</svg>
						</button>
						<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-neutral-300 rounded-b-md border-b border-neutral-300 bg-neutral-50 px-6 pb-6 pt-20 md:hidden shadow-soft-shadow">
							<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-principal',
									'container' => 'nav',
									'container_class' => 'menu-container',
									'menu_class' => 'flex flex-col divide-y divide-neutral-300',
									'fallback_cb' => false,
								));
							?>
						</ul>
					</div>
				</nav>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>