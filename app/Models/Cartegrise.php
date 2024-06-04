<?php

namespace App\Models;

use CodeIgniter\Model;

class Cartegrise extends Model
{
    protected $table            = 'cartegrise';
    protected $primaryKey       = 'id';

    protected $returnType = 'array';

    protected $allowedFields    = [
        'nom', 'prenom', 'sex','phone',
        'email',
        'NIU','IMCHASSIS', 'IMMODEL', 'IMCYL', 'IMENERGIE', 'IMPUISSANCE', 'genre', 'marque', 'file',
    ];

 

}
