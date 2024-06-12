<?php
$url = "https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json";
$response = file_get_contents($url);
$data = json_decode($response, true);

header('Content-Type: application/json');
echo json_encode($data['channel']['item']);
?>
