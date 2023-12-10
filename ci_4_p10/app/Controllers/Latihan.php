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

	//fungsi simpan data
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

		//fungsi hapus data
		public function hapusData($id)
		{
			$model_crud = new crud;

			// Hapus data berdasarkan ID
			$model_crud->hapusPegawai($id);

			// Notif untuk operasi berhasil
			echo
				'<script>
					alert("Selamat, Hapus data berhasil");
					window.location = "'.base_url('Latihan').'"
				</script>';
		}

		public function updateData()
		{
			$model_crud = new crud;
			
			// Ambil data dari form
			$id = $this->request->getPost('id_edit');
			$nama = $this->request->getPost('input_nama');
			$jk = $this->request->getPost('input_jk');
			$alamat = $this->request->getPost('input_alamat');
	
			// Update data berdasarkan ID
			$model_crud->updatePegawai($id, $nama, $jk, $alamat);
	
			// Notif untuk operasi berhasil
			echo '<script>
					alert("Selamat, Update data berhasil");
					window.location = "' . base_url('Latihan') . '"
				  </script>';
		}

}