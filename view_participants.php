<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Tournament Participants</title>

<style>

body{
margin:0;
font-family:Arial, sans-serif;
color:white;

background-image:url("uploads/hehe.jpg");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
background-attachment:fixed;
}

.container{
width:80%;
margin:auto;
margin-top:70px;
text-align:center;
}

h1{
font-size:40px;
margin-bottom:40px;
text-shadow:0px 0px 10px black;
}

table{
width:100%;
border-collapse:collapse;
background:rgba(0,0,0,0.75);
border-radius:10px;
overflow:hidden;
box-shadow:0 0 15px red;
}

th{
background:#ff3c00;
padding:15px;
font-size:18px;
}

td{
padding:12px;
border-bottom:1px solid #444;
}

tr:hover{
background:#222;
}

</style>

</head>

<body>

<div class="container">

<h1>👥 Tournament Participants</h1>

<table>

<tr>
<th>Player Name</th>
<th>Email</th>
</tr>

<?php

$sql = "SELECT name,email FROM users";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>

<?php
    }
}
else
{
?>

<tr>
<td colspan="2">No Participants Yet</td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>