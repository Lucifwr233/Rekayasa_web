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
        $data['sub_judul']          = 'Selamat datang di halaman Pelanggan !';
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
        $inputan_foto = $this->request->getFile('inputan_foto');
        if(!empty($inputan_foto->getBasename())){
            $berkas_foto = $inputan_foto->getRandomName();
            $inputan_foto->move(ROOTPATH . 'public/foto-pelanggan/', $berkas_foto);
        }else{
            $berkas_foto = $this->request->getPost('nama_foto_tersimpan');
        }

        $id_pelanggan = $this->request->getPost('inputan_id_pelanggan');

        $data = [
            'Nama_Pelanggan'    => $this->request->getPost('inputan_nama'),
            'Alamat'            => $this->request->getPost('inputan_alamat'),
            'Nomor_Telepon'     => $this->request->getPost('inputan_telp'),
            'foto_pelanggan'  => $berkas_foto,
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
