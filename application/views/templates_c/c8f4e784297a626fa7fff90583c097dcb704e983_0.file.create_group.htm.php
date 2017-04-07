<?php
/* Smarty version 3.1.30, created on 2017-03-30 20:00:47
  from "/var/www/codeigniter/application/views/templates/admin/auth/create_group.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ddaa3f291788_63414495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8f4e784297a626fa7fff90583c097dcb704e983' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/auth/create_group.htm',
      1 => 1479835271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/header.htm' => 1,
    'file:admin/tema/footer.htm' => 1,
  ),
),false)) {
function content_58ddaa3f291788_63414495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<p><?php echo lang('create_group_subheading');?>
</p>



<?php echo form_open("admin/auth/create_group");?>


      <p>
            <?php echo lang('create_group_name_label','group_name');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['group_name']->value);?>
<div id="error"><?php echo form_error('group_name');?>
</div><br>
      </p>

      <p>
            <?php echo lang('create_group_desc_label','description');?>
 <br />
            <?php echo form_input($_smarty_tpl->tpl_vars['description']->value);?>
<div id="error"><?php echo form_error('description');?>
</div><br>
      </p>

      <p><?php echo form_submit($_smarty_tpl->tpl_vars['button']->value);?>
</p>

<?php echo form_close();?>


  <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
