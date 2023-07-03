<?php

namespace App\Models;

use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email',
        'username'
    ];
}
