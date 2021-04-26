<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = "nilai_id";
    protected $allowedFields = ['penilai', 'magang_id', 'magangmasuk', 'magangkeluar', 'kerajinan', 'dayatangkap', 'kemampuan', 'tanggungjawab', 'hubungan', 'akhlak', 'percayadiri', 'keterampilan', 'keselamatan', 'keputusan', 'keseluruhan'];

    public function getMagang($magang_id = false)
    {
        if ($magang_id == false) {
            return $this->findAll();
        }
        return $this->where(['magang_id' => $magang_id])->first();
    }

    public function getNilai($nilai_id = false)
    {
        if ($nilai_id == false) {
            return $this->findAll();
        }
        return $this->where(['nilai_id' => $nilai_id])->first();
    }
}
