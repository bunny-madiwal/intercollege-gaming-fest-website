<?php
include "config.php";

if(isset($_POST['add'])){

$player = $_POST['player'];
$points = $_POST['points'];

$user_query = "SELECT id FROM users WHERE name='$player'";
$user_result = mysqli_query($conn,$user_query);
$user = mysqli_fetch_assoc($user_result);

if($user){

$user_id = $user['id'];

$sql = "INSERT INTO leaderboard(user_id,points) VALUES('$user_id','$points')";
mysqli_query($conn,$sql);

echo "<script>alert('Points Added Successfully');</script>";

}else{

echo "<script>alert('Player not found');</script>";

}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Player Points</title>

<style>

body{
margin:0;
font-family:Arial;
background:url('uploads/hehe.jpg');
background-size:cover;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:rgba(0,0,0,0.7);
padding:40px;
border-radius:10px;
text-align:center;
color:white;
}

h1{
margin-bottom:20px;
}

input{
width:250px;
padding:10px;
margin:10px;
border:none;
border-radius:5px;
}

button{
background:red;
color:white;
padding:10px 20px;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#ff3333;
}

</style>

</head>

<body>

<div class="box">

<h1>🏆 Add Player Points</h1>

<form method="POST">

<input type="text" name="player" placeholder="Player Name" required><br>

<input type="number" name="points" placeholder="Points" required><br>

<button type="submit" name="add">Add Points</button>

</form>

</div>

</body>
</html>