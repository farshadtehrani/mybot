<?php
/**
* telegram bot example.
* https://github.com/farshadtehrani/farshadtest.git
*/
include("telegram.php");
date_default_timezone_set("asia/tehran");
//set the bot token
$bot_id = "544210869:AAGdGFA18aY3PPGBWojblIfhRkPZuHOVUn8";
$telegram = new telgram($bot_id);
$result = $telegram->getdata();
$text             = $telegram->text();
$chat_id          = $telegram->chat_id();
$username         = $telegram->username();
$name             = $telegram->firstname();
$family           = $telegram->lastname();
$callback_data    = $telegram->callback_data();
$callback_query   = $telegram->callback_query();
$callback_chat_id = $telegram->callback_chat_id();
$callback_id      = $telegram->callback_id();
$message_id       = $telegram->message_id();
$user_id          = $telegram->user_id();

if(!is_null($text) && !is_null($chat_id)){
	$content = array('chat_id' => $chat_id, 'text' => $user_id);
	$telegram->sendReplyMessage($content);
}