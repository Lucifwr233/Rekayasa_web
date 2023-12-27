<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Crud;

class Halpelanggan extends BaseController
{
    public function __construct()
    {
        // Membuat variabel koneksi database untuk menggunakan query manual/custom
        $this->db = \Config\Database::connect();

        // Membuat variabel baru untuk menggunakan models Crud.php
        $this->model_crud = new Crud;
    }

    public function index()
    {
        $data['content']            = 'hal-c-pelanggan';
        $data['judul']              = 'Rekayasa Web (Aplikasi UAS)';
        $data['sub_judul']          = 'Selamat datang di halaman pelanggan';
        $data['data_pelanggan']     = $this->model_crud->tampilpelanggan();

        echo view('_applayout', $data);
    }

    public function detaildata($id_pelanggan)
    {
        $data = [
            'content'               => 'hal-c-pelanggan',
            'judul'                 => 'Rekayasa Web (Aplikasi UAS)',
            'sub_judul'             => 'Selamat datang di halaman pelanggan',
            'detail_pelanggan'      => $this->model_crud->detailpelanggan($id_pelanggan),
            'data_pelanggan'        => $this->model_crud->tampilpelanggan(),
            'id_pelanggan'          => $id_pelanggan
        ];

        echo view('_applayout', $data);
    }

    public function simpandata()
    {
        $id_pelanggan = $this->request->getPost('inputan_id_pelanggan');

        $data = [
            'ID_Pelanggan'      => $this->request->getPost('inputan_id_pelanggan'),
            'Nama_Pelanggan'    => $this->request->getPost('inputan_nama'),
            'Alamat'  => $this->request->getPost('inputan_alamat'),
            'Nomor_Telepon'  => $this->request->getPost('inputan_telp'),
            // Add more fields as needed
        ];

        if (empty($id_pelanggan)) {
            // Data baru
            $this->model_crud->simpanpelanggan($data);
            echo '<script>
                alert("Selamat! Berhasil Menambah Data");
                window.location = "' . base_url('halpelanggan') . '"
            </script>';
        } else {
            // Ubah data
            $this->model_crud->ubahpelanggan($data, $id_pelanggan);
            echo '<script>
                alert("Selamat! Berhasil Mengubah Data");
                window.location = "' . base_url('halpelanggan') . '"
            </script>';
        }
    }

    public function hapusdata($id_pelanggan)
    {
        // Hapus data
        $this->model_crud->hapuspelanggan($id_pelanggan);

        echo '<script>
                alert("Selamat! Hapus Data Berhasil");
                window.location = "' . base_url('halpelanggan') . '"
            </script>';
    }
}
