<?php
/* Smarty version 3.1.30, created on 2017-03-30 19:52:05
  from "/var/www/codeigniter/application/views/templates/admin/auth/deactivate_user.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dda835156979_09575629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b9e5ce451cf0a661d2041a845ffbbf2c589829' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/auth/deactivate_user.htm',
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
function content_58dda835156979_09575629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p><?php echo sprintf(lang('deactivate_subheading'),sprintf("%s",$_smarty_tpl->tpl_vars['user']->value->username));?>
</p>

<?php echo form_open(("admin/auth/deactivate/").($_smarty_tpl->tpl_vars['user']->value->id));?>


  <p>
  	<?php echo lang('deactivate_confirm_y_label','confirm');?>

    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php echo lang('deactivate_confirm_n_label','confirm');?>

    <input type="radio" name="confirm" value="no" />
  </p>

  <?php echo form_hidden($_smarty_tpl->tpl_vars['csrf']->value);?>

  

  <?php echo form_hidden(array('id'=>$_smarty_tpl->tpl_vars['user']->value->id));?>



  <p><?php echo form_submit($_smarty_tpl->tpl_vars['button']->value);?>
</p>

	<?php echo form_close();?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
