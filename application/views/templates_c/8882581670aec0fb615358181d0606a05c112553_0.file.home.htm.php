<?php
/* Smarty version 3.1.30, created on 2017-03-30 14:39:52
  from "/var/www/codeigniter/application/views/templates/home.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd5f08a4a9e1_72830085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8882581670aec0fb615358181d0606a05c112553' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/home.htm',
      1 => 1490896307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd5f08a4a9e1_72830085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>

<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>


<p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>




<img src="<?php echo base_url();?>
userfiles/images/construccion.gif">
<br><br><br><br>

<p>Version <?php echo CI_VERSION;?>
</p>
</body>
</html>

<?php }
}
