<?php
/* Smarty version 3.1.30, created on 2017-03-30 22:30:18
  from "/var/www/codeigniter/application/views/templates/revista/master.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ddcd4aa56be9_34035146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9ad44942aff8a46cf04dac5d57b4bdbfb80c7a' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/revista/master.htm',
      1 => 1490931015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ddcd4aa56be9_34035146 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/codeigniter/application/third_party/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>
assets/admin/images/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <!--    <link href="<?php echo '<?php ';?>echo base_url() <?php echo '?>';?>assets/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="<?php echo base_url();?>
assets/admin/css/bootstrap-datetimepicker.css" rel="stylesheet" />	

    <link href="<?php echo base_url();?>
assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>
assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>
assets/admin/css/overcast/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css"  />
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/calendar/lib/jquery.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/js/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/js/jquery-ui-1.10.4.custom.min.js"><?php echo '</script'; ?>
>	
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
libs/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo base_url();?>
libs/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>-->
    
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/additional-methods.min.js"><?php echo '</script'; ?>
>
    

</head>

<body>

 <H1>Prueba Tabla Contenidos en Revista</H1>   
<table class="table table-bordered" cellpadding=0 cellspacing=10>
	<tr>
		<th> Titulo</th>
               
                <th> Fecha Creación</th> 
               
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
	    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->titulo;?>
 </td>
            
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['categoria']->value->fechac,"%A, %B %e, %Y");?>
</td>
                      
            
            </tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>


<a href="<?php echo base_url();?>
">regresar</a>

</body>
</html>

<?php }
}
