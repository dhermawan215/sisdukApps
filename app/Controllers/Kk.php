<?php

namespace App\Controllers;

use App\Models\KkModel;
use \Mpdf\Mpdf;

class Kk extends BaseController
{
    public function __construct()
    {
        $this->KkModel = new KkModel();
        session();
    }
    public function index()
    {
        $data = [
            'title' => 'Kartu Keluarga',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'kk' => $this->KkModel->findAll()

        ];
        return view('admin/kk/v_kk', $data);
    }

    public function create()
    {
        $data = [
            "title" => 'Tambah Kartu Keluarga',
            'subtitle' => 'Kartu Keluarga',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation()
        ];
        return view('admin/kk/create', $data);
    }

    public function save()
    {
        if (!$this->validate(([
            'no_kk' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'kepala' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'desa' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'rt' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'rw' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'kecamatan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'kabupaten' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to(base_url('admin/kk/create'))->withInput();
        }
        //dd($this->request->getPost());

        $this->KkModel->save([
            'no_kk' => $this->request->getPost('no_kk'),
            'kepala' => $this->request->getPost('kepala'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'provinsi' => $this->request->getPost('provinsi')
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to('/admin/kk');
    }

    public function edit($id)
    {

        $data = [
            "title" => 'Edit Penduduk',
            "subtitle" => 'Kartu Keluarga',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation(),
            'editkk' => $this->KkModel->find($id)
        ];
        return view('admin/kk/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate(([
            'no_kk' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'kepala' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'desa' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'rt' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'rw' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'kecamatan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'kabupaten' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to('/admin/kk/edit/' . $id)->withInput();
        }
        //dd($this->request->getPost());

        $this->KkModel->save([
            'id_kk' => $id,
            'no_kk' => $this->request->getPost('no_kk'),
            'kepala' => $this->request->getPost('kepala'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'provinsi' => $this->request->getPost('provinsi')
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to('/admin/kk');
    }

    public function pdf()
    {

        $mpdf = new \Mpdf\Mpdf();

        $data = [
            'kk' => $this->KkModel->findAll()

        ];
        // return view('admin/penduduk/pdf', $data);
        // Write some HTML code:
        $mpdf->WriteHTML(view('admin/kk/pdf', $data));
        return redirect()->to($mpdf->Output('laporan_kk.pdf', 'I'));

        // Output a PDF file directly to the browser
    }

    public function excel()
    {
        $data = [
            'kk' => $this->KkModel->findAll()
        ];
        return view('admin/kk/excel', $data);
    }

    public function details($id)
    {
        $data = [
            "title" => 'Details Kartu keluarga',
            "footer" => 'Sisduk Apps Desa Sidokare',
            'detail' => $this->KkModel->getkkDetail($id)

        ];


        return view('admin/kk/details', $data);
    }

    //--------------------------------------------------------------------

}
