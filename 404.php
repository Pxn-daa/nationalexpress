<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <script src="main.js"></script>
    <script>
    function toggleSidebar(ref){
  document.getElementById("sidebar").classList.toggle('active');
}
</script>
</head>

<body>
<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar(this)">
    <span></span>
    <span></span>
    <span></span>
  </div>  
  <div class="list">
  <a href = "index.php" class="item">Log in</a>
  <a href = "register.php" class="item">Sign Up</a>
  <a href = "tos.php" class="item">Terms Of Service</a>
    <a href = "contact.php" class="item">Contact us</a>
  </div>
</div>
</body>
<body>

<?php
include 'config.php';
$query = "SELECT id FROM users ORDER BY id";  
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);

?>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<div class="input-group">
<p> </p>
<p style="color:black;">You appear to have ran into an error? please go back to the login page to continue using free tickets <3</p>
<div class="input-group">
                <a href="index.php">Dashboard</a>
			</div>
            <div class="input-group">
            <a href="contact.php">Contacting me</a>
            </div>
            <div class="input-group">
            
			</div>
		</form>
	</div>
</div>
<script src="main.js"></script>
</body>
</html>