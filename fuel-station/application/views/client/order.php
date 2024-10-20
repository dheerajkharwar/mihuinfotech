<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fuel Station | Order Form</title>

    <?php $this->load->view('components/link'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <?php $this->load->view('components/preloader.php'); ?>

        <!-- Navbar -->

        <!-- /.navbar -->
        <?php $this->load->view('components/navbar'); ?>
        <!-- Main Sidebar Container -->
        <?php $this->load->view('components/client/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php $this->load->view('components/content-header'); ?>
            <!-- Main content -->
            <?php $this->load->view('components/client/order'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view('components/footer'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <?php $this->load->view('components/script'); ?>

        <script>
            // $('#InputQuantity').on('change',
            //     function() {
            //         var n1 = parseFloat($('#InputRate').val());
            //         var n2 = parseFloat($('#InputQuantity').val());
            //         $('#InputTotalAmount').val(n1 * n2);
            //     }
            // );
            let i = 0
            let orderJsonObj = [];
            $('#addItemBtn').on('click',
                function() {
                    var itemSelected = $('#InputItemName').find(':selected').val();
                    let qty = parseFloat($('#InputQuantity').val());
                    if (itemSelected == '-1' || isNaN(qty)) {
                        return;
                    }
                    i++;
                    $("#InputItemName option[value=" + itemSelected + "]").remove();
                    let item;
                    let price;
                    let unit;
                    switch (itemSelected) {
                        <?php
                        foreach ($items as $key => $item) {
                            echo 'case "' . $item->id . '":
                                item = "' . $item->item_name . '";
                                price = ' . $item->price . ';
                                unit = "' . $item->unit . '";
                                break;';
                        }

                        ?>
                        default:
                            break;
                    }
                    let amt = price * qty;
                    let orders = $('#orders').html();
                    let newOrder = `<tr id="item${i}">
                                    <td>${i}</td>
                                    <td><input style="border: 0" type="text" value="${item}" disabled></td>
                                    <td><input style="border: 0;" type="text" value="${qty} ${unit}" disabled></td>
                                    <td><input style="border: 0;" type="text" value="${price}" disabled></td>
                                    <td><input style="border: 0;text-align:right;" type="text" value="₹${amt}" disabled></td>
                                </tr>`;
                    $('#orders').html(orders + "" + newOrder);
                    let total = parseFloat($('#total').text());
                    var current_total = total + amt;
                    $('#total').text(current_total);
                    let itemObj = {};
                    itemObj['item_name'] = item;
                    itemObj['unit'] = unit;
                    itemObj['price'] = price;
                    itemObj['qty'] = qty;
                    itemObj['amt'] = amt;
                    orderJsonObj.push(itemObj);
                    $('#orderJsonObj').val(JSON.stringify(orderJsonObj));
                    $('#InputQuantity').val('');

                }
            );
        </script>
</body>

</html>