<!doctype html>
<html lang="en">

<head>
    <title> Reserva de Equpos </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    
    
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
h4 {
  text-align: center;
  font-style: italic;
  color: #CADBFC;
}

        </style>

</head>

<body>
      <form method="post" class="search-bar" action="<?= base_url('Equipo/buscar') ?>">
        <label for="matricula">Buscar Equipo por nombre:</label>
        <input type="text" name="nombreeq">
        <button type="submit" class="search-btn">Buscar</button>
    </form>

      <div class="col-12 login-btm login-button justify-content-center d-flex">
        <a href="<?= base_url('docente'); ?>" type="submit" class="btn btn-outline-primary">Regresar al inicio</a>
      </div>
      <h4>Lista de los Equipos</h4>
    <table class="approval">
        <thead>
            <tr>
                <th>id_equipo</th>
                <th>Nombre de Equipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion</th>
                <th>id_laboratorio</th>
                <th>Acción</th>
            </tr>
        </thead>


        <tbody>
        <?php foreach ($datos as $item): ?>
            <tr>
                <td><?= $item['idequipo'] ?></td>
                <td><?= $item['nombreeq'] ?></td>
                <td><?= $item['marca'] ?></td>
                <td><?= $item['modelo'] ?></td>
                <td><?= $item['descripcionequi'] ?></td>
                <td><?= $item['laboratorio3_idlaboratorio'] ?></td>

                <td>
                    <form action="<?php echo base_url('datoDoc/'.$item['idequipo']); ?>" method="post">
                        <button type="submit" name="accion" value="aprobar">Solicitar</button>
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