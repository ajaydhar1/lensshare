<?php

function azeo_getData($url) {

    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
            ),
        );  

    $data=file_get_contents($url, false, stream_context_create($arrContextOptions));
    $json=json_decode($data, true); 
    return $json;
}

include_once('___modules.php');



$term = $_GET['term'];

$result = '';


// get 2 definitions
$def_api_endpoint = "https://api.dictionaryapi.dev/api/v2/entries/en_US/";

$defs = azeo_getData($def_api_endpoint.urlencode($term));
$defs_array = [];

if (!empty($defs)) {
	
	$def_count = 0;

	foreach ($defs[0]['meanings'][0]['definitions'] as $def) {
		if ($def_count > 1) {
			break;
		}
		if ($def_count == 0) {
			$result = '<strong>' . ucfirst($term) . '.</strong> ' . $def['definition'];
		}
		else {
			$result = $result . ' Or. ' . $def['definition'];
		}
		array_push($defs_array, $def['definition']);
		$def_count = $def_count + 1;
	}
}

// get gif
$url = '';

$url = searchUrl(urlencode($term));

$giphy_data = basic_getData($url);
$gif_url = $giphy_data['data'][array_rand($giphy_data['data'])]['images']['original']['url'];

$response = ['text' => $result, 'gif' => $gif_url];

echo json_encode($response);