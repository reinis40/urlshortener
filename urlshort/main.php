<?php

$url = 'https://cleanuri.com/api/v1/shorten';
$longLink = readline('enter long website; ');
$data = array(
      'url' => $longLink
);
$curlRequest = curl_init($url);
curl_setopt($curlRequest, CURLOPT_POST, true);
curl_setopt($curlRequest, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curlRequest);
$responseData = json_decode($response);
$resultUrl = $responseData->result_url;
echo $resultUrl;