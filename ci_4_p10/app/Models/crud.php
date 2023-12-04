<?php 
namespace App\Models;
use CodeIgniter\Model;

class crud extends Model
{
	//crud tambah data
	public function simpanPegawai($data) {
		return $this->table('rw_ci_4_p10')->insert($data);
	}

    //tamppil data pegawai
	public function tampilpegawai()
	{
		return $this->db->table('rw_ci_4_p10')->select('*')->orderBy('id_pegawai', 'Desc')->get()->getResultArray();
	}

}