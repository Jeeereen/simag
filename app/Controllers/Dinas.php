<?php

namespace App\Controllers;

use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;

class Dinas extends BaseController
{


    protected $dinasModel;
    public function __construct()
    {
        $this->dinasModel = new \Myth\Auth\Models\UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Dinas',
            'dinas' => $this->dinasModel->findAll()
        ];
        return view('dinas/index', $data);
    }
    public function detail()
    {

        $data = [
            'title' => 'Detail Dinas',
        ];
        return view('dinas/index', $data);
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Pengaturan Akun'
        ];
        return view('dinas/pengaturan', $data);
    }
}
