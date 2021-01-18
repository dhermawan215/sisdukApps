<?php

namespace App\Controllers;

use App\Models\PindahModel;
use App\Models\PendudukModel;
use \Mpdf\Mpdf;


class Pindah extends BaseController
{

    public function __construct()
    {
        $this->PendudukModel = new PendudukModel();
        $this->PindahModel = new PindahModel();
        session();
    }

    public function index()
    {
        $data = [
            'title' => 'Penduduk Pindah',
            'subtitle' => 'Penduduk Pindah',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'pindah' => $this->PindahModel->getPindah()

        ];
        return view('admin/pindah/v_pindah', $data);
    }

    public function create()
    {
        $data = [
            "title" => "Tambah Penduduk Pindah",
            "subtitle" => "Penduduk Pindah",
            "footer" => "Sisduk Apps Desa Sidokare",
            "validation" => \Config\Services::validation(),
            "penduduk" => $this->PendudukModel->findAll()

        ];
        return view('admin/pindah/create', $data);
    }

    public function save()
    {
        if (!$this->validate(([
            'id_pdd' => [
                'rules' => 'required',
                'errors' => ['required' => 'NIK - Nama harus di isi !']
            ],
            'alasan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to(base_url('admin/pindah/create'))->withInput();
        }


        // dd($this->request->getPost());
        $this->PindahModel->save([
            'id_pdd' => $this->request->getPost('id_pdd'),
            'tanggal_pindah' => $this->request->getPost('tanggal_pindah'),
            'alasan' => $this->request->getPost('alasan'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to(base_url('admin/pindah'));
    }

    public function edit($id = 0)
    {

        $data = [
            "title" => "Edit Penduduk Pindah",
            "validation" => \Config\Services::validation(),
            "penduduk" => $this->PendudukModel->findAll(),

            "footer" => "Sisduk Apps Desa Sidokare",

        ];
        $data['editpindah'] = $this->PindahModel->getPindah($id);

        return view('admin/pindah/edit', $data);
    }

    public function update($id)
    {

        if (!$this->validate(([


            'alasan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to('/admin/pindah/edit/' . $id)->withInput();
        }



        //dd($this->request->getPost());
        $this->PindahModel->save([
            'id_pindah' => $id,
            'tanggal_pindah' => $this->request->getPost('tanggal_pindah'),
            'alasan' => $this->request->getPost('alasan'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Ubah!');
        return redirect()->to(base_url('admin/pindah'));
    }

    public function delete($id)
    {
        $this->PindahModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Berhasil di Hapus !');
        return redirect()->to(base_url('admin/pindah'));
    }

    public function excel()
    {
        $data = [
            'pindah' => $this->PindahModel->getPindah()

        ];
        return view('admin/pindah/excel', $data);
    }

    public function pdf()
    {

        $mpdf = new \Mpdf\Mpdf();

        $data = [
            'pindah' => $this->PindahModel->getPindah()

        ];
        // return view('admin/penduduk/pdf', $data);
        // Write some HTML code:
        $mpdf->WriteHTML(view('admin/pindah/pdf', $data));
        return redirect()->to($mpdf->Output('laporan_penduduk_pindah.pdf', 'I'));

        // Output a PDF file directly to the browser

    }


    //--------------------------------------------------------------------

}
