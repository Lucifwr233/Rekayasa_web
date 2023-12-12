<?php
namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\crud;

class Latihan extends BaseController
{
	
	public function index()
    {
        $model_crud = new crud;

        $data['title']          = 'Rekayasa Web Tutorial';
        $data['msg1']           = 'Selamat datang di Aplikasi Ci4';
        $data['msg2']           = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        $data['data_pegawai']   = $model_crud->tampilPegawai();
        
        echo view('latihan', $data);
    }

    public function detaildata($id_pegawai)
    {
        $model_crud = new crud;
        $data = [
            'title'    => 'Rekayasa Web Tutorial',
            'msg1'  => 'Selamat datang di Aplikasi Ci4',
            'msg2' => 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4',
            'detail_pegawai' => $model_crud->detailPegawai($id_pegawai),
            'data_pegawai' => $model_crud->tampilPegawai(),
            'id_pegawai' => $id_pegawai
        ];
        
                
        echo view('latihan', $data);
    }

    public function simpandata()
    {
        $model_crud = new crud;
        $id_pegawai = $this->request->getPost('inputan_id_pegawai');
        
        $data = [
            'id_pegawai'    => '',
            'nama_pegawai'  => $this->request->getPost('inputan_nama'),
            'jk_pegawai'    => $this->request->getPost('inputan_jk'),
            'alamat_pegawai'=> $this->request->getPost('inputan_alamat')
        ];

        if(empty($id_pegawai)){
            //data baru
            $model_crud->simpanPegawai($data);
        } else {
            //ubah data
            $model_crud->ubahPegawai($data, $id_pegawai);
        }

    
        echo '<script>
                alert("Selamat! Berhasil Menambah Data");
                window.location = "'.base_url('latihan').'"
            </script>';
    }

    public function hapusdata($id_pegawai)
    {
        $model_crud = new crud;
                
        //hapsu data
        $model_crud->hapusPegawai($id_pegawai);
        
        echo '<script>
                alert("Selamat! Hapus Data Berhasil");
                window.location = "'.base_url('latihan').'"
            </script>';
    }
}