<?php
/* Smarty version 3.1.30, created on 2017-04-01 12:41:07
  from "/var/www/codeigniter/application/modules/views/admin/auth/login.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfe6339e9182_59477432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8356805e953058b07dd12dc32e40ed883cb6359' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/admin/auth/login.htm',
      1 => 1479835267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/auth/header.htm' => 1,
    'file:admin/auth/footer.htm' => 1,
  ),
),false)) {
function content_58dfe6339e9182_59477432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/auth/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		<h2 class='form-signin-heading'>Administrador de Contenidos</h2><br><br>
		<p><?php echo lang('login_subheading');?>
</p>



		<?php echo form_open("auth/login");?>


		  <p>
		    <?php echo lang('login_identity_label','identity');?>

		    <?php echo form_input($_smarty_tpl->tpl_vars['identity']->value);?>
<div id="error"><?php echo form_error('identity');?>
</div><br>
		  </p>

		  <p>
		    <?php echo lang('login_password_label','password');?>

		    <?php echo form_input($_smarty_tpl->tpl_vars['password']->value);?>
<div id="error"><?php echo form_error('password');?>
</div><br>
		  </p>

		  <p>
		    <?php echo lang('login_remember_label','remember');?>

		    <?php echo form_checkbox('remember','1',FALSE,'id="remember"');?>

		  </p>


		  <p><?php echo form_submit($_smarty_tpl->tpl_vars['button']->value);?>
</p>

		<?php echo form_close();?>


		<p><a href="forgot_password"><?php echo lang('login_forgot_password');?>
</a></p>

  <?php $_smarty_tpl->_subTemplateRender("file:admin/auth/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
