<?php

namespace App\Models;

use CodeIgniter\Model;

class MagangModel extends Model
{
    protected $table = 'magang';
    protected $primaryKey = "magang_id";
    protected $allowedFields = ['nik', 'nama', 'gambar', 'ttl', 'email', 'jeniskelamin', 'alamat', 'notp', 'agama', 'jurusan', 'dinas', 'magangmasuk', 'magangkeluar', 'institut_id'];

    public function getMagang($magang_id = false)
    {
        if ($magang_id == false) {
            return $this->findAll();
        }
        return $this->where(['magang_id' => $magang_id])->first();
    }
    public function search($keyword)
    {
        // $builder = $this->table('dinas');
        // $builder->like('jenisdinas', $keyword);
        // return $builder;
        return $this->table('magang')->like('nama', $keyword)->orLike('alamat', $keyword)->orLike('notp', $keyword)->orlike('jurusan', $keyword)->orLike('nik', $keyword);
    }
}
