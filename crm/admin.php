
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
#lgout{
    position: absolute;
    display: none;
}
#user{
    text-decoration: none;
}
#user:hover #logout{
    display: block;
}
    </style>
</head>
<body>
    <nav><a href="" id="user"><?php echo $_SESSION['user'] ?></a><a id="lgout" href="logout.php">Logout</a></nav>
    <h1>Admin - CRM</h1>
</body>
</html>