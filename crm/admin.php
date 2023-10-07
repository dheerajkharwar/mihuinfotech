
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
</head>
<body>
    <nav><div style="float: right;"><p><?php echo $_SESSION['user'] ?></p><a href="logout.php">Logout</a></div></nav>
    <h1>Admin - CRM</h1>
</body>
</html>