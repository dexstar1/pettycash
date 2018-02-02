
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
            <div id="otp" class="tab-pane fade in active">
                <form action="authorize-bank.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control login-input" name="esavalue" id="otp" placeholder="Enter OTP here" value="" required>
                    </div>
                        
                     <div id="showSpin" class="collapse fa fa-spinner fa-pulse fa-3x fa-fw"></div>
                     
                    <div id="repay" class="col-md-12 text-center repay">
                        <button id="submit" data-toggle="collapse" data-target="#showSpin" type="submit" class="btn btn-submit btn-login repay-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>