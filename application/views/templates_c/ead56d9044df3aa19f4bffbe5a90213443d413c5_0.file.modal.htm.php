<?php
/* Smarty version 3.1.30, created on 2017-03-30 14:35:24
  from "/var/www/codeigniter/application/views/templates/admin/tema/modal.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd5dfc1a5137_86978910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead56d9044df3aa19f4bffbe5a90213443d413c5' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/tema/modal.htm',
      1 => 1479835276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dd5dfc1a5137_86978910 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><b>Mensaje</b></h4>
            </div>
            
            <div class="modal-body" id="myModalBody">
                
                <?php if (empty($_SESSION['message'])) {?>
                <div id="alert-msg"></div>
                <?php } else { ?>                
                <div id="alert-msg"><?php echo $_SESSION['message'];?>
</div>
                <?php }?>
            </div>
            <div class="modal-footer">
                <input class="btn btn-default" id="delConfirmBtn" type="button" data-dismiss="modal" value="Close" />
            </div>

        </div>
    </div>
</div>
<?php }
}
