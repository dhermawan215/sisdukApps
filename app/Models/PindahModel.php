<?php

namespace App\Models;

use App\Controllers\Penduduk;
use CodeIgniter\Model;

class PindahModel extends Model
{
    protected $table      = 'pindah';
    protected $primaryKey = 'id_pindah';
    protected $allowedFields = ['id_pdd', 'tanggal_pindah', 'alasan'];

    public function getPindah($id = false)
    {
        if ($id === false) {
            return $this->table('pindah')
                ->join('penduduk', 'penduduk.id = pindah.id_pdd')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('pindah')
                ->join('penduduk', 'penduduk.id = pindah.id_pdd')
                ->where('pindah.id_pindah', $id)
                ->get()
                ->getRowArray();
        }
    }
}
