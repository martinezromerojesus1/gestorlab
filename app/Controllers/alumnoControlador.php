<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\DataModel;
use CodeIgniter\Email\Email;

class alumnoController extends Controller{
    
    public function reservaEqAlumno(){
        return view('Cuerpos/reservaEqAlumno');
    }
     
    public function indeex(){
        $user= new DataModel();
        $datos['datis']=$user->orderBy('nombre','ASC')->findAll();
        return view('Cuerpos/alumnoNotis',$datos);
    }



}
