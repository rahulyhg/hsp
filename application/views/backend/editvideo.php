<section class="panel">
    <header class="panel-heading">
        video Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editvideosubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Title</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value(' title ',$before->title);?>'>
                </div>
            </div>
            
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">video</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="video" value="<?php echo set_value('video',$before->video);?>">
					<?php if($before->video == "")
						 { }
						 else
						 { 
                             echo  $before->video;
                         }
					?>
				  </div>
				</div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
                    <a href='<?php echo site_url("site/viewvideo"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>