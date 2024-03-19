<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\RouteGroup;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('SigninController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'SigninController::index');
// Rutas del controlador de autenticación

//$routes->get('login', 'Usuario::indwex');
//$routes->post('login', 'Usuario::autenticar');
$routes->get('usuarios', 'Usuario::index');







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
//Rutas



$routes->get('reservaLabDocente', 'res::indieyx');
$routes->get('reservaEqDocente', 'res::indix');
$routes->get('reservadeequipo', 'res::indixAdm');
$routes->get('reservaEqAlumno', 'res::indixAlm');
$routes->post('reserva_equipo', 'res::reservaEquipo');
//$routes->get('obtenerEquiposConLaboratorio', 'res::obtenerEquiposConLaboratorio');

//Admin

$routes->get('reservadelabo', 'res::indiyx');

$routes->get('capacitacion', 'Capacitacion::index');
$routes->get('Solicitudes', 'Usuario::indeex');
$routes->get('docenteNotis', 'docenteController::indeex');
$routes->get('alumnoNotis', 'docenteController::notis');
$routes->get('alta_usuario', 'Usuario::alta_usuario');
$routes->get('reservadelabo', 'Usuario::reservadelabo');
$routes->get('reservadeequipo', 'Usuario::reservadeequipo');
$routes->get('registarequipos', 'Usuario::registarequipos');
$routes->get('registrodelabas', 'Usuario::registrodelabas');
$routes->get('login', 'Usuario::login');
$routes->get('Solicitudes', 'Usuario::Solicitudes');
$routes->get('reservaLabDocente', 'docenteController::reservaLabDocente');
$routes->get('reservaEqDocente', 'docenteController::reservaEqDocente');


//llamar idlab
$routes->get('registrarequipos', 'Equipos::alta_equipo');
//login salir
$routes->get('salir', 'Usuario::logout');


//Editar y borrar
$routes->get('borrar/(:num)', 'Usuario::borrar/$1');
$routes->get('editar/(:num)', 'Usuario::editar/$1');

//enviar un correo al usuario tabla/enviar_correo/
$routes->post('aprobar', 'Usuario::aprobar');
$routes->post('rechazar', 'Usuario::rechazar');
$routes->post('actualizar', 'Usuario::actualizaar');

//Guardar usuarios,laboratorios y equipos y capacitacion.
$routes->post('guardarl', 'guardar::create');
$routes->post('guardar2', 'guardar::formUsuarios');
$routes->post('guardar_laboratorios', 'Laboratory::createe');
$routes->post('guardar_equipo', 'Equipment::createee');
$routes->post('capacitacion_guardar', 'Capacitacion::guardar');
//Login
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/alumno', 'SigninController::alumno');
$routes->get('/usuarios', 'SigninController::usuarios');
$routes->get('/docente', 'SigninController::docente');
//Guardar solicitudes de equipos y laboratorios
$routes->post('reserva_laboratorios', 'res::Solicitud_Labo');
$routes->post('reserva_laboratorios', 'res::Solicitud_Labori');
$routes->post('reserva_equipo', 'res::');
//Docente y alumno
$routes->post('Solicitar_dato/(:num)', 'res::Datos_Labo/$1');
//Buscadores
$routes->post('solicitud/buscar', 'Usuario::buscar');
$routes->post('Usuario/buscar', 'Usuario::buscaar');

$routes->post('laboratorio/buscar', 'res::buscar_Docente');
$routes->post('laboratorio/buscaar', 'res::buscar_Admin');
$routes->post('Equipo/buscar', 'res::buscar_Equipo');
$routes->post('Equipo/buscaar', 'res::buscar_EquipoAdm');


///////////////////////////////////////////////////////////////////////
$routes->post('Solicitar_datos/(:num)', 'res::Datos_EquipoAdm/$1');
$routes->post('datoDoc/(:num)', 'res::DatosDoc/$1');
$routes->post('datoAlm/(:num)', 'res::DatosAlm/$1');

//admin
$routes->post('Solicitar_dato/(:num)', 'res::Datos_Laboo/$1');


//Aprobar o Rechazar 
$routes->post('aprobar_dato/(:num)', 'Usuario::aprobar_dato/$1');
$routes->post('rechazar_dato/(:num)', 'Usuario::rechazar_dato/$1');


