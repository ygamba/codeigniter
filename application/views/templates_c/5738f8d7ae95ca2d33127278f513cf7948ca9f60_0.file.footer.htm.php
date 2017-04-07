<?php
/* Smarty version 3.1.30, created on 2017-03-30 14:35:24
  from "/var/www/codeigniter/application/views/templates/admin/tema/footer.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dd5dfc18e476_28590629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5738f8d7ae95ca2d33127278f513cf7948ca9f60' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/admin/tema/footer.htm',
      1 => 1479835278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/modal.htm' => 1,
  ),
),false)) {
function content_58dd5dfc18e476_28590629 (Smarty_Internal_Template $_smarty_tpl) {
?>
             <?php $_smarty_tpl->_subTemplateRender("file:admin/tema/modal.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Se deja comentariado, debido a que molesta para el uso del Full calendar en el Modulo de Agenda -->

    <!-- <?php echo '<script'; ?>
 src="<?php echo '<?php ';?>echo base_url() <?php echo '?>';?>assets/js/jquery.js"><?php echo '</script'; ?>
> -->
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
