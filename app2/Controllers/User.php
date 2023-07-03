<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        echo view('/users/layoutuser/header');
        echo view('/users/layoutuser/footer');
        return view('/users/home');
    }
}
