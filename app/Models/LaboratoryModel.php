<?php

namespace App\Models;

use CodeIgniter\Model;

class LaboratoryModel extends Model
{
    protected $table = 'laboratorio'; // Nombre de la tabla en la base de datos
    protected $allowedFields = ['idlaboratorio','nombrelabo', 'ubicacion', 'salon']; // Campos permitidos para ser insertados o actualizados
}
