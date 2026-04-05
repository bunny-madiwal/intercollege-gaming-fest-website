<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>

<html>
<head>
<title>Dashboard</title>

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
background:rgba(0,0,0,0.6);
min-height:100vh;
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
text-align:center;
}

/* heading */

h1{
font-size:45px;
margin-bottom:10px;
}

.username{
color:#ff3333;
font-size:22px;
margin-bottom:40px;
}

/* cards grid */

.menu{
display:grid;
grid-template-columns:repeat(3,230px);
gap:25px;
}

/* card style */

.card{
background:rgba(0,0,0,0.7);
padding:30px;
border-radius:12px;
cursor:pointer;
transition:0.3s;
box-shadow:0 0 15px rgba(255,0,0,0.4);
}

.card:hover{
transform:scale(1.05);
box-shadow:0 0 20px red;
}

.card h2{
margin:0;
font-size:20px;
}

a{
text-decoration:none;
color:white;
}

</style>

</head>

<body>

<div class="overlay">

<h1>WELCOME TO ESPORTS ARENA</h1>

<div class="username">
<?php echo $_SESSION['user']; ?>
</div>

<div class="menu">

<a href="join_event.php">
<div class="card">
<h2>🎮 Join Tournament</h2>
</div>
</a>

<a href="my_events.php">
<div class="card">
<h2>📅 My Events</h2>
</div>
</a>

<a href="leaderboard.php">
<div class="card">
<h2>🏆 Leaderboard</h2>
</div>
</a>

<a href="view_participants.php">
<div class="card">
<h2>👥 Participants</h2>
</div>
</a>

<a href="manage_payment.php">
<div class="card">
<h2>💳 Manage Payments</h2>
</div>
</a>

<a href="add_point.php">
<div class="card">
<h2>➕ Add Points</h2>
</div>
</a>

<a href="logout.php">
<div class="card">
<h2>🚪 Logout</h2>
</div>
</a>

</div>

</div>

</body>
</html>
