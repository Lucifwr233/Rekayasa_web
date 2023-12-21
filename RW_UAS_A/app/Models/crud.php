<?php
namespace App\Models;
use CodeIgniter\Model;
 
class crud extends Model
{
    //--------------------------------------- create atau simpan data baru --------------------------------------------- 
    public function simpanuser($data)
    {
        return $this->db->table('user')->insert($data);
    }

    public function simpanpelanggan($data)
    {
        return $this->db->table('pelanggan')->insert($data);
    }

    public function simpankendaraan($data)
    {
        return $this->db->table('kendaraan')->insert($data);
    }

    public function simpantransaksi($data)
    {
        return $this->db->table('transaksi_cuci')->insert($data);
    }



    //--------------------------------------------- read atau tampil data --------------------------------------------- 
    public function tampiluser()
    {
        return $this->db->table('user')->select('*')->orderBy('id_user', 'Desc')->get()->getResultArray();
    }

    public function tampilpelanggan()
    {
        return $this->db->table('pelanggan')->select('*')->orderBy('id_mahasiswa', 'Desc')->get()->getResultArray();
    }

    public function tampilkendaraan()
    {
        return $this->db->table('kendaraan')->select('*')->orderBy('id_dosen', 'Desc')->get()->getResultArray();
    }

    public function tampiltransaksi()
    {
        return $this->db->query("SELECT * FROM transaksi_cuci, pelanggan, kendaraan where jadwal_kuliah.id_mahasiswa = mahasiswa.id_mahasiswa and jadwal_kuliah.id_dosen = dosen.id_dosen ORDER BY id_jadwalkuliah DESC ")->getResultArray();
    }



    //--------------------------------------------- read atau detail data --------------------------------------------- 
    public function detailuser($id_user)
    {
        return $this->db->query("SELECT * FROM user where id_user = '$id_user' ")->getRow();
    }

    public function detailmahasiswa($id_mahasiswa)
    {
        return $this->db->query("SELECT * FROM mahasiswa where id_mahasiswa = '$id_mahasiswa' ")->getRow();
    }

    public function detaildosen($id_dosen)
    {
        return $this->db->query("SELECT * FROM dosen where id_dosen = '$id_dosen' ")->getRow();
    }

    public function detailjadwalkuliah($id_jadwalkuliah)
    {
        return $this->db->query("SELECT * FROM jadwal_kuliah, mahasiswa, dosen where jadwal_kuliah.id_mahasiswa = mahasiswa.id_mahasiswa and jadwal_kuliah.id_dosen = dosen.id_dosen and id_jadwalkuliah = '$id_jadwalkuliah' ")->getRow();
    }



    //--------------------------------------------- update atau ubah data --------------------------------------------- 
    public function ubahuser($data, $id_user)
    {
        return $this->db->table('user')->update($data, array('id_user' => $id_user));
    }

    public function ubahmahasiswa($data, $id_mahasiswa)
    {
        return $this->db->table('mahasiswa')->update($data, array('id_mahasiswa' => $id_mahasiswa));
    }

    public function ubahdosen($data, $id_dosen)
    {
        return $this->db->table('dosen')->update($data, array('id_dosen' => $id_dosen));
    }

    public function ubahjadwalkuliah($data, $id_jadwalkuliah)
    {
        return $this->db->table('jadwal_kuliah')->update($data, array('id_jadwalkuliah' => $id_jadwalkuliah));
    }



    //--------------------------------------------- delete atau hapus data --------------------------------------------- 
    public function hapususer($id_user)
    {
        return $this->db->table('user')->delete(array('id_user' => $id_user));
    }

    public function hapusmahasiswa($id_mahasiswa)
    {
        return $this->db->table('mahasiswa')->delete(array('id_mahasiswa' => $id_mahasiswa));
    }

    public function hapusdosen($id_dosen)
    {
        return $this->db->table('dosen')->delete(array('id_dosen' => $id_dosen));
    }

    public function hapusjadwalkuliah($id_jadwalkuliah)
    {
        return $this->db->table('jadwal_kuliah')->delete(array('id_jadwalkuliah' => $id_jadwalkuliah));
    }

}