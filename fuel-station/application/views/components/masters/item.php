<div class="card card-primary m-3">
    <div class="card-header">
        <h3 class="card-title">Add New Item</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?php echo form_open('masters/item'); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="InputItemName">Item Name</label>
            <input type="text" class="form-control" id="InputItemName" name="item_name" value="<?php echo set_value('item_name'); ?>" placeholder="Enter name">
            <?php echo form_error('item_name'); ?>
        </div>
        <div class="form-group">
            <label for="InputUnit">Unit</label>
            <input type="text" class="form-control" id="InputUnit" name="unit" value="<?php echo set_value('unit'); ?>" placeholder="Enter Unit">
            <?php echo form_error('unit'); ?>
        </div>
        <div class="form-group">
            <label for="InputPrice">Price</label>
            <input type="text" class="form-control" id="InputPrice" name="price" value="<?php echo set_value('price'); ?>" placeholder="Enter Price">
            <?php echo form_error('price'); ?>
        </div>
        <div class="form-group">
            <label for="InputGST">GST/Tax Rate</label>
            <input type="text" class="form-control" id="InputGST" name="gst" value="<?php echo set_value('gst'); ?>" placeholder="Enter GST">
            <?php echo form_error('gst'); ?>
        </div>
        <div class="form-group">
            <label for="InputHSN">HSN Code</label>
            <input type="text" class="form-control" id="InputHSN" name="hsn_code" value="<?php echo set_value('hsn_code'); ?>" placeholder="Enter HSN">
            <?php echo form_error('hsn_code'); ?>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>