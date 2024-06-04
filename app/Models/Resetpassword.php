<?php

namespace App\Models;

use CodeIgniter\Model;

class Resetpassword extends Model
{
    protected $table            = 'password_reset_token';
    protected $allowedFields    = ['email','token','created_at'];
}
