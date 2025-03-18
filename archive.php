<?php get_header();

$collection = get_queried_object();

?>
<div class="py-20 lg:px-0 !font-lato">
	<div class="max-w-screen-tainacan-lg mx-auto px-6 lg:px-0">
		<div class="max-w-screen-tainacan mx-auto mb-12">
			<h2 class="text-4xl font-black text-title-gray mb-4"><?php echo $collection->label ?></h2>

			<p class="lg:overflow-x-auto lg:whitespace-nowrap">
				<a href="/acervo" class="text-preto-60 hover:underline">
					Acervo
				</a>

				<span class="mx-2 text-preto-60 rtl:-scale-x-100">
					>
				</span>

				<!-- <a href="" class="text-preto-60 hover:underline">
					<?php tainacan_the_collection_name() ?>
				</a> -->

				<!-- <span class="mx-2 text-preto-60 rtl:-scale-x-100">
					>
				</span> -->

				<a href="#" class="text-logo-blue hover:underline">
					<?php echo $collection->label ?>
				</a>
			</p>
		</div>
		<div class="">
			<form class="py-0 lg:py-8 flex flex-1 items-center justify-center space-x-4 lg:space-x-6" id="acervo-archive-search">
				<label for="default-search" class="lg:text-2xl font-medium text-subtitle-gray flex">Pesquisar <span
						class="hidden lg:inline-flex lg:ml-1.5">publicação</span>:</label>
				<div class="relative max-w-md flex flex-1" x-data="{
                        placeholder: 'Digite sua pesquisa aqui...',
                        updatePlaceholder() {
                            this.placeholder = window.innerWidth < 969 ? 'Digite o nome da obra...' : 'Digite sua pesquisa aqui...';
                        }
                    }" x-init="updatePlaceholder(); window.addEventListener('resize', () => {updatePlaceholder()})">
					<div id="archive-search-icon" class="absolute inset-y-0 end-0 flex items-center pe-5 pointer-events-none">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_51_118" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
								width="25" height="24">
								<rect x="0.5" width="24" height="24" fill="#D9D9D9" />
							</mask>
							<g mask="url(#mask0_51_118)">
								<path
									d="M20.1 21L13.8 14.7C13.3 15.1 12.725 15.4167 12.075 15.65C11.425 15.8833 10.7333 16 10 16C8.18333 16 6.64583 15.3708 5.3875 14.1125C4.12917 12.8542 3.5 11.3167 3.5 9.5C3.5 7.68333 4.12917 6.14583 5.3875 4.8875C6.64583 3.62917 8.18333 3 10 3C11.8167 3 13.3542 3.62917 14.6125 4.8875C15.8708 6.14583 16.5 7.68333 16.5 9.5C16.5 10.2333 16.3833 10.925 16.15 11.575C15.9167 12.225 15.6 12.8 15.2 13.3L21.5 19.6L20.1 21ZM10 14C11.25 14 12.3125 13.5625 13.1875 12.6875C14.0625 11.8125 14.5 10.75 14.5 9.5C14.5 8.25 14.0625 7.1875 13.1875 6.3125C12.3125 5.4375 11.25 5 10 5C8.75 5 7.6875 5.4375 6.8125 6.3125C5.9375 7.1875 5.5 8.25 5.5 9.5C5.5 10.75 5.9375 11.8125 6.8125 12.6875C7.6875 13.5625 8.75 14 10 14Z"
									fill="#666666" />
							</g>
						</svg>
					</div>
					<div id="archive-loading-icon" class="!hidden absolute inset-y-0 end-0 flex items-center pe-5 pointer-events-none">
						<div role="status">
							<svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
								<path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
							</svg>
							<span class="sr-only">Loading...</span>
						</div>
					</div>
					<input type="search" id="acervo-search" data-post-type="<?php echo get_query_var('post_type'); ?>"
						class="block w-full p-4 text-preto-50 placeholder:text-preto-50 rounded-lg bg-light-gray shadow-common-shadow"
						:placeholder="placeholder" required />
				</div>
			</form>

			<div class="mt-12 lg:mt-16">
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-6">
					<div
						class="lg:col-span-3 bg-white border-4 border-light-gray border-dotted rounded-lg flex items-center justify-center min-h-32">
						<p class="text-2xl text-subtitle-gray">Filtros</p>
					</div>

					<?php if (have_posts()) : ?>
						<div id="acervo-grid"
							class="lg:col-span-9 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:max-h-[592px] pb-4 lg:overflow-y-auto [&::-webkit-scrollbar]:w-3 [&::-webkit-scrollbar]:h-3 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-light-gray [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-logo-blue [&::-webkit-scrollbar-thumb]:max-h-6 lg:pr-6">

							<?php
							while (have_posts()) :
								the_post();
							?>

								<?php
								$meta = get_post_meta(get_the_ID());
								?>
								<a href="<?php echo the_permalink() ?>" class="flex flex-row items-center bg-light-gray rounded-lg shadow-common-shadow">
									<?php $image_url = wp_get_attachment_image_url($meta['_thumbnail_id'][0], 'full'); ?>
									<img class="object-cover w-full rounded-tl-lg h-32 max-w-36 rounded-bl-lg"
										src="<?php echo $image_url ?>"
										alt="">
									<div class="flex flex-col justify-between py-7 px-4 lg:p-7 leading-normal font-lato">
										<h5 class="mb-2 font-bold leading-tight text-title-gray line-clamp-2"><?php echo the_title() ?></h5>
										<?php $author = isset($meta['3133'][0]) ? $meta['3133'][0] : ''; ?>
										<p class="text-sm leading-tight text-title-gray line-clamp-1"><?php echo $author; ?></p>
									</div>
								</a>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
