<div class="row" style="padding:1% 0">
    <div class="col-md-9">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createbrand"); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
    
	<div class="col-md-2">
	
		<a class="btn btn-secondary"  href="<?php echo site_url('site/uploadbrandcsv'); ?>"><i class="icon-trash"></i>Upload CSV</a> &nbsp; 
	</div>
	
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                brand Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("brand List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="name">Name</th>
                            <th data-field="hours">Hours</th>
                            <th data-field="location">Location</th>
                            <th data-field="isfeatured">Is Featured</th>
                            <th data-field="isnew">Is New</th>
                            <th data-field="description">Description</th>
                            <th data-field="logo">Logo</th>
<!--                            <th data-field="json">Json</th>-->
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <?php $this->chintantable->createpagination();?>
            </div>
        </section>
        <script>
            function drawtable(resultrow) {
                if(resultrow.isfeatured=="1")
                {
                    resultrow.isfeatured="YES";
                }
                else
                {
                    resultrow.isfeatured="NO";
                }
                if(resultrow.isnew=="1")
                {
                    resultrow.isnew="YES";
                }
                else
                {
                    resultrow.isnew="NO";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.hours + "</td><td>" + resultrow.location + "</td><td>" + resultrow.isfeatured + "</td><td>" + resultrow.isnew + "</td><td>" + resultrow.description + "</td><td>" + resultrow.logo + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editbrand?id=');?>" + resultrow.id + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletebrand?id='); ?>" + resultrow.id + "'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
