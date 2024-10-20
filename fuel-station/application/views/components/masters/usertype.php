<div class="card card-primary m-3">
    <div class="card-header">
        <h3 class="card-title">Add New User Type</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php echo form_open('masters/usertype'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="InputName">User Type</label>
            <input type="text" class="form-control" id="InputName" name="user_type" value="<?php echo set_value('user_type'); ?>" placeholder="Enter User Type">
            <?php echo form_error('user_type'); ?>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>