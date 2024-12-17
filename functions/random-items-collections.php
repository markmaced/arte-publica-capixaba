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
        $api_url = "{$urlapi}/wp-json/tainacan/v2/collection/{$collection_id}/items?_embed";

        $response = wp_remote_get($api_url);

        if (is_wp_error($response)) {
            continue;
        }

        $items = json_decode(wp_remote_retrieve_body($response), true);

        if (!$items || !is_array($items)) {
            continue;
        }

        $i = 0;
        foreach ($items as $item) {
            if (isset($item[$i]['_thumbnail_id'])) {
                $image_url = wp_get_attachment_image_url($item[$i]['_thumbnail_id'], 'full');
                if ($image_url) {
                    $random_items[] = [
                        'id' => $item[$i]['id'],
                        'image_url' => $image_url,
                        'url' => $item[$i]['url']
                    ];
                }
            }

            $i++;
        }

        if (count($random_items) >= 6) {
            break;
        }
    }

    shuffle($random_items);
    return array_slice($random_items, 0, 6);
}