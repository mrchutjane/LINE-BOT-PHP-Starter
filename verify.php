<?php
$access_token = 'RLqRVMjOTQDt4vTSykX1KMrB5r+QOxS4vyAPI4GhYOPxOIgMuqdDrc6xz6aZP7Tnj+GytNSr7bwVB7CfepJ8L9ngMv4fwnVtTjLpXRwL9Ag+Nenid141X43bbn5qLB+zHV5EZwWB8dtzEWrUjdDZpAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
