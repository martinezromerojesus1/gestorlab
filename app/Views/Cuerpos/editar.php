<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <title>Editar usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="app/Views/Cuerpos/ccc.css" rel="stylesheet">
    <style>
        body {
    background-color: #071014;
    background-image: -webkit-linear-gradient(160deg, #071014 0%, #0db8de 100%);
    background-image: -moz-linear-gradient(160deg, #071014 0%, #0db8de 100%);
    background-image: -o-linear-gradient(160deg, #071014 0%, #0db8de 100%);
    background-image: linear-gradient(160deg, #003b5c 0%, #003b5c 100%);
    font-family: 'Arial', sans-serif;
    height: 100vh;
}

.login-box {
    margin-top: 175px;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    border-radius: 15px;
}

.login-title {
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 35px;
    font-weight: bold;
    color: #0DB8DE;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    outline: 0;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-radius: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin: 10px;
}

.form-control:focus {
    box-shadow: none;
    background-color: #1A2226;
    color: #ECF0F5;
}

.form-control-label {
    font-size: 15px;
    color: #ffffff;
    letter-spacing: 1px;
}
label {
    font-size: 15px;
    color: #ffffff;
    letter-spacing: 1px;
}

.btn-outline-primary {
    width: 200px;
    height: 50px;
    border-radius: 15px;
    cursor: pointer;
    border-color: #0DB8DE !important;
    color: #0DB8DE;
    
}

.btn-outline-primary:hover {
    background-color: #071014 !important;
    background-image: -webkit-linear-gradient(160deg, #071014 0%, #0db8de 100%) !important;
    background-image: -moz-linear-gradient(160deg, #071014 0%, #0db8de 100%) !important;
    background-image: -o-linear-gradient(160deg, #071014 0%, #0db8de 100%) !important;
    background-image: linear-gradient(160deg, #071014 0%, #0db8de 100%) !important;

    color: #ffffff !important;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    padding-left: 0px;
    color: #A2A4A4;
}
</style>


</head>

<body class="d-flex align-items-center">
<div class="container">
<div class="row justify-content-center" style="margin:20px;">
<div class="col-lg-6 col-md-8 login-box">
<div class="col-lg-12 login-title">
Editar
</div>
<div class="col-lg-12 login-form">
<form action="<?= base_url('actualizar')?>" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" value="<?= $datitos['idusuario'];?>" name="id" required>
    </div>

    <div class="form-group">
        <label class="form-control-label">Nombre</label>
        <input type="text" class="form-control" value="<?= $datitos['nombre'];?>" name="nom" required>
    </div>
    <div class="form-group">
        <label class="form-control-label">Matricula</label>
        <input type="text" class="form-control" value="<?= $datitos['matricula'];?>" name="matri" required>
    </div>
    <div class="form-group">
        <label class="form-control-label">Apellido Paterno</label>
        <input type="text" class="form-control" value="<?= $datitos['apellidop'];?>" name="appa" required>
    </div>
    <div class="form-group">
        <label class="form-control-label">Apellido Materno</label>
        <input type="text" class="form-control" value="<?= $datitos['apellidom'];?>" name="apma" required>
    </div>

    <div class="form-group">
        <label class="form-control-label">Gmail</label>
        <input type="text" class="form-control" value="<?= $datitos['correo'];?>" name="gma">
    </div>

    <div class="form-group">
        <label class="form-control-label">Telefono</label>
        <input type="text" class="form-control" value="<?= $datitos['telefono'];?>" name="tel">
    </div>

    <div class="form-group">
        <label class="form-control-label">nss</label>
        <input type="text" class="form-control" value="<?= $datitos['nss'];?>" name="nsa">
    </div>
    
    <div class="form-group">
        <label>Carrera</label>
        <?php $carrera= $datitos['carrera_idcarrera'];
        echo "<select name='carrera'>";
        if($carrera == 1)
        echo "<option selected='true' value='1'>ISTII</option>";
        else
        echo "<option value='1'>ISTII</option>";
            if($carrera == 2)
        echo "<option selected='true' value='2'>IPGI</option>";
        else
        echo "<option value='2'>IPGI</option>";
            if($carrera == 3)
        echo "<option selected='true' value='3'>IAA</option>";
        else
        echo "<option value='3'>IAA</option>
        </select>";
        ?>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="#">
        <label>Rol</label>
        <?php
        $rol = $datitos['rol'];
        echo "<select name='rol'>";
        if ($rol == 1) {
        echo "<option selected='true' value='1'>Administrador</option>";
        } else {
        echo "<option value='1'>Administrador</option>";
        }
        if ($rol == 2) {
        echo "<option selected='true' value='2'>Docente</option>";
        } else {
        echo "<option value='2'>Docente</option>";
        }
        if ($rol == 3) {
        echo "<option selected='true' value='3'>Alumno</option>";
        } else {
        echo "<option value='3'>Alumno</option>";
        }
        echo "</select>";
        ?>
    </div>
    <div class="col-12 login-btm login-button justify-content-center d-flex">
        <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
    </div>
</input>
    </div>
    </form>
    <div class="col-12 login-btm login-button justify-content-center d-flex">
                <a href="<?= base_url('usuarios'); ?>" type="submit" class="btn btn-outline-primary">Regresar al inicio</a>
    </div>   
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>