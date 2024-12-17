<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php $groupData = get_group_data_by_tipoDeFicha() ?>

    <div class="max-w-screen-tainacan mx-auto py-20 px-6 lg:px-0 !font-lato">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            <div class="lg:col-span-3">
                <h2 class="text-4xl font-black text-title-gray mb-4"><?php echo the_title() ?></h2>

                <p class="lg:overflow-x-auto lg:whitespace-nowrap">
                    <?php echo custom_breadcrumbs()?>
                </p>
            </div>

            <div class="lg:col-span-1 lg:mr-4">
                <div class="mb-8 overflow-hidden rounded-lg shadow-soft-shadow">
                    <img src="<?php the_post_thumbnail_url() ?>" alt=""
                        class="w-full h-[522px] object-cover rounded-lg bg-light-gray">
                </div>
                <?php if (!empty(get_field("anexo"))): ?>
                    <a href="<?php echo get_field("anexo")["url"] ?>"
                        class="flex flex-1 justify-center items-center py-2 gap-1 text-2xl text-white font-bold bg-logo-blue rounded-2xl hover:shadow-common-shadow transition duration-300"
                        target="_blank">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_244_1287" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="25" height="24">
                                <rect x="0.5" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_244_1287)">
                                <path
                                    d="M12.5 16L7.5 11L8.9 9.55L11.5 12.15V4H13.5V12.15L16.1 9.55L17.5 11L12.5 16ZM6.5 20C5.95 20 5.47917 19.8042 5.0875 19.4125C4.69583 19.0208 4.5 18.55 4.5 18V15H6.5V18H18.5V15H20.5V18C20.5 18.55 20.3042 19.0208 19.9125 19.4125C19.5208 19.8042 19.05 20 18.5 20H6.5Z"
                                    fill="white" />
                            </g>
                        </svg>
                        Download
                    </a>
                <?php endif ?>
            </div>

            <div class="lg:col-span-2 grid gap-12">
                <div class="lg:order-last">
                    <h3 class="mb-4 font-bold text-title-gray text-2xl">Resumo</h3>

                    <div class="grid grid-cols-1 gap-4">

                        <div>
                            <h4 class="font-black text-preto-50">Transcrição</h4>
                            <p class="text-title-gray"><?php echo get_field('descricao') ?></p>
                        </div>

                    </div>
                </div>

                <div class="">
                    <h3 class="mb-4 font-bold text-title-gray text-2xl">Identificação</h3>

                    <div class="grid grid-cols-1 gap-4">

                        <div>
                            <h4 class="font-black text-preto-50">Título</h4>
                            <p class="text-title-gray"><?php echo the_title(); ?> </p>
                        </div>

                        <div>
                            <h4 class="font-black text-preto-50">Autor(es):</h4>
                            <p class="text-title-gray"><?php echo $groupData['autores']; ?></p>
                        </div>

                        <div>
                            <h4 class="font-black text-preto-50">Categoria</h4>
                            <p class="text-title-gray"><?php echo get_field('tipoDeFicha') ?></p>
                        </div>

                        <div>
                            <h4 class="font-black text-preto-50">Palavras-chave:</h4>
                            <p class="text-title-gray"><?php echo get_field('palavras-chave', get_the_ID()) ?></p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="lg:col-span-3">
                <h3 class="mb-4 font-bold text-title-gray text-2xl">Publicação</h3>

                <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                    <?php if (!empty($groupData['ano'])): ?>
                        <div>
                            <h4 class="font-black text-preto-50">Ano</h4>
                            <p class="text-title-gray"><?php echo $groupData['ano'] ?></p>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($groupData['pais'])): ?>
                        <div>
                            <h4 class="font-black text-preto-50">País</h4>
                            <p class="text-title-gray"><?php echo $groupData['pais'] ?></p>
                        </div>
                    <?php endif ?>
                    <?php if (!empty($groupData['idioma'])): ?>
                        <div>
                            <h4 class="font-black text-preto-50">Idioma</h4>
                            <p class="text-title-gray"><?php echo $groupData['idioma'] ?></p>
                        </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['tipo'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Tipo</h4>
                        <p class="text-title-gray"><?php echo $groupData['tipo']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['numero_da_edicao_revisao'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Número da edição/revisão</h4>
                        <p class="text-title-gray"><?php echo $groupData['numero_da_edicao_revisao']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['numero_de_paginas'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Número de páginas</h4>
                        <p class="text-title-gray"><?php echo $groupData['numero_de_paginas']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['numero_de_volumes'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Número de volumes</h4>
                        <p class="text-title-gray"><?php echo $groupData['numero_de_volumes']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['isbnissn'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">ISBN/ISSN</h4>
                        <p class="text-title-gray"><?php echo $groupData['isbnissn']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['editora'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Editora</h4>
                        <p class="text-title-gray"><?php echo $groupData['editora']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['cidade_da_editora'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">Cidade da editora</h4>
                        <p class="text-title-gray"><?php echo $groupData['cidade_da_editora']?></p>
                    </div>
                    <?php endif ?>

                    <?php if (!empty($groupData['pais'])): ?>
                    <div>
                        <h4 class="font-black text-preto-50">País da Publicação</h4>
                        <p class="text-title-gray"><?php echo $groupData['pais']?></p>
                    </div>
                    <?php endif ?>

                </div>
            </div>


            <div class="grid grid-flow-col auto-cols-auto place-content-center gap-4 lg:hidden">
                <a href="" class="py-4 px-6 border-2 border-logo-blue rounded-lg text-logo-blue font-bold">Voltar</a>
                <a href=""
                    class="py-4 px-6 border-2 border-logo-blue rounded-lg text-logo-blue font-bold">Compartilhar</a>
            </div>
        </div>
    </div>

</article>