<section class="panel">
    <header class="panel-heading">
        dinecategory Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editdinecategorysubmit");?>' enctype='multipart/form-data'>
<!--            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">-->
           
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">Dine</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="dine" value="<?php echo set_value('dine',$before->dine);?>">
					
				  </div>
				</div>
				<div class="form-group" style="display:none">
				  <label class="col-sm-2 control-label" for="normal-field">Dine Category</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="dinecategoryid" value="<?php echo set_value('dinecategoryid',$before->id);?>">
					
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
<!--
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Dine</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "dine",$dine,set_value( 'dine',$before->dine),"class='chzn-select form-control'");?>
                </div>
            </div>
-->
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href='<?php echo site_url("site/viewdinecategory"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>
