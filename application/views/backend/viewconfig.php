<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createconfig"); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
    
<!--
	<div class="col-md-2">
	
		<a class="btn btn-secondary"  href="<?php echo site_url('site/uploadconfigcsv'); ?>"><i class="icon-trash"></i>Upload CSV</a> &nbsp; 
	</div>
-->
	
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Config Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="title">Title</th>
<!--                            <th data-field="text">Text</th>-->
                            <th data-field="image">Image</th>
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
                var image="";
                if(resultrow.image=="")
                {
                image="";
                }
                else
                {
                var image="<img src='<?php echo base_url('/uploads/');?>/" + resultrow.image + "' width=100px;>";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.title + "</td><td>" + image + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editconfig?id=');?>" + resultrow.id + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deleteconfig?id='); ?>" + resultrow.id + "'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
