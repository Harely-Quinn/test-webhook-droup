
$http_code = intval(curl_getinfo($handle, CURLINFO_HTTP_CODE));
  curl_close($handle);

register_shutdown_function(function() {
  if(http_response_code() != 200) {
    http_response_code(200);
    // Replace <token> to your bot api token
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query([
      'chat_id' =>$chat_id, // Replace 12345 to chat id from the update request
      'text' => 'An internal server error has occurred. Please try again later.',
    ]));
  }
});

ini_set('display_errors', 0);
http_response_code(200);
fastcgi_finish_request();
if ($http_code >= 500) {
file_get_contents("https://api.telegram.org/bot1723005657:AAFxH-es1F5tWc6_ZQaMqVmpH1U5tMtVGkE/sendMessage?chat_id=-1001658965255&disable_web_page_preview=True&text=\%23\Hello%20\%23\Text&parse_mode=MarkdownV2");
sleep(10);
	return false;
  }

  if(http_response_code() != 200) {
 file_get_contents("https://api.telegram.org/bot1723005657:AAFxH-es1F5tWc6_ZQaMqVmpH1U5tMtVGkE/sendMessage?chat_id=-1001658965255&disable_web_page_preview=True&text=\%23\Hello%20\%23\Text&parse_mode=MarkdownV2");}


function exec_curl_request($handle) {
  $response = curl_exec($handle);

  if ($response === false) {
	$errno = curl_errno($handle);
	$error = curl_error($handle);
	error_log("Curl returned error $errno: $error\n");
	curl_close($handle);
	return false;
  }


  if ($http_code >= 500) {
	file_get_contents("https://api.telegram.org/bot1723005657:AAFxH-es1F5tWc6_ZQaMqVmpH1U5tMtVGkE/sendMessage?chat_id=-1001658965255&disable_web_page_preview=True&text=\%23\Hello%20\%23\Text&parse_mode=MarkdownV2");
	sleep(10);
	return false;
  } else if ($http_code != 200) {
	$response = json_decode($response, true);
	error_log("Request has failed with error {$response['error_code']}: {$response['description']}\n");
	if ($http_code == 401) {
	  throw new Exception('Invalid access token provided');
	}
	return false;
  } else {
	$response = json_decode($response, true);
	if (isset($response['description'])) {
	  error_log("Request was successful: {$response['description']}\n");
	}
	$response = $response['result'];
  }

  return $response;
}

  if (!$parameters) {
	$parameters = array();
  } else if (!is_array($parameters)) {
	error_log("Parameters must be an array\n");
	return false;
  }

  $parameters["method"] = $method;

  $handle = curl_init(API_URL);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  curl_setopt($handle, CURLOPT_POST, true);
  curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
  curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
  return exec_curl_request($handle);

