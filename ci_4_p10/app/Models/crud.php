<?php

namespace App\Models;

use CodeIgniter\Model;

class crud extends Model
{
	protected $table = 'rw_ci_4_p10'; 
    protected $primaryKey = 'id_pegawai';
    // Define the allowed fields for insertion
    protected $allowedFields = ['nama_pegawai', 'jenis_kelamin', 'alamat_pegawai'];

    //crud tambah data
	public function simpanPegawai($data)
	{
		// Specify the table using the table() method
		return $this->db->table('rw_ci_4_p10')->insert($data);
	}

    //tampil data pegawai
	public function tampilpegawai()
	{
		// Specify the table using the table() method
		return $this->db->table('rw_ci_4_p10')->get()->getResultArray();
	}
	//hapus data pegawai
	public function hapusPegawai($id)
	{
		return $this->builder()
			->where('id_pegawai', $id)
			->delete();
	}

	    // updating data
		public function updatePegawai($id, $nama, $jk, $alamat)
		{
			$data = [
				'nama_pegawai' => $nama,
				'jenis_kelamin' => $jk,
				'alamat_pegawai' => $alamat
			];
	
			return $this->builder()
				->where('id_pegawai', $id)
				->update($data);
		}
}