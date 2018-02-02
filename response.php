<?php
	// Your Secret Key as a constant
	define('FW_SECRET_KEY', 'FLWSECK-3c0d1dcea1ff41df31f518ac0443aab9-X');      // for pettycash1

	if (isset($_GET['flw_ref'])) {
		$ref = $_GET['flw_ref'];
		$amount = 10.00; //Correct Amount from Server
		$currency = "NGN"; //Correct Currency from Server

		$query = ["SECKEY"    => FW_SECRET_KEY,
		          "flw_ref"   => $ref,
		          "normalize" => "1"];

		$data_string = json_encode($query);

		$ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/verify');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

		$response = curl_exec($ch);

		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);

		curl_close($ch);

		$resp = json_decode($response, TRUE);

		// var_dump($resp);
		// exit();

		if (isset($resp['message'])) {
			$message = $resp['message'];
		}
		if (isset($resp['data']['flwMeta']['chargeResponse'])) {
			$chargeResponse = $resp['data']['flwMeta']['chargeResponse'];
		}
		if (isset($resp['data']['tx_ref'])) {
			$transactionRef = $resp['data']['tx_ref'];
		}
		if (isset($resp['data']['amount'])) {
			$chargeAmount = $resp['data']['amount'];
		}
		if (isset($resp['data']['transaction_currency'])) {
			$chargeCurrency = $resp['data']['transaction_currency'];
		}
		if (isset($resp['data']['customer']['id'])) {
			$customerID = $resp['data']['customer']['id'];
		}
		if (isset($resp['data']['customer']['email'])) {
			$customerEmail = $resp['data']['customer']['email'];
		}
		if (isset($resp['data']['transaction_type'])) {
			$transactionType = $resp['data']['transaction_type'];
		}
		if (isset($resp['data']['createdAt'])) {
			$transactionDate = $resp['data']['createdAt'];
		}
		if (isset($resp['data']['settlement_token'])) {
			$settlementToken = $resp['data']['settlement_token'];
		}
		if (isset($resp['data']['customer']['customertoken'])) {
			$customerToken = $resp['data']['customer']['customertoken'];
		}
		if (isset($resp['data']['card']['card_tokens'][0]['embed_token'])) {
			$cardToken = $resp['data']['card']['card_tokens'][0]['embed_token'];
		}

		if (isset($chargeResponse, $chargeCurrency, $chargeAmount)) {
			if (($chargeResponse == "00" || $chargeResponse == "0") && ($chargeAmount == $amount) && ($chargeCurrency == $currency)) {
				//Give Value and return to Success page
				echo 'Payment Successful' . '<br>';
				if (isset($transactionRef)) {
					echo 'Transaction Ref: ' . $transactionRef . '<br>';
				}
				if (isset($transactionType)) {
					echo 'Transaction Type: ' . $transactionType . '<br>';
				}
				if (isset($customerID)) {
					echo 'Customer ID: ' . $customerID . '<br>';
				}
				if (isset($customerEmail)) {
					echo 'Customer Email: ' . $customerEmail . '<br>';
				}
				if (isset($settlementToken)) {
					echo 'Settlement Token: ' . $settlementToken . '<br>';
				}
				if (isset($customerToken)) {
					echo 'Customer Token: ' . $customerToken . '<br>';
				}
				if (isset($cardToken)) {
					echo 'Card Token: ' . $cardToken . '<br>';
				}
				if (isset($transactionDate)) {
					echo 'Transaction Date: ' . $transactionDate . '<br>';
				}
				if (isset($chargeCurrency)) {
					echo 'Amount Charged: ' . $chargeCurrency, $chargeAmount . '<br>';
				}
			}
			else {
				//Dont Give Value and return to Failure page
				echo 'Payment Declined' . '<br>';
				if (isset($transactionRef)) {
					echo 'Transaction Ref: ' . $transactionRef . '<br>';
				}
				if (isset($message)) {
					echo 'Reason: ' . $message . '<br>';
				}
			}
		}
		else {
			//Dont Give Value and return to Failure page
			echo 'Payment Declined' . '<br>';
			if (isset($transactionRef)) {
				echo 'Transaction Ref: ' . $transactionRef . '<br>';
			}
			if (isset($message)) {
				echo 'Reason: ' . $message . '<br>';
			}
		}
	}
