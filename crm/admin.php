
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
            padding: 0;
            margin: 0;
            width: 100%;
            height: 70px;
            background-color: lightslategray;
        }

.non-link{
    color: black;
    cursor: default;
}
.navbar a{
    text-decoration: none;
    padding: 5px 10px;
}
.nav-left{
    width: fit-content;
    float: left;
}
.nav-right{
    width: fit-content;
    float: right;
}
.nav-left,.nav-right{
    padding: 25px 10px;
    display: inline-block;
}
#lgout{
    background-color: darkslategrey;
    color: aliceblue;
    border-radius: 5px;
}
#lgout:hover{
    opacity: 0.8;
}
    </style>
</head>
<body>
    <div class="navbar"><div class="nav-left"><a href="javascript: void(0)" class="non-link">Admin - CRM</a></div><div class="nav-right"><a href="javascript: void(0)" class="non-link"><?php echo $_SESSION['user'] ?></a><a id="lgout" href="logout.php">Logout</a></div></div>
    
</body>
</html>