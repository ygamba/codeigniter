<?php
/* Smarty version 3.1.30, created on 2017-03-30 20:00:36
  from "/var/www/codeigniter/application/views/templates/admin/auth/edit_user.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ddaa34b4b446_15292598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12dcee4737206b60bc8617c2a2b87fd9cb7f94d1' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/auth/edit_user.htm',
      1 => 1479835270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/header.htm' => 1,
    'file:admin/tema/footer.htm' => 1,
  ),
),false)) {
function content_58ddaa34b4b446_15292598 (Smarty_Internal_Template $_smarty_tpl) {
?>
           <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p><?php echo lang('edit_user_subheading');?>
</p>

<?php echo form_open(uri_string());?>


      <p>
            <?php echo lang('edit_user_fname_label','first_name');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['first_name']->value);?>
<div id="error"><?php echo form_error('first_name');?>
</div><br>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label','last_name');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['last_name']->value);?>
<div id="error"><?php echo form_error('last_name');?>
</div><br>
      </p>

      <p>
            <?php echo lang('edit_user_company_label','company');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['company']->value);?>
<div id="error"><?php echo form_error('company');?>
</div><br>
      </p>

      <p>
            <?php echo lang('edit_user_phone_label','phone');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['phone']->value);?>
<div id="error"><?php echo form_error('phone');?>
</div><br>
      </p>

      <p>
            <?php echo lang('edit_user_password_label','password');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['password']->value);?>

      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label','password_confirm');?>
<br />
            <?php echo form_input($_smarty_tpl->tpl_vars['password_confirm']->value);?>

      </p>

      <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>

          <h3><?php echo lang('edit_user_groups_heading');?>
</h3>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
              <label class="checkbox">

		<?php $_smarty_tpl->_assignInScope('gID', $_smarty_tpl->tpl_vars['group']->value['id']);
?>
		<?php $_smarty_tpl->_assignInScope('checked', "null");
?>
		<?php $_smarty_tpl->_assignInScope('item', "null");
?>

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentGroups']->value, 'grp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['grp']->value) {
?>
                      <?php if ($_smarty_tpl->tpl_vars['gID']->value == $_smarty_tpl->tpl_vars['grp']->value->id) {?> 
			<?php $_smarty_tpl->_assignInScope('checked', ' checked="checked"');
?>
                      <?php break 1;?> 
                      <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              <input type="checkbox" name="groups[]" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
              <?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>

              </label>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


      <?php }?>

      <?php echo form_hidden('id',$_smarty_tpl->tpl_vars['user']->value->id);?>

      <?php echo form_hidden($_smarty_tpl->tpl_vars['csrf']->value);?>


      <p><?php echo form_submit($_smarty_tpl->tpl_vars['button']->value);?>
</p>

<?php echo form_close();?>


           <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
