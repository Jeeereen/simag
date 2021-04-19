<?php

namespace App\Controllers;

use App\Models\MagangModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;

class Magang extends BaseController
{
    protected $magangModel;
    public function __construct()
    {
        $this->magangModel = new MagangModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Magang',
            'magang' => $this->magangModel->getMagang()
        ];
        return view('magang/index', $data);
    }

    public function detail($magang_id)
    {

        $data = [
            'title' => 'Detail Magang',
            'magang' => $this->magangModel->getMagang($magang_id)
        ];
        //jika tidak ada data magang_id yang masuk
        if (empty($data['magang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(' Magang ' . $magang_id . 'tidak ditemukan');
        }
        return view('magang/detail', $data);
    }

    public function create()
    {
        $dinas = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'Form Tambah Data Magang',
            'validation' => \Config\Services::validation(),
            'dinas' => $dinas->findAll()
        ];

        return view('magang/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => 'required',
            'nik' => 'required|is_unique[magang.nik]',
            'dinas' => 'required',
            'gambar' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ], [
            'nama' => [
                'required' =>  'Nama harus diisi.'
            ],
            'nik' => [
                'required' => 'NIK harus diisi.',
                'is_unique' => 'NIK telah terdaftar.'
            ],
            'gambar' => [
                'max_size' => 'Ukuran maximal gambar adalah 1024kb.',
                'is_image' => 'File yang anda pilih bukan gambar.',
                'mime_in' => 'File yang anda pilih bukan gambar.'
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/magang/create')->withInput()->with('validation', $validation);
            return redirect()->to('/magang/create')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
        }

        $this->magangModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaGambar,
            'ttl' => $this->request->getVar('ttl'),
            'email' => $this->request->getVar('email'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'notp' => $this->request->getVar('notp'),
            'agama' => $this->request->getVar('agama'),
            'dinas' => $this->request->getVar('dinas'),
            'jurusan' => $this->request->getVar('jurusan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/magang');
    }

    public function delete($magang_id)
    {
        $magang = $this->magangModel->find($magang_id);

        if ($magang['gambar'] != 'default.jpg') {

            unlink('img/' . $magang['gambar']);
        }

        $this->magangModel->delete($magang_id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/magang');
    }

    public function edit($magang_id)
    {
        $dinas = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'Form Ubah Data Magang',
            'validation' => \Config\Services::validation(),
            'magang' => $this->magangModel->getMagang($magang_id),
            'dinas' => $dinas->findAll()
        ];

        return view('magang/edit', $data);
    }

    public function update($magang_id)
    {
        // dd($this->request->getVar('dinas'));
        $magangLama = $this->magangModel->getMagang($magang_id);
        if ($magangLama['nik'] == $this->request->getVar('nik')) {
            $rule_nik = 'required';
        } else {
            $rule_nik = 'required|is_unique[magang.nik]';
        }
        if (!$this->validate([
            'nama' => 'required',
            'nik' => $rule_nik,
            'dinas' => 'required',
            'gambar' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]'
        ], [
            'nama' => [
                'required' =>  'Nama harus diisi.'
            ],
            'nik' => [
                'required' => 'NIK harus diisi.',
                'is_unique' => 'NIK telah terdaftar.'
            ],
            'gambar' => [
                'max_size' => 'Ukuran maximal gambar adalah 1024kb.',
                'is_image' => 'File yang anda pilih bukan gambar.',
                'mime_in' => 'File yang anda pilih bukan gambar.'
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/magang/edit/' . $magang_id)->withInput()->with('validation', $validation);
            return redirect()->to('/magang/edit/' . $magang_id)->withInput();
        }
        $gambarLama = $this->request->getVar('gambarLama');
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img', $namaGambar);
            if ($gambarLama != 'default.jpg') {

                unlink('img/' . $gambarLama);
            }
        }

        $this->magangModel->save([
            'magang_id' => $magang_id,
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'gambar' => $namaGambar,
            'ttl' => $this->request->getVar('ttl'),
            'email' => $this->request->getVar('email'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'notp' => $this->request->getVar('notp'),
            'agama' => $this->request->getVar('agama'),
            'dinas' => $this->request->getVar('dinas'),
            'jurusan' => $this->request->getVar('jurusan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/magang');
    }
}
