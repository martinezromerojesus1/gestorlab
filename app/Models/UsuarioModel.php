<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idusuario';
    protected $allowedFields = ['matricula', 'nombre', 'apellidop','apellidom', 'correo', 'passwor', 'correo', 'telefono', 'nss', 'rol', 'carrera_idcarrera'];
    
    public function getUserByUsername($matricula)
    {
        return $this->where('matricula', $matricula)->first();
    }
}




?>