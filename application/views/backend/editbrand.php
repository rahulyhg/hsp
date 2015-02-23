<section class="panel">
    <header class="panel-heading">
        brand Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editbrandsubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Name</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Email</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="email" value='<?php echo set_value(' email ',$before->email);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Phone Number</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="contactno" value='<?php echo set_value(' contactno ',$before->contactno);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">facebook</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="facebook" value='<?php echo set_value(' facebook ',$before->facebook);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">twitter</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="twitter" value='<?php echo set_value(' twitter ',$before->twitter);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">instagram</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="instagram" value='<?php echo set_value(' instagram ',$before->instagram);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">googleplus</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="googleplus" value='<?php echo set_value(' googleplus ',$before->googleplus);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Hours</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="hours" value='<?php echo set_value(' hours ',$before->hours);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Location</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="location" value='<?php echo set_value(' location ',$before->location);?>'>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Is Featured</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "isfeatured",$isfeatured,set_value( 'isfeatured',$before->isfeatured),"class='chzn-select form-control'");?>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Is New</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "isnew",$isnew,set_value( 'isnew',$before->isnew),"class='chzn-select form-control'");?>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Description</label>
                <div class="col-sm-8">
                    <textarea name="description" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'description',$before->description);?></textarea>
                </div>
            </div>
<!--
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">image</label>
                <div class="col-sm-4">
                    <input type="file" id="normal-field" class="form-control" name="logo" value='<?php echo set_value(' logo ',$before->logo);?>'>
                </div>
            </div>
-->
           
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">logo</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="logo" value="<?php echo set_value('logo',$before->logo);?>">
					<?php if($before->logo == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->logo; ?>" width="140px" height="140px">
						<?php }
					?>
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
           <div class=" form-group">
				  <label class="col-sm-2 control-label">Category</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('categoryforbrand[]',$categoryforbrand,$selectedcategoryforbrand,'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an categoryforbrand..." multiple');
					?>
				  </div>
				</div>
				
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">specialoffer</label>
                <div class="col-sm-8">
                    <textarea name="specialoffer" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'specialoffer',$before->specialoffer);?></textarea>
                </div>
            </div>
            
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">specialofferimage</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="specialofferimage" value="<?php echo set_value('specialofferimage',$before->specialofferimage);?>">
					<?php if($before->specialofferimage == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->specialofferimage; ?>" width="140px" height="140px">
						<?php }
					?>
				  </div>
				</div>
				<div class=" form-group hidden">
				  <label class="col-sm-2 control-label" for="normal-field">json</label>
				  <div class="col-sm-4">
					<textarea name="json" id="" cols="20" rows="10" class="form-control tinymce fieldjsoninput"><?php echo set_value( 'json',$before->json);?></textarea>
				  </div>
				</div>
				<div class="fieldjson"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
                    <a href='<?php echo site_url("site/viewbrand"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
//        console.log($(".fieldjsoninput").val());
        filljsoninput(".fieldjsoninput",".fieldjson");
        $(".jsonsubmit").click(function() {
            jsonsubmit(".fieldjsoninput",".fieldjson");
            //return false;
        });
        
    });
</script>