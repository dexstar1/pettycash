<?php
session_start();

$td=$_SESSION['transID'];

$payload = array(
    "transactionId" => $td,
);

$apiKey = '10c66413-bf8e-4c7f-9f18-2a6c4d4bbedf';

$content=json_encode($payload);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://bankpay.staging.ampslg.com/api/v1/verify/withtransid",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $content,
CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "x-digest: {{0ef4d39f97d6faa28e39c363ec0685301e33b11c35951d4bbfe5da561c67efc3}}",
    "x-key: {{XG5X5VOWAEWJBY2CSFM3IA}}"
  )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}