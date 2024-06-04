<?php

namespace App\Models;

use CodeIgniter\Model;

class Carteblue extends Model
{
    protected $table            = 'carteblue';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nom','prenom','sex','phone','email','categorie','NIU','immatriculation','created_at'
    ];

}
