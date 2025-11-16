<?php

require_once("___config.php");

function basic_getData($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close ($ch);
	$json=json_decode($data, true); 
	return $json;
} 

function searchUrl($query) {
	global $giphy_api_key;
	return "http://api.giphy.com/v1/gifs/search?q=".urlencode($query)."&api_key=".$giphy_api_key."&limit=100";
}

function searchStickerUrl($query) {
	global $giphy_api_key;
	return "http://api.giphy.com/v1/stickers/search?q=".urlencode($query)."&api_key=".$giphy_api_key."&limit=100";
}

function trendingURL() {
	global $giphy_api_key;
	return "http://api.giphy.com/v1/gifs/trending?api_key=".$giphy_api_key."&limit=100";
}


function azeo_postData($url, $params) {
  	$ch = curl_init();

  	curl_setopt($ch, CURLOPT_URL,$url);
  	curl_setopt($ch, CURLOPT_POST, 1);
  	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  	$data = curl_exec($ch);

  	curl_close($ch);

  	$json=json_decode($data, true);	

  	return $json;
}

function get_twitchAuthToken() {
	global $twitch_client_id;
	global $twitch_client_secret;

	#$endpoint = "https://id.twitch.tv/oauth2/token";
	#$params = array('client_id' => $twitch_client_id, 'client_secret' => $twitch_client_id, 'grant_type' => 'client_credentials');
	#$url = $endpoint . '?' . http_build_query($params);

	$url = "https://id.twitch.tv/oauth2/token?client_id=".$twitch_client_id."&client_secret=".$twitch_client_secret."&grant_type=client_credentials";

	# post request
	$ch = curl_init();
  	curl_setopt($ch, CURLOPT_URL,$url);
  	curl_setopt($ch, CURLOPT_POST, 1);
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  	$data = curl_exec($ch);

  	curl_close($ch);
  	$json=json_decode($data, true);	

  	#return access token
  	return $json["access_token"];

}

function get_liveTwitchStreams() {
	global $twitch_client_id;

	$url = "https://api.twitch.tv/helix/streams?first=20&language=en";
	$token = get_twitchAuthToken();

	$headers = array('Authorization: Bearer '.$token, 'Client-Id: '.$twitch_client_id);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$data = curl_exec($ch);
	curl_close ($ch);
	$json=json_decode($data, true); 
	return $json;

}

#curl -H 'Client-ID: 04p46rqs0xn1rlmqpfvhbt2buvlk4r' -X GET 'https://api.twitch.tv/helix/streams?first=20'

#curl -X GET 'https://api.twitch.tv/helix/streams' -H 'Authorization: Bearer 88jeifc6hlhzwcqo7vh6wkgcz345eh' -H 'Client-Id: 04p46rqs0xn1rlmqpfvhbt2buvlk4r'

?>