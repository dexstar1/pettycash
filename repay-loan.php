<!DOCTYPE html>
<html>

<head>
    <title>Pettycash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="assets/js/reveal.js"></script>
</head>
<body>

    <div class="login-box-2">
        <h2>PettyCash</h2>
            <h6 class="title">LOAN ACTIVATION FORM</h6>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control login-input" name="email" id="customerEmail" placeholder="Email" value="" required>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn-green" style="cursor:pointer;" value="Pay Now" id="submit" />
    </div>


<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
	<!--Hey Dev Mate, USE THE ABOVE SCRIPT WHEN GOING LIVE AND COMMENT OUT THE BELOW-->
	<!--<script type="text/javascript" src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>-->
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function (event) {
			document.getElementById('submit').addEventListener('click', function () {

				// var flw_ref = "", chargeResponse = "", trxref = "PTC_TEST_" + Date.now(), pubkey = "FLWPUBK-46717f111f3b64572ddcbe9bf064e0c7-X";
				var flw_ref = "", chargeResponse = "", trxref = "PTC_" + Date.now(), pubkey = "FLWPUBK-bd0c10de250e2725de5e73632142ac37-X";

				getpaidSetup(
					{
						customer_email: getElementbyId('customerEmail').value,
						amount: 10,
						country: "NG",
						currency: "NGN",
						// custom_logo: "Your Logo URL",
						custom_description: "Pay Dev Consultant Fee",
						custom_title: "Pay Dev",
						txref: trxref,
						PBFPubKey: pubkey,
						integrity_hash: "", //integrity hash is gotten from the checksum integrity hash implementation
						onclose: function (response) {
						},
						callback: function (response) {
							flw_ref = response.tx.flwRef, chargeResponse = response.tx.chargeResponseCode;
							if (chargeResponse == "00" || chargeResponse == "0") {
								// window.location = "https://localhost/pettycash.com.ng/response.php?flw_ref=" + flw_ref; //Add your success page here
								window.location = "https://www.pettycash.com.ng/response.php?flw_ref=" + flw_ref; //Add your success page here
							} else {
								// window.location = "https://localhost/pettycash.com.ng/response.php?flw_ref=" + flw_ref;  //Add your failure page here
								window.location = "https://www.pettycash.com.ng/response.php?flw_ref=" + flw_ref;  //Add your failure page here
							}
						}
					}
				);
			});
		});
	</script>


</body>
</html>