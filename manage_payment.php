<?php
include "config.php";

/* admin payment update */

if(isset($_GET['id'])){
    
$id = $_GET['id'];

$update = "UPDATE registrations SET payment_status='Paid' WHERE id='$id'";
mysqli_query($conn,$update);

}

/* fetch data */

$sql = "SELECT registrations.id,
users.name,
users.photo,
events.event_name,
registrations.payment_status

FROM registrations
JOIN users ON registrations.user_id = users.id
JOIN events ON registrations.event_id = events.id";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>

<html>
<head>

<title>Manage Tournament Payments</title>

<style>

body{
margin:0;
font-family:Arial;
background:url('uploads/esports-bg.jpg');
background-size:cover;
color:white;
}

.container{
width:85%;
margin:auto;
padding-top:50px;
text-align:center;
}

table{
width:100%;
border-collapse:collapse;
background:rgba(0,0,0,0.85);
}

th{
background:red;
padding:12px;
}

td{
padding:12px;
border-bottom:1px solid #444;
}

img{
width:40px;
height:40px;
border-radius:50%;
}

button{
background:green;
color:white;
border:none;
padding:6px 12px;
cursor:pointer;
}

.pending{
color:orange;
font-weight:bold;
}

.paid{
color:lime;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h1>🎮 Manage Tournament Payments</h1>

<table>

<tr>
<th>Photo</th>
<th>Player</th>
<th>Tournament</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td><img src='uploads/".$row['photo']."'></td>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['event_name']."</td>";

if($row['payment_status']=="Paid"){

echo "<td class='paid'>Paid</td>";
echo "<td>Done</td>";

}else{

echo "<td class='pending'>Pending</td>";

echo "<td>
<a href='manage_payment.php?id=".$row['id']."'>
<button>Mark Paid</button>
</a>
</td>";

}

echo "</tr>";

}

?>

</table>

</div>

</body>

</html>
