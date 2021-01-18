<?php

namespace App\Models;


use CodeIgniter\Model;

class MeninggalModel extends Model
{
    protected $table      = 'meninggal';
    protected $primaryKey = 'id_meinggal';
    protected $allowedFields = ['id_penduduk', 'tgl_meninggal', 'sebab'];

    public function getMeninggal($id = false)
    {
        if ($id === false) {
            return $this->table('meninggal')
                ->join('penduduk', 'penduduk.id = meninggal.id_penduduk')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('pindah')
                ->join('penduduk', 'penduduk.id = meninggal.id_penduduk')
                ->where('meninggal.id_meninggal', $id)
                ->get()
                ->getRowArray();
        }
    }
}
