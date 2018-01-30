<?php
 
header('Content-Type: text/html; charset=utf-8');
$message= file_get_contents("php://input");
$arrayMessage= json_decode($message, true);
$token= "544210869:AAGdGFA18aY3PPGBWojblIfhRkPZuHOVUn8";
$chat_id= $arrayMessage['message']['from']['id'];
$command= $arrayMessage['message']['text'];
$id = $arrayMessage['message']['message_id'];
 
//Get Chat Id And Message Content
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
 
if($command == '/start'){
 $text= "سلام، به ربات من خوش امدید";
 $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&amp;text=".$text."&amp;reply_markup=".$encodedMarkup;
 file_get_contents($url);
 
  
  
} else if($command == 'سلام'){
 $text= "سلام خوبی چطوری";
 $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&amp;text=".$text."&amp;reply_markup=".$encodedMarkup;
 file_get_contents($url);
  
 
}
 ?>