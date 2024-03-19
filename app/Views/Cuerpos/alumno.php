<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">-->
    <title>Datos de los usuarios</title>
    <style>
     
h1 {
  text-align: center;
  font-style: italic;
  color: #CADBFC;
}
.w3-container,
.w3-panel {
    padding: 0.01em 140px
}
h2{
  font-style: italic;
  color: #CADBFC;
}
.approval {
  border-collapse: collapse; /* Combina los bordes de las celdas adyacentes */
  width: 50%;
	position:center;
}

/* Tabla principal */
thead {
  background-color: white; /* Color de fondo azul */
  color: black; /* Color de texto blanco */
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

tr:nth-child(even) {
  background-color: #f2f2f2; /* Cambia el color de fondo de cada otra fila */
}

a {
  color: #2196F3; /* Color de texto azul para los enlaces */
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

/* Interfas del usuario*/

* {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            background-image: linear-gradient(160deg, #071014 0%, #0db8de 100%);
			background-image: linear-gradient(160deg, #003b5c 0%, #003b5c 100%);
			height: 100vh;
        }

        .nav {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            width: 75px;
            inset: 0px 0 0px 0px;
            width: 75px;
            transition: 0.5s;
        }

        .nav.active {
            width: 250px;
        }

        .nav .menu {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 0;
            left: 0;
            padding: 0 23px;
            height: 60px;
            width: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.25);
            cursor: pointer;
        }

        .nav .menu::before {
            content: '';
            position: absolute;
            height: 2px;
            width: 30px;
            background: #000;
            transform: translateY(-8px);
            transition: 0.5s;
        }

        .nav .menu::after {
            content: '';
            position: absolute;
            height: 2px;
            width: 30px;
            background: #000;
            box-shadow: 0 -8px 0 #000;
            transform: translateY(8px);
            transition: 0.5s;
        }

        .nav.active .menu::before {
            transform: translateY(0)rotate(45deg);

        }

        .nav.active .menu:after {
            box-shadow: 0 0 0 #000;
            transform: translateY(0)rotate(-45deg);
        }

        .nav ul {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .nav li {
            position: relative;
            height: 54px;
            width: 100%;
            border: 8px solid transparent;
            border-radius: 12px;
            list-style: none;
            transition: 0.5s;
        }

        .nav ul li.active {
            background: #0db8de ;
            transform: translateX(30px);

            
        }

        .nav ul li::before {
            content: '';
            position: absolute;
            top: -28px;
            right: -10px;
            height: 20px;
            width: 20px;
            background: transparent;
            border-bottom-right-radius: 20px;
            box-shadow: 6px 5px 0 5px #0db8de;
            transform: scale(0);
            transform-origin: bottom right;
            transition: 0.5s;
        }

        .nav ul li.active::before {
            right: 22px;
            transform: scale(1);
        }

        .nav ul li::after {
            content: '';
            position: absolute;
            bottom: -28px;
            right: -10px;
            height: 20px;
            width: 20px;
            background: transparent;
            border-top-right-radius: 20px;
            box-shadow: 6px -3px 0 3px #0db8de;
            transform: scale(0);
            transform-origin: bottom right;
            transition: 0.5s;
        }

        .nav ul li.active::after {
            right: 22px;
            transform: scale(1);
        }

        .nav ul li a {
            position: relative;
            display: flex;
            justify-content: flex-start; 
            text-align: center;
            text-decoration: none;
            width: 100%;
            z-index: 100;
        }

        .nav ul li a .icon {
            position: relative;
            display: block;
            height: 40px;
            min-width: 60px;
            line-height: 38px;
            color: #333;
            border: 6px solid transparent;
            border-radius: 10px;
            font-size: 1.75em;
            transition: 0.5s;
        }

        .nav ul li.active a .icon {
            background: var(--clr);
            color: #fff;
        }

        .nav ul li a .icon::before {
            content: '';
            position: absolute;
            top: 12px;
            left: 0;
            height: 100%;
            width: 100%;
            background: var(--clr);
            opacity: 0;
            filter: blur(8px);
            transition: 0.5s;
        }

        .nav ul li.active a .icon::before {
            opacity: 0.5;
        }

        .nav ul li a .icon::after {
            content: '';
            position: absolute;
            top: 10px;
            left: -60px;
            height: 15px;
            width: 15px;
            background: var(--clr);
            border: 8px solid #000;
            border-radius: 50%;
        }

        .nav ul li a .txt {
            position: relative;
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 15px;
            color: #333;
            opacity: 0;
            visibility: hidden;
            transition: 0.5s;
        }

        .nav.active ul li a .txt {
            visibility: visible;
            opacity: 1;
        }

        .nav ul li.active a .txt {
            color: #fff;
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
      
    <h1>Bienvenido, estás en la vista de 'alumno'</h1>
  <div class="nav">
        <div class="menu"></div>
        <ul>
            <li class="list">
                <a href="<?= base_url('reservaEqAlumno'); ?>" style="--clr:#015655;">
                    <span class="icon"><ion-icon name='today'></ion-icon></span>
                    <span class="txt">Reservar un Equipo</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url('capacitacion'); ?>" style="--clr:#015655;">
                    <span class="icon"><ion-icon name='today'></ion-icon></span>
                    <span class="txt">Capacitación RellenaInfo</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url('alumnoNotis'); ?>" style="--clr:#0015ff;">
                    <span class="icon"><ion-icon name="notifications-outline"></span>
                    <span class="txt">Solicitud de prestamos</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url('salir'); ?>" style="--clr:#6f0202;">
                    <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                    <span class="txt">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </div>
<script>
        let nav = document.querySelector('.nav');
        let menu = document.querySelector('.menu');
        menu.onclick = function () {
            nav.classList.toggle('active')
        }
        let list = document.querySelectorAll('.list');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) =>
            item.addEventListener('click', activeLink));
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</body>
</html>