<div id="page-title">
<a href="<?php echo site_url("site/viewevents"); ?>" class="btn btn-primary btn-labeled fa fa-arrow-left margined pull-right">Back</a>
<h1 class="page-header text-overflow">Events Details </h1>
</div>
<div id="page-content">
<div class="row">
<div class="col-lg-12">
<section class="panel">
<div class="panel-heading">
<h3 class="panel-title">
Create Events </h3>
</div>
<div class="panel-body">
<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createeventssubmit");?>' enctype= 'multipart/form-data'>
<div class="panel-body">
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Status</label>
<div class="col-sm-4">
<?php echo form_dropdown("status",$status,set_value('status'),"class='chzn-select form-control'");?>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Title</label>
<div class="col-sm-4">
<input type="text" id="normal-field" class="form-control" name="title" value='<?php echo set_value('title');?>'>
</div>
</div>
<div class=" form-group">
<label class="col-sm-2 control-label" for="normal-field">Content</label>
<div class="col-sm-8">
<textarea name="content" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'content');?></textarea>
</div>
</div>
    <div class=" form-group">
							<label class="col-sm-2 control-label" for="normal-field">Image</label>
							<div class="col-sm-4">
								<input type="file" id="normal-field" class="form-control" name="image" value='<?php echo set_value(' image ');?>'>
							</div>
						</div>
    <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Start Date</label>
<div class="col-sm-4">
<input type="date" id="normal-field" class="form-control" name="startdate" value='<?php echo set_value('startdate');?>'>
</div>
</div>
    <div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Start Time</label>
<div class="col-sm-4">
<input type="time" id="normal-field" class="form-control" name="starttime" value='<?php echo set_value('starttime');?>'>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
<div class="col-sm-4">
<button type="submit" class="btn btn-primary">Save</button>
<a href="<?php echo site_url("site/viewevents"); ?>" class="btn btn-secondary">Cancel</a>
</div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
