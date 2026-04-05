<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Make Payment</title>

<style>

body{
margin:0;
font-family:Arial;
color:white;

background-image:url("uploads/esports-bg.jpg");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}

.container{
width:400px;
margin:auto;
margin-top:80px;
background:rgba(0,0,0,0.8);
padding:30px;
border-radius:10px;
text-align:center;
box-shadow:0 0 15px red;
}

h2{
margin-bottom:20px;
}

.qr img{
width:200px;
margin-bottom:10px;
}

input{
width:100%;
padding:10px;
margin:8px 0;
border:none;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#ff3c00;
border:none;
color:white;
font-size:16px;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:red;
}

</style>

</head>

<body>

<div class="container">

<h2>💳 Tournament Payment</h2>

<h3>Scan & Pay</h3>

<div class="qr">
<img src="uploads/qr.png">
<p>UPI ID: esports@upi</p>
</div>

<hr>

<h3>Card Payment</h3>

<form method="POST">

<input type="text" name="cardname" placeholder="Card Holder Name" required>

<input type="text" name="cardnumber" placeholder="Card Number" required>

<input type="text" name="expiry" placeholder="Expiry Date (MM/YY)" required>

<input type="text" name="cvv" placeholder="CVV" required>

<button type="submit">Pay Now</button>

</form>

</div>

</body>
</html>