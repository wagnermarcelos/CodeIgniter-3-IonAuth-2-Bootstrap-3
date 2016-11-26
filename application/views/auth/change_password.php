<div class="container">
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password", array('class' => 'form-horizontal'));?>

<div class="form-group">
<label class="col-md-4 control-label" for="old"><?php echo lang('change_password_old_password_label');?></label>  
<div class="col-md-4">
<?php echo form_input($old_password);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="new"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
<div class="col-md-4">            
<?php echo form_input($new_password);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="new_confirm"><?php echo lang('change_password_new_password_confirm_label');?></label>
<div class="col-md-4">               
<?php echo form_input($new_password_confirm);?>
</div>
</div>

<?php echo form_input($user_id);?>

<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4"> 
<?php echo form_submit('submit', lang('change_password_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>