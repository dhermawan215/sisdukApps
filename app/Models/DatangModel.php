<?php

namespace App\Models;

use CodeIgniter\Model;

class DatangModel extends Model
{
    protected $table      = 'datang';
    protected $primaryKey = 'id_datang';
    protected $allowedFields = ['nik', 'nama', 'jk', 'tanggal_datang'];

    public function getDetails($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_datang' => $id])->first();
        }
    }
}
