<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class guardar extends Controller
{
    public function create()
    {
        // Obtener los datos del formulario
        $matricula = $this->request->getPost('matri');
        $nombre = $this->request->getPost('nom');
        $apellidop = $this->request->getPost('appa');
        $apellidom = $this->request->getPost('apma');
        $correo = $this->request->getPost('gma');
        $passwor = $this->request->getPost('contra');
        $rol = $this->request->getPost('rol');
        $carrera_idcarrera = $this->request->getPost('carrera');

        $hashedPassword = password_hash($passwor, PASSWORD_DEFAULT);

        // Crear una instancia del modelo y guardar los datos
        $userModel = new UserModel();
        $userData = [
            'matricula' => $matricula,
            'nombre' => $nombre,
            'apellidop' => $apellidop,
            'apellidom' => $apellidom,
            'correo' => $correo,
            'passwor' => substr($hashedPassword, 0, 145),
            'rol' => $rol,
            'carrera_idcarrera' => $carrera_idcarrera
        ];
        $userModel->insert($userData);

        // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito
        return redirect()->to('usuarios');
    }

    public function formUsuarios()
{
    // Obtener los datos del formulario
    $matricula = $this->request->getPost('matri');
    $nombre = $this->request->getPost('nom');
    $apellidop = $this->request->getPost('appa');
    $apellidom = $this->request->getPost('apma');
    $passwor = $this->request->getPost('contra');
    $carrera_idcarrera = $this->request->getPost('carrera');

    // Encriptar la contraseña
    $hashedPassword = password_hash($passwor, PASSWORD_DEFAULT);

    // Crear una instancia del modelo y guardar los datos
    $userModel = new UserModel();
    $userData = [
        'matricula' => $matricula,
        'nombre' => $nombre,
        'apellidop' => $apellidop,
        'apellidom' => $apellidom,
        'passwor' => substr($hashedPassword, 0, 145), // Limitar el hash a 145 caracteres
        'carrera_idcarrera' => $carrera_idcarrera
    ];
    $userModel->insert($userData);

    // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito
    return redirect()->to('login');
}





    
   
}