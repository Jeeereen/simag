<?php

namespace App\Models;

use CodeIgniter\Model;

class DinasModel extends Model
{
    protected $table = 'dinas';
    protected $primaryKey = "dinas_id";
    protected $allowedFields = ['jenisdinas'];

    public function search($keyword)
    {
        // $builder = $this->table('dinas');
        // $builder->like('jenisdinas', $keyword);
        // return $builder;
        return $this->table('dinas')->like('jenisdinas', $keyword);
    }
}
