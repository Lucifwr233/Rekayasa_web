<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!---- Komponen Tabel Data----->
    <!--- Jquery--->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!--- data tabel js-->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!--- data tabel bootstrap js-->
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js">
    
    <!-- import google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">

    <!-- membuat datatables -->
    <script type="text/javascript">
        $(document).ready(function(){$('#tabel_mahasiswa').DataTable();});
    </script>
</head>
<body>
        <h1 class="d-flex justify-content-center"> <?= $judul?> </h1>
        <h2 class="d-flex justify-content-center"> <?= $sub_judul ?> </h2>

    <br>
    <h1 class=""> <?= $judul_tabel?> </h1>
    <table class="table table-bordered" id="tabel_mahasiswa">
        <thead>
            <th>No.</th>
            <th>Nama Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php $nomor=1; foreach ($data_pegawai as $pegawai) {?>
            <tr>
                <td><?= $nomor?></td>
                <td><?= $pegawai['nama_pegawai']?></td>
                <td><?= $pegawai['jenis_kelamin']?></td>
                <td><?= $pegawai['alamat_pegawai']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <h1 class=""> <?= $judul_form?> </h1>
    <!-- form inputan -->
    <form action="" method="post">
        <div class="row mb-2">
            <label class="col-4" for="">Nama Pegawai</label>
                <div class="col-8">
                <input type="text" name="input_nama" class="form-control">
            </div>
        </div>
        <div class="row">
            <label class="col-4" for="">Jenis Kelamin</label>
            <div class="col-8">
                <select name="input_jk" id="" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            </div>
        </div>
        <div class="row">
            <label class="col-4" for="">Alamat</label>
            <div class="col-8">
                <textarea name="input_alamat" id="" class="form-control"></textarea>
            </div>
        </div>
        <!-- button -->
        <button class="btn btn-success btn-lg btn-block" type="button"><i class="fa fa-save"></i> Simpan </button>
        <a href="<?= base_url('Latihan');?>" class="btn btn-danger btn-block  btn-lg"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>
    </form>
</body>
</html>