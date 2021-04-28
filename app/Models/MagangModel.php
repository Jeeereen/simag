<?php

namespace App\Models;

use CodeIgniter\Model;

class MagangModel extends Model
{
    protected $table = 'magang';
    protected $primaryKey = "magang_id";
    protected $allowedFields = ['nik', 'nama', 'gambar', 'ttl', 'email', 'jeniskelamin', 'alamat', 'notp', 'agama', 'jurusan', 'dinas', 'magangmasuk', 'magangkeluar', 'institut_id', 'nilai'];

    public function getMagang($magang_id = false)
    {
        if ($magang_id == false) {
            return $this->findAll();
        }
        return $this->where(['magang_id' => $magang_id])->first();
    }
    public function search($keyword)
    {
        return $this->table('magang')->like('nama', $keyword)->orLike('alamat', $keyword)->orLike('notp', $keyword)->orlike('jurusan', $keyword)->orLike('nik', $keyword);
    }
}
