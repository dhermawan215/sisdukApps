<?php

namespace App\Controllers;

use App\Models\DatangModel;
use App\Models\PendudukModel;
use App\Models\PindahModel;
use App\Models\KkModel;
use App\Models\MeninggalModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->DatangModel = new DatangModel();
        $this->PendudukModel = new PendudukModel();
        $this->PindahModel = new PindahModel();
        $this->KkModel = new KkModel();
        $this->MeninggalModel = new MeninggalModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Apps Dashboard',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'penduduk' => $this->PendudukModel->countAllResults(),
            'pindah' => $this->PindahModel->countAllResults(),
            'datang' => $this->DatangModel->countAllResults(),
            'kk' => $this->KkModel->countAllResults(),
            'mendu' => $this->MeninggalModel->countAllResults(),
            't_pdd' => 'Jumlah Penduduk',
            't_pindah' => 'Jumlah Penduduk Pindah',
            't_datang' => 'Jumlah Penduduk Datang',
            't_kk' => 'Jumlah Kartu Keluarga Terdaftar',

        ];
        return view('admin/dashboard/v_dashboard', $data);
    }

    //--------------------------------------------------------------------

}
