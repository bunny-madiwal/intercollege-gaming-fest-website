<?php
include "config.php";

if(isset($_POST['register']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password= $_POST['password'];

$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

if(mysqli_query($conn,$sql))
{
header("Location: login.php");
exit();
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Player Registration</title>

<style>

body{

height:100vh;

background:url("uploads/arena.jpg");

background-size:cover;

background-position:center;

display:flex;

justify-content:flex-end;

align-items:center;

font-family:Arial;

}

.register-panel{

width:420px;

height:100%;

background:rgba(0,0,0,0.65);

padding:60px;

color:white;

}

.register-panel h2{

font-size:30px;

margin-bottom:25px;

}

.register-panel input{

width:100%;

padding:12px;

margin:10px 0;

border:none;

border-radius:5px;

}

.register-panel button{

width:100%;

padding:12px;

background:red;

border:none;

color:white;

font-size:16px;

cursor:pointer;

border-radius:5px;

}

</style>

</head>

<body>

<div class="register-panel">

<h2>PLAYER REGISTRATION</h2>

<form method="POST">

<input type="text" name="name" placeholder="Player Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">REGISTER</button>

</form>

</div>

</body>
</html>