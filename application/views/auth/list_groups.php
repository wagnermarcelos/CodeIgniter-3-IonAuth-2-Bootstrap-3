<div class="container">
<h1><?php echo lang('index_groups_heading');?></h1>
<p><?php echo lang('index_groups_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table class="table table-striped">
  <thead>	
	<tr>
		<th><?php echo lang('index_groups_name_th');?></th>
		<th><?php echo lang('index_groups_description_th');?></th>
		<th><?php echo lang('index_groups_action_th');?></th>
	</tr>
  </thead>
  <tbody>
	
	<?php foreach ($groups as $group):?>
		<tr>
            <td><?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?></td>
            <td><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?></td>
			<td>
			  <?php echo anchor("auth/edit_group/".$group->id, lang('index_groups_edit_link')) ;?>
			  
			  <?php
				$label_del_admin = $this->config->item('admin_group', 'ion_auth') === $group->name ? false : true;
				$label_del_default = $this->config->item('default_group', 'ion_auth') === $group->name ? false : true;
				
				if (!$label_del_admin or !$label_del_default){
				  echo '';
				} else {
				  echo anchor("auth/delete_group/".$group->id, lang('index_groups_delete_link'));
				}
				
			  
			  ?>
			</td>
		</tr>
	<?php endforeach;?>
  </tbody>
</table>

<p><?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
</div>