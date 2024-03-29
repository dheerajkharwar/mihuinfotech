<?php 
include "dbcon.php";
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: admin.php');
    exit;
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
if(isset($_SESSION['admin'])){
    echo "<div class='navbar'><div class='nav-left'><a href='javascript: void(0)' class='non-link'>Admin - CRM</a></div><div class='nav-right'><a id='lgout' href='admin_logout.php'>Logout</a></div></div>";
    
}
?>
<?php
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($connn, $username);
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($connn, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($connn, $address);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query    = "INSERT into user (username, name, email, password)
                     VALUES ('$username', '$name', '$email', '$address', '" . md5($password) . "')";
        $result   = mysqli_query($connn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    }
    else{ 
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
        <textarea class="login-input"  name="address" placeholder="Address" style="height:75px;"></textarea>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Register" class="login-button">
    </form>
    <?php } ?>
</body>
</html>