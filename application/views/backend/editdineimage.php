<section class="panel">
    <header class="panel-heading">
        dine image Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editdineimagesubmit");?>' enctype='multipart/form-data'>
           
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">dine</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="dine" value="<?php echo set_value('dine',$before->dine);?>">
					
				  </div>
				</div>
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">dineimage</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="dineimageid" value="<?php echo set_value('dineimageid',$before->id);?>">
					
				  </div>
				</div>
				
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="normal-field">Name</label>
                          <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name',$before->name);?>">

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="normal-field">Order</label>
                          <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="order" value="<?php echo set_value('order',$before->order);?>">

                          </div>
                        </div>
                        <div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">image</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image',$before->image);?>">
					<?php if($before->image == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
						<?php }
					?>
				  </div>
				</div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
<!--                    <a href='<?php echo site_url("site/viewdineimage"); ?>' class='btn btn-secondary'>Cancel</a>-->
                </div>
            </div>
        </form>
    </div>
</section>
