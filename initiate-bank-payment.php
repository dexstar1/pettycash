<?php

define('AMPLIFY_GATEWAY_ENDPOINT', 'https://bankpay.ampslg.com/api/v1/pay');
define('AMPLIFY_PAYMENT_CURRENCY', 'NGN');

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

  $apiKey = '10c66413-bf8e-4c7f-9f18-2a6c4d4bbedf';
  $merchantId = 'XG5X5VOWAEWJBY2CSFM3IA';


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$acct_no = $_POST["acctNo"];
$bankCode = $_POST["bankCode"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$amount=50.000;  
$dob=$_POST["dob"];
$bvn=$_POST["bvn"];


  $payload=array(
   "transactionid" => $transId,
   "amount" => $amount,
    "bankCode" => $bankCode,
    "accountNumber" => $acct_no,
   "currency" => "NGN",
   "narration" => "Bank Payment",
   "redirectUrl" => $response['paymentUrl'],
   "customerInfo" => array(
    "firstname" => $fname,
    "lastname" => $lname,
    "email" => $email,
    "phone" => $phone,
    "address" => $address,
    "dob" => $dob,
    "bvn" => $bvn,
    )
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


$response = json_decode($result, true);
curl_close($curl);





$connect = mysql_connect("localhost","iqcrmiuk_dexstarbaby","mayor4realAmbition123%") or die('Database Not Connected. Please Fix the Issue! ' . mysql_error());
        mysql_select_db("iqcrmiuk_transaction_info", $connect);


$tran_ref = $response['reference'];
$token =$response['token'];



    
//insert into mysql table
$sql = "INSERT INTO bankAuthTable(TransID, TransactionRef, Amount, fname, lname, email, acct_no, phone, address, dob, bvn, bankCode, token)
VALUES('$transId', '$tran_ref', '$amount', '$fname', '$lname', '$email', '$acct_no', '$phone', '$address', '$dob', '$bvn', '$bankCode', '$token')";
if(!mysql_query($sql,$connect))
{
    die('Error : Query Not Executed. Please Fix the Issue!  ' . mysql_error());
}else{
echo "<h1 style='display:none;'>saved</h1>";
}

if ($err) {
  echo "cURL Error #:" . $err;
  
  echo "<h1 style='text-align:center;margin:150px 0px; color:red;border:1px solid #ddd; background-color:#eee;padding:40px;border-radius:5px;'>Ooops, Something Went Wrong,please try again</h1>";
}
else
{

$URL="/otp.php";
echo "<script>location.href='$URL'</script>";
}

?>