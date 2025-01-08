<div class="max-w-screen-tainacan-lg mx-auto py-20 lg:px-0 !font-lato">
    <div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
        <div class="mb-10">
            <h2 class="text-4xl font-black text-title-gray mb-6">Glossário</h2>

            <?php custom_breadcrumbs(); ?>
        </div>

        <div x-data="{ selectedTab: 'A' }" class="hidden w-full space-y-20">
            <div
                @keydown.right.prevent="$focus.wrap().next()"
                @keydown.left.prevent="$focus.wrap().previous()"
                class="flex gap-2 flex-wrap py-2"
                role="tablist"
                aria-label="Glossary Alphabet">

                <template x-for="letter in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('')">
                    <button
                        @click="selectedTab = letter"
                        :aria-selected="selectedTab === letter"
                        :tabindex="selectedTab === letter ? '0' : '-1'"
                        :class="selectedTab === letter ? 'font-bold text-white bg-logo-blue rounded-full' : 'text-title-gray font-bold hover:border-b-2 hover:border-b-logo-blue hover:text-logo-blue'"
                        class="w-5 h-5 lg:h-6 lg:w-6 text-xs lg:flex items-center justify-center lg:text-sm"
                        type="button"
                        role="tab"
                        :aria-controls="'tabpanel' + letter">
                        <span x-text="letter"></span>
                    </button>
                </template>
            </div>

            <div class="px-2 py-4 text-title-gray">
                <template x-for="letter in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('')">
                    <div
                        x-show="selectedTab === letter"
                        :id="'tabpanel' + letter"
                        role="tabpanel"
                        :aria-label="'Glossary Section for ' + letter">
                        <div x-data="{ isExpanded: false }" class="overflow-hidden flex flex-col">
                            <span x-text="letter" class="text-5xl text-logo-blue font-black mb-10"></span>
                            <div class="grid grid-cols-3 grid-flow-row">
                                <button id="controlsAccordionItemOne" type="button" class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Abacate
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                                    <div class="text-sm sm:text-base">
                                        Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our for additional information.
                                    </div>
                                </div>
                                <button id="controlsAccordionItemOne" type="button" class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Abacate
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                                    <div class="text-sm sm:text-base">
                                        Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our for additional information.
                                    </div>
                                </div>
                                <button id="controlsAccordionItemOne" type="button" class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Abacate
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                                    <div class="text-sm sm:text-base">
                                        Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our for additional information.
                                    </div>
                                </div>
                                <button id="controlsAccordionItemOne" type="button" class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Abacate
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                                    <div class="text-sm sm:text-base">
                                        Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our for additional information.
                                    </div>
                                </div>
                                <button id="controlsAccordionItemOne" type="button" class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none" aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'" :aria-expanded="isExpanded ? 'true' : 'false'">
                                    Abacate
                                </button>
                                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region" aria-labelledby="controlsAccordionItemOne" x-collapse>
                                    <div class="text-sm sm:text-base">
                                        Our website is optimized for the latest versions of Chrome, Firefox, Safari, and Edge. Check our for additional information.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <b><a href="#" class="underline" x-text="'Section for ' + letter"></a></b> -->
                    </div>
                </template>
            </div>
        </div>

        <?php
        $args = array(
            'post_type' => 'glossario',
            'post_status' => 'publish',
            'posts_per_page' => 200,
            'orderby' => "title",
            'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        ?>

        <div x-data="{ selectedTab: 'A' }" class="w-full space-y-20">
            <div
                @keydown.right.prevent="$focus.wrap().next()"
                @keydown.left.prevent="$focus.wrap().previous()"
                class="flex gap-2 flex-wrap py-2"
                role="tablist"
                aria-label="Glossary Alphabet">

                <template x-for="letter in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('')">
                    <button
                        @click="selectedTab = letter"
                        :aria-selected="selectedTab === letter"
                        :tabindex="selectedTab === letter ? '0' : '-1'"
                        :class="selectedTab === letter ? 'font-bold text-white bg-logo-blue rounded-full' : 'text-title-gray font-bold hover:border-b-2 hover:border-b-logo-blue hover:text-logo-blue'"
                        class="w-5 h-5 lg:h-6 lg:w-6 text-xs lg:flex items-center justify-center lg:text-sm"
                        type="button"
                        role="tab"
                        :aria-controls="'tabpanel' + letter">
                        <span x-text="letter"></span>
                    </button>
                </template>
            </div>

            <div class="px-2 py-4 text-title-gray">
                <template x-for="letter in 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('')">
                    <div
                        x-show="selectedTab === letter"
                        :id="'tabpanel' + letter"
                        role="tabpanel"
                        :aria-label="'Glossary Section for ' + letter">
                        <div class="overflow-hidden flex flex-col">
                            <span x-text="letter" class="text-5xl text-logo-blue font-black mb-10"></span>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                <?php
                                $current_letter = '';
                                if ($loop->have_posts()) :
                                    while ($loop->have_posts()) : $loop->the_post();
                                        $title = get_the_title();
                                        $definition = get_field('definicao');
                                        $first_letter = strtoupper(substr($title, 0, 1));

                                        // Agrupa por letra
                                        if ($current_letter !== $first_letter) {
                                            $current_letter = $first_letter;
                                        }
                                ?>
                                        <template x-if="letter === '<?php echo $first_letter; ?>'" x-data="{ isExpanded: false }">
                                            <div :class="isExpanded ? 'h-auto' : 'h-5'">
                                                <button
                                                    type="button"
                                                    class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none mb-1"
                                                    @click="isExpanded = ! isExpanded"
                                                    :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'"
                                                    :aria-expanded="isExpanded ? 'true' : 'false'">
                                                    <?php echo esc_html($title); ?>
                                                </button>
                                                <div x-cloak x-show="isExpanded" role="region" x-collapse>
                                                    <div class="text-sm sm:text-base">
                                                        <?php echo esc_html($definition); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>


    </div>
</div>