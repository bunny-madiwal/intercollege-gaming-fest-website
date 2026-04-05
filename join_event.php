<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Join Tournament</title>

<style>

body{
margin:0;
font-family:Arial;
background:url("uploads/hehe.jpg");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
color:white;
}

.overlay{
background:rgba(0,0,0,0.7);
min-height:100vh;
padding:50px;
text-align:center;
}

h1{
font-size:40px;
margin-bottom:40px;
}

/* cards */

.cards{
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
}

.card{
background:rgba(0,0,0,0.75);
width:260px;
padding:25px;
border-radius:10px;
box-shadow:0 0 15px red;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

.game{
font-size:22px;
margin-bottom:10px;
}

.date{
margin-bottom:10px;
}

.fee{
margin-bottom:20px;
color:#ff4444;
}

button{
padding:10px 20px;
background:red;
border:none;
color:white;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#ff3333;
}

a{
text-decoration:none;
}

</style>

</head>

<body>

<div class="overlay">

<h1>🎮 Available Tournaments</h1>

<div class="cards">

<div class="card">
<div class="game">BGMI Tournament</div>
<div class="date">Date: 25 July</div>
<div class="fee">Entry Fee: ₹100</div>

<a href="make_payment.php">
<button>Join Now</button>
</a>
</div>

<div class="card">
<div class="game">Valorant Tournament</div>
<div class="date">Date: 28 July</div>
<div class="fee">Entry Fee: ₹100</div>

<a href="make_payment.php">
<button>Join Now</button>
</a>
</div>

<div class="card">
<div class="game">Free Fire Tournament</div>
<div class="date">Date: 30 July</div>
<div class="fee">Entry Fee: ₹100</div>

<a href="make_payment.php">
<button>Join Now</button>
</a>
</div>

</div>

</div>

</body>
</html>
