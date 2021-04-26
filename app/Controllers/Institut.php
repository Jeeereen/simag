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
            'institut' => $this->institutModel->findAll()
        ];
        return view('institut/sekolah', $data);
    }
    public function universitas()
    {
        $data = [
            'title' => 'Form Tambah Universitas',
            'institut' => $this->institutModel->findAll()
        ];
        return view('institut/universitas', $data);
    }

    public function save()
    {
        $jenis = $this->request->getVar('jenispendidikan');
        $this->institutModel->save([
            'nama' => $this->request->getVar('nama'),
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
}
