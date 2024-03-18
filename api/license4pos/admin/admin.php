<?php

// Include config file
include 'config.php';
// Include functions file
include 'functions.php';
if (isset($_COOKIE['licapi'])) {
    $licapi = $_COOKIE['licapi'];
} else {
    $licapi = null;
}
if (!isset($licapi['username']) || $licapi['useragent'] != $licapi['useragent']) {
    logout();
}
$msg = null;
head('Licenses - LicAPI');

if (isset($_GET['license'])) {
    $license = $mysqli->real_escape_string($_GET['license']);
    $check = "SELECT purchase_code FROM license_data WHERE purchase_code = '$license'";
    if (!$result = $mysqli->query($check)) {
        // Print debug info if debug is enabled
    if ($debug) {
        echo "Error: Query execution failed because: \n";
        echo 'Query: '.$check."\n";
        echo 'Errno: '.$mysqli->errno."\n";
        echo 'Error: '.$mysqli->error."\n";
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    // If debug isn't enabled, show an error message
    } else {
        echo 'Error while connecting to database.';
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    }
    }
    if ($result->num_rows === 0) {
        $activityType = '4';
        $activityTitle = 'Tried to delete license \''.$license.'\' but it didn\'t exist';
        updateActivity($activityType, $activityTitle);
    } else {
        $delete = "DELETE FROM `license_data` WHERE purchase_code = '$license'";
// If query fails...
if (!$result = $mysqli->query($delete)) {
    // Print debug info if debug is enabled
    if ($debug) {
        echo "Error: Query execution failed because: \n";
        echo 'Query: '.$delete."\n";
        echo 'Errno: '.$mysqli->errno."\n";
        echo 'Error: '.$mysqli->error."\n";
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    // If debug isn't enabled, show an error message
    } else {
        echo 'Error while connecting to database.';
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    }
}
        $msg = 'Deleted';
        $activityType = '5';
        $activityTitle = 'Deleted license \''.$license.'\'.';
        updateActivity($activityType, $activityTitle);
    }
        header('Location: admin.php');
}
if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['purchase_code'])&& isset($_POST['expiry'])) {
    $name = $mysqli->real_escape_string($_POST['name']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $contact = $mysqli->real_escape_string($_POST['contact']);
    $license = $mysqli->real_escape_string($_POST['purchase_code']);
    $expiry = $mysqli->real_escape_string($_POST['expiry']);
    $expiry_date = date('Y-m-d', strtotime($expiry));
    $check = "SELECT purchase_code FROM license_data WHERE purchase_code = '$license'";
    if (!$result = $mysqli->query($check)) {
        // Print debug info if debug is enabled
    if ($debug) {
        echo "Error: Query execution failed because: \n";
        echo 'Query: '.$check."\n";
        echo 'Errno: '.$mysqli->errno."\n";
        echo 'Error: '.$mysqli->error."\n";
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    // If debug isn't enabled, show an error message
    } else {
        echo 'Error while connecting to database.';
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    }
    }
    if ($result->num_rows === 0) {
        $sql = "INSERT INTO `license_data` (`ID`, `name`, `address`, `email`, `contact`, `purchase_code`,`expiry`) VALUES (NULL, '$name', '$address', '$email', '$contact', '$license', '$expiry_date');";
// If query fails...
if (!$result = $mysqli->query($sql)) {
    // Print debug info if debug is enabled
    if ($debug) {
        echo "Error: Query execution failed because: \n";
        echo 'Query: '.$sql."\n";
        echo 'Errno: '.$mysqli->errno."\n";
        echo 'Error: '.$mysqli->error."\n";
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    // If debug isn't enabled, show an error message
    } else {
        echo 'Error while connecting to database.';
        $activityType = '1';
        $activityTitle = 'Query execution error (logs.php)';
        updateActivity($activityType, $activityTitle);
        exit();
    }
}
        $activityType = '6';
        $activityTitle = 'Created license \''.$license.'\'.';
        updateActivity($activityType, $activityTitle);
    } else {
        $msg = "License '".$license."' already exists.";
        $activityType = '7';
        $activityTitle = 'Tried to create license \''.$license.'\' but already existed.';
        updateActivity($activityType, $activityTitle);
    }
    header('Location: admin.php');
}
// SQL Query to get all license data
$list = 'SELECT * FROM license_data ORDER BY id';
// If query fails...
if (!$result = $mysqli->query($list)) {
    // Print debug info if debug is enabled
    if ($debug) {
        echo "Error: Query execution failed because: \n";
        echo 'Query: '.$list."\n";
        echo 'Errno: '.$mysqli->errno."\n";
        echo 'Error: '.$mysqli->error."\n";
        exit();
    // If debug isn't enabled, show an error message
    } else {
        echo 'Error while connecting to database.';
        exit();
    }
}
// Show a header
echo "<center><h1>License Data</h1></center>\n";
// Start an HTML list
echo "<table><tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Contact</th>
    <th>License</th>
    <th>Purchase Date</th>
    <th>Expiry</th>
    <th>Action</th>
  </tr>\n";
// For every license data, show all info with a link to license
while ($userdata = $result->fetch_assoc()) {
    echo "<tr>\n";
    echo '<td>'.$userdata['ID'].'</td><td>'.$userdata['name'].'</td><td>'.$userdata['address'].'</td><td>'.$userdata['email'].'</td><td>'.$userdata['contact'].'</td><td>'.$userdata['purchase_code'].'</td><td>'.$userdata['purchase_date'].'</td><td>'.$userdata['expiry'].'</td><td>'."<a href='admin.php?license=".$userdata['purchase_code']."'>Delete</button></form></td>";
    echo "</tr>\n";
}
echo "<h3>Suggested new License to generate:   ".getLicense(6)."</h3>";
echo "<tr><form id='add' action='' method='post'>\n";
    echo '<td></td><td>'."<input type='text' value='' placeholder='Name' name='name' required>".'</td><td>'."<input type='text' value='' placeholder='Address' name='address'>".'</td><td>'."<input type='text' value='' placeholder='Email' name='email'>".'</td><td>'."<input type='tel' value='' placeholder='Contact' name='contact'>".'</td><td>'."<input type='text' value='' placeholder='License' name='purchase_code' required>"."</td><td style='background:#d9ffcc;color:#ffcccc;'>".date("Y-m-d").'</td><td>'."<input type='date' value='' placeholder='Expiry Date' name='expiry' required>"."</td><td><button type='submit' value='Submit' name='Submit'>Add</button></td>";
    echo "</form></tr>\n";
// Close the HTML List
echo "</table>\n";
if ($msg != null) {
    echo '<br><br><center><h3>'.$msg.'</h3></center>';
}
echo "<br><br><center><form id='logout' action='login.php' method='post'><button type='submit' name='logout' value='logout'>Log Out</center>";
