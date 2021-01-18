<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{


		$data = [
			'title' => 'Sisduk Web Desa Sidokare',
			'footer' => 'Sisduk Web Desa Sidokare'

		];
		return view('beranda', $data);
	}

	//--------------------------------------------------------------------

}
