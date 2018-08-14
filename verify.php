<?php
$access_token = 'uPPbuNIIATryuuhKwEC4kRRHqdNd4+73PnMi+7DQ383G4NMkI6S7a+li5SCoqZJGbKsl3sxQ6J556VApXNkprhB4dKVg1rR6UcHZzSTFyte5h0qyqFAb9zISLsL5LEw+DS/KlnXV/IG5UDYV3g6qjQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
