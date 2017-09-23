<?php
$access_token = 'H0XEBe+hqU8ITh8xL2RE6fMVnkuHFZaW3bdalb2lNKCh5TWSxWSrRG/O1jM/qrRRf3Xc6MAdEYeUpQGXVxTTVzLPS6yIxY/p8fAvjga33ib3S6lFF4L2/qzPa1CLtBJZiHw17Hu2Dn7YTp+erF6NOQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
