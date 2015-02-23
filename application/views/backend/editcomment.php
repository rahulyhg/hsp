<section class="panel">
    <header class="panel-heading">
        Comment Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editcommentsubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Name</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">email</label>
                <div class="col-sm-4">
                    <input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value(' email ',$before->email);?>'>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">phone</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="phone" value='<?php echo set_value(' phone ',$before->phone);?>'>
                </div>
            </div>
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Comment</label>
                <div class="col-sm-8">
                    <textarea name="comment" id="" cols="20" rows="10" class="form-control"><?php echo set_value( 'comment',$before->comment);?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
                    <a href='<?php echo site_url("site/viewcomment"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>