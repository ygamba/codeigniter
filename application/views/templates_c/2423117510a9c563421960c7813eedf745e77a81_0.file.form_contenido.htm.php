<?php
/* Smarty version 3.1.30, created on 2017-03-30 22:23:24
  from "/var/www/codeigniter/application/views/templates/contenidos/form_contenido.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ddcbac11c9a3_14686808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2423117510a9c563421960c7813eedf745e77a81' => 
    array (
      0 => '/var/www/codeigniter/application/views/templates/contenidos/form_contenido.htm',
      1 => 1479835273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/tema/header.htm' => 1,
    'file:admin/tema/footer.htm' => 1,
  ),
),false)) {
function content_58ddcbac11c9a3_14686808 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/codeigniter/application/third_party/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->_subTemplateRender("file:admin/tema/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<form action="" id="frm_formato" name="frm_formato" method="post" enctype="multipart/form-data">

    <div class="row">
    <div class='col-md-12'>
        <div class="form-group">
            <label>Titulo del del curso</label><br />
            <input type="text" name="titulo" id="titulo" class ="form-control" value='<?php echo $_smarty_tpl->tpl_vars['data']->value->titulo;?>
' required />
            <div style="color: #F60808"><?php echo form_error('titulo');?>
</div>
        </div>
    </div>
    <div class='col-md-12'>
        <div class="form-group">
            <label>Contenido Padre</label><br />
            <select name="padre" id="padre" class ='form-control'>
            <option value="">Selecciona Uno...</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['padres']->value,'selected'=>$_smarty_tpl->tpl_vars['data']->value->id_padre),$_smarty_tpl);?>

            </select>
        </div>
        <div style="color: #F60808"><?php echo form_error('padre');?>
</div>
    </div>
   <div class='col-md-12'>
        <div class="form-group">
            <label>Descripción del Contenido</label><br />
            <textarea name="descripcion" id="descripcion" class ="form-control"  required/><?php echo $_smarty_tpl->tpl_vars['data']->value->descripcion;?>
</textarea>
        </div>
       <div style="color: #F60808"><?php echo form_error('descripcion');?>
</div>
    </div>
   
  
   
    <div class='col-md-6'>
        <div class="form-group">
            <input class="btn btn-success" type="submit" value="Enviar" name="enviar">
        </div>
    </div>
    <input type="hidden" name="contenido" id="contenido" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_contenido;?>
">
</div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:admin/tema/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
   //<![CDATA[
    CKEDITOR.replace('descripcion', {"toolbar": "Full", 
"language": "es", 
"filebrowserBrowseUrl": "<?php echo base_url();?>
lib/ckfinder/ckfinder.html", 
"filebrowserImageBrowseUrl": "<?php echo base_url();?>
libs/ckfinder/ckfinder.html?type=Images", 
"filebrowserFlashBrowseUrl": "<?php echo base_url();?>
libs/ckfinder/ckfinder.html?type=Flash", 
"filebrowserUploadUrl": "<?php echo base_url();?>
libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files", 
"filebrowserImageUploadUrl": "<?php echo base_url();?>
libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images", 
"filebrowserFlashUploadUrl": "<?php echo base_url();?>
libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"});

//]]>
<?php echo '</script'; ?>
><?php }
}
