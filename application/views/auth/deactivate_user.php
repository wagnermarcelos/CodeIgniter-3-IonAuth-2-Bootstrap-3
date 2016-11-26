<div class="container">
<h1><?php echo lang('deactivate_heading');?></h1>
<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php echo form_open("auth/deactivate/".$user->id, array('class' => 'form-horizontal'));?>

<div class="form-group">
  <!--<label class="col-md-4 control-label" for="yes_no"></label>-->
  <div class="col-md-4"> 
   <div class="radio radio-danger radio-inline">
	<input type="radio" name="confirm" id="confirm-1" value="yes" checked="checked" >
	<label for="confirm-1" class="text-danger" > <?php echo lang('deactivate_confirm_y_label');?> </label>
   </div>
   <div class="radio radio-success radio-inline">
    <input type="radio" name="confirm" id="confirm-0" value="no" >
	<label for="confirm-0" class="text-success" > <?php echo lang('deactivate_confirm_n_label');?> </label>
   </div>
  </div>
</div>

<?php echo form_hidden($csrf); ?>
<?php echo form_hidden(array('id'=>$user->id)); ?>

<div class="form-group">
<!--<label class="col-md-4 control-label" for="submit"></label>-->
<div class="col-md-4">
<?php echo form_submit('submit', lang('deactivate_submit_btn'), array('class' => 'btn btn-primary'));?>
</div>
</div>

<?php echo form_close();?>
</div>