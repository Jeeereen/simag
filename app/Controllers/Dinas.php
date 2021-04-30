<?php

namespace App\Controllers;

use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

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
    public function tambah()
    {
        $data = [
            'title' => 'Form Tambah Data Dinas'
        ];
        return view('dinas/tambah', $data);
    }
    public function hapus($id)
    {
        $this->dinasModel->where(['id' => $id])->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/dinas');
    }
    public function ubah($username)
    {
        $dinas =  $this->dinasModel->where(['username' => $username])->get()->getRowArray();
        $data = [
            'title' => 'Ubah Akun',
            'dinas' => $dinas
        ];
        return view('dinas/ubah', $data);
    }
}
