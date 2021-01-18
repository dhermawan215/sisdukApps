<?php

namespace App\Controllers;

class Kelahiran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kelahiran - Sisduk Apps',
            'subtitle' => 'Kelahiran',
            'footer' => 'Sisduk Apps Desa Sidokare'

        ];
        return view('admin/kelahiran/v_kelahiran', $data);
    }

    //--------------------------------------------------------------------

}
