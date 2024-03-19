<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuario'; // Nombre de la tabla en la base de datos
    protected $allowedFields = ['matricula', 'nombre', 'apellidop','apellidom', 'correo', 'passwor', 'correo', 'telefono', 'nss', 'rol', 'carrera_idcarrera']; // Campos permitidos para ser insertados o actualizados

    public function getUserByUsername($matricula)
    {
        return $this->where('matricula', $matricula)->first();
    }
}