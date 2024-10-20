<section class="content">
    <div class="container-fluid">
        <div id="order" class="bg-gray p-4" style="width: 90%;margin: auto;display: none;border-radius: 5px;">
            VCH_NO : <span id="vch"></span>
            <div style="max-height:400px;overflow-y: auto;">
                <table id="order_tbl" class="table table-bordered">
                </table>
            </div>
            Total Amount = ₹<span id="total"></span>
            <button id="close" class="bg-info btn p-0 m-0 px-2 mt-2 ml-3" style="float: right;">close</button>
            <div id="mark-delever-btn" style="width: fit-content;float: right;">
                <form action="order" method="post">
                    <input type="text" name="vch_num" id="vch_num" hidden>
                    <button type="submit" class="btn bg-green p-0 m-0 px-2 mt-2">Mark As Delivered</button>
                </form>
            </div>
        </div>
        <div class="row" id="orders">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Party Name</th>
                                    <th>Slip No.</th>
                                    <th>VCH No.</th>
                                    <th>Date</th>
                                    <th>Vehicle NO.</th>
                                    <th>Orders</th>
                                    <th>attachment</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($orders as $order) {
                                    $status = "Delivered";
                                    $attach = 'No Attachment';
                                    if ($order->attachment) {
                                        $attach = '<a target="_blank" href=" ' . $order->attachment . '" class="bg-info btn p-0 m-0 px-2">view</a>';
                                    }
                                    if ($order->status == 0) {
                                        $status = "Not Delivered";
                                    }
                                    echo "<tr>
                                    <td>" . $order->company_name . "</td>
                                    <td>" . $order->slip_range . "</td>
                                    <td>" . $order->vch_no . "</td>
                                    <td>" . $order->order_date . "</td>
                                    <td>" . $order->vehicle_no . "</td>
                                    <td>
                                        <button onclick='viewOrder(" . json_encode($order->orders) . "," . $order->vch_no . "," . $order->status . ")' class='bg-info btn p-0 m-0 px-2'>view</button>
                                    </td>
                                    <td>
                                        " . $attach . "
                                    </td>
                                    <td>
                                        " . $status . "
                                    </td>
                                </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>