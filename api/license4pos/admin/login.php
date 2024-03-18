<?php
include ('config.php');
include ('functions.php');
$errormsg = NULL;
if (isset($_COOKIE['licapi'])){
$licapi = $_COOKIE['licapi'];
if (!isset($licapi['username']) || $licapi['useragent'] != $_SERVER['HTTP_USER_AGENT']){
logout();
} else {
header("Location: admin.php"); 
}
if (isset($_POST['logout'])){
logout();
}
} 
if (isset($_POST['user']) && isset($_POST['password'])) {
$user = $_POST['user'];
$password = $_POST['password'];
$sql = "SELECT username FROM users WHERE username = '$user'";
if (!$result = $mysqli->query($sql)) {
	// Print debug info if debug is enabled
	if ($config['DEBUG']){
		echo "Error: Query execution failed because: \n";
    	echo "Query: " . $sql . "\n";
    	echo "Errno: " . $mysqli->errno . "\n";
    	echo "Error: " . $mysqli->error . "\n";
    	exit();
    // If debug isn't enabled, show an error message
	} else {
    	echo "Error while connecting to database.";
    	exit();
	}
}
if ($result->num_rows === 0) {
	$errormsg = "User doesn't exist";
} else {
$sql = "SELECT password FROM users WHERE username = '$user'";
if (!$result = $mysqli->query($sql)) {
	// Print debug info if debug is enabled
	if ($config['DEBUG']){
		echo "Error: Query execution failed because: \n";
    	echo "Query: " . $sql . "\n";
    	echo "Errno: " . $mysqli->errno . "\n";
    	echo "Error: " . $mysqli->error . "\n";
    	exit();
    // If debug isn't enabled, show an error message
	} else {
    	echo "Error while connecting to database.";
    	exit();
	}
}
$userdata = $result->fetch_assoc();
if (password_verify($_POST['password'], $userdata['password'])) {
    setcookie("licapi[username]", $user);
    setcookie("licapi[useragent]", $_SERVER['HTTP_USER_AGENT']);
    header("Location: admin.php");
    exit();
} else {
    $errormsg = "Wrong password";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<style>
	.container{
		width:fit-content;
		margin:auto;
		padding: 10px 50px;
		background-color: rgba(0,255,0,0.5);
		border: 1px solid rgba(0,255,0,0.4);
		border-radius: 5%;
		margin-top: 10%;
		box-shadow: -5px -5px rgba(0,255,0,0.3);
	}
	h2{
		margin: 0 0 0 5px;
		color: rgb(255, 255, 255);
	}
	input{
		margin: 0 0 10px 5px;
		padding: 5px;
		width: 200px;
		border-radius: 5px;
		border: 1px solid rgba(0,255,0,0.9);
		color: rgb(155, 205, 255);
	}
	button{
		margin: 5px;
		padding: 5px 20px;
		background-color: rgba(0, 200, 0, 0.8);
		border: none;
		border-radius: 5px;
		cursor: pointer;
		color: #fff;
	}
</style>
<body>
<div class="container">
<h2>Admin Login</h2>
<h3><?php echo $errormsg; ?></h3>
<form id="login" action="" method="post">
<input type="text" value="" placeholder="Username" name="user"></br>
<input type="password" value="" placeholder="Password" name="password"></br>
<button type="submit" value="Enviar" name="Enviar">Login</button>
</form>
</div>
</body>
</html>
<?php
exit();
?>
