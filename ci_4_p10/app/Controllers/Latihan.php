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

	function simpanData()
	{
		$model_crud = new crud;
		$data = [
			'id_pegawai' => '',
			'nama_pegawai' => $this->request->getPost('input_nama'),
			'jenis_kelamin' => $this->request->getPost('input_jk'),
			'alamat_pegawai' => $this->request->getPost('input_alamat')
		];


		//insert data baru dengan menggunakan models crud
		$model_crud->simpanPegawai($data);

		//notif untuk operasi berhasil
		echo
			'<script>
				alert("Selamat, Tambah data berhasil");
				window.location = "'.base_url('Latihan').'"
			</script>';
		
	}

}