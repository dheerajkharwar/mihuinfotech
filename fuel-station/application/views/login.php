<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel Station | Login</title>

    <?php $this->load->view('components/link'); ?>
</head>

<body class="hold-transition login-page">
    <!-- Main content -->
    <?php $this->load->view('components/login'); ?>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('components/script'); ?>
</body>

</html>