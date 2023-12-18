<?php namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\crudsendiri;

class LatihanSendiri extends BaseController
{
	public function index()
	{

        $model_crud = new crudsendiri;

        $data['judul'] = 'Rekayasa Web';
        $data['sub_judul'] = 'CodeIgniter 4 v4.0.4';
		$data['judul_form'] = 'Form Entry';
		$data['judul_tabel'] = 'Tabel Data';
        $data['data_cuci'] =$model_crud->tampilcuci();
		return view('form_latihan_sendiri.php', $data);
	}

	//fungsi simpan data
	function simpanData()
	{
		$model_crud = new crudsendiri;
        $id_edit = $this->request->getPost('id_edit');
		$data = [
			'plat_nomor_kendaraan' => $this->request->getPost('plat_nomor'),
			'nama_pelanggan' => $this->request->getPost('nama'),
			'jenis_kendaraan' => $this->request->getPost('jenis_kendaraan'),
			'total_bayar' => $this->request->getPost('total_bayar'),
			'tanggal' => $this->request->getPost('tanggal'),
			'jenis_cuci' => $this->request->getPost('jenis_cuci')
		];

        if(empty($id_edit)){
            //data baru
            $model_crud->simpancuci($data);
        } else {
            //ubah data
            $model_crud->ubahCuci($data, $id_edit);
        }

		//notif untuk operasi berhasil
		echo
			'<script>
				alert("Selamat, Tambah data berhasil");
				window.location = "'.base_url('LatihanSendiri').'"
			</script>';
		
	}

		//fungsi hapus data
		public function hapusData($id)
		{
			$model_crud = new crudsendiri;

			// Hapus data berdasarkan ID
			$model_crud->hapuscuci($id);

			// Notif untuk operasi berhasil
			echo
				'<script>
					alert("Selamat, Hapus data berhasil");
					window.location = "'.base_url('LatihanSendiri').'"
				</script>';
		}

		public function updateData()
		{
			$model_crud = new crudsendiri;
			
			// Ambil data dari form
			$id = $this->request->getPost('id_edit');
			$plat_nomor = $this->request->getPost('plat_nomor');
			$nama = $this->request->getPost('nama');
			$jenis_kendaraan = $this->request->getPost('jenis_kendaraan');
			$total_bayar = $this->request->getPost('total_bayar');
			$tanggal = $this->request->getPost('tanggal');
			$jenis_cuci = $this->request->getPost('jenis_cuci');
	
			// Update data berdasarkan ID
			$model_crud->updateData($id, $plat_nomor, $nama, $jenis_kendaraan, $total_bayar, $tanggal, $jenis_cuci);
	
			// Notif untuk operasi berhasil
			echo '<script>
					alert("Selamat, Update data berhasil");
					window.location = "' . base_url('LatihanSendiri') . '"
				  </script>';
		}

}