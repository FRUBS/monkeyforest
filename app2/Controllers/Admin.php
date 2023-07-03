<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        echo view('/admin/layoutadmin/header');
        echo view('/admin/layoutadmin/footer');
        return view('/admin/home_admin');
    }
}
