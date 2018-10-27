<?php



require "vendor/autoload.php";

$access_token = 'mAq8004CMX48UWBUngW6Z2pJ2Jjl+D0AWBe3sw6JNK+qUzfAM7h/nmSYteJrFV3F2FrHsPRzuUgNCanxatVU2EGckhdGilQpOE+1Zk2MaY52shPDMfbb6VyyU7SDlWFvfsd2dLmTn/GAgt06Ax72NwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f74fa11e6fa039b659e94b667cf290a4';

$pushID = 'U49431d7079eecf6ee3e7181691d36357';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







