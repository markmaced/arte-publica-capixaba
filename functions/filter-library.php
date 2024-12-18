<?php 

function filter_library() {

    $search = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $tipoDeFicha = isset($_POST['tipoDeFicha']) ? sanitize_text_field($_POST['tipoDeFicha']) : '';

    $meta_query = array();

    if ($tipoDeFicha) {
        $meta_query[] = array(
            'key' => 'tipoDeFicha',
            'value' => $tipoDeFicha,
            'compare' => '=',
        );
    }

    $args = array(
        'post_type' => 'repositorio',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        's' => $search,
        'meta_query' => $meta_query,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();

        while ($query->have_posts()) {
            $query->the_post();

            $groupData = get_group_data_by_tipoDeFicha()
            ?>
            <a href="<?php the_permalink(); ?>" class="flex flex-row items-center bg-light-gray rounded-lg shadow-common-shadow">
                <img class="object-cover w-full rounded-tl-lg h-32 max-w-36 rounded-bl-lg"
                     src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <div class="flex flex-col justify-between py-7 px-4 lg:p-7 leading-normal font-lato">
                    <h5 class="mb-2 font-bold leading-tight text-title-gray line-clamp-2"><?php the_title(); ?></h5>
                    <p class="text-sm leading-tight text-title-gray line-clamp-1"><?php echo $groupData['autores'] ?></p>
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

add_action('wp_ajax_filter_library', 'filter_library');
add_action('wp_ajax_nopriv_filter_library', 'filter_library');