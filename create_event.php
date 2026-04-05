<?php
include "config.php";

if(isset($_POST['create_event'])){

    $game_id = $_POST['game_id'];
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];

    mysqli_query($conn, "INSERT INTO events(game_id, event_name, event_date) 
    VALUES('$game_id','$event_name','$event_date')");

    echo "<script>alert('Event Created Successfully');</script>";
}

$games = mysqli_query($conn, "SELECT * FROM games");
?>

<!DOCTYPE html>
<html>
<head>
<title>Create Event</title>

<style>
body {
    background:black;
    color:white;
    text-align:center;
    font-family:Arial;
}

.container {
    margin-top:80px;
}

select, input {
    padding:10px;
    margin:10px;
    border-radius:8px;
    border:none;
}

button {
    padding:10px 20px;
    background:#ff00ff;
    border:none;
    border-radius:8px;
    font-weight:bold;
}
</style>

</head>
<body>

<div class="container">
<h2>🏆 Create Event</h2>

<form method="POST">

<select name="game_id" required>
<option value="">Select Game</option>

<?php while($row = mysqli_fetch_assoc($games)){ ?>
<option value="<?php echo $row['id']; ?>">
<?php echo $row['game_name']; ?>
</option>
<?php } ?>

</select><br>

<input type="text" name="event_name" placeholder="Event Name" required><br>

<input type="date" name="event_date" required><br>

<button type="submit" name="create_event">Create Event</button>

</form>

</div>

</body>
</html>