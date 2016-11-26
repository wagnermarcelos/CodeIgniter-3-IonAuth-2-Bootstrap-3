<div class="container">
<h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code, array('class' => 'form-horizontal'));?>

<div class="form-group">
<label class="col-md-4 control-label" for="new_password"> <?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?> </label>  
<div class="col-md-4">
<?php echo form_input($new_password);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="new_password_confirm"> <?php echo lang('reset_password_new_password_confirm_label');?> </label>  
<div class="col-md-4">
<?php echo form_input($new_password_confirm);?>
</div>
</div>

<?php echo form_input($user_id);?>
<?php echo form_hidden($csrf); ?>

<div class="form-group">
<label class="col-md-4 control-label" for="submit">  </label>  
<div class="col-md-4">
<?php echo form_submit('submit', lang('reset_password_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>