<section class="w-full bg-medium-gray py-20">
    <div class="max-w-screen-tainacan mx-auto px-8 lg:px-0">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16 lg:justify-between">
            <div class="grid grid-cols-6 gap-4 lg:gap-6">
                <?php

                $random_items = get_random_items_with_images();
                $i = 1;
                foreach ($random_items as $item):
                    ?>
                    <?php $col_span = ($i == 1 || $i == 3) ? 'lg:col-span-3' : ''; ?>
                    <?php $height = ($i == 1 || $i == 3) ? 'lg:h-64' : 'lg:h-44'; ?>
                    <?php $hidden = $i == 2 ? 'lg:hidden' : ''; ?>
                    <div class="h-28 col-span-2 <?php echo $col_span . ' ' . $hidden . ' ' . $height ?>">
                        <a href="<?php echo $item['url'] ?>">
                            <img src="<?php echo $item['image_url'] ?>"
                                class="w-full h-full object-cover transform transition-transform duration-300 ease-in-out hover:scale-110">
                        </a>
                    </div>
                    <?php $i++; ?>
                <?php endforeach ?>
            </div>
            <div class="lg:order-first">
                <h1 class="w-3/4 font-black text-4xl lg:text-6xl mb-4 text-black font-lato">o repositório da arte
                    pública capixaba</h1>
                <p class="text-black lg:text-lg mb-4 font-normal font-lato lg:pr-6">Como parte das pesquisas do
                    Laboratório de Extensão e
                    Pesquisa em Artes da UFES, este site foi idealizado por José Cirillo, Marcela Belo e Ciliani Celante
                    a fim de compartilhar o Banco de Dados do LEENA sobre monumentos e intervenções públicas do
                    ecossistema urbano capixaba.</p>
                <a class="inline-flex px-5 py-3 bg-logo-blue text-white rounded-lg text-base font-bold"
                    href="/acervo">Acesse o Acervo</a>
            </div>
        </div>
    </div>
</section>
<section class="w-full bg-white py-20 font-lato">
    <?php
    /* Setup query para os Destaques */
    $argsDestaques = array(
        'post_type' => 'repositorio',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'orderby' => "order",
        'order' => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'insertIntoDestaques',
                'value' => true,
                'compare' => 'IN',
            ),
        )
    );
    $loopDestaques = new WP_Query($argsDestaques);
    ?>
    <div class="max-w-screen-tainacan w-full mx-auto px-8 lg:px-0">
        <div class="mb-9 lg:mb-14">
            <h2 class="text-title-gray text-4xl font-black mb-4 lg:mb-6">Biblioteca Virtual</h2>
            <p class="text-lg text-black font-normal">Acesse livros e publicações criadas a partir de pesquisas...</p>
        </div>
        <div class="grid grid-cols-2 gap-x-5 gap-y-9 lg:grid-cols-4 lg:gap-10 mb-9">
            <?php if ($loopDestaques->have_posts()): ?>
                <?php while ($loopDestaques->have_posts()):
                    $loopDestaques->the_post(); ?>
                    <?php $groupData = get_group_data_by_tipoDeFicha() ?>
                    <div class="w-full">
                        <img class="w-full max-w-full lg:h-80 shadow-soft-shadow rounded-lg object-cover mb-4 h-56"
                            src="<?php the_post_thumbnail_url(); ?>">
                        <h3 class="text-title-gray text-base font-bold mb-2"><?php echo the_title() ?></h3>
                        <p class="text-subtitle-gray mb-4 text-sm font-normal"><?php echo $groupData['autores'] ?></p>
                        <div class="w-full">
                            <a class="px-5 py-2 bg-white font-inter text-logo-blue border border-logo-blue rounded-lg text-sm font-bold transition-all duration-500 hover:bg-logo-blue hover:text-white"
                                href="<?php echo get_permalink(); ?>">Mais detalhes</a>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php endif ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="flex justify-center">
            <a class="px-5 py-3 bg-logo-blue text-white rounded-2xl text-base font-bold hover:shadow-soft-shadow"
                href="<?php echo home_url('/biblioteca-virtual') ?>">Veja todas as
                publicações</a>
        </div>
    </div>
</section>

<section class="w-full bg-medium-gray py-20 font-lato">
    <div class="max-w-screen-tainacan w-full mx-auto px-8 lg:px-0">
        <div class="w-full flex">
            <div class="lg:w-1/3">
                <h2 class="font-black text-4xl mb-6 text-black">Arte Pública <br>Capixaba</h2>
                <div class="mb-10 space-y-3">
                    <p class="text-black">
                        Nesse site podem ser acessados conteúdos como fotografias das obras de arte públicas em diversas
                        modalidades, além da produção bibliográfica produzida por pesquisadores da área.
                    </p>
                    <p class="text-black">
                        A expectativa é que este portal seja uma fonte de pesquisa para alunos, professores e a
                        comunidade capixaba em geral. À medida que a pesquisa for avançando passará por constantes
                        atualizações.
                    </p>
                </div>
                <a class="px-6 py-4 font-inter bg-logo-blue text-white rounded-2xl font-bold inline-flex hover:shadow-soft-shadow"
                    href="/acervo">Acesse o acervo</a>
            </div>
        </div>
    </div>
</section>

<section class="w-full py-20 font-lato">
    <div class="max-w-screen-tainacan w-full mx-auto px-8 lg:px-0">
        <h2 class="text-title-gray text-4xl font-black mb-6 lg:mb-10">Mapa do site</h2>
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 lg:gap-8">
            <a href="#"
                class="p-6 bg-white shadow-soft-shadow rounded-2xl border border-medium-gray group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">O projeto</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Conheça a história do projeto, seus idealizadores e
                    membros.</p>
            </a>
            <a href="/acervo"
                class="p-6 bg-white shadow-soft-shadow border border-medium-gray rounded-2xl group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">Acervo</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Acesse as coleções e obras capixabas levantadas
                    pelo projeto.</p>
            </a>
            <a href="/biblioteca-virtual"
                class="p-6 bg-white shadow-soft-shadow border border-medium-gray rounded-2xl group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">Biblioteca Virtual
                    </h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Acesse as coleções e obras capixabas levantadas
                    pelo projeto.</p>
            </a>
            <a href="#"
                class="p-6 bg-white shadow-soft-shadow border border-medium-gray rounded-2xl group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">Itinerários
                        temáticos</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Acesse sugestões de itinerários pelos municípios,
                    de maneira a conhecer algumas obras. (Em breve)</p>
            </a>
            <a href="#"
                class="p-6 bg-white shadow-soft-shadow border border-medium-gray rounded-2xl group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">Educativos</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Materiais preparados para professores do Ensino
                    Básico, para auxílio em sala de aula. (Em breve)</p>
            </a>
            <a href="#"
                class="p-6 bg-white shadow-soft-shadow border border-medium-gray rounded-2xl group hover:bg-logo-blue flex flex-col justify-center">
                <div class="flex items-center space-x-1 mb-1">
                    <h5 class="text-2xl font-bold text-title-gray uppercase group-hover:text-white">Glossário</h5>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px"
                            fill="currentColor" class="text-title-gray group-hover:text-white">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </div>
                </div>
                <p class="text-subtitle-gray group-hover:text-white">Conheça a definição de termos frequentemente
                    mencionados em nosso site.</p>
            </a>
        </div>

    </div>
</section>
<section class="w-full py-20 font-lato bg-light-gray lg:bg-white">
    <div class="max-w-screen-tainacan w-full mx-auto px-8 lg:px-0">
        <h2 class="text-title-gray text-4xl font-black mb-8 lg:mb-10">Contato</h2>
        <div class="hidden w-full flex-col lg:flex-row justify-between">
            <div class="w-full lg:w-2/3 mb-12 lg:mb-0">
                <?php echo do_shortcode('[contact-form-7 id="0550fc7" title="Contato"]') ?>
            </div>
            <div class="w-full lg:1/3">
                <ul class="w-full p-0 flex flex-col gap-4 lg:justify-end">
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.77376 25.5C2.05737 25.5 1.44376 25.2446 0.932922 24.7337C0.422088 24.2229 0.166672 23.6093 0.166672 22.8929V3.10708C0.166672 2.39069 0.422088 1.77708 0.932922 1.26625C1.44376 0.755417 2.05737 0.5 2.77376 0.5H29.2263C29.9426 0.5 30.5563 0.755417 31.0671 1.26625C31.5779 1.77708 31.8333 2.39069 31.8333 3.10708V22.8929C31.8333 23.6093 31.5779 24.2229 31.0671 24.7337C30.5563 25.2446 29.9426 25.5 29.2263 25.5H2.77376ZM16 13.4788L2.26084 4.485V22.8929C2.26084 23.0426 2.30889 23.1656 2.40501 23.2617C2.50112 23.3578 2.62403 23.4058 2.77376 23.4058H29.2263C29.376 23.4058 29.4989 23.3578 29.595 23.2617C29.6911 23.1656 29.7392 23.0426 29.7392 22.8929V4.485L16 13.4788ZM16 11.2883L29.4038 2.59417H2.62376L16 11.2883ZM2.26084 4.485V2.59417V22.8929C2.26084 23.0426 2.30889 23.1656 2.40501 23.2617C2.50112 23.3578 2.62403 23.4058 2.77376 23.4058H2.26084V4.485Z"
                                    fill="#272727" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba@gmail.com</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="22" height="32" viewBox="0 0 22 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 31.8334C8.18389 31.8334 5.88264 31.4452 4.09626 30.6688C2.30987 29.8927 1.41667 28.9009 1.41667 27.6934C1.41667 27.0787 1.69681 26.4901 2.25709 25.9276C2.81709 25.3648 3.58431 24.8965 4.55876 24.5226L6.16542 25.953C5.66209 26.1147 5.15473 26.3597 4.64334 26.688C4.13167 27.0163 3.75056 27.3462 3.50001 27.6776C3.83556 28.2281 4.72778 28.7094 6.17667 29.1213C7.62584 29.5333 9.23098 29.7392 10.9921 29.7392C12.7532 29.7392 14.3651 29.5333 15.8279 29.1213C17.291 28.7094 18.1903 28.2281 18.5258 27.6776C18.2906 27.3292 17.8893 26.9937 17.3221 26.6709C16.7549 26.3484 16.2149 26.1098 15.7021 25.9551L17.3171 24.5055C18.3579 24.8852 19.1625 25.3545 19.7308 25.9134C20.2992 26.4726 20.5833 27.0636 20.5833 27.6863C20.5833 28.8961 19.6901 29.8897 17.9038 30.6672C16.1174 31.4447 13.8161 31.8334 11 31.8334ZM11.0417 24.2105C13.9447 22.0133 16.1201 19.8237 17.5679 17.6417C19.0154 15.4598 19.7392 13.372 19.7392 11.3784C19.7392 8.3673 18.7978 6.09494 16.915 4.56133C15.0322 3.02772 13.0632 2.26092 11.0079 2.26092C8.96431 2.26092 6.99556 3.02814 5.10167 4.56258C3.20778 6.09703 2.26084 8.3705 2.26084 11.383C2.26084 13.3558 2.98528 15.4012 4.43417 17.5192C5.88334 19.6376 8.08584 21.868 11.0417 24.2105ZM11 26.8334C7.38167 24.1143 4.67153 21.4734 2.86959 18.9109C1.06764 16.3487 0.166672 13.8387 0.166672 11.3809C0.166672 9.52453 0.495978 7.89869 1.15459 6.50342C1.81292 5.10814 2.66139 3.9398 3.7 2.99842C4.73834 2.0573 5.89917 1.35008 7.18251 0.876747C8.46584 0.403414 9.73917 0.166748 11.0025 0.166748C12.2658 0.166748 13.5411 0.403414 14.8283 0.876747C16.1158 1.35008 17.2778 2.0573 18.3142 2.99842C19.3503 3.9398 20.1958 5.10855 20.8508 6.50466C21.5058 7.90078 21.8333 9.52536 21.8333 11.3784C21.8333 13.8365 20.937 16.3469 19.1442 18.9097C17.3517 21.4724 14.637 24.1137 11 26.8334ZM11.0079 14.1572C11.8338 14.1572 12.541 13.8655 13.1296 13.2822C13.7185 12.6988 14.0129 11.9888 14.0129 11.1522C14.0129 10.3158 13.7179 9.60328 13.1279 9.01466C12.5379 8.42577 11.8286 8.13133 11 8.13133C10.1795 8.13133 9.47223 8.42633 8.87834 9.01633C8.28417 9.60661 7.98709 10.3159 7.98709 11.1442C7.98709 11.9862 8.28417 12.6988 8.87834 13.2822C9.47223 13.8655 10.1821 14.1572 11.0079 14.1572Z"
                                    fill="#272727" />
                            </svg>
                        </div>
                        <span>Avenida Fernando Ferrari, 555<br> Vitória, E.S., 29101200</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 22.6666C17.7681 22.6666 19.4638 21.9642 20.714 20.714C21.9643 19.4637 22.6667 17.768 22.6667 15.9999C22.6667 14.2318 21.9643 12.5361 20.714 11.2859C19.4638 10.0356 17.7681 9.33325 16 9.33325C14.2319 9.33325 12.5362 10.0356 11.2859 11.2859C10.0357 12.5361 9.33333 14.2318 9.33333 15.9999C9.33333 17.768 10.0357 19.4637 11.2859 20.714C12.5362 21.9642 14.2319 22.6666 16 22.6666Z"
                                    stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M1 22.6667V9.33333C1 7.1232 1.87797 5.00358 3.44078 3.44078C5.00358 1.87797 7.1232 1 9.33333 1H22.6667C24.8768 1 26.9964 1.87797 28.5592 3.44078C30.122 5.00358 31 7.1232 31 9.33333V22.6667C31 24.8768 30.122 26.9964 28.5592 28.5592C26.9964 30.122 24.8768 31 22.6667 31H9.33333C7.1232 31 5.00358 30.122 3.44078 28.5592C1.87797 26.9964 1 24.8768 1 22.6667Z"
                                    stroke="#272727" stroke-width="2" />
                                <path d="M25.1667 6.8515L25.1846 6.83179" stroke="#272727" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 28.6923V3.30769C1 2.69565 1.24313 2.10868 1.67591 1.67591C2.10868 1.24313 2.69565 1 3.30769 1H28.6923C29.3043 1 29.8913 1.24313 30.3241 1.67591C30.7569 2.10868 31 2.69565 31 3.30769V28.6923C31 29.3043 30.7569 29.8913 30.3241 30.3241C29.8913 30.7569 29.3043 31 28.6923 31H21.7692V20.0615H23.4077C23.781 20.0615 24.1391 19.9132 24.4031 19.6492C24.6671 19.3852 24.8154 19.0272 24.8154 18.6538V16.8769C24.8148 16.5038 24.6663 16.1461 24.4024 15.8822C24.1385 15.6183 23.7808 15.4698 23.4077 15.4692H21.8615V13.3C21.8615 11.3615 22.7385 11.3615 23.6154 11.3615H24.7462C24.9319 11.3692 25.117 11.336 25.2885 11.2642C25.46 11.1924 25.6136 11.0838 25.7385 10.9462C25.8726 10.8185 25.9787 10.6644 26.0502 10.4936C26.1217 10.3228 26.157 10.139 26.1538 9.95385V8.24615C26.1606 8.05809 26.1301 7.87054 26.0641 7.69432C25.998 7.5181 25.8978 7.35669 25.769 7.2194C25.6403 7.08211 25.4857 6.97165 25.3141 6.89439C25.1425 6.81713 24.9573 6.77459 24.7692 6.76923H22.1154C21.341 6.74012 20.5696 6.87945 19.8543 7.17759C19.1391 7.47574 18.4971 7.92559 17.9727 8.49608C17.4483 9.06657 17.0539 9.7441 16.8169 10.4819C16.58 11.2196 16.5059 12.0001 16.6 12.7692V15.4692H15.1231C14.9363 15.4662 14.7507 15.5003 14.5773 15.5697C14.4038 15.6391 14.2459 15.7423 14.1127 15.8733C13.9796 16.0043 13.8738 16.1605 13.8016 16.3328C13.7294 16.5051 13.6923 16.6901 13.6923 16.8769V18.6538C13.6923 18.8407 13.7294 19.0256 13.8016 19.1979C13.8738 19.3702 13.9796 19.5265 14.1127 19.6575C14.2459 19.7885 14.4038 19.8917 14.5773 19.9611C14.7507 20.0305 14.9363 20.0646 15.1231 20.0615H16.6V31H3.30769C2.69565 31 2.10868 30.7569 1.67591 30.3241C1.24313 29.8913 1 29.3043 1 28.6923Z"
                                    stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16 lg:justify-between">
            <div class="">
                <?php echo do_shortcode('[contact-form-7 id="0550fc7" title="Contato"]') ?>
            </div>
            <div class="">
                <ul class="grid gap-4 lg:place-content-center">
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.77376 25.5C2.05737 25.5 1.44376 25.2446 0.932922 24.7337C0.422088 24.2229 0.166672 23.6093 0.166672 22.8929V3.10708C0.166672 2.39069 0.422088 1.77708 0.932922 1.26625C1.44376 0.755417 2.05737 0.5 2.77376 0.5H29.2263C29.9426 0.5 30.5563 0.755417 31.0671 1.26625C31.5779 1.77708 31.8333 2.39069 31.8333 3.10708V22.8929C31.8333 23.6093 31.5779 24.2229 31.0671 24.7337C30.5563 25.2446 29.9426 25.5 29.2263 25.5H2.77376ZM16 13.4788L2.26084 4.485V22.8929C2.26084 23.0426 2.30889 23.1656 2.40501 23.2617C2.50112 23.3578 2.62403 23.4058 2.77376 23.4058H29.2263C29.376 23.4058 29.4989 23.3578 29.595 23.2617C29.6911 23.1656 29.7392 23.0426 29.7392 22.8929V4.485L16 13.4788ZM16 11.2883L29.4038 2.59417H2.62376L16 11.2883ZM2.26084 4.485V2.59417V22.8929C2.26084 23.0426 2.30889 23.1656 2.40501 23.2617C2.50112 23.3578 2.62403 23.4058 2.77376 23.4058H2.26084V4.485Z"
                                    fill="#272727" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba@gmail.com</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="22" height="32" viewBox="0 0 22 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 31.8334C8.18389 31.8334 5.88264 31.4452 4.09626 30.6688C2.30987 29.8927 1.41667 28.9009 1.41667 27.6934C1.41667 27.0787 1.69681 26.4901 2.25709 25.9276C2.81709 25.3648 3.58431 24.8965 4.55876 24.5226L6.16542 25.953C5.66209 26.1147 5.15473 26.3597 4.64334 26.688C4.13167 27.0163 3.75056 27.3462 3.50001 27.6776C3.83556 28.2281 4.72778 28.7094 6.17667 29.1213C7.62584 29.5333 9.23098 29.7392 10.9921 29.7392C12.7532 29.7392 14.3651 29.5333 15.8279 29.1213C17.291 28.7094 18.1903 28.2281 18.5258 27.6776C18.2906 27.3292 17.8893 26.9937 17.3221 26.6709C16.7549 26.3484 16.2149 26.1098 15.7021 25.9551L17.3171 24.5055C18.3579 24.8852 19.1625 25.3545 19.7308 25.9134C20.2992 26.4726 20.5833 27.0636 20.5833 27.6863C20.5833 28.8961 19.6901 29.8897 17.9038 30.6672C16.1174 31.4447 13.8161 31.8334 11 31.8334ZM11.0417 24.2105C13.9447 22.0133 16.1201 19.8237 17.5679 17.6417C19.0154 15.4598 19.7392 13.372 19.7392 11.3784C19.7392 8.3673 18.7978 6.09494 16.915 4.56133C15.0322 3.02772 13.0632 2.26092 11.0079 2.26092C8.96431 2.26092 6.99556 3.02814 5.10167 4.56258C3.20778 6.09703 2.26084 8.3705 2.26084 11.383C2.26084 13.3558 2.98528 15.4012 4.43417 17.5192C5.88334 19.6376 8.08584 21.868 11.0417 24.2105ZM11 26.8334C7.38167 24.1143 4.67153 21.4734 2.86959 18.9109C1.06764 16.3487 0.166672 13.8387 0.166672 11.3809C0.166672 9.52453 0.495978 7.89869 1.15459 6.50342C1.81292 5.10814 2.66139 3.9398 3.7 2.99842C4.73834 2.0573 5.89917 1.35008 7.18251 0.876747C8.46584 0.403414 9.73917 0.166748 11.0025 0.166748C12.2658 0.166748 13.5411 0.403414 14.8283 0.876747C16.1158 1.35008 17.2778 2.0573 18.3142 2.99842C19.3503 3.9398 20.1958 5.10855 20.8508 6.50466C21.5058 7.90078 21.8333 9.52536 21.8333 11.3784C21.8333 13.8365 20.937 16.3469 19.1442 18.9097C17.3517 21.4724 14.637 24.1137 11 26.8334ZM11.0079 14.1572C11.8338 14.1572 12.541 13.8655 13.1296 13.2822C13.7185 12.6988 14.0129 11.9888 14.0129 11.1522C14.0129 10.3158 13.7179 9.60328 13.1279 9.01466C12.5379 8.42577 11.8286 8.13133 11 8.13133C10.1795 8.13133 9.47223 8.42633 8.87834 9.01633C8.28417 9.60661 7.98709 10.3159 7.98709 11.1442C7.98709 11.9862 8.28417 12.6988 8.87834 13.2822C9.47223 13.8655 10.1821 14.1572 11.0079 14.1572Z"
                                    fill="#272727" />
                            </svg>
                        </div>
                        <span>Avenida Fernando Ferrari, 555<br> Vitória, E.S., 29101200</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 22.6666C17.7681 22.6666 19.4638 21.9642 20.714 20.714C21.9643 19.4637 22.6667 17.768 22.6667 15.9999C22.6667 14.2318 21.9643 12.5361 20.714 11.2859C19.4638 10.0356 17.7681 9.33325 16 9.33325C14.2319 9.33325 12.5362 10.0356 11.2859 11.2859C10.0357 12.5361 9.33333 14.2318 9.33333 15.9999C9.33333 17.768 10.0357 19.4637 11.2859 20.714C12.5362 21.9642 14.2319 22.6666 16 22.6666Z"
                                    stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M1 22.6667V9.33333C1 7.1232 1.87797 5.00358 3.44078 3.44078C5.00358 1.87797 7.1232 1 9.33333 1H22.6667C24.8768 1 26.9964 1.87797 28.5592 3.44078C30.122 5.00358 31 7.1232 31 9.33333V22.6667C31 24.8768 30.122 26.9964 28.5592 28.5592C26.9964 30.122 24.8768 31 22.6667 31H9.33333C7.1232 31 5.00358 30.122 3.44078 28.5592C1.87797 26.9964 1 24.8768 1 22.6667Z"
                                    stroke="#272727" stroke-width="2" />
                                <path d="M25.1667 6.8515L25.1846 6.83179" stroke="#272727" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba</span>
                    </li>
                    <li class="w-full flex gap-3 items-center text-title-gray text-xl font-normal">
                        <div class="size-8 flex items-center justify-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 28.6923V3.30769C1 2.69565 1.24313 2.10868 1.67591 1.67591C2.10868 1.24313 2.69565 1 3.30769 1H28.6923C29.3043 1 29.8913 1.24313 30.3241 1.67591C30.7569 2.10868 31 2.69565 31 3.30769V28.6923C31 29.3043 30.7569 29.8913 30.3241 30.3241C29.8913 30.7569 29.3043 31 28.6923 31H21.7692V20.0615H23.4077C23.781 20.0615 24.1391 19.9132 24.4031 19.6492C24.6671 19.3852 24.8154 19.0272 24.8154 18.6538V16.8769C24.8148 16.5038 24.6663 16.1461 24.4024 15.8822C24.1385 15.6183 23.7808 15.4698 23.4077 15.4692H21.8615V13.3C21.8615 11.3615 22.7385 11.3615 23.6154 11.3615H24.7462C24.9319 11.3692 25.117 11.336 25.2885 11.2642C25.46 11.1924 25.6136 11.0838 25.7385 10.9462C25.8726 10.8185 25.9787 10.6644 26.0502 10.4936C26.1217 10.3228 26.157 10.139 26.1538 9.95385V8.24615C26.1606 8.05809 26.1301 7.87054 26.0641 7.69432C25.998 7.5181 25.8978 7.35669 25.769 7.2194C25.6403 7.08211 25.4857 6.97165 25.3141 6.89439C25.1425 6.81713 24.9573 6.77459 24.7692 6.76923H22.1154C21.341 6.74012 20.5696 6.87945 19.8543 7.17759C19.1391 7.47574 18.4971 7.92559 17.9727 8.49608C17.4483 9.06657 17.0539 9.7441 16.8169 10.4819C16.58 11.2196 16.5059 12.0001 16.6 12.7692V15.4692H15.1231C14.9363 15.4662 14.7507 15.5003 14.5773 15.5697C14.4038 15.6391 14.2459 15.7423 14.1127 15.8733C13.9796 16.0043 13.8738 16.1605 13.8016 16.3328C13.7294 16.5051 13.6923 16.6901 13.6923 16.8769V18.6538C13.6923 18.8407 13.7294 19.0256 13.8016 19.1979C13.8738 19.3702 13.9796 19.5265 14.1127 19.6575C14.2459 19.7885 14.4038 19.8917 14.5773 19.9611C14.7507 20.0305 14.9363 20.0646 15.1231 20.0615H16.6V31H3.30769C2.69565 31 2.10868 30.7569 1.67591 30.3241C1.24313 29.8913 1 29.3043 1 28.6923Z"
                                    stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span>artepublicacapixaba</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-tainacan-lg px-4">
        <div class="grid grid-cols-2 gap-x-8 gap-y-6 px-5 lg:grid-cols-8 lg:px-0 lg:justify-between">
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/tainacam.png' ?>"
                    class="h-8 grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/ufes.png' ?>"
                    class="h-[72px] grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/leena.png' ?>"
                    class="h-[70px] grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/sectides.png' ?>"
                    class="h-[50px] grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/cnpq.png' ?>"
                    class="h-[50px] grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/capes.png' ?>"
                    class="h-8 grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/funcultura.png' ?>"
                    class="h-8 grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/resources/images/fapes.png' ?>"
                    class="h-11 grayscale hover:grayscale-0 filter opacity-70 hover:opacity-100 transition duration-300">
            </a>
        </div>
    </div>
</section>