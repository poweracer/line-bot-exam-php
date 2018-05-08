<?php



require "vendor/autoload.php";

$access_token = 'm3edsF8K/XFewV6Td722LIJdz2TRlyThaocqJcZxg2LbTU4wZOYqhi/NLmXlLhOPVo2AbLYmn4OOLWowNZx3/JPksAwzDwegEUGzu4xAiAQjHtBdoUwBDsuYSZISbJndqkmqE/Q6AzJPvmzCt/ejkQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8668b7b5a0a6a607719e5b8ac888fbee';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







