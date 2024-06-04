<?php

namespace App\Models;

use CodeIgniter\Model;

class Demande extends Model
{
    protected $table            = 'demande';
    protected $primaryKey       = 'Id';
    protected $allowedFields    = [
        'nom','prenom','types', 'NIU','reference','montant_timbre','montant_fisc','status','operation','cartegrise','dte_naissance','lieu_naissance','phone'
    ];

    public function getData()
    {
        return $this->findAll();
    }

}
