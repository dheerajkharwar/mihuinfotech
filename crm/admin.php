
<?php 
include "dbcon.php";
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - CRM</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .navbar{
            width: 100%;
            padding: 20px;
            height: fit-content;
            background-color: lightslategray;
        }

#user{
    color: black;
    cursor: default;
}
.navbar a{
    text-decoration: none;
    padding: 5px 10px;
}
.nav-left{
    width: 80%;
    border: 2px solid black;
}
.nav-right{
    width: 20%;
    border: 2px solid black;
}
    </style>
</head>
<body>
    <div class="navbar"><div class="nav-left"></div><div class="nav-right"><a href="javascript: void(0)" id="user"><?php echo $_SESSION['user'] ?></a><a id="lgout" href="logout.php">Logout</a></div></div>
    <h1>Admin - CRM</h1>
</body>
</html>