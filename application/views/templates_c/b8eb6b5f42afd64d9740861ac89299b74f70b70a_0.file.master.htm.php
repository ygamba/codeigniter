<?php
/* Smarty version 3.1.30, created on 2017-04-01 12:41:15
  from "/var/www/codeigniter/application/modules/views/contenidos/master.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfe63bacf047_54454566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8eb6b5f42afd64d9740861ac89299b74f70b70a' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/contenidos/master.htm',
      1 => 1479835273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/header.htm' => 1,
    'file:admin/tema/modal_delitem.htm' => 1,
    'file:admin/tema/footer.htm' => 1,
  ),
),false)) {
function content_58dfe63bacf047_54454566 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/codeigniter/application/third_party/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    $(function () {
      $('.remove-item').click(function () {
        $("#delConfirmBtn").attr("href", $(this).attr("href"));
        $('#myModalDel').modal('show');
        return false;
      });
    });
<?php echo '</script'; ?>
>
<table class="table table-bordered" cellpadding=0 cellspacing=10>
	<tr>
		<th> Titulo</th>
               
                <th> Fecha Creación</th> 
                <th class="tit-opcion-admin" colspan="2"> <a href="<?php echo $_smarty_tpl->tpl_vars['linkCrear']->value;?>
" class="btn btn-info nuevo-item" >Crear Nuevo Contenido</a></th>
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
                      
            <td class="tit-opcion-admin" >
                <a href="<?php echo $_smarty_tpl->tpl_vars['linkEditar']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_contenido;?>
" class="btn btn-warning">Editar</a> <br />                        
            </td>
             <td class="tit-opcion-admin" >
                <a href="<?php echo $_smarty_tpl->tpl_vars['linkEliminar']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_contenido;?>
" class="remove-item btn btn-danger">Eliminar</a> <br />                        
            </td>
            </tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<?php echo $_smarty_tpl->tpl_vars['links']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/tema/modal_delitem.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
