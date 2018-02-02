<!DOCTYPE html>
<html>

<head>
    <title>Pettycash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/styles.css">
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
             <p></p>
            <h4 class="title">CARD CHARGE FORM</h4>
        <form action="interest-repayment.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control login-input" name="amount" id="firstName" placeholder="Amount" value="" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control login-input" name="email" id="lastName" placeholder="Email" value="" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control login-input" name="transactionRef" id="customerEmail" placeholder="Transaction Reference" value="" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control login-input" name="authCode" id="customerEmail" placeholder="Auth Code" value="" required>
            </div>
                <div id="repay" class="col-md-12 text-center repay">
                    <button id="submit" data-toggle="modal" data-target="#showSpin" type="submit" class="btn btn-submit btn-login repay-btn">Submit</button>
                </div>
        </form>
    </div>
<!-- Modal -->
  <div class="modal fade" id="showSpin" role="dialog">
	<div class="modal-dialog modal-sm spin-modal">
	
	  <!-- Modal content-->
	  <div class="modal-content spin-modal-body">
	
		<div class="modal-body">
		    <div class="spinner">
                <i id="spin" class="fa fa-spinner fa-spin"></i>
            </div>
		</div>
		
	  </div>
	  
	</div>
  </div>

</body>
</html>