<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Insta : @m1.4up</title>
    <link rel="icon" href="https://nationalexpress.rf.gd/download.ico" type="image/ico" />
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
    <a href = "index.php" class="item"><p>Login</p></a>
    <a href = "register.php" class="item"><p>Sign Up</p></a>
    <a href = "contact.php" class="item"><p>Contact us</p></a>
    <a href = "tos.php" class="item"><p>Terms Of Service</p></a>
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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
            <p class="login-register-text">Current User Count Is <?php echo $row ?></p>
            <p class="login-register-text">Made By Pxnda</p>
		</form>
	</div>
    </div>
</div>
</div>
</body>

</html>
