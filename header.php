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
		<header class="menu-header">
				<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" class="bg-light-gray border px-6 py-4" aria-label="penguin ui menu">
					<div class="max-w-screen-tainacan mx-auto flex items-center justify-between">
						<a href="/" class="">
							<img class="w-14" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
						</a>
						<ul class="hidden items-center gap-4 md:flex">
							<?php
								wp_nav_menu( array( 'container_id'    => 'primary-menu', 'container_class' => 'hidden !font-lato uppercase bg-light-gray mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block', 'menu_class'      => 'lg:flex lg:-mx-4', 'theme_location'  => 'menu-principal', 'li_class'        => 'lg:mx-4 py-2 hover:underline', 'li_class_0'      => 'lg:mx-4 py-4 lg:relative group', 'submenu_class'   => 'lg:hidden group-hover:block lg:absolute lg:left-0 lg:z-10 lg:rounded-lg lg:max-w-72 lg:gap-0 bg-light-gray transition duration-300 shadow-soft-shadow pt-4 whitespace-nowrap mt-4 p-4 block', 'fallback_cb'     => false, ));
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
								wp_nav_menu( array( 'container_id'    => 'primary-menu', 'container_class' => '!font-lato uppercase flex flex-col gap-4', 'menu_class'      => 'lg:-my-4 divide-y', 'theme_location'  => 'menu-principal', 'li_class'        => 'py-1 pl-2', 'li_class_0'      => 'py-4', 'submenu_class'   => '', 'fallback_cb'     => false, ));
							?>
						</ul>
					</div>
				</nav>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>