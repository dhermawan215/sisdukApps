<?php

namespace App\Controllers;

use App\Models\PendudukModel;
use \Mpdf\Mpdf;
use CodeIgniter\Throttle\ThrottlerInterface;
use CodeIgniter\Validation\Rules;
use phpDocumentor\Reflection\Types\This;

class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->PendudukModel = new PendudukModel();
        session();
    }
    public function index()
    {
        $data = [
            'title' => 'Penduduk - Sisduk Apps',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'penduduk' => $this->PendudukModel->findAll()

        ];

        return view('admin/penduduk/v_penduduk', $data);
    }

    public function create()
    {
        $data = [
            "title" => 'Tambah Penduduk',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation()
        ];
        return view('admin/penduduk/create', $data);
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
            'tempat_lahir' => [
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

            'agama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'pekerjaan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to(base_url('admin/penduduk/create'))->withInput();
        }


        // dd($this->request->getPost());
        $this->PendudukModel->save([
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jk' => $this->request->getPost('jk'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'status_menikah' => $this->request->getPost('status_menikah'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Simpan!');
        return redirect()->to(base_url('admin/penduduk'));
    }

    public function delete($id)
    {
        $this->PendudukModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Berhasil di Hapus !');
        return redirect()->to(base_url('admin/penduduk'));
    }

    public function edit($id)
    {
        //dd($this->PendudukModel->find($id));



        $data = [
            "title" => 'Edit Penduduk',
            "footer" => 'Sisduk Apps Desa Sidokare',
            "validation" => \Config\Services::validation(),
            'editpdd' => $this->PendudukModel->find($id)
        ];
        return view('admin/penduduk/edit', $data);
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
            'tempat_lahir' => [
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

            'agama' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ],

            'pekerjaan' => [
                'rules' => 'required',
                'errors' => ['required' => '{field} harus di isi !']
            ]
        ]))) {

            return redirect()->to('/admin/penduduk/edit/' . $id)->withInput();
        }


        //dd($this->request->getPost());
        $this->PendudukModel->save([
            'id' => $id,
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jk' => $this->request->getPost('jk'),
            'desa' => $this->request->getPost('desa'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'status_menikah' => $this->request->getPost('status_menikah'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ]);
        session()->setFlashdata('berhasil', 'Data Berhasil di Ubah!');
        return redirect()->to(base_url('admin/penduduk'));
    }

    public function excel()
    {
        $data = [
            'title' => 'Export Excel - Sisduk Apps',
            'footer' => 'Sisduk Apps Desa Sidokare',
            'penduduk' => $this->PendudukModel->findAll()

        ];
        return view('admin/penduduk/excel', $data);
    }

    public function pdf()
    {

        $mpdf = new \Mpdf\Mpdf();

        $data = [
            'penduduk' => $this->PendudukModel->findAll()

        ];
        // return view('admin/penduduk/pdf', $data);
        // Write some HTML code:
        $mpdf->WriteHTML(view('admin/penduduk/pdf', $data));
        return redirect()->to($mpdf->Output('laporan_penduduk.pdf', 'I'));

        // Output a PDF file directly to the browser

    }

    public function details($id)
    {
        $data = [
            "title" => 'Details Penduduk',
            "footer" => 'Sisduk Apps Desa Sidokare',
            'detail' => $this->PendudukModel->getPenduduk($id)

        ];


        return view('admin/penduduk/details', $data);
    }


    //--------------------------------------------------------------------

}
