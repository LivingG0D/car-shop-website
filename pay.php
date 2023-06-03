<?php
session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: homepage.php");
    exit;
}
 

$card_number = $card_expiry = $card_cvv = "";
$card_number_err = $card_expiry_err = $card_cvv_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["card_number"]))){
        $card_number_err = "Please enter your card number.";
    } else{
        $card_number = trim($_POST["card_number"]);
    }
    
    
    if(empty(trim($_POST["card_expiry"]))){
        $card_expiry_err = "Please enter your card expiry date.";
    } else{
        $card_expiry = trim($_POST["card_expiry"]);
    }
    
    
    if(empty(trim($_POST["card_cvv"]))){
        $card_cvv_err = "Please enter your card CVV number.";
    } else{
        $card_cvv = trim($_POST["card_cvv"]);
    }
    
    
    if(empty($card_number_err) && empty($card_expiry_err) && empty($card_cvv_err)){
        
        $payment_amount = 100.00;
        $payment_currency = "USD";
        $payment_status = "success";
        
        
        echo "<h2>Payment Successful!</h2>";
        echo "<p>Thank you for your payment of $payment_amount $payment_currency.</p>";
        echo "<p>Your payment status is: $payment_status</p>";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Portal</title>
    
    <style type="text/css">
          body {
      font-family: sans-serif;
      background-color: #244d61;
    }
    form {
      background-color: #eaeded;
      border-radius: 5px;
      padding: 25px;
      margin: 20px auto;
      max-width: 500px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      margin-bottom: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1) inset;
    }
    input[type="submit"] {
      background-color: #75e2ff;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #5689c0;
    }
    body {
      font-family: sans-serif;
      background-color: #5b8291;
    }
    h1 {
      text-align: center;
      margin-top: 125px;
      color:#eaebed;
    }
    .s {
            
            background-color:  #75e2ff;
            color: black;
            width: 30%;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 22px;
            border-radius: 7px;
            
        }
        .s:hover {
  background-color:#eaeded;
  transition: 0.9s;
  font-family: sans-serif;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Make a Payment</h2>
        <p>Please enter your payment information.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($card_number_err)) ? 'has-error' : ''; ?>">
                <label>Card Number</label>
                <input type="text" name="card_number" class="form-control" value="<?php echo $card_number; ?>">
                <span class="help-block"><?php echo $card_number_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($card_expiry_err)) ? 'has-error' : ''; ?>">
                <label>Expiry Date</label>
                <input type="text" name="card_expiry" class="form-control" value="<?php echo $card_expiry; ?>">
                <span class="help-block"><?php echo $card_expiry_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($card_cvv_err)) ? 'has-error' : ''; ?>">
                <label>CVV Number</label>
                <input type="password" name="card_cvv" class="form-control">
                <span class="help-block"><?php echo $card_cvv_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit Payment">
            </div>
        </form>
    </div>    
</body>
</html>