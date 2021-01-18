<?php

namespace App\Controllers;

use App\Models\DatangModel;
use \Mpdf\Mpdf;

class Datang extends BaseController
{
    public function __construct()
    {
        $this->DatangModel = new DatangModel();

        session();
    }

    public function index()
    {
        $data = [
            'title' => 'Penduduk Masuk',
            'subtitle' => 'Penduduk Masuk',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'datang' => $this->DatangModel->findAll()

        ];
        return view('admin/datang/v_datang', $data);
    }

    public function create()
    {
        $data = [
            "title" => 'Tambah Penduduk Datang',
            'subtitle' => 'Penduduk Masuk',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation()
        ];
        return view('admin/datang/create', $data);
    }

    public function save()
    {
        if (!$this->validate(([
            'nik' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
        ]))) {

            return redirect()->to(base_url('admin/datang/create'))->withInput();
        }


        // dd($this->request->getPost());
        $this->DatangModel->save([
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'tanggal_datang' => $this->request->getPost('tanggal_datang'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to(base_url('admin/datang'));
    }

    public function edit($id)
    {
        $data = [
            "title" => 'Edit Penduduk Datang',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation(),
            'editdatang' => $this->DatangModel->find($id)
        ];
        return view('admin/datang/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate(([
            'nik' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
        ]))) {

            return redirect()->to('/admin/datang/edit/' . $id)->withInput();
        }


        //dd($this->request->getPost());
        $this->DatangModel->save([
            'id_datang' => $id,
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tanggal_datang' => $this->request->getPost('tanggal_datang'),
            'jk' => $this->request->getPost('jk'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Ubah!');
        return redirect()->to(base_url('admin/datang'));
    }

    public function delete($id)
    {
        $this->DatangModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Berhasil di Hapus !');
        return redirect()->to(base_url('admin/datang'));
    }

    public function details($id)
    {
        $data = [
            "title" => 'Details Penduduk Datang',
            "footer" => 'Sisduk Apps Desa Sidokare',
            'detail' => $this->DatangModel->getDetails($id)

        ];


        return view('admin/datang/details', $data);
    }

    public function pdf()
    {

        $mpdf = new \Mpdf\Mpdf();

        $data = [
            'datang' => $this->DatangModel->findAll()

        ];
        // return view('admin/penduduk/pdf', $data);
        // Write some HTML code:
        $mpdf->WriteHTML(view('admin/datang/pdf', $data));
        return redirect()->to($mpdf->Output('laporan_penduduk_masuk.pdf', 'I'));

        // Output a PDF file directly to the browser

    }

    public function excel()
    {
        $data = [
            'datang' => $this->DatangModel->findAll()
        ];
        return view('admin/datang/excel', $data);
    }

    //--------------------------------------------------------------------

}
