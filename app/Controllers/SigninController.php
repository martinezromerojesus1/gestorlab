<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('Cuerpos/login');
    }
    public function alumno()
    {
        return view('Cuerpos/alumno');
    }
    
    public function usuarios()
    {
        return view('Cuerpos/usuarios');
    }
    
    public function docente()
    {
        return view('Cuerpos/docente');
    }

    public function loginAuth()
    {
    $session = session();
    $userModel = new UserModel();
    $matricula = $this->request->getVar('matricula');
    $passwor = $this->request->getVar('contra');
    $rol = $this->request->getVar('rol');

    $user = $userModel->where('matricula', $matricula)->first();

    if ($user && password_verify($passwor, $user['passwor'])) {
        $sessionData = [
            'idusuario' => $user['idusuario'],
            'nombre' => $user['nombre'],
            'matricula' => $user['matricula'],
            'rol' => $user['rol'],
            'isLoggedIn' => true
        ];
        $session->set($sessionData);
        if ($user['rol'] == "1") {
            return redirect()->to(base_url('usuarios'));
        } elseif ($user['rol'] == "2") {
            return redirect()->to(base_url('docente'));
        } elseif ($user['rol'] == "3") {
            return redirect()->to(base_url('alumno'));
        } else {
            return redirect()->to(base_url('login'));
        }
    } else {
        $session->setFlashdata('msg', 'Matrícula o contraseña incorrecta.');
        return redirect()->to(site_url('login'));
    }
}


}
