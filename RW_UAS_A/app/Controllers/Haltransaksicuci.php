<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Crud;

class Haltransaksicuci extends BaseController
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
        $data['content']            = 'hal-c-transaksicuci';
        $data['judul']              = 'Rekayasa Web (Aplikasi UAS)';
        $data['sub_judul']          = 'Selamat datang di halaman Transaksi Cuci !';
        $data['data_kendaraan'] = $this->model_crud->tampilkendaraan();
        $data['data_transaksicuci'] = $this->model_crud->tampiltransaksicuci();

        echo view('_applayout', $data);
    }

    public function detaildata($id_transaksi)
    {
        $data = [
            'content'               => 'hal-c-transaksicuci',
            'judul'                 => 'Rekayasa Web (Aplikasi UAS)',
            'sub_judul'             => 'Selamat datang di halaman transaksi cuci',
            'detail_transaksicuci'  => $this->model_crud->detailtransaksicuci($id_transaksi),
            'data_kendaraan'   => $this->model_crud->tampilkendaraan(),
            'data_transaksicuci'    => $this->model_crud->tampiltransaksicuci(),
            'id_transaksi'          => $id_transaksi
        ];

        echo view('_applayout', $data);
    }

    public function simpandata()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_transaksi = $this->request->getPost('inputan_id_transaksi');

        $data = [
            'ID_Kendaraan'      => $this->request->getPost('inputan_id_kendaraan'),
            'Tanggal_Cuci'      => $this->request->getPost('inputan_tanggal_cuci'),
            'Tipe_Cuci'        => $this->request->getPost('inputan_jenis_cuci'),
            'Total_Biaya'       => $this->request->getPost('inputan_total_biaya'),

        ];

        if (empty($id_transaksi)) {
            // Data baru
            $this->model_crud->simpantransaksicuci($data);
            echo '<script>
                alert("Selamat! Berhasil Menambah Data");
                window.location = "' . base_url('haltransaksicuci') . '"
            </script>';
        } else {
            // Ubah data
            $this->model_crud->ubahtransaksicuci($data, $id_transaksi);
            echo '<script>
                alert("Selamat! Berhasil Mengubah Data");
                window.location = "' . base_url('haltransaksicuci') . '"
            </script>';
        }
    }

    public function hapusdata($id_transaksi)
    {
        // Hapus data
        $this->model_crud->hapustransaksicuci($id_transaksi);

        echo '<script>
                alert("Selamat! Hapus Data Berhasil");
                window.location = "' . base_url('haltransaksicuci') . '"
            </script>';
    }
}
