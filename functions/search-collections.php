<?php

function search_collections_api() {
    global $urlapi;

    $response = wp_remote_get( "$urlapi/wp-json/tainacan/v2/collections/?perpage=1000", ['timeout' => 20] );
	if ( is_array( $response ) && ! is_wp_error( $response ) ) {
		$headers = $response['headers'];
		$body    = $response['body'];
	}
	$responseDecode = json_decode($body);

    return $responseDecode;
}