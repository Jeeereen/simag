<?php

namespace App\Controllers;

use App\Models\InstitutModel;

class Institut extends BaseController
{
    protected $institutModel;
    public function __construct()
    {
        $this->institutModel = new InstitutModel();
    }

    public function sekolah()
    {
        $data = [
            'title' => 'Form Tambah Sekolah',
            'validation' => \Config\Services::validation(),
            'institut' => $this->institutModel->findAll()
        ];
        return view('institut/sekolah', $data);
    }
    public function universitas()
    {
        $data = [
            'title' => 'Form Tambah Universitas',
            'validation' => \Config\Services::validation(),
            'institut' => $this->institutModel->findAll()
        ];
        return view('institut/universitas', $data);
    }

    public function save()
    {
        $jenis = $this->request->getVar('jenispendidikan');
        if (!$this->validate([
            'nama' => 'required'
        ], [
            'nama' => [
                'required', 'Nama tidak boleh kosong'
            ]
        ])) {
            if ($jenis == 'Sekolah') {
                return redirect()->to('/institut/sekolah')->withInput();
            }
            return redirect()->to('/institut/universitas')->withInput();
        }
        $this->institutModel->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kontak' => $this->request->getVar('kontak'),
            'jenispendidikan' => $jenis
        ]);
        if ($jenis == 'Sekolah') {
            return redirect()->to('/institut/sekolah');
        }
        return redirect()->to('/institut/universitas');
    }

    public function delete($institut_id)
    {
        $jenis = $this->request->getVar('jenispendidikan');
        $this->institutModel->delete($institut_id);

        if ($jenis == 'Sekolah') {
            return redirect()->to('/institut/sekolah');
        }
        return redirect()->to('/institut/universitas');
    }

    public function ubah($id)
    {
        $data = [
            'title' => 'Form Ubah ',
            'validation' => \Config\Services::validation(),
            'institut' => $this->institutModel->findAll(),
            'institutedit' => $this->institutModel->getInstitut($id)
        ];
        return view('institut/ubah', $data);
    }

    public function update($id)
    {
        $jenis = $this->request->getVar('jenispendidikan');
        if (!$this->validate([
            'nama' => 'required'
        ], [
            'nama' => [
                'required', 'Nama tidak boleh kosong'
            ]
        ])) {
            if ($jenis == 'Sekolah') {
                return redirect()->to('/institut/sekolah')->withInput();
            }
            return redirect()->to('/institut/universitas')->withInput();
        }
        $this->institutModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kontak' => $this->request->getVar('kontak'),
            'jenispendidikan' => $jenis
        ]);
        if ($jenis == 'Sekolah') {
            return redirect()->to('/institut/sekolah');
        }
        return redirect()->to('/institut/universitas');
    }
}
