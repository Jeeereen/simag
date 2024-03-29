<?php

namespace App\Models;

use CodeIgniter\Model;

class InstitutModel extends Model
{
    protected $table = 'institut';
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'jenispendidikan', 'alamat', 'kontak'];

    public function getInstitut($institut_id = false)
    {
        if ($institut_id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $institut_id])->first();
    }
}
