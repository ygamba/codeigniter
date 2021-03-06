<?php
/* Smarty version 3.1.30, created on 2017-04-20 08:17:51
  from "/var/www/codeigniter/application/modules/views/revista/master.htm" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f8b4ff903181_55708987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e9cc529a018cbb47e1d058854ab575e6d55b44' => 
    array (
      0 => '/var/www/codeigniter/application/modules/views/revista/master.htm',
      1 => 1492670819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f8b4ff903181_55708987 (Smarty_Internal_Template $_smarty_tpl) {
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
    
    <link href="<?php echo base_url();?>
assets/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"  />    
    <link href="<?php echo base_url();?>
assets/datatables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"  />    
    
    
    
    
     <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/datatables/js/jquery.js"><?php echo '</script'; ?>
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
assets/datatables/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/datatables/js/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/datatables/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/datatables/extensions/Buttons/js/dataTables.buttons.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/datatables/extensions/Buttons/js/buttons.bootstrap.min.js"><?php echo '</script'; ?>
> 
    
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/additional-methods.min.js"><?php echo '</script'; ?>
>
    
<?php echo '<script'; ?>
>		
		$(document).on("ready", function(){
			listar();
		});

		var listar = function(){
                  
                   var path = '<?php echo base_url();?>
';  
		   var table = $("#dt_cliente").DataTable({
				"ajax":{
					"method":"POST",				
					"url":""+path + "revista/lista",
                    "dataSrc": ""
				},
				"columns":[
                                        {"data":["id_contenido"]},
					{"data":["titulo"]},
					{"data":["descripcion"]},
                                        {"defaultContent":"<button type='button' class='editar btn btn-primary' ><i class='fa fa-pencil-square-o'></i></button>	<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
				],
                                "language":idioma_español,
                       
			});
                        
                        $('#dt_cliente tfoot th').each( function () {
                        var title = $(this).text();
                        $(this).html( '<input type="text" placeholder="Busqueda '+title+'" />' );
                    } );

                    table.columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change', function () {   
                          
                            
                            if ( that.search() !== this.value ) {
                                
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        } );
                    } );    
    
     $('#dt_cliente tfoot tr').appendTo('#dt_cliente thead');
		}
                
                
                
                var idioma_español= {
                      "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    
                }

 

    // Apply the search
    



	<?php echo '</script'; ?>
>
    
    
</head>

<body>

    
<div class="row fondo">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<h1 class="text-center text-uppercase">Prueba Tabla Contenidos en Revista</h1>
		</div>
	</div>
	
	<div class="row">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12" style="display:none">
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<h3 class="col-sm-offset-2 col-sm-8 text-center">					
					Formulario de Registro de Usuarios</h3>
				</div>
				<input type="hidden" id="idusuario" name="idusuario" value="0">
				<input type="hidden" id="opcion" name="opcion" value="registrar">
				<div class="form-group">
					<label for="titulo" class="col-sm-2 control-label">titulo</label>
					<div class="col-sm-8"><input id="titulo" name="titulo" type="text" class="form-control"  autofocus></div>				
				</div>
				<div class="form-group">
					<label for="descripcion" class="col-sm-2 control-label">descripcion</label>
					<div class="col-sm-8"><input id="descripcion" name="descripcion" type="text" class="form-control" ></div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input id="" type="submit" class="btn btn-primary" value="Guardar">
						<input id="btn_listar" type="button" class="btn btn-primary" value="Listar">
					</div>
				</div>
			</form>
			<div class="col-sm-offset-2 col-sm-8">
				<p class="mensaje"></p>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>			
                                                        <th>ID</th>
							<th>Titulo</th>
							<th>Descripcion</th>
							
							<th>Editar | Eliminar</th>											
						</tr>
					</thead>					
                                        
                                        <tfoot>
                                                <tr>
                                                        <th>ID</th>
							<th>Titulo</th>
							<th>Descripcion</th>
                
                                                </tr>
                                        </tfoot>
				</table>
			</div>			
		</div>		
	</div>
	<div>
		<form id="frmEliminarUsuario" action="" method="POST">
			<input type="hidden" id="idusuario" name="idusuario" value="">
			<input type="hidden" id="opcion" name="opcion" value="eliminar">
			<!-- Modal -->
			<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h4>
						</div>
						<div class="modal-body">							
							¿Está seguro de eliminar al usuario?<strong data-name=""></strong>
						</div>
						<div class="modal-footer">
							<button type="button" onclick="" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
		</form>
	</div>

</body>
</html>

<?php }
}
