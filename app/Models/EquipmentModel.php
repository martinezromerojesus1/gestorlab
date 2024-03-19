<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model
{
    protected $table = 'equipo'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idequipo';
    protected $allowedFields = ['idequipo', 'nombreeq', 'modelo', 'descripcionequi', 'laboratorio3_idlaboratorio']; // Campos permitidos para ser insertados o actualizados
}
