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
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dinas = $this->dinasModel->search($keyword);
        } else {
            $dinas = $this->dinasModel;
        }
        $data = [
            'title' => 'Daftar Dinas',
            'dinas' => $dinas->paginate(6, 'users'),
            'pager' => $this->dinasModel->pager,
            'currentPage' => $currentPage
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
}
