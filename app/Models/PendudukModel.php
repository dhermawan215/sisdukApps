<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'id';



    protected $allowedFields = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jk', 'desa', 'rt', 'rw', 'agama', 'status_menikah', 'pekerjaan'];

    public function getPenduduk($id = false)
    {

        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
