
<?php
if (isset($_POST['name'])) {

    $to = "dheerajkharwar9@gmail.com, mihu.infotech@gmail.com";
    $subject = "Contact Form Submission - Mihu Systems";
    $message = "
<html>
<head>
<title>Contact Form Submission - Mihu Systems</title>
</head>
<body>
<h2>Contact Form Submission - Mihu Systems</h2>
<table>
<tr>
<th>Name</th>
<td>" . $_POST['name'] . "</td>
</tr>
<tr>
<th>Email</th>
<td>" . $_POST['email'] . "</td>
</tr>
<tr>
<th>Address</th>
<td>" . $_POST['address'] . "</td>
</tr>
<tr>
<th>Message</th>
<td>" . $_POST['message'] . "</td>
</tr>
</table>
</body>
</html>
";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <info@mihusystems.in>' . "\r\n";
    // $headers .= 'Cc: ranjan.mihuinfotech@gmail.com' . "\r\n";

    mail($to, $subject, $message, $headers);
    echo "<script>alert('Form Submitted successfully');window.location.href = 'contact.php';</script>";
} else if (isset($_POST['email_sub'])) {
    $to = "dheerajkharwar9@gmail.com, mihu.infotech@gmail.com";
    $subject = "New Subscriber - Mihu Systems";
    $message = "
                <html>
                <head>
                <title>New Subscriber - Mihu Systems</title>
                </head>
                <body>
                <h2>New Subscriber - Mihu Systems</h2>
                <table>
                <tr>
                <th>Email</th>
                <td>" . $_POST['email_sub'] . "</td>
                </tr>
                </table>
                </body>
                </html>
                ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <info@mihusystems.in>' . "\r\n";
    // $headers .= 'Cc: ranjan.mihuinfotech@gmail.com' . "\r\n";
    mail($to, $subject, $message, $headers);
    echo "<script>alert('You Are Subscribed For Our News And Promotions!');window.location.href = 'contact.php';</script>";
} else {
    header("location: ?page=contact");
}
?>