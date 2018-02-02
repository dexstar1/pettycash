<?php

// Start the session
session_start();


/**
*   redirectUrl parameter should link to this url from initiate_payment_sample_code
*/

// Retrieve data returned in payment gateway callback
$tran_ref = $_SESSION["ref"];
$merchantId = 'XG5X5VOWAEWJBY2CSFM3IA';
$apiKey = '10c66413-bf8e-4c7f-9f18-2a6c4d4bbedf';
$endPoint = 'https://api.amplifypay.com/merchant/verify';


$payload = array(
    "merchantId"=> $merchantId,
    "apiKey"=> $apiKey,
    "transactionRef" => $transactionReference
);
$content = json_encode($payload);

$curl = curl_init($endPoint);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$result     = curl_exec($curl);
$response   = json_decode($result, true);
curl_close($curl);


if($response['StatusCode'] === '00' && $response['ApiKey'] === $apiKey) {
   echo " <div style='height:200px;width:200px;border:1px solid #eee; border-radius:3px;box-shadow:2px 2px #eee;margin:150px auto;padding:200px auto;'><h1 style='color:#009688;text-align:center;'><img src='assets/ring.gif' height='50'><br>Transaction Succesful </h1></div> ";
}
else
{
    echo "<div style='height:200px;width:200px;border:1px solid #eee; border-radius:3px;box-shadow:2px 2px #eee;margin:150px auto;padding:200px auto;'><h1 style='color:#009688;text-align:center;'><img src='assets/ring.gif' height='50'><br>Transaction Failed </h1></div>";
$URL='/repay-loan.php';
echo "<script>location.href='$URL';</script>";
   
}
?>