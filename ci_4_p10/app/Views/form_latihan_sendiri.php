<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Flamenco&family=Montserrat&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <!-- membuat datatables -->
    <script type="text/javascript">
        $(document).ready(function(){$('#tabel_mahasiswa').DataTable();});
    </script>
</head>
    <body>
        <br>
        <br>
            <center>
            <h1 class="d-flex justify-content-center" style="font-family: Quicksand; "> <?= $judul?> </h1>
            <h2 class="d-flex justify-content-center" style="font-family: Montserrat; "> <?= $sub_judul ?> </h2>
            </center>

        <br>
        <br>
        <br>
            <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" style="font-family: Bebas Neue; "> <?= $judul_tabel?> </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="tabel_mahasiswa">
                                <thead>
                                    <th>No.</th>
                                    <th>Plat Nomor Kendaraan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Total Bayar</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Cuci</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    use App\Controllers\LatihanSendiri;
                                    $nomor=1; foreach ($data_cuci as $cuci) {?>
                                    <tr>
                                        <td><?= $nomor?></td>
                                        <td><?= $cuci['plat_nomor_kendaraan']?></td>
                                        <td><?= $cuci['nama_pelanggan']?></td>
                                        <td><?= $cuci['jenis_kendaraan']?></td>
                                        <td><?= $cuci['total_bayar']?></td>
                                        <td><?= $cuci['tanggal']?></td>
                                        <td><?= $cuci['jenis_cuci']?></td>
                                        <td>
                                            <!-- Delete button  -->
                                            <a href="<?= base_url('LatihanSendiri/hapusData/' . $cuci['id_nota']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>

                                            <!-- Edit button -->
                                            <button id="btnEdit" class="btn btn-warning btn-sm" onclick="editData('<?= $cuci['id_nota'] ?>', '<?= $cuci['plat_nomor_kendaraan'] ?>', '<?= $cuci['nama_pelanggan'] ?>', '<?= $cuci['jenis_kendaraan'] ?>', '<?= $cuci['total_bayar'] ?>', '<?= $cuci['tanggal'] ?>', '<?= $cuci['jenis_cuci'] ?>')">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <?php $nomor++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                <br>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="" style="font-family: Bebas Neue; "> <?= $judul_form?> </h1>
                            </div>
                                <div class="card-body">
                                    <!-- form inputan -->
                                    <form action="<?= base_url('LatihanSendiri/simpanData') ?>" method="post">
                                    
                                        <div class="row mb-2" style="display: none ;">
                                            <label class="col-4" for="">ID Nota (for edit)</label>
                                            <div class="col-8">
                                                <input type="text" name="id_edit"    class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-4" for="">Plat Nomor Kendaraan</label>
                                                <div class="col-8">
                                                <input type="text" name="plat_nomor" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-4" for="">Nama Pelanggan</label>
                                                <div class="col-8">
                                                <input type="text" name="nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-4" for="">Jenis Kendaraan</label>
                                            <div class="col-8">
                                                <select name="jenis_kendaraan" id="" class="form-control" required>
                                                <option value="Mobil">Mobil</option>
                                                <option value="Motor">Motor</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-4" for="">Total Bayar</label>
                                            <div class="col-8">
                                                <textarea name="total_bayar" id="" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-4" for="">Total Bayar</label>
                                                <div class="col-8">
                                                <input type="date" name="tanggal" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-4" for="">Jenis Cuci</label>
                                            <div class="col-8">
                                                <select name="jenis_cuci" id="" class="form-control" required>
                                                <option value="Cuci Kilat">Cuci Kilat</option>
                                                <option value="Cuci Lambar">Cuci Lambat</option>
                                            </select>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- button -->
                                        <button class="btn btn-success btn-lg btn-block" type="submit"><i class="fa fa-save"></i> Simpan </button>
                                        <a href="<?= base_url('LatihanSendiri');?>" class="btn btn-danger btn-block  btn-lg"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>
                                        <button id="btnBatal" class="btn btn-secondary btn-lg btn-block" type="button" onclick="batalEdit()" style="display: none;">
                                            Batal
                                        </button>
                                    </form>
                            </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <center>
                <div class="navbar-tool" id="dark-mode-toggle">
                    <i class="fas fa-sun" id="dark-mode-icon"></i>
                </div>
            </center>
        </div>
    </body>

    <script type="text/javascript">
        function editData(id, plat_nomor, nama, jenis_kendaraan, total_bayar, tanggal, jenis_cuci) {
            document.getElementsByName('id_edit')[0].value = id;
            document.getElementsByName('plat_nomor')[0].value = plat_nomor;
            document.getElementsByName('nama')[0].value = nama;
            document.getElementsByName('jenis_kendaraan')[0].value = jenis_kendaraan;
            document.getElementsByName('total_bayar')[0].value = total_bayar;
            document.getElementsByName('tanggal')[0].value = tanggal;
            document.getElementsByName('jenis_cuci')[0].value = jenis_cuci;

            // Display the buttons for editing
            document.getElementById('btnEdit').style.display = 'none';
            document.getElementById('btnUpdate').style.display = 'inline-block';
            document.getElementById('btnBatal').style.display = 'inline-block';
        }

        function batalEdit() {
            document.getElementsByName('id_edit')[0].value = '';
            document.getElementsByName('plat_nomor')[0].value = '';
            document.getElementsByName('nama')[0].value = '';
            document.getElementsByName('jenis_kendaraan')[0].value = '';
            document.getElementsByName('total_bayar')[0].value = '';
            document.getElementsByName('tanggal')[0].value = '';
            document.getElementsByName('jenis_cuci')[0].value = '';

            // Hide the buttons for editing
            document.getElementById('btnEdit').style.display = 'inline-block';
            document.getElementById('btnUpdate').style.display = 'none';
            document.getElementById('btnBatal').style.display = 'none';
        }


        function toggleDarkMode() {
            isDarkMode = !isDarkMode;

            if (isDarkMode) {
                document.querySelector('link[data-bs-theme]').removeAttribute('data-bs-theme');
                document.querySelector('link[href*="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"]').removeAttribute('sdata-bs-theme');
            } else {
                document.querySelector('link[href*="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"]').setAttribute('data-bs-theme', 'dark');
            }

            updateDarkModeIcon();
        }

        function animateDarkModeToggle() {
            darkModeToggle.classList.add("animate");
            setTimeout(() => {
                darkModeToggle.classList.remove("animate");
            }, 1000);
        }

    </script>
</html>