<section class="panel">
    <header class="panel-heading">
        config Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editconfigsubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Title</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ',$before->title);?>'>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Text</label>
                <div class="col-sm-8">
                    <textarea name="text" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'text',$before->text);?></textarea>
                </div>
            </div>
           
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="normal-field">Date</label>
                    <div class="col-sm-4">
                        <input type="date" id="normal-field" class="form-control" name="date" value='<?php echo set_value(' date ',$before->date);?>'>
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
                    <a href='<?php echo site_url("site/viewconfig"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>