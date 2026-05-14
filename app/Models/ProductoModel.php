<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
         'codigo_productos',
         'nombre_productos', 
         'precio_productos', 
         'stock_actual'
    ];

}