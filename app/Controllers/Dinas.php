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
            'title' => 'Pengaturan Akun',
            'validation' => \Config\Services::validation(),
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
    public function update($id)
    {
        $gambarLama = user()->user_image;
        $fileGambar = $this->request->getFile('logo');
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            if ($gambarLama != 'default_gowa.png') {

                unlink('img/' . $gambarLama);
            }
        }

        $this->dinasModel->update($id, [
            'user_image' => $namaGambar
        ]);
        return redirect()->to('/dinas/pengaturan');
    }
}
