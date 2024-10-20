<section class="content">
    <div class="card card-primary m-3">
        <div class="card-header">
            <h3 class="card-title">New Order</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php echo form_open_multipart('client/order'); ?>
        <div class="card-body">
            <div class="form-group">
                <label for="InputPartyName">Party Name</label>
                <input type="text" value="<?= $user->username ?>" class="form-control" id="InputPartyName" name="user" disabled>
            </div>
            <div class="form-group">
                <label for="InputSlipNo">Slip No.</label>
                <input type="text" value="<?= $user->slip_range ?>" class="form-control" id="InputSlipNo" name="slip_no" disabled>
            </div>
            <div class="form-group">
                <label for="InputVchNo">VCH No.</label>
                <input type="text" value="<?= $vch_no ?>" class="form-control" id="InputVchNo" name="vch_no" disabled>
            </div>
            <div class="form-group">
                <label for="InputDate">Date</label>
                <input type="date" class="form-control" id="InputDate" name="order_date" placeholder="Enter Date" min="<?= date('Y-m-d') ?>">
                <?php echo form_error('order_date'); ?>
            </div>
            <div class="form-group">
                <label for="InputVehicleNo">Select Vehicle</label>
                <select class="form-control select2" id="InputVehicleNo" name="vehicle_no" style="width: 100%;">
                    <option value="" selected>---Select---</option>
                    <?php
                    foreach ($vehicles as $vehicle) {
                        echo '<option value="' . $vehicle->vehicle_no . '">' . $vehicle->vehicle_no . '</option>';
                    }
                    ?>
                </select>
                <?php echo form_error('vehicle_no'); ?>
            </div>
            <input type="text" id="orderJsonObj" name="orders" hidden>
            <div class="form-group">
                <div class="card">
                    <div class="card-body">
                        <h4>Cart</h4>
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Rate(₹)</th>
                                    <th style="text-align:right;padding-right:25px;">Amount(₹)</th>
                                </tr>
                            </thead>
                            <tbody id="orders">
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="4">Total</th>
                                    <th style="text-align:right;padding-right:25px;">₹<span id="total">00</span></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row mx-3 mb-3">
                        <div class="col-sm-6 col-12"><label for="InputItemName">Select Item</label>
                            <select class="form-control select2" id="InputItemName" style="width: 100%;">
                                <option value="-1" selected>---Select---</option>
                                <?php
                                foreach ($items as $item) {
                                    echo '<option value="' . $item->id . '">' . $item->item_name . '(in ' . $item->unit . ')</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label for="InputQuantity">Quantity</label>
                            <input type="text" class="form-control" id="InputQuantity" placeholder="Enter Quantity">
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mt-2" id="addItemBtn">Add to Cart</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <?php echo form_error('orders'); ?>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Attachment(Optional)</label>
                <div class="input-group">
                    <div class="custom-file">
                        <!-- <input type="file" name="attachment" size="20" /> -->
                        <input type="file" name="attachment" accept="image/*" capture="camera" />
                        <?php echo form_error('attachment'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</section>