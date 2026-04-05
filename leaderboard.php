<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Leaderboard</title>

<style>

body{
    margin:0;
    padding:0;
    font-family: Arial;
    background-image:url("uploads/hehe.jpg");
    background-size:cover;
    background-position:center;
    height:100vh;
}

.overlay{
    background:rgba(0,0,0,0.7);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}

h1{
    color:white;
    margin-bottom:20px;
}

table{
    width:600px;
    border-collapse:collapse;
    color:white;
    text-align:center;
}

th{
    background:#ff3b3b;
    padding:12px;
}

td{
    padding:12px;
    background:rgba(0,0,0,0.6);
}

tr:hover{
    background:#333;
}

.rank{
    color:gold;
    font-weight:bold;
}

</style>
</head>

<body>

<div class="overlay">

<h1>🏆 Tournament Leaderboard</h1>

<table>

<tr>
<th>Rank</th>
<th>Player</th>
<th>Points</th>
</tr>

<?php

$sql = "SELECT users.name, leaderboard.points 
FROM leaderboard 
JOIN users ON leaderboard.user_id = users.id
ORDER BY leaderboard.points DESC";

$result = mysqli_query($conn,$sql);

$rank = 1;

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<td class="rank"><?php echo $rank++; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['points']; ?></td>
</tr>

<?php
}
?>

</table>

</div>

</body>
</html>