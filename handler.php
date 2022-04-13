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
