<?php

namespace App\Models;

use CodeIgniter\Model;

class crudsendiri extends Model
{
	protected $table = 'cuci_kendaraan'; 
    protected $primaryKey = 'id_nota';
    // Define the allowed fields for insertion
    protected $allowedFields = ['plat_nomor_kendaraan', 'nama_pelanggan', 'jenis_kendaraan','total_bayar','tanggal','jenis_cuci'];

    //crud tambah data
	public function simpancuci($data)
	{
		// Specify the table using the table() method
		return $this->db->table('cuci_kendaraan')->insert($data);
	}

    //tampil data pegawai
	public function tampilcuci()
	{
		// Specify the table using the table() method
		return $this->db->table('cuci_kendaraan')->get()->getResultArray();
	}
	//hapus data pegawai
	public function hapuscuci($id)
	{
		return $this->builder()
			->where('id_nota', $id)
			->delete();
	}

	    // updating data
        public function ubahCuci($data, $id_edit)
        {
            return $query = $this->db->table('cuci_kendaraan')->update($data, array('id_nota' => $id_edit));
        }
    }