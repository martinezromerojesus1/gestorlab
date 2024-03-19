<?php

namespace App\Controllers;

use App\Models\EquipmentModel;
use CodeIgniter\Controller;
use app\Models\LaboratoryModel;

class Equipment extends Controller
{
    public function createee()
    {
        // Obtener los datos del formulario
        $nombreeq = $this->request->getPost('nombreeq');
        $descripcionequi = $this->request->getPost('descripcionequi');
        $laboratorio3_idlaboratorio = $this->request->getPost('laboratorio3_idlaboratorio');

        // Crear una instancia del modelo y guardar los datos
        $equipmentModel = new EquipmentModel();
        $equipmentData = [
            'nombreeq' => $nombreeq,
            'descripcionequi' => $descripcionequi,
            'laboratorio3_idlaboratorio' => $laboratorio3_idlaboratorio
        ];
        $equipmentModel->insert($equipmentData);

        // Redirigir al usuario a una página de éxito o mostrar un mensaje de éxito
        return redirect()->to('usuarios');
    }
    public function alta_equipo(){
        $user = new LaboratoryModel();
        $datos['datitos'] = $user->orderBy('idlaboratorio','ASC')->findAll();
        return view('registrarequipos', $datos);
    }
}
