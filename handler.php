<?php
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query([
  'chat_id' => $chatId,
  'text' => 'Hello!',} // <--- This is a syntax error. Imagine that we did it by mistake.
]));
