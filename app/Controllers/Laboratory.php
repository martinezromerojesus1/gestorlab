<?php

namespace App\Controllers;

use App\Models\LaboratoryModel;
use CodeIgniter\Controller;

class Laboratory extends Controller
{
    public function createe()
    {
        // Obtener los datos del formulario
        $nombrelabo = $this->request->getPost('nombre');
        $ubicacion = $this->request->getPost('tipo');
        $salon = $this->request->getPost('salon');

        // Crear una instancia del modelo y guardar los datos
        $laboratoryModel = new LaboratoryModel();
        $laboratoryData = [
            'nombrelabo' => $nombrelabo,
            'ubicacion' => $ubicacion,
            'salon' => $salon
        ];
        $laboratoryModel->insert($laboratoryData);

        // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito
        return redirect()->to('usuarios');
    }
}
