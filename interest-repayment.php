<?php

define('MERCHANT_ID', '');//from amplify dashboard
define('API_KEY', '');//from amplify dashboard
define('AMPLIFY_RECURRING_CHARGE_ENDPOINT', 'https://api.amplifypay.com/merchant/returning/charge');

//from previous successful transaction
$transactionRef = $_POST['transactionRef'];
$authCode = $_POST['authCode'];

// Invoice Parameters
$description = 'Pettycash Repayment';
$amount = $_POST['amount']; //transaction amount
$email = $_POST['email'];//customer email
$transactionRef = $_POST['transactionRef'];//transaction reference
$authCode = $_POST['authCode'];//authentication code

$response = chargeCustomer($description, $amount, $email, $transactionRef, $authCode, );


if($response['StatusCode'] == "00")
{
    echo "Transaction Succesful";

}
else
{
    //error charging customer
    $message = $response['StatusDesc'];
    echo "$mesage";
}


/**
 * recurring charge
 * @param $transactionRef
 * @param $authCode
 * @param $description
 * @param $amount
 * @param $email
 * @return mixed
 */
function chargeCustomer($transactionRef, $authCode, $description, $amount, $email)
{
    $payload = array(
        "merchantId" => MERCHANT_ID,
        "apiKey" => API_KEY,
        "transactionRef"=> $transactionRef,
        "amount" => $amount,
        "authCode" => $authCode,
        "paymentDescription" => $description,
        "customerEmail" => $email
    );

    $content = json_encode($payload);

    $response = do_http_post($content);

    return $response;
}

function do_http_post($payload)
{
    $headers = array("content-type: application/json");

    $curl = curl_init(AMPLIFY_RECURRING_CHARGE_ENDPOINT);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

    $result = curl_exec($curl);
    $response = json_decode($result, true);
    curl_close($curl);
    return $response;
}