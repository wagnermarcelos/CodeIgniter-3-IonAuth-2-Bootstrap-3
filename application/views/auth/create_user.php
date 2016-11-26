<div class="container">
<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user", array('class' => 'form-horizontal'));?>

<div class="form-group">
<label class="col-md-4 control-label" for="first_name"><?php echo lang('create_user_fname_label');?></label>
<div class="col-md-4">
<?php echo form_input($first_name);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="last_name"><?php echo lang('create_user_lname_label');?></label>
<div class="col-md-4">
<?php echo form_input($last_name);?>
</div>
</div>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

<div class="form-group">
<label class="col-md-4 control-label" for="company"><?php echo lang('create_user_company_label');?></label>
<div class="col-md-4">
<?php echo form_input($company);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="email"><?php echo lang('create_user_email_label');?></label>
<div class="col-md-4">
<?php echo form_input($email);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="phone"><?php echo lang('create_user_phone_label');?></label>
<div class="col-md-4">
<?php echo form_input($phone);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="password"><?php echo lang('create_user_password_label');?></label>
<div class="col-md-4">
<?php echo form_input($password);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="password_confirm"><?php echo lang('create_user_password_confirm_label');?></label>
<div class="col-md-4">
<?php echo form_input($password_confirm);?>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
<?php echo form_submit('submit', lang('create_user_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>