<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\DataModel;
use CodeIgniter\Email\Email;

class Usuario extends Controller{
     

    public function logout()
    {
       return view('Cuerpos/login');
    }

    public function index(){
        $user= new UsuarioModel();
        $datos['datitos']=$user->orderBy('matricula','ASC')->findAll();
        return view('Cuerpos/usuarios',$datos);
    }

    

    
//solicitus y buscador
    public function indeex(){
        $user= new DataModel();
        $datos['datis']=$user->orderBy('nombre','ASC')->findAll();
        return view('Cuerpos/Solicitudes',$datos);
    }

    public function buscar()
    {
        $matricula = $this->request->getPost('matricula');

        $model = new DataModel();
        $data['datis'] = $model->where('matricula', $matricula)->findAll();

        return view('Cuerpos/Solicitudes', $data);
    }

    public function buscaar()
    {
        $matricula = $this->request->getPost('matricula');

        $model = new UsuarioModel();
        $data['datitos'] = $model->where('matricula', $matricula)->findAll();

        return view('Cuerpos/usuarios', $data);
    }

    //Aceptar o rechazar
    public function aprobar_dato($idprestamos)
    {
        $dataModel = new \App\Models\DataModel();
        $dataModel->update($idprestamos, ['estatus' => 'Aprobado']);
        return $this->response->redirect(site_url('/Solicitudes'));
    }
    
    public function rechazar_dato($idprestamos)
    {
        $dataModel = new \App\Models\DataModel();
        $dataModel->update($idprestamos, ['estatus' => 'Rechazado']);
        return $this->response->redirect(site_url('/Solicitudes'));
    }
    ////
    //enviar notificacion
    public function rechazar(){
        
    $registro_id = $this->request->getPost('registro_id');
    $this->Modelo->rechazar_registro($registro_id); //actualizar el registro en la base de datos
    $correo = $this->Modelo->obtener_correo_usuario($registro_id); //obtener correo electrónico del usuario
    $mensaje = "Su solicitud ha sido rechazada.";
    $this->enviar_correo($correo, $mensaje); //enviar correo electrónico
    return redirect()->to('mostrar_datos');
}

private function enviar_correo($correo, $mensaje){
    $email = \Config\Services::email(); //crear instancia de correo electrónico
    $email->setTo($correo);
    $email->setSubject('Resultado de la solicitud');
    $email->setMessage($mensaje);
    if($email->send()){
        echo "Correo electrónico enviado.";
    } else {
        echo "No se pudo enviar el correo electrónico.";
    }
}

    //

     

public function alta_usuario(){
    return view('Cuerpos/alta_usuario');
}
 public function reservadelabo(){
    return view('Cuerpos/reservadelabo');
}
 public function reservadeequipo(){
    return view('Cuerpos/reservadeequipo');
}
public function registarequipos(){
    return view('Cuerpos/registarequipos');
}
public function registrodelabas(){
    return view('Cuerpos/registrodelabas');
}
public function Solicitudes(){
    return view('Cuerpos/Solicitudes');
}
public function login(){
    return view('Cuerpos/login');
}
public function usuarios()
{
    return view('Cuerpos/usuarios');
}

public function docentes()
{
    return view('Cuerpos/docentes');
}

public function alumno()
{
    return view('Cuerpos/alumno');
}




 //Lo que  
    public function borrar ($id=null){
        $user = new UsuarioModel();
        $user->where('idusuario',$id)->delete();
        return $this->response->redirect(site_url('/usuarios')); 
    }

     public function editar ($id=null){
        $user = new UsuarioModel();
        $datos['datitos']=$user->where('idusuario', $id)->first();
        return view('Cuerpos/editar',$datos);
    }

    public function actualizaar ($id=null){
        $user = new UsuarioModel();
        $datos=[
            'matricula'=>$this->request->getVar('matri'),
            'nombre'=>$this->request->getVar('nom'),
            'apellidop'=>$this->request->getVar('appa'),
            'apellidom'=>$this->request->getVar('apma'),
            'correo'=>$this->request->getVar('gma'),
            'telefono'=>$this->request->getVar('tel'),
            'nss'=>$this->request->getVar('nsa'),
            'rol'=>$this->request->getVar('rol'),
            'carrera_idcarrera'=>$this->request->getVar('carrera'),
        ];
       
        $id=$this->request->getVar('id');
        $user->update($id,$datos);

        return $this->response->redirect(site_url('/usuarios'));

    }


}


?>