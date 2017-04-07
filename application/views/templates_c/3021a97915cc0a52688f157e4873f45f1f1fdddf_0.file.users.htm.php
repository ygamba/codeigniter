<?php
/* Smarty version 3.1.30, created on 2017-03-30 14:35:24
  from "/var/www/codeigniter/application/views/templates/admin/auth/users.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd5dfc0a1b69_57219846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3021a97915cc0a52688f157e4873f45f1f1fdddf' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/auth/users.htm',
      1 => 1479835267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/header.htm' => 1,
    'file:admin/tema/footer.htm' => 1,
  ),
),false)) {
function content_58dd5dfc0a1b69_57219846 (Smarty_Internal_Template $_smarty_tpl) {
?>
           <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  

<table class="table table-bordered" cellpadding=0 cellspacing=10>
	<tr>
		<th> <?php echo lang('index_fname_th');?>
</th>
		<th> <?php echo lang('index_lname_th');?>
</th>
		<th> <?php echo lang('index_email_th');?>
</th>
		<th> <?php echo lang('index_groups_th');?>
</th>
		<th> <?php echo lang('index_status_th');?>
</th>
		<th> <?php echo lang('index_action_th');?>
</th>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
		<tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
            
           
  	<td>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->groups, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
        <a href="<?php echo base_url();?>
admin/auth/edit_group/<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
 </a> <br />
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </td>
                <td><?php if ($_smarty_tpl->tpl_vars['user']->value->active) {?>                         
                            <a href="<?php echo base_url();?>
admin/auth/deactivate/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
" class="btn btn-success"><?php echo lang('index_active_link');?>
 </a> <br />     
                        <?php } else { ?>
                            <a href="<?php echo base_url();?>
admin/auth/activate/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
" class="btn btn-danger"><?php echo lang('index_inactive_link');?>
 </a> <br />                                 
                        <?php }?>
                 <td>

                      <?php if (strpos($_smarty_tpl->tpl_vars['user']->value->email,'dane.gov.co')) {?> 
                         <a href="#" class="btn btn-warning disabled ">Edit</a> <br />
                      <?php } else { ?>
                        <a href="<?php echo base_url();?>
admin/auth/edit_user/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
" class="btn btn-warning">Edit</a> <br />
                      <?php }?>

                                                         
                        
                    </td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<p><a href="<?php echo base_url();?>
admin/auth/create_user/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
" class="btn btn-info"><?php echo lang('index_create_user_link');?>
</a> | <a href="<?php echo base_url();?>
admin/auth/create_group/<?php echo $_smarty_tpl->tpl_vars['idmenu']->value;?>
" class="btn btn-primary"><?php echo lang('index_create_group_link');?>
</a></p>

           <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
