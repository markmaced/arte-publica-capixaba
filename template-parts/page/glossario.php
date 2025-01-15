<div class="max-w-screen-tainacan-lg mx-auto py-20 lg:px-0 !font-lato">
    <div class="px-6 lg:px-0 mx-auto max-w-screen-tainacan w-full">
        <div class="mb-10">
            <h2 class="text-4xl font-black text-title-gray mb-6">Glossário</h2>

            <?php custom_breadcrumbs(); ?>
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

        // Organizar posts por letra inicial
        $posts_by_letter = array_fill_keys(range('A', 'Z'), []);

        if ($loop->have_posts()) {
            while ($loop->have_posts()) {
                $loop->the_post();
                $first_letter = strtoupper(mb_substr(get_the_title(), 0, 1));
                if (array_key_exists($first_letter, $posts_by_letter)) {
                    $posts_by_letter[$first_letter][] = array(
                        'title' => get_the_title(),
                        'definition' => get_field('definicao')
                    );
                }
            }
        }
        wp_reset_postdata();
        ?>

        <div class="w-full space-y-20">
            <!-- Tabs -->
            <div class="flex gap-2 flex-wrap py-2" role="tablist" aria-label="Glossary Alphabet">
                <?php foreach (range('A', 'Z') as $letter): ?>
                    <button
                        data-tab="<?php echo $letter; ?>"
                        class="tab-button text-title-gray font-bold hover:border-b-2 hover:border-b-logo-blue hover:text-logo-blue w-6 h-6 text-base lg:flex items-center justify-center lg:text-sm"
                        type="button"
                        role="tab"
                        aria-controls="tabpanel-<?php echo $letter; ?>">
                        <?php echo $letter; ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Panels -->
            <div class="px-2 py-4 text-title-gray">
                <?php foreach (range('A', 'Z') as $letter): ?>
                    <div
                        id="tabpanel-<?php echo $letter; ?>"
                        class="tab-panel hidden"
                        role="tabpanel"
                        aria-labelledby="tab-<?php echo $letter; ?>">
                        <div class="overflow-hidden flex flex-col">
                            <span class="text-5xl text-logo-blue font-black mb-10"><?php echo $letter; ?></span>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                                <?php if (!empty($posts_by_letter[$letter])): ?>
                                    <?php foreach ($posts_by_letter[$letter] as $post): ?>
                                        <div x-data="{ isExpanded: false }">
                                            <div :class="isExpanded ? 'h-auto' : 'h-6'">
                                                <button
                                                    type="button"
                                                    class="gap-2 text-left underline-offset-2 hover:text-logo-blue hover:text-underline focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-none mb-1 text-lg"
                                                    @click="isExpanded = ! isExpanded"
                                                    :class="isExpanded ? 'text-onSurfaceStrong font-bold text-logo-blue'  : 'text-onSurface dark:text-onSurfaceDark font-medium'"
                                                    :aria-expanded="isExpanded ? 'true' : 'false'">
                                                    <?php echo esc_html($post['title']); ?>
                                                </button>
                                                <div x-cloak x-show="isExpanded" role="region" x-collapse x-transition>
                                                    <div class="text-base pb-10">
                                                        <?php echo esc_html($post['definition']); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>Nenhum resultado</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        function showTab(letter) {
            // Ocultar todos os painéis
            document.querySelectorAll('.tab-panel').forEach(panel => {
                panel.classList.add('hidden');
            });

            // Desativar todos os botões
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
            });

            // Mostrar o painel correspondente
            const panel = document.getElementById('tabpanel-' + letter);
            if (panel) {
                panel.classList.remove('hidden');
            }

            // Ativar o botão correspondente
            const button = [...document.querySelectorAll('.tab-button')].find(btn => btn.dataset.tab === letter);
            if (button) {
                button.classList.add('font-bold', 'text-white', 'bg-logo-blue', 'rounded-full');
            }
        }

        // Inicializar com a aba "A"
        showTab('A');

        // Adicionar eventos de clique aos botões
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                const letter = button.dataset.tab;
                showTab(letter);
            });
        });
    });
</script>