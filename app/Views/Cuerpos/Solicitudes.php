<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solicitudes de las reservas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
            .approval {
  border-collapse: collapse; /* Combina los bordes de las celdas adyacentes */
  width: 100%; /* Ajusta el ancho de la tabla al 100% del ancho disponible */
}

thead {
  background-color: #2196F3; /* Color de fondo azul */
  color: white; /* Color de texto blanco */
}
tbody {
  
  color: white; /* Color de texto blanco */
}

th, td {
  padding: 10px; /* Añade espacio alrededor del contenido de las celdas */
  text-align: left; /* Alinea el contenido del texto a la izquierda */
  border: 1px solid #fff; /* Añade bordes finos a las celdas */
}

th:first-child, td:first-child {
  border-left: none; /* Elimina el borde izquierdo de la primera columna */
}

th:last-child, td:last-child {
  border-right: none; /* Elimina el borde derecho de la última columna */
}



a {
  color: #2196F3; /* Color de texto azul para los enlaces */
}
.btn-outline-primary {
  width: 200px;
  height: 50px;
  border-radius: 15px;
  cursor: pointer;
  border-color:#0DB8DE!important;
  color:#0DB8DE;
  margin-top: 30px;
}

button {
  background-color: white; /* Color de fondo blanco */
  color: #2196F3; /* Color de texto azul */
  border: 2px solid #2196F3; /* Añade borde de color azul */
  padding: 5px 10px; /* Añade espacio alrededor del contenido */
}

button:hover {
  background-color: #2196F3; /* Cambia el color de fondo al azul cuando el cursor pasa por encima */
  color: white; /* Cambia el color de texto a blanco cuando*/
}
/* Estilos para el contenedor del formulario */
.search-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 20px auto;
  max-width: 700px;
  background-color: #f5f5f5;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Estilos para la etiqueta */
label {
  font-size: 1.2rem;
  margin-right: 10px;
}

/* Estilos para el input de texto */
input[type="text"] {
  flex-grow: 1;
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 1.2rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Estilos para el botón de búsqueda */
.search-btn {
  margin-left: 10px;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  background-color: #007bff;
  color: #fff;
  font-size: 1.2rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

/* Estilos para el botón de búsqueda al pasar el cursor por encima */
.search-btn:hover {
  background-color: #0069d9;
}

/* Estilos para el botón de búsqueda al hacer clic */
.search-btn:active {
  transform: translateY(1px);
  box-shadow: none;
}

        </style>
    </head>
    <body>
      <form method="post" class="search-bar" action="<?= base_url('solicitud/buscar') ?>">
        <label for="matricula">Buscar usuario por matrícula:</label>
        <input type="text" name="matricula">
        <button type="submit" class="search-btn">Buscar</button>
    </form>

      <div class="col-12 login-btm login-button justify-content-center d-flex">
        <a href="<?= base_url('usuarios'); ?>" type="submit" class="btn btn-outline-primary">Regresar al inicio</a>
      </div>
    <table class="approval">
        <thead>
            <tr>
                <th>id_usuario</th>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Edificio</th>
                <th>Laboratorio</th>
                <th>Equipo de laboratorio</th>
                <th>Fecha</th>
                <th>Salón</th>
                <th>Estatus</th>

                <th>Acción</th>
            </tr>
        </thead>


        <tbody>
        <?php foreach ($datis as $item): ?>
            <tr>
                <td><?= $item['idprestamos'] ?></td>
                <td><?= $item['matricula'] ?></td>
                <td><?= $item['nombre'] ?></td>
                <td><?= $item['edificio'] ?></td>
                <td><?= $item['laboratorio'] ?></td>
                <td><?= $item['equipo'] ?></td>
                <td><?= $item['fecha'] ?></td>
                <td><?= $item['salon'] ?></td>
                <td><?= $item['estatus'] ?></td>

                <td>
                    <form action="<?php echo base_url('aprobar_dato/'.$item['idprestamos']); ?>" method="post">
                            <button type="submit" name="accion" value="aprobar">Aprobar</button>
                        </form>
                        <form action="<?php echo base_url('rechazar_dato/'.$item['idprestamos']); ?>" method="post">
                            <button type="submit" name="accion" value="rechazar">Rechazar</button>
                        </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
        
    </table>

        <script></script>
    </body>
</html>