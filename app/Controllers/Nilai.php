<?php

namespace App\Controllers;

use App\Models\NilaiModel;
use App\Models\MagangModel;

class Nilai extends BaseController
{
    protected $nilaiModel;
    protected $magangModel;
    public function __construct()
    {
        $this->nilaiModel = new NilaiModel();
        $this->magangModel = new MagangModel();
    }
    public function hasil($magang_id)
    {
        $data = [
            'title' => 'Form Hasil Penilaian ',
            'magang' => $this->magangModel->getMagang($magang_id),
            'nilai' => $this->nilaiModel->getMagang($magang_id)
        ];

        return view('magang/nilai', $data);
    }
    public function save()
    {
        $magang_id = $this->request->getVar('magang_id');
        $this->nilaiModel->save([
            'penilai' => $this->request->getVar('penilai'),
            'magang_id' => $this->request->getVar('magang_id'),
            'magangmasuk' => $this->request->getVar('magangmasuk'),
            'magangkeluar' => $this->request->getVar('magangkeluar'),
            'kerajinan' => $this->request->getVar('kerajinan'),
            'dayatangkap' => $this->request->getVar('dayatangkap'),
            'kemampuan' => $this->request->getVar('kemampuan'),
            'tanggungjawab' => $this->request->getVar('tanggungjawab'),
            'hubungan' => $this->request->getVar('hubungan'),
            'akhlak' => $this->request->getVar('akhlak'),
            'percayadiri' => $this->request->getVar('percayadiri'),
            'keterampilan' => $this->request->getVar('keterampilan'),
            'keselamatan' => $this->request->getVar('keselamatan'),
            'keputusan' => $this->request->getVar('keputusan'),
            'keseluruhan' => $this->request->getVar('keseluruhan')
        ]);
        $nilai = $this->nilaiModel->get()->getLastRow('array');
        $this->magangModel->save([
            'magang_id' => $magang_id,
            'nilai' => $nilai['nilai_id']
        ]);
        return redirect()->to('/nilai/hasil/' . $magang_id);
    }

    public function ubah($nilai_id)
    {
        $nilai = $this->nilaiModel->getNilai($nilai_id);
        $data = [
            'title' => 'Form Ubah Hasil Penilaian ',
            'magang' => $this->magangModel->getMagang($nilai['magang_id']),
            'nilai' => $nilai
        ];
        return view('magang/ubah', $data);
    }

    public function update($nilai_id)
    {
        $magang_id = $this->request->getVar('magang_id');
        $this->nilaiModel->save([
            'nilai_id' => $nilai_id,
            'penilai' => $this->request->getVar('penilai'),
            'magang_id' => $this->request->getVar('magang_id'),
            'magangmasuk' => $this->request->getVar('magangmasuk'),
            'magangkeluar' => $this->request->getVar('magangkeluar'),
            'kerajinan' => $this->request->getVar('kerajinan'),
            'dayatangkap' => $this->request->getVar('dayatangkap'),
            'kemampuan' => $this->request->getVar('kemampuan'),
            'tanggungjawab' => $this->request->getVar('tanggungjawab'),
            'hubungan' => $this->request->getVar('hubungan'),
            'akhlak' => $this->request->getVar('akhlak'),
            'percayadiri' => $this->request->getVar('percayadiri'),
            'keterampilan' => $this->request->getVar('keterampilan'),
            'keselamatan' => $this->request->getVar('keselamatan'),
            'keputusan' => $this->request->getVar('keputusan'),
            'keseluruhan' => $this->request->getVar('keseluruhan')
        ]);
        return redirect()->to('/nilai/hasil/' . $magang_id);
    }
}
