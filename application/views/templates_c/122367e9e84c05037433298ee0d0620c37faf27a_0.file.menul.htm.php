<?php
/* Smarty version 3.1.30, created on 2017-04-01 12:41:11
  from "/var/www/codeigniter/application/modules/views/admin/tema/menul.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dfe637e34b21_23288541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '122367e9e84c05037433298ee0d0620c37faf27a' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/admin/tema/menul.htm',
      1 => 1490930590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfe637e34b21_23288541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <p style="color:#fff">::Administrador de Contenidos::</p>            
        </li>           
        <li>
            <a href="<?php echo base_url();?>
admin/auth"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
        </li>			

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listado']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?> 
            <?php if ($_smarty_tpl->tpl_vars['menu']->value->tipo == 0) {?>
		<?php if ($_smarty_tpl->tpl_vars['menu']->value->id_menu == 2) {?>
		    <li>
		        <a href="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['menu']->value->link;?>
/index/<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value->class;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a>
		    </li>        
		<?php } else { ?>
 <li>
		        <a href="<?php echo base_url();?>
admin/<?php echo $_smarty_tpl->tpl_vars['menu']->value->link;?>
/index/<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value->class;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a>
		    </li>        

		<?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value->tipo == 1) {?>
            <li><a href="javascript:;" data-toggle="collapse" data-target="#demo<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value->class;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
 <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id='demo<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
'  <?php if (isset($_smarty_tpl->tpl_vars['idmenu']->value) && ($_smarty_tpl->tpl_vars['idmenu']->value == $_smarty_tpl->tpl_vars['menu']->value->id_menu)) {?>class=''<?php } else { ?>class='collapse'<?php }?>>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listado']->value, 'lista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value->id_menu == $_smarty_tpl->tpl_vars['lista']->value->tipo) {?>
                <li>
                <a href="<?php echo base_url();?>
admin/<?php echo $_smarty_tpl->tpl_vars['lista']->value->link;?>
/index/<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['lista']->value->class;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['lista']->value->name;?>
</a>
                </li>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ul>
            </li>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
    </ul>
</div>
<?php }
}
