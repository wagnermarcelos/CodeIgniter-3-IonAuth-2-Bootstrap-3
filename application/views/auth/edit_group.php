<div class="container">
<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url(), array('class' => 'form-horizontal'));?>

<div class="form-group">
<label for="group_name" class="col-md-4 control-label"> <?php echo lang('edit_group_name_label');?></label>
<div class="col-md-4">
<?php echo form_input($group_name);?>
</div>
</div>

<div class="form-group">
<label for="group_description" class="col-md-4 control-label"><?php echo lang('edit_group_desc_label');?></label>
<div class="col-md-4">
<?php echo form_input($group_description);?>      
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"> 
<?php echo form_submit('submit', lang('edit_group_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>