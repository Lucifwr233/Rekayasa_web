<?php 
namespace App\Models;
use CodeIgniter\Model;

class crud extends Model
{
    //tamppil data pegawai
	public function tampilpegawai()
	{
		return $this->db->table('rw_ci_4_p10')->select('*')->orderBy('id_pegawai', 'Desc')->get()->getResultArray();
	}

}