<?php

define('AMPLIFY_GATEWAY_ENDPOINT', 'https://bankpay.ampslg.com/api/v1/authorize');
define('AMPLIFY_PAYMENT_CURRENCY', 'NGN');

$otp = $_POST['esavalue'];

  $apiKey = '10c66413-bf8e-4c7f-9f18-2a6c4d4bbedf';
  $merchantId = 'XG5X5VOWAEWJBY2CSFM3IA';


  $payload=array(
   "reference" => $_COOKIE[$cookie_value],
   "esavalue" =>  $otp,
    );
    
     
$content = json_encode($payload);

/**
 *Generate x-digest header for authentication
 * @param $value
 * @return string
 */
function generateSha256($value)
{
    return hash('sha256', $value);
}

$xDigest = generateSha256($content.$apiKey);
$headers = array("content-type: application/json", "x-key: $merchantId", "x-digest: $xDigest");

$curl = curl_init(AMPLIFY_GATEWAY_ENDPOINT);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result = curl_exec($curl);
echo $result;
$response = json_decode($result, true);
curl_close($curl);



if ($err) {
  echo "cURL Error #:" . $err;
} else {
    echo $response['statusMsg'];
}

?>