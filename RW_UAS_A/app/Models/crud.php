<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud extends Model
{
    // ... existing code ...

    //--------------------------------------- create atau simpan data baru --------------------------------------------- 
    public function simpantransaksicuci($data)
    {
        return $this->db->table('transaksi_cuci')->insert($data);
    }

    public function simpanpelanggan($data)
    {
        return $this->db->table('pelanggan')->insert($data);
    }

    public function simpankendaraan($data)
    {
        return $this->db->table('kendaraan')->insert($data);
    }
    public function simpanuser($data)
    {
        return $this->db->table('user')->insert($data);
    }

    //--------------------------------------------- read atau tampil data --------------------------------------------- 
    public function tampiltransaksicuci()
    {
        return $this->db->table('transaksi_cuci')->select('*')->orderBy('id_transaksi', 'DESC')->get()->getResultArray();
    }

    public function tampilpelanggan()
    {
        return $this->db->table('pelanggan')->select('*')->orderBy('id_pelanggan', 'DESC')->get()->getResultArray();
    }

    public function tampilkendaraan()
    {
        return $this->db->table('kendaraan')->select('*')->orderBy('id_kendaraan', 'DESC')->get()->getResultArray();
    }
    public function tampiluser()
    {
        return $this->db->table('user')->select('*')->orderBy('id_user', 'Desc')->get()->getResultArray();
    }

    //--------------------------------------------- read atau detail data --------------------------------------------- 
    public function detailtransaksicuci($id_transaksi)
    {
        return $this->db->table('transaksi_cuci')->where('id_transaksi', $id_transaksi)->get()->getRow();
    }

    public function detailpelanggan($id_pelanggan)
    {
        return $this->db->table('pelanggan')->where('id_pelanggan', $id_pelanggan)->get()->getRow();
    }

    public function detailkendaraan($id_kendaraan)
    {
        return $this->db->table('kendaraan')->where('id_kendaraan', $id_kendaraan)->get()->getRow();
    }
    public function detailuser($id_user)
    {
        return $this->db->query("SELECT * FROM user where id_user = '$id_user' ")->getRow();
    }

    //--------------------------------------------- update atau ubah data --------------------------------------------- 
    public function ubahtransaksicuci($data, $id_transaksi)
    {
        return $this->db->table('transaksi_cuci')->update($data, array('id_transaksi' => $id_transaksi));
    }

    public function ubahpelanggan($data, $id_pelanggan)
    {
        return $this->db->table('pelanggan')->update($data, array('id_pelanggan' => $id_pelanggan));
    }

    public function ubahkendaraan($data, $id_kendaraan)
    {
        return $this->db->table('kendaraan')->update($data, array('id_kendaraan' => $id_kendaraan));
    }
    public function ubahuser($data, $id_user)
    {
        return $this->db->table('user')->update($data, array('id_user' => $id_user));
    }

    //--------------------------------------------- delete atau hapus data --------------------------------------------- 
    public function hapustransaksicuci($id_transaksi)
    {
        return $this->db->table('transaksi_cuci')->delete(array('id_transaksi' => $id_transaksi));
    }

    public function hapuspelanggan($id_pelanggan)
    {
        return $this->db->table('pelanggan')->delete(array('id_pelanggan' => $id_pelanggan));
    }

    public function hapuskendaraan($id_kendaraan)
    {
        return $this->db->table('kendaraan')->delete(array('id_kendaraan' => $id_kendaraan));
    }
    public function hapususer($id_user)
    {
        return $this->db->table('user')->delete(array('id_user' => $id_user));
    }

    public function laporantransaksi($tgl_mulai, $tgl_selesai)
    {
        return $this->db->table('transaksi_cuci')
            ->select('transaksi_cuci.*, kendaraan.Jenis_Kendaraan as Jenis_Kendaraan')
            ->join('kendaraan', 'kendaraan.ID_Kendaraan = transaksi_cuci.ID_Kendaraan')
            ->where('transaksi_cuci.Tanggal_Cuci >=', $tgl_mulai)
            ->where('transaksi_cuci.Tanggal_Cuci <=', $tgl_selesai)
            ->orderBy('transaksi_cuci.ID_Transaksi', 'ASC')
            ->get()
            ->getResultArray();
    }
}
