<?php
function get_random_items_with_images()
{
    global $urlapi;

    $collections = search_collections_api();

    if (!is_array($collections)) {
        return [];
    }

    $random_items = [];

    shuffle($collections);

    foreach ($collections as $collection) {
        $collection_id = $collection->id;
        $api_url = $urlapi . "/wp-json/tainacan/v2/collection/{$collection_id}/items?_embed";


        $response = wp_remote_get($api_url);

        if (is_wp_error($response)) {
            continue;
        }

        $items = json_decode(wp_remote_retrieve_body($response), true);

        if (!$items || !is_array($items)) {
            continue;
        }


        $items_with_images = array_filter($items, function ($item) {
            return isset($item['_thumbnail_id']) && !empty($item['_thumbnail_id']);
        });

        var_dump($items_with_images);


        foreach ($items_with_images as &$item) {
            $image_url = wp_get_attachment_image_url($item['_thumbnail_id'], 'full');
            $item['image_url'] = $image_url; 
        }


        shuffle($items_with_images);


        $random_items = array_merge($random_items, $items_with_images);
    }

    shuffle($random_items);
    return array_slice($random_items, 0, 5);
}