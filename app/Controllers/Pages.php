<?php

namespace App\Controllers;

use App\Models\MagangModel;
use CodeIgniter\Config\Config;
use CodeIgniter\HTTP\Request;
use App\Models\NilaiModel;
use CodeIgniter\I18n\Time;

class Pages extends BaseController
{

    protected $magangModel;
    protected $nilaiModel;
    protected $db;
    public function __construct()
    {
        $this->magangModel = new MagangModel();
        $this->nilaiModel = new NilaiModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('magang');
        $builder->select('dinas,institut_id,jurusan');
        $builder->join('institut', 'institut.id = institut_id');
        $universitas = $builder->where('jenispendidikan', 'Universitas')->get()->getNumRows();
        $sekolah = $builder->get()->getNumRows() - $universitas;

        // $query = $db->table('magang')->select('magang_id,jurusan')->groupBy('magang_id', 'jurusan');
        $jurusan = $this->db->query("
        SELECT 
            jurusan,
            COUNT(jurusan)
        FROM
            magang
        GROUP BY jurusan
        HAVING COUNT(jurusan) >= 1;
        ")->getResultArray();

        // dd($this->db->query("
        // SELECT 
        //     jurusan,
        //     COUNT(jurusan)
        // FROM
        //     magang
        // GROUP BY jurusan
        // HAVING COUNT(jurusan) >= 1;
        // ")->getResultArray());
        $myTime = new Time('-1 month');

        if (in_groups('user')) {
            $bulanini = $this->magangModel->where([
                'dinas' => user()->fullname,
                'magangmasuk >=' => $myTime
            ])->get()->getNumRows();
            $totalmagang = $this->magangModel->where('dinas', user()->fullname)->get()->getNumRows();
            $lakilaki = $this->magangModel->where([
                'jeniskelamin' => 'Laki-laki',
                'dinas' => user()->fullname
            ])->get()->getNumRows();
            $perempuan = $this->magangModel->where([
                'jeniskelamin' => 'Perempuan',
                'dinas' => user()->fullname
            ])->get()->getNumRows();
        } else {
            $bulanini = $this->magangModel->where('magangmasuk >=', $myTime)->get()->getNumRows();
            $totalmagang = $this->magangModel->countAllResults();
            $lakilaki = $this->magangModel->where('jeniskelamin', 'Laki-laki')->get()->getNumRows();
            $perempuan = $this->magangModel->where('jeniskelamin', 'Perempuan')->get()->getNumRows();
        }


        $data = [
            'title' => 'Home',
            'totalmagang' => $totalmagang,
            'bulanini' => $bulanini,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan,
            'universitas' => $universitas,
            'sekolah' => $sekolah,
            'jurusan' => $jurusan

        ];
        return view('pages/home', $data);
    }

    public function penilaian()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('magang');
        $builder->select('*');
        $builder->join('nilai', 'nilai.nilai_id = magang.nilai');
        $data = [
            'title' => ' Penilaian Magang',
            'magang' => $this->magangModel->getMagang(),
            'nilai' => $this->nilaiModel->getNilai()
        ];
        return view('pages/penilaian', $data);
    }
}
