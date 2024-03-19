<?php

namespace App\Controllers;

use App\Models\capacitacionModel;
use CodeIgniter\Controller;

class Capacitacion extends Controller
{
    public function index()
    {
        return view('Cuerpos/capacitacion');
    }
    public function guardar()
{
    $capacitacionModel = new capacitacionModel();

    $data = [
        'nombre' => $this->request->getPost('nombre'),
        'duracion' => $this->request->getPost('duracion'),
        'descripcion' => $this->request->getPost('descripcion'),
        'instructor' => $this->request->getPost('instructor'),
        'clave' => $this->request->getPost('clave')
    ];

    $capacitacionModel->insert($data);

    return redirect()->to(base_url('alumno')); // Redireccionar a la página de alumno
}

}
