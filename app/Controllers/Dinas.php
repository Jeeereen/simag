<?php

namespace App\Controllers;

use App\Models\DinasModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;

class Dinas extends BaseController
{


    protected $dinasModel;
    public function __construct()
    {
        $this->dinasModel = new DinasModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_dinas') ? $this->request->getVar('page_dinas') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $dinas = $this->dinasModel->search($keyword);
        } else {
            $dinas = $this->dinasModel;
        }

        $data = [
            'title' => 'Daftar Dinas',
            'dinas' => $dinas->paginate(10, 'dinas'),
            'pager' => $this->dinasModel->pager,
            'currentPage' => $currentPage
        ];
        return view('dinas/index', $data);
    }
}
