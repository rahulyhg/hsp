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
                dine Image Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createdineimagesubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                       
                        <div class="form-group" style="display:none">
                          <label class="col-sm-2 control-label" for="normal-field">dine</label>
                          <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="dine" value="<?php echo set_value('dine',$dineid);?>">

                          </div>
                        </div>
				
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="normal-field">Name</label>
                          <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">

                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="normal-field">Order</label>
                          <div class="col-sm-4">
                            <input type="text" id="normal-field" class="form-control" name="order" value="<?php echo set_value('order');?>">

                          </div>
                        </div>
                        
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">image</label>
                            <div class="col-sm-4">
                                <input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value(' image ');?>'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
                                <a href="<?php echo site_url("site/viewdineimage?id=".$dineid); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
