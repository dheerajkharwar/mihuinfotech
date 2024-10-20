<div class="card card-primary m-3">
    <div class="card-header">
        <h3 class="card-title">Add New User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php echo form_open('masters/user'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="InputUsername">Username</label>
            <input type="text" class="form-control" id="InputUsername" name="username" value="<?php echo set_value('username'); ?>" size="50" placeholder="Enter Username">
            <?php echo form_error('username'); ?>
        </div>
        <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Enter Password">
            <?php echo form_error('password'); ?>
        </div>
        <div class="form-group">
            <label for="InputPhoneNo">Phone No.</label>
            <input type="tel" class="form-control" id="InputPhoneNo" name="phone_no" value="<?php echo set_value('phone_no'); ?>" size="50" placeholder="Enter Phone No.">
            <?php echo form_error('phone_no'); ?>
        </div>
        <div class="form-group">
            <label for="InputPlace">Place</label>
            <input type="text" class="form-control" id="InputPlace" name="place" value="<?php echo set_value('place'); ?>" size="50" placeholder="Enter Place">
            <?php echo form_error('place'); ?>
        </div>
        <div class="form-group">
            <label for="InputUserType">Select User Type</label>
            <select class="form-control select2" id="InputUserType" name="user_type" style="width: 100%;">
                <option value="" selected>--Select--</option>
                <?php
                foreach ($user_types as $type) {
                    echo '<option value="' . $type->id . '">' . $type->user_type . '</option>';
                }
                ?>
            </select>
            <?php echo form_error('user_type'); ?>
        </div>
        <div class="form-group">
            <label for="InputSaler">Saler</label>
            <input type="text" class="form-control" id="InputSaler" name="saler" value="<?php echo set_value('saler'); ?>" size="50" placeholder="Enter Saler">
            <?php echo form_error('saler'); ?>
        </div>
        <div class="form-group">
            <label for="InputCompanyName">Company Name</label>
            <input type="text" class="form-control" id="InputCompanyName" name="company_name" value="<?php echo set_value('company_name'); ?>" size="50" placeholder="Enter Company Name">
            <?php echo form_error('company_name'); ?>
        </div>
        <div class="form-group">
            <label for="InputCompanyAddress">Company Address</label>
            <input type="text" class="form-control" id="InputCompanyAddress" name="company_address" value="<?php echo set_value('company_address'); ?>" size="50" placeholder="Enter Company Address">
            <?php echo form_error('company_address'); ?>
        </div>
        <div class="form-group">
            <label for="InputState">State</label>
            <input type="text" class="form-control" id="InputState" name="state" value="<?php echo set_value('state'); ?>" size="50" placeholder="Enter State">
            <?php echo form_error('state'); ?>
        </div>
        <div class="form-group">
            <label for="InputCreditPeriod">Credit Period</label>
            <input type="text" class="form-control" id="InputCreditPeriod" name="credit_period" value="<?php echo set_value('credit_period'); ?>" size="50" placeholder="Enter Credit Period">
            <?php echo form_error('credit_period'); ?>
        </div>
        <div class="form-group">
            <label for="InputSlipRange">Slip Range</label>
            <input type="text" class="form-control" id="InputSlipRange" name="slip_range" value="<?php echo set_value('slip_range'); ?>" size="50" placeholder="Enter Slip Range">
            <?php echo form_error('slip_range'); ?>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>