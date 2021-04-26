<?php

namespace App\Controllers;

use App\Models\MagangModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;
use App\Models\NilaiModel;

class Pages extends BaseController
{

    protected $magangModel;
    protected $nilaiModel;
    public function __construct()
    {
        $this->magangModel = new MagangModel();
        $this->nilaiModel = new NilaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }

    public function penilaian()
    {

        $data = [
            'title' => ' Penilaian Magang',
            'magang' => $this->magangModel->getMagang()
        ];
        return view('pages/penilaian', $data);
    }
}
