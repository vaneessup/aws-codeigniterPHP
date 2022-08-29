<!doctype html>
<html lang="es">
  <head>
    
  <title><?= $titulo ?></title>
   <!-- Bootstrap CSS -->
   <link rel = "stylesheet" type = "text/css" href = "http://3.95.222.181/crudmysqlcodeigniter/css/style.css">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    <body style="background-color: #EAF2F8;">
</head>
<br>
<div class="container-fluid">
    

    <div class="">
        <div class="">
            <h1 class=""><?= $titulo ?> <a href="<?= site_url('AlumnosController/form') ?>"><button title="Nuevo" class="btn btn-primary"><i class="fa  fa-plus-square-o"><ion-icon name="person-add-outline"></ion-icon></i>Agregar</button></a></h1>      
        </div>
        <!-- /.box-header -->
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>DPI</th>
                    <th>Fecha Creación</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($resultados as $row): ?>
					<tr>
						<td><?= $row->alumno; ?>	</td>
						<td><?= $row->nombre.' '.$row->apellido; ?></td>
						<td><?= $row->direccion; ?>	</td>
						<td><?= $row->movil; ?></td>
						<td><?= $row->email;?></td>
                        <td><?= $row->dpi;?></td>
						<td><?= $row->fecha_creacion; ?></td>
						<td><?= $row->user; ?></td> 
                        <td><?php if($row->inactivo == 0){ echo "Activo"; }else{ echo "Inactivo"; } ?></td>					

                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/eliminar/').$row->alumno; ?>"class="btn btn-danger"><ion-icon name="trash"></ion-icon></a></td>
                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/formActualiza/').$id=$row->alumno;?>"class="btn btn-primary"><ion-icon name="refresh"></ion-icon></a></td>
                        <td class="text-center">
							
						</td>
					</tr>
				<?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>DPI</th>
                    <th>Fecha Creación</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

</div>

<!-- /.box -->