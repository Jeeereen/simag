<?php

namespace App\Controllers;

use App\Models\DinasModel;

class Pages extends BaseController
{

    protected $dinasModel;
    public function __construct()
    {
        $this->dinasModel = new DinasModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home',
            'dinas' => $this->dinasModel->getDinas()
        ];
        return view('pages/home', $data);
    }

    public function penilaian()
    {
        $data = [
            'title' => ' Penilaian Magang'
        ];
        return view('pages/penilaian', $data);
    }
}
