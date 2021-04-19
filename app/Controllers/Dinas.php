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
            'dinas' => $this->dinasModel->findAll(),
            'pager' => $this->dinasModel->pager,
        ];
        return view('dinas/index', $data);
    }
}
