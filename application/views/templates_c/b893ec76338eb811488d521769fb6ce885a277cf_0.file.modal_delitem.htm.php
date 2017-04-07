<?php
/* Smarty version 3.1.30, created on 2017-04-01 12:41:15
  from "/var/www/codeigniter/application/modules/views/admin/tema/modal_delitem.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfe63baee6d9_64187037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b893ec76338eb811488d521769fb6ce885a277cf' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/admin/tema/modal_delitem.htm',
      1 => 1479835276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfe63baee6d9_64187037 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="myModalDel" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><b>Mensaje</b></h4>
            </div>
            
            <div class="modal-body" id="myModalBody">
                
                <div id="alert-msg">¿Desea eliminr este item?</div>

            </div>
            <div class="modal-footer">
                <input class="btn btn-default" type="button" data-dismiss="modal" value="Cancelar" />
                <a href="#" id="delConfirmBtn" class="btn btn-danger"><i class="icon-trash"></i> Delete</a>
            </div>

        </div>
    </div>
</div>
<?php }
}
