<?php
include "config.php";

if(isset($_POST['add_game'])){

    $game_name = $_POST['game_name'];
    $entry_fee = $_POST['entry_fee'];

    mysqli_query($conn, "INSERT INTO games(game_name, entry_fee) 
    VALUES('$game_name','$entry_fee')");

    echo "<script>alert('Game Added Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Game</title>

<style>
body {
    background:black;
    color:white;
    text-align:center;
    font-family:Arial;
}

.container {
    margin-top:100px;
}

input {
    padding:10px;
    margin:10px;
    border-radius:8px;
    border:none;
}

button {
    padding:10px 20px;
    background:#00f2ff;
    border:none;
    border-radius:8px;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container">
<h2>🎮 Add New Game</h2>

<form method="POST">
<input type="text" name="game_name" placeholder="Game Name" required><br>
<input type="number" name="entry_fee" placeholder="Entry Fee" required><br>
<button type="submit" name="add_game">Add Game</button>
</form>

</div>

</body>
</html>