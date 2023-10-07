
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
        nav{
            width: 100%;
            height: fit-content;
            padding: 10px;
            background-color: lightslategray;
        }

#user{
    color: black;
    cursor: default;
}
nav a{
    text-decoration: none;
    padding: 5px 10px;
}
.nav-right{
    width: fit-content;
    float: right;
}
    </style>
</head>
<body>
    <nav><div class="nav-right"><a href="javascript: void(0)" id="user"><?php echo $_SESSION['user'] ?></a><a id="lgout" href="logout.php">Logout</a></div></nav>
    <h1>Admin - CRM</h1>
</body>
</html>