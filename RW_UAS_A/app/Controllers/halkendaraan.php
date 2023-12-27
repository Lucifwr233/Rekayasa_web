<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Crud;

class Halkendaraan extends BaseController
{
    public function __construct()
    {
        // Create a variable for database connection to use manual/custom queries
        $this->db = \Config\Database::connect();

        // Create a variable to use the Crud.php model
        $this->model_crud = new Crud;
    }

    public function index()
    {
        $data['content']       = 'hal-c-kendaraan';
        $data['judul']         = 'Rekayasa Web (Aplikasi UAS)';
        $data['sub_judul']     = 'Selamat datang di halaman kendaraan';
        $data['data_kendaraan'] = $this->model_crud->tampilkendaraan();

        echo view('_applayout', $data);
    }

    public function detaildata($id_kendaraan)
    {
        $data = [
            'content'          => 'hal-c-kendaraan',
            'judul'            => 'Rekayasa Web (Aplikasi UAS)',
            'sub_judul'        => 'Selamat datang di halaman kendaraan',
            'detail_kendaraan' => $this->model_crud->detailkendaraan($id_kendaraan),
            'data_kendaraan'   => $this->model_crud->tampilkendaraan(),
            'id_kendaraan'     => $id_kendaraan
        ];

        echo view('_applayout', $data);
    }

    public function simpandata()
    {
        $id_kendaraan = $this->request->getPost('inputan_id_kendaraan');

        $data = [
            'ID_Kendaraan'  => $this->request->getPost('inputan_idkendaraan'),
            'ID_Pelanggan'  => $this->request->getPost('inputan_idpelanggan'),
            'Jenis_Kendaraan'        => $this->request->getPost('inputan_jeniskendaraan'),
            'nomor_plat'  => $this->request->getPost('inputan_nomor_plat'),
            // Add other fields according to your "kendaraan" table
        ];

        if (empty($id_kendaraan)) {
            // New data
            $this->model_crud->simpankendaraan($data);
            echo '<script>
                alert("Selamat! Berhasil Menambah Data");
                window.location = "' . base_url('halkendaraan') . '"
            </script>';
        } else {
            // Update data
            $this->model_crud->ubahkendaraan($data, $id_kendaraan);
            echo '<script>
                alert("Selamat! Berhasil Mengubah Data");
                window.location = "' . base_url('halkendaraan') . '"
            </script>';
        }
    }

    public function hapusdata($id_kendaraan)
    {
        // Delete data
        $this->model_crud->hapuskendaraan($id_kendaraan);

        echo '<script>
                alert("Selamat! Hapus Data Berhasil");
                window.location = "' . base_url('halkendaraan') . '"
            </script>';
    }
}
