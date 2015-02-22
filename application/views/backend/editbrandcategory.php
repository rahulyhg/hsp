<section class="panel">
    <header class="panel-heading">
        brandcategory Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editbrandcategorysubmit");?>' enctype='multipart/form-data'>
<!--
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Brand</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="brand" value='<?php echo set_value(' brand ',$before->brand);?>'>
                </div>
            </div>
-->
           
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">Brand</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="brand" value="<?php echo set_value('brand',$before->brand);?>">
					
				  </div>
				</div>
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">brandcategory</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="brandcategoryid" value="<?php echo set_value('brandcategoryid',$before->id);?>">
					
				  </div>
				</div>
				
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Name</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Order</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="order" value='<?php echo set_value(' order ',$before->order);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href='<?php echo site_url("site/viewbrandcategory"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>
