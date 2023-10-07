<?php 
include "dbcon.php";
session_start();
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM - Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
</head>

<body>
<?php
if(isset($_SESSION['admin'])){
    echo "<div class='navbar'><div class='nav-left'><a href='javascript: void(0)' class='non-link'>Admin - CRM</a></div><div class='nav-right'><a href='javascript: void(0)' class='non-link>".$_SESSION['admin']."</a><a id='lgout' href='admin_logout.php'>Logout</a></div></div>";
}
?>
<?php
if(!isset($_SESSION['admin'])){ ?>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md mt-4 mb-0" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul style="margin-top:45px;margin-left:45px;">
        <li><a href="AddUser.php">Add User</a></li>
    </ul>
    <?php 
    } 
    ?>
</body>
<?php 
if(isset($_POST['username'])&&isset($_POST['password'])){
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM `admin` WHERE username='".$uname."' AND password='".$pass."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['admin'] = $row['username'];
        exit;
    } else {
        echo '<script>alert("Wrong username or password")</script>';
    }
    $conn->close();
}
?>
</html>