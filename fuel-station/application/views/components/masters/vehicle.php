<div class="card card-primary m-3">
    <div class="card-header">
        <h3 class="card-title">Add New Vehicle</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php echo form_open('masters/vehicle'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="InputUser">Select User</label>
            <select class="form-control select2" id="InputUser" name="user">
                <option value="" selected>--Select--</option>
                <?php
                foreach ($users as $user) {
                    echo '<option value="' . $user->id . '">' . $user->username . '</option>';
                }
                ?>
            </select>
            <?php echo form_error('user'); ?>
        </div>
        <div class="form-group">
            <label for="InputVehicleNo">Vehicle No.</label>
            <input type="text" class="form-control" id="InputVehicleNo" name="vehicle_no" value="<?php echo set_value('vehicle_no'); ?>" placeholder="Enter Vehicle No.">
            <?php echo form_error('vehicle_no'); ?>
        </div>
        <div class="form-group">
            <label for="InputCompanyName">Company Name</label>
            <input type="text" class="form-control" id="InputCompanyName" name="company_name" value="<?php echo set_value('company_name'); ?>" placeholder="Enter Company Name">
            <?php echo form_error('company_name'); ?>
        </div>

        <!-- <div class="form-group">
                <label for="exampleInputFile">Vehicle Photo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div> -->
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>