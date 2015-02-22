<section class="panel">
    <header class="panel-heading">
        branddeal Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editbranddealsubmit");?>' enctype='multipart/form-data'>
<!--
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Brand</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "brand",$brand,set_value( 'brand',$before->brand),"class='chzn-select form-control'");?>
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
				  <label class="col-sm-2 control-label" for="normal-field">branddeal</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="branddealid" value="<?php echo set_value('branddealid',$before->id);?>">
					
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
                <label class="col-sm-2 control-label" for="normal-field">Json</label>
                <div class="col-sm-8">
                    <textarea name="json" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'json',$before->json);?></textarea>
                </div>
            </div>
-->
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Is Featured</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "isfeatured",$isfeatured,set_value( 'isfeatured',$before->isfeatured),"class='chzn-select form-control'");?>
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
                    <a href='<?php echo site_url("site/viewbranddeal"); ?>' class='btn btn-secondary'>Cancel</a>
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