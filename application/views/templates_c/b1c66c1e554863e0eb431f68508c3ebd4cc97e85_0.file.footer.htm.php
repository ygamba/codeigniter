<?php
/* Smarty version 3.1.30, created on 2017-03-30 14:53:30
  from "/var/www/codeigniter/application/views/templates/admin/auth/footer.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd623a9dcce2_21176892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c66c1e554863e0eb431f68508c3ebd4cc97e85' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/auth/footer.htm',
      1 => 1479835269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/modal.htm' => 1,
  ),
),false)) {
function content_58dd623a9dcce2_21176892 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
             <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/modal.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-xs-2 col-md-4 col-lg-4">
    </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/js/jquery.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/admin/js/bootstrap.min.js"><?php echo '</script'; ?>
>

   <?php if (isset($_SESSION['message'])) {
echo '<script'; ?>
 type="text/javascript">

    $(window).load(function(){
        $('#myModal').modal('show');
    });

 
<?php echo '</script'; ?>
>

<?php }?>
  </body>
</html>

<?php }
}
