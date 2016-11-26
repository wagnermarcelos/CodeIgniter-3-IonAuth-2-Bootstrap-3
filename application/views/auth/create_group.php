<div class="container">
      <h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group", array('class' => 'form-horizontal'));?>

<div class="form-group">
<label class="col-md-4 control-label" for="group_name"><?php echo lang('create_group_name_label');?></label>
<div class="col-md-4">
<?php echo form_input($group_name);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="description"><?php echo lang('create_group_desc_label');?></label>
<div class="col-md-4">
<?php echo form_input($description);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
<?php echo form_submit('submit', lang('create_group_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>