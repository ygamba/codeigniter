<?php
/* Smarty version 3.1.30, created on 2017-04-01 12:41:11
  from "/var/www/codeigniter/application/modules/views/admin/tema/menus.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfe637d32282_78987768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feeec8394d3385464cbccf9f45ed944866b81e20' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/admin/tema/menus.htm',
      1 => 1479835277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfe637d32282_78987768 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
<?php echo $_SESSION['email'];?>

<b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>
admin/auth/logout"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
<?php }
}
