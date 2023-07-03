<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PhotoModel;

class Admin extends BaseController
{
    protected $db, $builder, $adminModel, $photoModel, $photoModel2, $photoModel3;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->adminModel    = new AdminModel();
        $this->photoModel    = new PhotoModel();
        // $this->photoModel2    = new PhotoModel2();
        // $this->photoModel3    = new PhotoModel3();
    }

    public function index()
    {
        $data['title'] = 'Index';
        $this->builder->select('users.id as userid, username, email, name, created_at, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['user'] =  $query->getRow();

        return view('/admin/home_admin', $data);
    }

    public function layout()
    {
        echo view('/admin/layoutadmin/index');
    }

    public function infotablemf()
    {
        // $data['title'] = 'Gallery Table';
        // $this->builder->select('users.id as userid, username, email, name, created_at, user_image');
        // $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // $query = $this->builder->get();

        // $data['users'] =  $query->getResult();

        return view('/admin/monkeyforest/gallery_table');
    }

    public function gallerytablemf()
    {
        // $db = \Config\Database::connect();
        $gallery = $this->photoModel->findAll();
        $data = [
            'title' => 'Gallery Table',
            'gallery' => $gallery
        ];

        return view('/admin/monkeyforest/gallery_table', $data);
    }

    public function addphotomf()
    {
        session();
        $data = [
            'title' => 'Add Photo',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/monkeyforest/addphoto', $data);
    }

    public function savephotomf()
    {
        // $nama = $_FILES['filegambar']['name'];
        // $tempdir = './';
        // $target_path = $tempdir . $nama;
        // move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path');

        if (!$this->validate([
            // 'sampul' => 'required|is_unique[gallery.sampul]',
            'judul' => 'required|is_unique[gallery.judul]',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'sampul' => [
                'rules' => 'uploaded[sampul]|max_size[sampul,8024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg, image/png]',
                'errors' => [
                    'uploaded' => 'Choose the photo first!',
                    'max_sie' => 'Your image size is too big',
                    'is_image' => 'What you select is not an image!',
                    'mime_in' => 'What you select is not an image!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/monkeyforest/gallerytable/addphoto')->withInput()->with('validation', $validation);
            // return redirect()->to('/admin/gallerytable/addphoto')->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');
        $fileSampul->move('../public/uploads/gallery');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->photoModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'sampul' => $namaSampul
        ]);

        return redirect()->to('/admin/monkeyforest/gallerytable');
        // $sampul  = $this->request->getPost('sampul');
        // $judul  = $this->request->getPost('judul');
        // $slug = url_title($this->request->getVar('judul'), '-', true);
        // $kategori = $this->request->getPost('kategori');
        // $deskripsi = $this->request->getPost('deskripsi');
        // $data = [
        //     'sampul' => $sampul,
        //     'judul' => $judul,
        //     'slug' => $slug,
        //     'kategori' => $kategori,
        //     'deskripsi' => $deskripsi
        // ];
        // $result = $this->photoModel->addphoto($data);
        // if ($result) {
        //     echo ("New photo is added successfully.");
        // } else {
        //     echo ("Something went wrong");
        // }
    }

    public function editphotomf($slug)
    {
        $data = [
            'title' => 'Edit Photos',
            'validation' => \Config\Services::validation(),
            'gallery' => $this->photoModel->getPhoto($slug)
        ];

        return view('/admin/monkeyforest/editphoto', $data);
    }

    public function updatephotomf($id)
    {
        $fileSampul = $this->request->getFile('sampul');
        $fileSampul->move('/uploads/gallery');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->photoModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'kategori' => $this->request->getVar('kategori'),
            'sampul' => $namaSampul
        ]);

        return redirect()->to('/admin/monkeyforest/gallerytable');
    }

    public function delphotomf($id)
    {
        $this->photoModel->delete($id);
        return redirect()->to('/admin/monkeyforest/gallerytable');
    }

    public function list()
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $this->builder->select('users.id as userid, username, email, name, created_at, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] =  $query->getResult();

        return view('admin/user_list', $data);
    }

    public function detailUser($id = 0)
    {
        $data['title'] = 'User Details';
        $this->builder->select('users.id as userid, username, email, name, created_at, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] =  $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function delUser($id)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin/list');
    }

    public function profile()
    {
        $data['title'] = 'User Profile';
        $this->builder->select('users.id as userid, username, email, name, created_at, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['user'] =  $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/profile', $data);
    }

    public function notfound()
    {
        echo view('/admin/pages-error-404');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
