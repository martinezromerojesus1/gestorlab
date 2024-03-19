<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\DataModel;
use CodeIgniter\Email\Email;

class docenteController extends Controller{

    public function reservaLabDocente(){
        return view('Cuerpos/reservaLabDocente');
    }
    
    public function reservaEqDocente(){
        return view('Cuerpos/reservaEqDocente');
    }
    public function indeex(){
        $user= new DataModel();
        $datos['datis']=$user->orderBy('nombre','ASC')->findAll();
        return view('Cuerpos/docenteNotis',$datos);
    }

    public function notis(){
        $user= new DataModel();
        $datos['datis']=$user->orderBy('nombre','ASC')->findAll();
        return view('Cuerpos/alumnoNotis',$datos);
    }


}
