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
                event Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createeventsubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Name</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Date</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="date" value='<?php echo set_value(' date ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Day</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="day" value='<?php echo set_value(' day ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Time</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="time" value='<?php echo set_value(' time ');?>'>
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
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Logo</label>
                            <div class="col-sm-4">
                                <input type="file" id="normal-field" class="form-control" name="logo" value='<?php echo set_value(' logo ');?>'>
                            </div>
                        </div>
                        
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Description</label>
                            <div class="col-sm-8">
                                <textarea name="description" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'description');?></textarea>
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
                                <a href="<?php echo site_url("site/viewevent"); ?>" class="btn btn-secondary">Cancel</a>
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