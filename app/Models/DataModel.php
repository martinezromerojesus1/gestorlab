<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'prestamos'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idprestamos';
    protected $allowedFields = ['nombre', 'matricula', 'edificio', 'laboratorio', 'equipo', 'fecha','salon', 'estatus']; // Campos permitidos para ser insertados o actualizados
}
