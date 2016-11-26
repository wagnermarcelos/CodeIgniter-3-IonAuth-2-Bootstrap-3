<div class="container">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login", array('class' => 'form-horizontal'));?>

<div class="form-group">
<label class="col-md-4 control-label" for="identity"> <?php echo lang('login_identity_label');?> </label>  
<div class="col-md-4">
    <?php echo form_input($identity);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="password"> <?php echo lang('login_password_label');?> </label>  
<div class="col-md-4">
    <?php echo form_input($password);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="remember"> </label>  
<div class="col-md-4">
  <div class="checkbox checkbox-primary">
    
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  <label for="remember"> <?php echo lang('login_remember_label');?> </label>
  </div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="submit">  </label>  
<div class="col-md-4">
<?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>

<div class="form-group">
<label class="col-md-4 control-label" for="forgot">  </label>  
<div class="col-md-4">
<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div>
</div>

</div>