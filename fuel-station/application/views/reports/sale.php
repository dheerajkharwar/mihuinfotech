<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel Station | Sale Report</title>

    <?php $this->load->view('components/link'); ?>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <?php $this->load->view('components/preloader.php'); ?>

        <!-- Navbar -->

        <!-- /.navbar -->
        <?php $this->load->view('components/navbar'); ?>
        <!-- Main Sidebar Container -->
        <?php $this->load->view('components/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php $this->load->view('components/content-header'); ?>
            <!-- Main content -->
            <?php $this->load->view('components/reports/sale'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('components/footer'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example2").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
            });

            function viewOrder(orders, vch_no) {
                var ordersObj = JSON.parse(orders);
                var order_html = `<tr>
                        <th>Sr. No.</th>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>Price/Unit</th>
                        <th>Amt</th>
                    </tr>`;
                var total_html = 0;
                ordersObj.forEach((order, i) => {
                    order_html += `<tr>
                        <th>${i+1}</th>
                        <th>${order.item_name}</th>
                        <th>${order.qty} ${order.unit}</th>
                        <th>${order.price}</th>
                        <th>${order.amt}</th>
                    </tr>`;
                    total_html += order.amt;
                })
                document.getElementById('vch').innerHTML = vch_no;
                document.getElementById('order_tbl').innerHTML = order_html;
                document.getElementById('total').innerHTML = total_html;

                document.getElementById('order').style.display = 'block';
                document.getElementById('orders').style.display = 'none';
            }
            $('#close').on('click', function() {
                document.getElementById('order').style.display = 'none';
                document.getElementById('orders').style.display = 'block';
            });
        </script>
</body>

</html>