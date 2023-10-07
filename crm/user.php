
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
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="navbar"><div class="nav-left"><a href="javascript: void(0)" class="non-link">Admin - CRM</a></div><div class="nav-right"><a href="javascript: void(0)" class="non-link"><?php echo $_SESSION['user'] ?></a><a id="lgout" href="logout.php">Logout</a></div></div>
    
</body>
</html>