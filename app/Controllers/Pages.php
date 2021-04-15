<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
            'title' => ' Penilaian Magang'
        ];
        return view('pages/penilaian', $data);
    }
}
