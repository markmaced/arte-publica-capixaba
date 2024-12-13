
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="bg-light-gray py-20">
		<div class="container lg:max-w-5xl mx-auto flex justify-between items-center">
			<div>
				<img class="w-14 mb-2" src="/wp-content/themes/tainacan-theme/resources/images/arte-publica-logo.png">
				<h1 class="text-2xl font-bold text-title-gray font-lato">Arte Pública Capixaba</h1>
			</div>
			<nav class="footer-nav">
				<?php
				wp_nav_menu([
					'menu'           => 'Footer menu',
					'menu_class'     => 'grid lg:grid-cols-4 gap-y-8',
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
