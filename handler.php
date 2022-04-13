<?php
file_get_contents("https://api.telegram.org/bot1723005657:AAFxH-es1F5tWc6_ZQaMqVmpH1U5tMtVGkE/sendMessage?" . http_build_query([
  'chat_id' => $chatId,
  'text' => 'Hello!',
  , // <--- This is a syntax error. Imagine that we did it by mistake.
]));
