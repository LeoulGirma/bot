<?php
include 'Telegram.php';
$bot_token = '519971550:AAFUFUiLlpcOsCKUq7erj47H1fFF088X_d0';
$telegram = new Telegram($bot_token);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Hello');
$telegram->sendMessage($content);