<?php



require "vendor/autoload.php";

$access_token = 'mAq8004CMX48UWBUngW6Z2pJ2Jjl+D0AWBe3sw6JNK+qUzfAM7h/nmSYteJrFV3F2FrHsPRzuUgNCanxatVU2EGckhdGilQpOE+1Zk2MaY52shPDMfbb6VyyU7SDlWFvfsd2dLmTn/GAgt06Ax72NwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ed31709ed1aa7ab883292e0c081fafe4';

$pushID = 'Test';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







