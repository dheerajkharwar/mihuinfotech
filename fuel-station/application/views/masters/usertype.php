<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel Station | User Type Master</title>

    <?php $this->load->view('components/link'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php $this->load->view('components/preloader.php'); ?>

        <!-- Navbar -->
        <?php $this->load->view('components/navbar'); ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php $this->load->view('components/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php $this->load->view('components/content-header'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php $this->load->view('components/masters/usertype'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('components/footer'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('components/script'); ?>
</body>

</html>