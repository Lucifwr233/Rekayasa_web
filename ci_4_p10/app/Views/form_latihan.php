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
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title" style="font-family: Bebas Neue; "> <?= $judul_tabel?> </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="tabel_mahasiswa">
                                <thead>
                                    <th>No.</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                </thead>
                                <tbody>
                                    <?php
                                    use App\Controllers\Latihan;
                                    $nomor=1; foreach ($data_pegawai as $pegawai) {?>
                                    <tr>
                                        <td><?= $nomor?></td>
                                        <td><?= $pegawai['nama_pegawai']?></td>
                                        <td><?= $pegawai['jenis_kelamin']?></td>
                                        <td><?= $pegawai['alamat_pegawai']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                <br>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="" style="font-family: Bebas Neue; "> <?= $judul_form?> </h1>
                            </div>
                                <div class="card-body">
                                    <!-- form inputan -->
                                    <form action="<?= base_url('Latihan/simpanData') ?>" method="post">
                                        <div class="row mb-2">
                                            <label class="col-4" for="">Nama Pegawai</label>
                                                <div class="col-8">
                                                <input type="text" name="input_nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-4" for="">Jenis Kelamin</label>
                                            <div class="col-8">
                                                <select name="input_jk" id="" class="form-control" required>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-4" for="">Alamat</label>
                                            <div class="col-8">
                                                <textarea name="input_alamat" id="" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- button -->
                                            <button class="btn btn-success btn-lg btn-block" type="submit" <i class="fa fa-save"></i> Simpan </button>
                                            <a href="<?= base_url('Latihan');?>" class="btn btn-danger btn-block  btn-lg"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>
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
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }

        const darkModeToggle = document.getElementById("dark-mode-toggle");
        const darkModeIcon = document.getElementById("dark-mode-icon");
        const body = document.body;
        let isDarkMode = false;

        darkModeToggle.addEventListener("click", () => {
            isDarkMode = !isDarkMode;
            body.classList.toggle("dark-mode", isDarkMode);
            updateDarkModeIcon();
            animateDarkModeToggle();
        });

        function updateDarkModeIcon() {
        const darkModeIcon = document.getElementById("dark-mode-icon");

        if (isDarkMode) {
            darkModeIcon.classList.remove("fa-moon");
            darkModeIcon.classList.add("fa-sun");
        } else {
            darkModeIcon.classList.remove("fa-sun");
            darkModeIcon.classList.add("fa-moon");
        }
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