<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <div class="pull-right">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                brand Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createbrandsubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Name</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Email</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="email" value='<?php echo set_value(' email ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Phone Number</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="contactno" value='<?php echo set_value(' contactno ');?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">facebook</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="facebook" value='<?php echo set_value(' facebook ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">twitter</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="twitter" value='<?php echo set_value(' twitter ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">instagram</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="instagram" value='<?php echo set_value(' instagram ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">googleplus</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="googleplus" value='<?php echo set_value(' googleplus ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Hours</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="hours" value='<?php echo set_value(' hours ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Location</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="location" value='<?php echo set_value(' location ');?>'>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Is Featured</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "isfeatured",$isfeatured,set_value( 'isfeatured'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Is New</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "isnew",$isnew,set_value( 'isnew'), "class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Description</label>
                            <div class="col-sm-8">
                                <textarea name="description" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'description');?></textarea>
                            </div>
                        </div>
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Logo</label>
                            <div class="col-sm-4">
                                <input type="file" id="normal-field" class="form-control" name="logo" value='<?php echo set_value(' logo ');?>'>
                            </div>
                        </div>
                        
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Category</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('categoryforbrand[]',$categoryforbrand,set_value('categoryforbrand'),'id="select3" class="chzn-select form-control" 	data-placeholder="Choose an categoryforbrand..." multiple');
					?>
				  </div>
				</div>
                    <div class="form-group hidden" >
                        <label class="col-sm-2 control-label" for="normal-field">json</label>
                        <div class="col-sm-4">
                            <textarea name="json" id="" cols="20" rows="10" class="form-control tinymce fieldjsoninput"><?php echo json_encode($fieldjson,true); ?></textarea>

                        </div>
                    </div>
                    <div class="fieldjson"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
                                <a href="<?php echo site_url("site/viewbrand"); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
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