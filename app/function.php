<?php

$koneksi = mysqli_connect("localhost", "root", "", "mfs");

// login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($koneksi, "select * from auth_groups where id='$id', and name='$name");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['name'];

        if ($role == 'admin') {
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'admin';
            header('location:admin');
        } else {
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'user';
            header('location:users');
        }
    } else {
        echo 'Data tidak ditemukan';
    }
};
