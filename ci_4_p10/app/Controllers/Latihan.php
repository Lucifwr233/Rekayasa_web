<?php namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\crud;

class Latihan extends BaseController
{
	public function index()
	{

        $model_crud = new crud;

        $data['judul'] = 'Rekayasa Web';
        $data['sub_judul'] = 'CodeIgniter 4 v4.0.4';
		$data['judul_form'] = 'Form Entry';
		$data['judul_tabel'] = 'Tabel Data';
        $data['data_pegawai'] =$model_crud->tampilpegawai();
		return view('form_latihan.php', $data);
	}

}