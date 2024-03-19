<?php

namespace App\Controllers;

use App\Models\DataModel;
use App\Models\EquipmentModel;
use App\Models\LaboratoryModel;
use CodeIgniter\Controller;


class res extends Controller{

    public function indieyx(){
        $user = new LaboratoryModel();
        $datos['datos'] = $user->orderBy('nombrelabo', 'ASC')->findAll();
        return view('Cuerpos/reservaLabDocente', $datos);
    }
    public function buscar_Docente()
    {
        $model = new LaboratoryModel();
        $nombrelabo = $this->request->getPost('nombrelabo');
        $data['datos'] = $model->like('nombrelabo', $nombrelabo)->findAll();
        return view('Cuerpos/reservaLabDocente', $data);
    }

   

    public function Datos_Labo ($id = null)
    {
        $user = new LaboratoryModel();
        $datos['datos'] = $user->where('idlaboratorio', $id)->first();
        return view('Cuerpos/datosLab', $datos);
    }

     public function Solicitud_Labo()
    {
        // Verifica si se ha enviado el formulario
        if ($this->request->getMethod() === 'post') {
            // Obtiene los datos del formulario
            $matricula = $this->request->getPost('matricula');
            $nombre = $this->request->getPost('nombre');
            $edificio = $this->request->getPost('ubicacion');
            $laboratorio = $this->request->getPost('laboratorio');
            $fecha = $this->request->getPost('fecha');
            $salon = $this->request->getPost('salon');
            
            // Crea una instancia del modelo de datos
            $dataModel = new DataModel();
            
            // Inserta los datos en la base de datos
            $dataModel->insert([
                'matricula' => $matricula,
                'nombre' => $nombre,
                'edificio' => $edificio,
                'laboratorio' => $laboratorio,
                'fecha' => $fecha,
                'salon' => $salon
            ]);
            
            // Redirige a la página de inicio o a donde desees
            return redirect()->to(base_url('/reservadelabo'));
        }
    }
  //Admin
  public function indiyx(){
    $user = new LaboratoryModel();
    $datos['datos'] = $user->orderBy('nombrelabo', 'ASC')->findAll();
    return view('Cuerpos/reservadelabo', $datos);
}

public function buscar_Admin()
{
    $model = new LaboratoryModel();
    $nombrelabo = $this->request->getPost('nombrelabo');
    $data['datos'] = $model->like('nombrelabo', $nombrelabo)->findAll();
    return view('Cuerpos/reservadelabo', $data);
}

public function Datos_Laboo ($id = null)
{
    $user = new LaboratoryModel();
    $datos['datos'] = $user->where('idlaboratorio', $id)->first();
    return view('Cuerpos/datosLab', $datos);
}

 public function Solicitud_Labori()
{
    // Verifica si se ha enviado el formulario
    if ($this->request->getMethod() === 'post') {
        // Obtiene los datos del formulario
        $matricula = $this->request->getPost('matricula');
        $nombre = $this->request->getPost('nombre');
        $edificio = $this->request->getPost('ubicacion');
        $laboratorio = $this->request->getPost('laboratorio');
        $fecha = $this->request->getPost('fecha');
        $salon = $this->request->getPost('salon');
        
        // Crea una instancia del modelo de datos
        $dataModel = new DataModel();
        
        // Inserta los datos en la base de datos
        $dataModel->insert([
            'matricula' => $matricula,
            'nombre' => $nombre,
            'edificio' => $edificio,
            'laboratorio' => $laboratorio,
            'fecha' => $fecha,
            'salon' => $salon
        ]);
        
        // Redirige a la página de inicio o a donde desees
        return redirect()->to(base_url('/reservaLabDoc'));
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////
  //reserva de equipos DOCENTE
  public function indix(){
        $user = new EquipmentModel();
        $datos['datos'] = $user->orderBy('nombreeq', 'ASC')->findAll();
        return view('Cuerpos/reservaEqDocente', $datos);
    }

    public function buscar_Equipo()
    {
        $nombreeq = $this->request->getPost('nombreeq');
        $model = new EquipmentModel();
        $data['datos'] = $model->where('nombreeq', $nombreeq)->findAll();
        return view('Cuerpos/reservaEqDocente', $data);
    }
   //Froms
   public function DatosDoc($id = null)
   {
       $equipoModel = new EquipmentModel();
   
       $datos['datos'] = $equipoModel
           ->select('equipo.idequipo, equipo.nombreeq, laboratorio.nombrelabo')
           ->join('laboratorio', 'laboratorio.idlaboratorio = equipo.laboratorio3_idlaboratorio')
           ->where('equipo.idequipo', $id)
           ->first();
   
       return view('Cuerpos/datosEqDocente', $datos);
   }

//////////////////////////////////////////////////////////////////////////////////////////////////////////
    //reserva de equipos ALUMNO
  public function indixAlm(){
    $user = new EquipmentModel();
    $datos['datos'] = $user->orderBy('nombreeq', 'ASC')->findAll();
    return view('Cuerpos/reservaEqAlumno', $datos);
}

public function buscar_EquipoAlm()
{
    $nombreeq = $this->request->getPost('nombreeq');
    $model = new EquipmentModel();
    $data['datos'] = $model->where('nombreeq', $nombreeq)->findAll();
    return view('Cuerpos/reservaEqAlumno', $data);
}
//Alumno
public function DatosAlm($id = null)
   {
       $equipoModel = new EquipmentModel();
   
       $datos['datos'] = $equipoModel
           ->select('equipo.idequipo, equipo.nombreeq, laboratorio.nombrelabo')
           ->join('laboratorio', 'laboratorio.idlaboratorio = equipo.laboratorio3_idlaboratorio')
           ->where('equipo.idequipo', $id)
           ->first();
   
       return view('Cuerpos/datosEqAlumno', $datos);
   }

//////////////////////////////////////////////////////////////////////////////////////////////////////////
    //reserva de equipos ADMIN
  public function indixAdm(){
    $user = new EquipmentModel();
    $datos['datos'] = $user->orderBy('nombreeq', 'ASC')->findAll();
    return view('Cuerpos/reservadeequipo', $datos);
}

public function buscar_EquipoAdm()
{
    $nombreeq = $this->request->getPost('nombreeq');
    $model = new EquipmentModel();
    $data['datos'] = $model->where('nombreeq', $nombreeq)->findAll();
    return view('Cuerpos/reservadeequipo', $data);
}
//Froms
public function Datos_EquipoAdm($id = null)
{
    $equipoModel = new EquipmentModel();

    $datos['datos'] = $equipoModel
        ->select('equipo.idequipo, equipo.nombreeq, laboratorio.nombrelabo')
        ->join('laboratorio', 'laboratorio.idlaboratorio = equipo.laboratorio3_idlaboratorio')
        ->where('equipo.idequipo', $id)
        ->first();

    return view('Cuerpos/datosEqui', $datos);
}
    
public function reservaEquipo()
    {
        // Validar la solicitud de formulario
        if ($this->request->getMethod() === 'post') {
            // Obtener los datos del formulario
            $nombre = $this->request->getPost('nombre');
            $matricula = $this->request->getPost('matricula');
            $laboratorio = $this->request->getPost('nombrelabo');
            $equipo = $this->request->getPost('nombreeq');
            $fecha = $this->request->getPost('fecha');

            // Crear una instancia del modelo 'DataModel'
            $dataModel = new DataModel();

            // Preparar los datos a insertar
            $datos = [
                'nombre' => $nombre,
                'matricula' => $matricula,
                'laboratorio' => $laboratorio,
                'equipo' => $equipo,
                'fecha' => $fecha,
            ];

            // Insertar los datos en la tabla 'prestamos'
            if ($dataModel->insert($datos)) {
                // Redirigir a una página de éxito o mostrar un mensaje de éxito
                return redirect()->to('reservadeequipo');
            } else {
                // Mostrar un mensaje de error si no se pudo insertar el equipo
                return redirect()->back()->withInput()->with('error', 'Error al reservar el equipo. Por favor, intenta nuevamente.');
            }
        }

        // Si la solicitud no es de tipo 'post' o se produjo un error, volver a cargar la vista del formulario
        return view('Cuerpos/datosEqui');
    }



}

