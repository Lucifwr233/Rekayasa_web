<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Crud;

class Hallaporan extends BaseController
{
    public function __construct()
    {
        //membuat variabel koneksi database untuk menggunakan query manual/custom
        $this->db = \Config\Database::connect();

        //membuat variabel baru untuk menggunakan models Crud.php
        $this->model_crud = new Crud;
    }

    public function index()
    {
        $data['content']    = 'hal-c-laporan';
        $data['judul']      = 'Rekayasa Web (Aplikasi UAS)';
        $data['sub_judul']  = 'Selamat datang di halaman laporan';

        echo view('_applayout', $data);
    }

    public function laporancetak()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl_mulai   = $this->request->getPost('inputan_tgl_mulai');
        $tgl_selesai = $this->request->getPost('inputan_tgl_selesai');
    
        $data_laporan = [
            'data_laporan'    => $this->model_crud->laporantransaksi($tgl_mulai, $tgl_selesai),
            'tanggal_cetak'   => date('d-m-Y'),
        ];
    
        echo view('cetak-laporan-data', $data_laporan);
    }
}
