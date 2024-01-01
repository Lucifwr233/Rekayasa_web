<?php

namespace App\Controllers;

use CodeIgniter\Controllers;

class Halberanda extends BaseController
{
    public function __construct()
    {
        // Membuat variabel koneksi database untuk menggunakan query manual/custom
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $query_jumlah_pelanggan = $this->db->query("SELECT count(ID_Pelanggan) as jumlah_data from Pelanggan ")->getRow();
        $query_jumlah_kendaraan = $this->db->query("SELECT count(ID_Kendaraan) as jumlah_data from Kendaraan ")->getRow();
        $query_jumlah_transaksi_cuci = $this->db->query("SELECT count(ID_Transaksi) as jumlah_data from Transaksi_Cuci ")->getRow();
        $query_jumlah_user = $this->db->query("SELECT count(id_user) as jumlah_data from user ")->getRow();

        $query_dt_terakhir_pelanggan = $this->db->query("SELECT * from Pelanggan order by ID_Pelanggan DESC")->getRow();
        $query_dt_terakhir_kendaraan = $this->db->query("SELECT * from Kendaraan order by ID_Kendaraan DESC")->getRow();
        $query_dt_terakhir_transaksi_cuci = $this->db->query("SELECT * from Transaksi_Cuci order by ID_Transaksi DESC")->getRow();
        $query_dt_terakhir_user = $this->db->query("SELECT * from user order by id_user DESC")->getRow();

        $data['content'] = 'hal-c-beranda';
        $data['judul'] = 'Rekayasa Web (Aplikasi UAS)';
        $data['sub_judul'] = 'Selamat datang di Beranda !';
        $data['jumlah_data_pelanggan'] = $query_jumlah_pelanggan->jumlah_data;
        $data['jumlah_data_kendaraan'] = $query_jumlah_kendaraan->jumlah_data;
        $data['jumlah_data_transaksi_cuci'] = $query_jumlah_transaksi_cuci->jumlah_data;
        $data['jumlah_data_user'] = $query_jumlah_user->jumlah_data;
        $data['dt_terakhir_pelanggan'] = $query_dt_terakhir_pelanggan->Nama_Pelanggan;
        $data['dt_terakhir_kendaraan'] = $query_dt_terakhir_kendaraan->Nomor_Plat;
        $data['dt_terakhir_transaksi_cuci'] = $query_dt_terakhir_transaksi_cuci->Tanggal_Cuci;
        $data['dt_terakhir_user'] = $query_dt_terakhir_user->username;

        echo view('_applayout', $data);
    }
}
