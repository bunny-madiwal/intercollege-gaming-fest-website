<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>

<html>
<head>
<title>My Events</title>

<style>

body{
margin:0;
font-family:Arial;
background:url("uploads/hehe.jpg");
background-size:cover;
background-position:center;
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

table{
width:60%;
margin:auto;
border-collapse:collapse;
background:rgba(0,0,0,0.75);
}

th{
background:red;
padding:15px;
}

td{
padding:15px;
border-bottom:1px solid white;
}

</style>

</head>

<body>

<div class="overlay">

<h1>📅 My Joined Tournaments</h1>

<table>

<tr>
<th>Tournament</th>
<th>Status</th>
</tr>

<tr>
<td>BGMI Tournament</td>
<td>Joined</td>
</tr>

<tr>
<td>Valorant Tournament</td>
<td>Joined</td>
</tr>

<tr>
<td>Free Fire Tournament</td>
<td>Joined</td>
</tr>

</table>

</div>

</body>
</html>
