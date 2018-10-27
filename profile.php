<?php


$access_token = 'mAq8004CMX48UWBUngW6Z2pJ2Jjl+D0AWBe3sw6JNK+qUzfAM7h/nmSYteJrFV3F2FrHsPRzuUgNCanxatVU2EGckhdGilQpOE+1Zk2MaY52shPDMfbb6VyyU7SDlWFvfsd2dLmTn/GAgt06Ax72NwdB04t89/1O/w1cDnyilFU=';

$userId = 'U49431d7079eecf6ee3e7181691d36357';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

