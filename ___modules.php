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

function twitch_requestJson($url, array $options, $operation) {
	$ch = curl_init($url);
	curl_setopt_array($ch, [
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_CONNECTTIMEOUT => 10,
		CURLOPT_TIMEOUT => 20,
	] + $options);
	$data = curl_exec($ch);
	$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$error = curl_errno($ch);
	curl_close($ch);

	// Never log the request, response body, or credentials.
	if ($data === false) {
		throw new RuntimeException("Twitch {$operation} failed: cURL {$error} (" . curl_strerror($error) . ").");
	}
	if ($status !== 200) {
		throw new RuntimeException("Twitch {$operation} failed: HTTP {$status}. Check server credentials and Twitch API access.");
	}
	$json = json_decode($data, true);
	if (!is_array($json) || json_last_error() !== JSON_ERROR_NONE) {
		throw new RuntimeException("Twitch {$operation} failed: invalid JSON response.");
	}
	return $json;
}

function get_twitchAuthToken() {
	global $twitch_client_id;
	global $twitch_client_secret;

	if (!is_string($twitch_client_id) || trim($twitch_client_id) === '' ||
		!is_string($twitch_client_secret) || trim($twitch_client_secret) === '') {
		throw new RuntimeException('Twitch OAuth failed: client ID or client secret is missing from server configuration.');
	}

	$json = twitch_requestJson('https://id.twitch.tv/oauth2/token', [
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => http_build_query([
			'client_id' => $twitch_client_id,
			'client_secret' => $twitch_client_secret,
			'grant_type' => 'client_credentials',
		]),
	], 'OAuth');

	if (!isset($json['access_token']) || !is_string($json['access_token']) || trim($json['access_token']) === '') {
		throw new RuntimeException('Twitch OAuth failed: response did not contain an access token.');
	}
	return $json['access_token'];
}

function get_liveTwitchStreams() {
	global $twitch_client_id;

	$url = "https://api.twitch.tv/helix/streams?first=20&language=en";
	$token = get_twitchAuthToken();

	$headers = array('Authorization: Bearer '.$token, 'Client-Id: '.$twitch_client_id);

	$json = twitch_requestJson($url, [
		CURLOPT_HTTPHEADER => $headers,
	], 'streams');
	if (!isset($json['data']) || !is_array($json['data'])) {
		throw new RuntimeException('Twitch streams failed: response did not contain a stream list.');
	}
	foreach ($json['data'] as $stream) {
		if (!is_array($stream) || !isset($stream['user_login']) ||
			!is_string($stream['user_login']) || !preg_match('/^[a-zA-Z0-9_]+$/D', $stream['user_login'])) {
			throw new RuntimeException('Twitch streams failed: response contained an invalid channel login.');
		}
	}
	return $json;

}

#curl -H 'Client-ID: 04p46rqs0xn1rlmqpfvhbt2buvlk4r' -X GET 'https://api.twitch.tv/helix/streams?first=20'

#curl -X GET 'https://api.twitch.tv/helix/streams' -H 'Authorization: Bearer 88jeifc6hlhzwcqo7vh6wkgcz345eh' -H 'Client-Id: 04p46rqs0xn1rlmqpfvhbt2buvlk4r'

?>