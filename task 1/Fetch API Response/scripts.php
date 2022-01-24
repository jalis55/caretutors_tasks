<?php


$url = "https://gorest.co.in/public/v1/users";

$request = curl_init();
// Set the url
curl_setopt($request, CURLOPT_URL,$url);
// Disable SSL verification
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
$headers = [
    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
    'x-access-token:d7c01847de4c083cb154e9a533294301e9f05f93dbae7d589e42ece63226c0a3'
];

curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
// Execute
$response = curl_exec($request);

curl_close($request);
print_r($response);

?>
