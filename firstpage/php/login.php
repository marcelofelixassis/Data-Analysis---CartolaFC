<?php
$nomedocartoleiro = $_GET["nomedocartoleiro"];

$service_url = "https://api.kartolafc.com.br/times/".$nomedocartoleiro;
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//execute the session
$curl_response = curl_exec($curl);
//finish off the session
curl_close($curl);
echo $curl_response;
?>