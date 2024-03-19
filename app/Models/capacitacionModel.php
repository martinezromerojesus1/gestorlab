<?php

namespace App\Models;

use CodeIgniter\Model;

class capacitacionModel extends Model
{
    protected $table = 'capacitacion'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idcapacitacion';
    protected $allowedFields = ['nombre', 'duracion', 'descripcion', 'instructor', 'clave']; // Campos permitidos para ser insertados o actualizados
}