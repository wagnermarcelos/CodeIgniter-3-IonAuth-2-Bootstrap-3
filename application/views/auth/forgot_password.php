<div class="container">
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password", array('class' => 'form-horizontal'));?>

<div class="form-group">
<label for="identity" class="col-md-4 control-label">
<?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
<div class="col-md-4">
<?php echo form_input($identity);?>
</div>
</div>

<div class="form-group">
<label for="submit" class="col-md-4 control-label"></label>
<div class="col-md-4">
<?php echo form_submit('submit', lang('forgot_password_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>