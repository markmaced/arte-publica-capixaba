</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer" role="contentinfo"
	x-data="{
          reorderMenu() {
            const menu = document.getElementById('menu-menu-footer');
            const item = document.getElementById('menu-item-60318');
            if (menu && item) {
              if (window.innerWidth < 969) {
                menu.appendChild(item);
              }
            }
          }
        }"
	x-init="
		reorderMenu();
		window.addEventListener('resize', () => {
		reorderMenu();
		});
	">
	<?php do_action('tailpress_footer'); ?>

	<div class="bg-light-gray py-20">
		<div class="px-8 lg:px-0 lg:max-w-screen-tainacan mx-auto flex flex-col gap-8 lg:gap-0 lg:flex-row lg:justify-between lg:items-center">
			<div>
				<img class="w-14 mb-2" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
				<h1 class="text-2xl font-bold text-title-gray font-lato">Arte Pública Capixaba</h1>
			</div>
			<nav class="footer-nav">
				<?php
				wp_nav_menu([
					'menu'           => 'Menu footer',
					'menu_class'     => 'grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-y-8 lg:gap-x-0',
					'container'      => false,
					'fallback_cb'    => false
				]);
				?>
			</nav>
		</div>
	</div>
	<div class="bg-title-gray py-3">
		<p class="text-center text-xs font-lato text-[#808080] leading-tight">Arte Pública Capixaba - 2024</p>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>