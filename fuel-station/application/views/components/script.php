<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    function alert() {
        Toast.fire({
            icon: '<?= $this->session->flashdata('msg_type') ?>',
            title: '<?= $this->session->flashdata('msg') ?>'
        });
    }

    // $(function() {
    //     var Toast = Swal.mixin({
    //         toast: true,
    //         position: 'top-end',
    //         showConfirmButton: false,
    //         timer: 3000
    //     });

    //     $('.swalDefaultSuccess').click(function() {
    //         Toast.fire({
    //             icon: 'success',
    //             title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //         })
    //     });
    //     $('.swalDefaultInfo').click(function() {
    //         Toast.fire({
    //             icon: 'info',
    //             title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //         })
    //     });
    //     $('.swalDefaultError').click(function() {
    //         Toast.fire({
    //             icon: 'error',
    //             title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //         })
    //     });
    //     $('.swalDefaultWarning').click(function() {
    //         Toast.fire({
    //             icon: 'warning',
    //             title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //         })
    //     });
    //     $('.swalDefaultQuestion').click(function() {
    //         Toast.fire({
    //             icon: 'question',
    //             title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    //         })
    //     });
    // });
</script>
<?php if ($this->session->flashdata('msg')) {
    echo '<script type="text/JavaScript">  
        alert(); 
        </script>';
}
?>