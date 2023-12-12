<?php
namespace App\Models;
use CodeIgniter\Model;
 
class crud extends Model
{
    //create atau simpan data baru
    public function simpanPegawai($data)
    {
        return $this->db->table('pegawai')->insert($data);
    }

    //read atau tampil data pegawai
    public function tampilPegawai($id_pegawai = false)
    {
        return $this->db->table('pegawai')->select('*')->orderBy('id_pegawai', 'Desc')->get()->getResultArray();
    }

    //read atau detail data pegawai
    public function detailPegawai($id_pegawai)
    {
        return $this->db->query("SELECT * FROM pegawai where id_pegawai = '$id_pegawai' ")->getRow();
    }

    //update atau ubah data
    public function ubahPegawai($data, $id_pegawai)
    {
        return $query = $this->db->table('pegawai')->update($data, array('id_pegawai' => $id_pegawai));
    }

    //delete atau hapus data
    public function hapusPegawai($id_pegawai)
    {
        $this->db->transStart();
            $this->db->table('pegawai')->delete(array('id_pegawai' => $id_pegawai));
        $this->db->transComplete();
    }
}