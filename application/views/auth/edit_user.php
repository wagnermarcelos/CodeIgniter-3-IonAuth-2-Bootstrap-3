<div class="container">
   <h1><?php echo lang('edit_user_heading');?></h1>
   <p><?php echo lang('edit_user_subheading');?></p>
   <div id="infoMessage"><?php echo $message;?></div>
   
   <?php echo form_open(uri_string(), array('class' => 'form-horizontal'));?>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="first_name"> <?php echo lang('edit_user_fname_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($first_name);?>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="last_name"> <?php echo lang('edit_user_lname_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($last_name);?>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="company"> <?php echo lang('edit_user_company_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($company);?>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="phone"> <?php echo lang('edit_user_phone_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($phone);?>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="password"> <?php echo lang('edit_user_password_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($password);?>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="password_confirm"> <?php echo lang('edit_user_password_confirm_label');?> </label>   
      <div class="col-md-4">
         <?php echo form_input($password_confirm);?>
      </div>
   </div>

   <?php if ($this->ion_auth->is_admin()): ?>
   <div class="form-group">
   <label class="col-md-4 control-label" for="groups"> </label>
   <div class="col-md-4">
      <h3><?php echo lang('edit_user_groups_heading');?></h3>
      <?php foreach ($groups as $group):?>
      <div class="checkbox checkbox-primary">
         <?php
            $gID=$group['id'];
            $checked = null;
            $item = null;
            foreach($currentGroups as $grp) {
                if ($gID == $grp->id) {
                    $checked= ' checked="checked"';
                break;
                }
            }
            ?>
         <input type="checkbox" name="groups[]" id="groups-<?php echo $group['id'];?>" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
         <label for="groups-<?php echo $group['id'];?>"><?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?></label>
      </div>
      <?php endforeach?>
   </div>
   </div>
   <?php endif ?>

   
   <?php echo form_hidden('id', $user->id);?>
   <?php echo form_hidden($csrf); ?>
   
   <div class="form-group">
      <label class="col-md-4 control-label" for="submit"> </label>   
      <div class="col-md-4"><?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class' => 'btn btn-primary'));?></div>
   </div>
   
   <?php echo form_close();?>
</div>