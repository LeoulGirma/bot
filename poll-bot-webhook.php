<?php

require_once 'PollBot.php';

define('BOT_TOKEN', '916786096:AAGiiEOXMroREHaqsybtIMNS5LtBX8H9PNg');
define('BOT_WEBHOOK', 'https://github.com/Leoulg1900/bot/blob/master/poll-bot-webhook.php');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');

if (php_sapi_name() == 'cli') {
  if ($argv[1] == 'set') {
    $bot->setWebhook(BOT_WEBHOOK);
  } else if ($argv[1] == 'remove') {
    $bot->removeWebhook();
  }
  exit;
}

$response = file_get_contents('php://input');
$update = json_decode($response, true);

$bot->init();
$bot->onUpdateReceived($update);
