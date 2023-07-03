<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        // echo view('/users/layoutuser/header');
        // echo view('/users/layoutuser/footer');
        return view('/users/home');
    }

    public function homepage()
    {
        // echo view('/users/layoutuser/header');
        // echo view('/users/layoutuser/footer');
        return view('/users/homepage');
    }

    public function monkeyforest()
    {
        // echo view('/users/layoutuser/header');
        // echo view('/users/layoutuser/footer');
        return view('/users/mf/monkeyforest');
    }

    public function blancomuseum()
    {
        // echo view('/users/layoutuser/header');
        // echo view('/users/layoutuser/footer');
        return view('/users/bm/blancomuseum');
    }

    public function tanahgajah()
    {
        // echo view('/users/layoutuser/header');
        // echo view('/users/layoutuser/footer');
        return view('/users/tg/tanahgajah');
    }

    public function gallerymf()
    {
        $db = db_connect();
        $data = [
            'gallery' => $db->table('gallery')
                ->select('*')
                ->get()
                ->getResult()
        ];
        return view('/users/mf/gallery', $data);
    }

    public function denah()
    {
        echo view('/users/denah');
    }
}
