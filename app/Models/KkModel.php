<?php

namespace App\Models;

use CodeIgniter\Model;

class KkModel extends Model
{
    protected $table      = 'kk';
    protected $primaryKey = 'id_kk';
    protected $allowedFields = ['no_kk', 'kepala', 'desa', 'rt', 'rw', 'kecamatan', 'kabupaten', 'provinsi'];

    public function getkkDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_kk' => $id])->first();
        }
    }
}
