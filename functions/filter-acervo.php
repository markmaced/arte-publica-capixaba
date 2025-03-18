<?php
function filter_acervo()
{
    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : '';

    if (empty($post_type)) {
        wp_send_json_error('<p>Erro: Tipo de post não especificado.</p>');
        wp_die();
    }

    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    if (!empty($search)) {
        $args['s'] = $search;
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();
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
        <?php
        }

        $html = ob_get_clean();
        wp_send_json_success($html);
    } else {
        wp_send_json_error('<p>Nenhum resultado encontrado.</p>');
    }

    wp_die();
}

add_action('wp_ajax_filter_acervo', 'filter_acervo');
add_action('wp_ajax_nopriv_filter_acervo', 'filter_acervo');
