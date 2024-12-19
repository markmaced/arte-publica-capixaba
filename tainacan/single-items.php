<?php get_header(); ?>

<!-- <div class="container my-8 mx-auto"> -->

<div class="max-w-screen-tainacan-lg mx-auto py-20 lg:px-0 !font-lato">
	<?php if (have_posts()) : ?>
		<div class="grid gap-12">
			<?php
			while (have_posts()) :
				the_post();
			?>
				<?php
				$item = tainacan_get_item(get_the_ID());
				$meta = get_post_meta(get_the_ID());
				$collection = tainacan_get_collection();
				?>
				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
					<h2 class="text-4xl font-black text-title-gray mb-4"><?php the_title(); ?></h2>

					<p class="lg:overflow-x-auto lg:whitespace-nowrap">
						<a href="<?php echo home_url('/acervo') ?>" class="text-preto-60 hover:underline">
							Acervo
						</a>

						<span class="mx-2 text-preto-60 rtl:-scale-x-100">
							>
						</span>

						<a href="" class="text-preto-60 hover:underline">
							Coleção <?php echo tainacan_the_collection_name() ?>
						</a>

						<span class="mx-2 text-preto-60 rtl:-scale-x-100">
							>
						</span>

						<a href="#" class="text-logo-blue hover:underline">
							<?php echo the_title(); ?>
						</a>


					</p>
				</div>

				<div class="!overflow-hidden">
					<!-- Desktop -->
					<div class="hidden lg:grid grid-cols-5 grid-rows-2 gap-5">
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray row-span-2 col-span-2">
							<img src="" alt="" class="w-full h-full min-h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
						<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
							<img src="" alt="" class="w-full h-[200px] object-cover rounded-lg bg-light-gray">
						</div>
					</div>


					<!-- Mobile -->

					<div class="lg:hidden">
						<div class="swiper !overflow-visible !h-[420px] !py-6 !px-6 ">
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide !w-3/5 rounded-lg shadow-soft-shadow bg-light-gray">
									<img src="" alt="" class="object-cover rounded-lg">
								</div>
								<div class="swiper-slide !w-3/5 rounded-lg shadow-soft-shadow bg-light-gray">
									<img src="" alt="" class="object-cover rounded-lg">
								</div>
								<div class="swiper-slide !w-3/5 rounded-lg shadow-soft-shadow bg-light-gray">
									<img src="" alt="" class="object-cover rounded-lg">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
					<h3 class="mb-4 font-bold text-title-gray text-2xl">Identificação</h3>

					<div class="grid gap-4">

						<div>
							<h4 class="font-black text-preto-50">Título</h4>
							<p class="text-title-gray"><?php echo isset($meta['3151'][0]) ? $meta['3151'][0] : '-'; ?></p>
						</div>

						<div>
							<h4 class="font-black text-preto-50">Categoria</h4>
							<p class="text-title-gray"><?php echo isset($meta['3147'][0]) ? $meta['3147'][0] : '-'; ?></p>
						</div>

						<div>
							<h4 class="font-black text-preto-50">Temporalidade da Obra</h4>
							<p class="text-title-gray"><?php echo isset($meta['3139'][0]) ? $meta['3139'][0] : '-'; ?></p>
						</div>


					</div>
				</div>

				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-16">
					<div>
						<h3 class="mb-4 font-bold text-title-gray text-2xl">Localização</h3>

						<div class="grid gap-4">

							<div>
								<h4 class="font-black text-preto-50">Município</h4>
								<p class="text-title-gray"><?php echo isset($meta['3121'][0]) ? $meta['3121'][0] : '-'; ?></p>
							</div>

							<div>
								<h4 class="font-black text-preto-50">Bairro</h4>
								<p class="text-title-gray"><?php echo isset($meta['3123'][0]) ? $meta['3123'][0] : '-'; ?></p>
							</div>

							<div>
								<h4 class="font-black text-preto-50">Rua</h4>
								<p class="text-title-gray"><?php echo isset($meta['3125'][0]) ? $meta['3125'][0] : '-'; ?></p>
							</div>

						</div>
					</div>
					<?php if ( isset($meta['3115']) ) : ?>
					<div class="overflow-hidden rounded-lg shadow-soft-shadow bg-light-gray">
						<div
							id="map"
							class="h-full"
							data-lat="<?= $meta['3113'][0] ?>"
							data-long="<?= $meta['3108'][0] ?>"
							data-maps="<?= $meta['3115'][0] ?>">
						</div>
					</div>
					<?php endif ?>

				</div>

				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
					<h3 class="mb-4 font-bold text-title-gray text-2xl">Descrição física</h3>

					<div class="grid gap-4">

						<div>
							<h4 class="font-black text-preto-50">Material</h4>
							<p class="text-title-gray"><?php echo isset($meta['3106'][0]) ? $meta['3106'][0] : '-'; ?></p>
						</div>

						<div>
							<h4 class="font-black text-preto-50">Placa/Inscrições</h4>
							<p class="text-title-gray"><?php echo isset($meta['3093'][0]) ? $meta['3093'][0] : '-'; ?></p>
						</div>

						<div>
							<h4 class="font-black text-preto-50">Transcrição</h4>
							<!-- <p class="text-title-gray"><?php echo tainacan_get_the_metadata(array(
																'metadata' => 3091
															), get_the_ID()); ?></p> -->
							<p class="text-title-gray"><?php echo isset($meta['3091'][0]) ? $meta['3091'][0] : '-'; ?></p>
						</div>

					</div>
				</div>

				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
					<h3 class="mb-4 font-bold text-title-gray text-2xl">Descrição da obra</h3>

					<div class="grid gap-4">

						<div>
							<h4 class="font-black text-preto-50">Dados Históricos</h4>
							<p class="text-title-gray"><?php echo isset($meta['3085'][0]) ? $meta['3085'][0] : '-'; ?></p>
						</div>

					</div>
				</div>

				<div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full grid grid-cols-1 gap-12 lg:grid-cols-2">

					<?php if (isset($meta['3083'][0])) : ?>
						<div class="">
							<h3 class="mb-4 font-bold text-title-gray text-2xl">Regime de Propriedade</h3>

							<div class="">

								<div>
									<h4 class="font-black text-preto-50">Propriedade</h4>
									<p class="text-title-gray"><?php echo isset($meta['3083'][0]) ? $meta['3083'][0] : '-'; ?></p>
								</div>

							</div>
						</div>
					<?php endif; ?>

					<div class="">
						<h3 class="mb-4 font-bold text-title-gray text-2xl">Registro Fotográfico</h3>

						<div class="">

							<div>
								<h4 class="font-black text-preto-50">Autoria</h4>
								<p class="text-title-gray"><?php echo isset($meta['3051'][0]) ? $meta['3051'][0] : '-'; ?></p>
							</div>

						</div>
					</div>

					<?php if (isset($meta['3083'][0])) : ?>
						<div class="">
							<h3 class="mb-4 font-bold text-title-gray text-2xl">Referências</h3>

							<div class="">

								<div>
									<h4 class="font-black text-preto-50">Bibliográfica</h4>
									<p class="text-title-gray"><?php echo isset($meta['3043'][0]) ? $meta['3043'][0] : '-'; ?></p>
								</div>

							</div>
						</div>
					<?php endif; ?>

				</div>

				<div class="px-6 lg:px-0 grid grid-flow-col auto-cols-auto place-content-center gap-4 lg:hidden">
					<a href="" class="py-4 px-6 border-2 border-logo-blue rounded-lg text-logo-blue font-bold">Voltar</a>
					<a href="" class="py-4 px-6 border-2 border-logo-blue rounded-lg text-logo-blue font-bold">Compartilhar</a>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</div>



<!-- </div> -->

<?php
get_footer();
