<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title; ?></title>
    
    <!-- Komponen CSS Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Komponen FontAwesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Komponen Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <!-- Komponen DataTables (Tabel Data) -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- data tables js -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <!-- data tables css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <!-- membuat datatables -->
    <script type="text/javascript">
        $(document).ready(function(){ $('#tabel_mhs').DataTable(); });
    </script>

</head>
 
<body>
    <center style="margin-top: 2.5%; margin-bottom: 2.5%;">
        <h1 style="font-family: 'Sofia', sans-serif; font-weight: bold;"><?= $msg1; ?></h1>
        <h4><?= $msg2; ?></h4>    
    </center>
    
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h4>Form Entri</h4>
                    </div>
                
                    <div class="card-body">
                        <form method="post" action="<?= base_url('latihan/simpandata'); ?>">

                            <input class="form-control" type="text" name="inputan_id_pegawai" value="<?= $id_pegawai ?>" hidden>
                            
                            <div class="row mb-2">
                                <label class="col-4">Nama</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="inputan_nama" required value="<?= $detail_pegawai->nama_pegawai ?>">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-4">Jenis Kelamin</label>
                                <div class="col-8">
                                    <select class="form-control" name="inputan_jk" required>
                                        <?php if(!empty($detail_pegawai->jk_pegawai)) { ?>
                                        <option value="<?= $detail_pegawai->jk_pegawai ?>"><?= $detail_pegawai->jk_pegawai ?></option>
                                        <?php } else { ?>
                                        <option value=""> -- Silahkan Pilih --</option>
                                        <?php } ?>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label class="col-4">Alamat</label>
                                <div class="col-8">
                                    <textarea class="form-control" name="inputan_alamat" required><?= $detail_pegawai->alamat_pegawai ?></textarea>
                                </div>
                            </div>

                            <!-- Button atau tombol -->

                            <button class="btn btn-success btn-lg btn-block"> <i class="fa fa-save"></i> Simpan</button>
                            <a href="<?= base_url('latihan'); ?>" class="btn btn-danger btn-block"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>

                        </form>    
                    </div>
                </div>
                
            </div>

            
            <div class="col-7">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <h4>Tabel Data</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="tabel_mhs">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_pegawai as $pegawai) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $pegawai['nama_pegawai'] ?></td>
                                        <td><?= $pegawai['alamat_pegawai'] ?></td>
                                        <td>
                                            <a href="<?= base_url('latihan/detaildata/'.$pegawai['id_pegawai']) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Yakin hapus ?')" href="<?= base_url('latihan/hapusdata/'.$pegawai['id_pegawai']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
</body>
 
</html>
