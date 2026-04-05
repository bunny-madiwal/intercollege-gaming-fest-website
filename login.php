<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){

$row = mysqli_fetch_assoc($result);

$_SESSION['user'] = $row['name'];
$_SESSION['user_id'] = $row['id'];

header("Location: dashboard.php");
exit();

}else{

echo "<script>alert('Invalid Email or Password');</script>";

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
margin:0;
font-family:Arial;
background:url('uploads/esports-bg.jpg');
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:rgba(0,0,0,0.8);
padding:40px;
border-radius:10px;
text-align:center;
color:white;
width:300px;
}

input{
width:90%;
padding:10px;
margin:10px 0;
border:none;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:red;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

</style>
</head>

<body>

<div class="box">

<h2>Player Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>