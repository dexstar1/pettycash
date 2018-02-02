<?php
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$fullName = $firstName.' '.$lastName;
$email = $_POST['email'];
$redirectUrl = 'http://pettycash.com.ng/verify.php'; 

$endPoint = 'https://api.amplifypay.com/merchant/transact';
$planId = 0; 


$merchantId = 'XG5X5VOWAEWJBY2CSFM3IA';//get from amplify dashboard
$apiKey = '10c66413-bf8e-4c7f-9f18-2a6c4d4bbedf';//get from amplify dashboard

// Invoice Parameters

function genID($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$transId = genID();//unique identification
$description = 'initiate card payment';//description for this transaction
$amount = 50;

$payload = array(
    "merchantId"=> $merchantId,
    "apiKey"=> $apiKey,
    "customerName"=> $fullName,
    "customerEmail" => $email,
    "amount" => $amount,
    "redirectUrl" =>$redirectUrl,
    "paymentDescription" => $description,
    "transID" => $transId,
    "planId" => $planId
);

$content = json_encode($payload);

$curl = curl_init($endPoint);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
    array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result = curl_exec($curl);
$response = json_decode($result, true);
curl_close($curl);


$connect = mysql_connect("localhost","iqcrmiuk_dexstarbaby","mayor4realAmbition123%") or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());
        mysql_select_db("iqcrmiuk_transaction_info", $connect);
        

$sql = "INSERT INTO authTable(TransID, TransactionRef, Amount, fname, lname, email, acct_no, phone, address, dob, bvn, bankCode, token)
VALUES('$transId', '$tran_ref', '$amount', '$fname', '$lname', '$email', '$acct_no', '$phone', '$address', '$dob', '$bvn', '$bankCode', '$token')";
if(!mysql_query($sql,$connect))
{
    die('Error : Query Not Executed. Please Fix the Issue!  ' . mysql_error());
}else{
echo "<h1 style='display:none;'>saved</h1>";
}

if($response['StatusCode']==='000')
{

$URL=$response['PaymentUrl'];
echo "<script>location.href='$URL'</script>";
}
else
{
echo "<h1 style='text-align:center;margin:150px 0px; color:red;border:1px solid #ddd; background-color:#eee;padding:40px;border-radius:5px;'>Ooops, Something Went Wrong, please try again</h1>";
exit;
}
?>