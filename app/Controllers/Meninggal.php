<?php

namespace App\Controllers;

use App\Models\MeninggalModel;
use App\Models\PendudukModel;

class Meninggal extends BaseController
{
    public function __construct()
    {

        $this->PendudukModel = new PendudukModel();
        $this->MeninggalModel = new MeninggalModel();
        session();
    }

    public function index()
    {
        $data = [
            'title' => 'Kematian',
            'subtitle' => 'Kematian',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'meninggal' => $this->MeninggalModel->getMeninggal()

        ];
        return view('admin/meninggal/v_meninggal', $data);
    }

    public function create()
    {

        $data = [
            "title" => "Tambah Penduduk Meninggal",
            "subtitle" => "Penduduk Meninggal",
            "footer" => "Sisduk Apps Desa Sidokare",
            "validation" => \Config\Services::validation(),
            "penduduk" => $this->PendudukModel->findAll()

        ];
        return view('admin/meninggal/create', $data);
    }

    public function save()
    {
        if (!$this->validate(([
            'id_penduduk' => [
                'rules' => 'required',
                'errors' => ['required' => 'NIK - Nama harus di isi !']
            ],
            'sebab' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to(base_url('admin/meninggal/create'))->withInput();
        }


        // dd($this->request->getPost());
        $this->MeninggalModel->save([
            'id_penduduk' => $this->request->getPost('id_penduduk'),
            'tgl_meninggal' => $this->request->getPost('tgl_meninggal'),
            'sebab' => $this->request->getPost('sebab'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to(base_url('admin/meninggal'));
    }

    public function edit($id)
    {

        $data = [
            "title" => "Edit Penduduk Pindah",
            "validation" => \Config\Services::validation(),
            "penduduk" => $this->PendudukModel->findAll(),

            "footer" => "Sisduk Apps Desa Sidokare",

        ];
        $data['editmendu'] = $this->MeninggalModel->getMeninggal($id);

        return view('admin/meninggal/edit', $data);
    }


    public function update($id)
    {

        if (!$this->validate(([


            'sebab' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'tgl_meninggal' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to('/admin/meninggal/edit/' . $id)->withInput();
        }



        // dd($this->request->getPost());
        $this->MeninggalModel->save([
            'id_meninggal' => $id,
            'tgl_meninggal' => $this->request->getPost('tgl_meninggal'),
            'sebab' => $this->request->getPost('sebab'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Ubah!');
        return redirect()->to(base_url('admin/meninggal'));
    }




    public function delete($id)
    {
        $this->MeninggalModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Berhasil di Hapus !');
        return redirect()->to(base_url('admin/meninggal'));
    }

    //--------------------------------------------------------------------

}
