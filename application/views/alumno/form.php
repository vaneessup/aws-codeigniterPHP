<div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="http://3.95.222.181/crudmysqlcodeigniter/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Roboto" !important;
        }
    </style>

    <title>Nuevo usuario</title>
</head>


    <form action="<?php echo $accion ?>" method="post">

        <?php  
        if(isset($resul))
        {
        $nombre = $resul[0]->nombre;
        $apellido = $resul[0]->apellido;
        $direccion = $resul[0]->direccion;
        $telefono = $resul[0]->movil;
        $correo= $resul[0]->email;
        $dpi= $resul[0]->dpi;
        $estado=$resul[0]->inactivo;
        }
        else
        {
            $nombre = "";
            $apellido = "";
            $direccion = "";
            $telefono = "";
            $correo= "";
            $dpi="";
            $estado="";

        }
        ?>
<body style="background-color: #EAF2F8;">
<div class ="container">
<h1 class="mt-5">Nuevo usuario</h1>
    <div class="col-lg-6"> 
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre?>" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Apellidos:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $apellido?>" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $direccion?>" required="true">
        </div>
        <div class="form-group">
            <label for="">Telefono:</label>
            <input type="text" name="movil" id="movil" class="form-control" value="<?php echo $telefono?>" maxlength="8" required="true">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label for="">Correo electronico:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="example@correo.com" value="<?php echo $correo?>" required="true">
        </div>
    
        <div class="form-group">
            <label for="">DPI:</label>
                <input type="text" name="dpi" id="dpi" class="form-control" pattern="[0-9]{4}-[0-9]{5}-[0-9]{4}" placeholder="XXXX-XXXXX-XXXX" value="<?php echo $dpi?>" required="true">
        </div>
        <div class="form-group">
            <label for="">Estado:</label>
            <select name="inactivo" id="inactivo" class="form-control chosen-select">
                <option value="" <?php if($estado==NULL) echo 'selected'?>  >Seleccionar una opcion... </option>
                <option value="0 "<?php if($estado==0) echo 'selected'?>>Activa</option>
                <option value="1"<?php if($estado==1) echo 'selected'?>>Inactiva</option>
            </select>
        </div>
        <br>
        </div>
    <div class="col-lg-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <ion-icon name="save-outline"></ion-icon> Guardar
            </button>
            <button type="button" class="btn btn-default" onclick="location.href='<?= site_url('alumnosController/') ?>'">
                <ion-icon name="exit-outline"></ion-icon>
                Regresar
            </button>
        </div>
    </div>
</div>

</form>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

</div>
    </div>
    </body>