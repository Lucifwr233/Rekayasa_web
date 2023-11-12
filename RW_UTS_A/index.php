<?php
$koneksi_db = mysqli_connect('localhost', 'root', '', 'rw_tugas_1');

$query_tampil_data = mysqli_query($koneksi_db, 'select * from cuci_kendaraan');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuci Kendaraan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-left">
            <h1>Cuci Kendaraan</h1>
        </div>
        <div class="navbar-right">
            <div class="navbar-tool" id="refresh-button">
                <a href="index.php">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </div>
            <div class="navbar-tool" id="dark-mode-toggle">
                <i class="fas fa-sun" id="dark-mode-icon"></i>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <form id="form_login" method="post" enctype="multipart/form-data" class="p-4">
                <input type="hidden" id="edit_mode" name="edit_mode" value="0">
                <div class="mb-3">
                    <input type="hidden" id="id_asli" name="id_asli">
                </div>
                <div class="mb-3">
                    <label for="id_nota" class="form-label">ID Nota:</label>
                    <input type="number" class="form-control" id="id_nota" name="id_nota">
                </div>
                <div class="mb-3">
                    <label for="plat_nomor_kendaraan" class="form-label">Plat Nomor:</label>
                    <input type="text" class="form-control" id="plat_nomor_kendaraan" name="plat_nomor_kendaraan">
                </div>
                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                </div>
                <div class="mb-3">
                    <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan:</label>
                    <select class="form-select" id="jenis_kendaraan" name="jenis_kendaraan">
                        <option value="Motor">Motor</option>
                        <option value="Mobil">Mobil</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total_bayar" class="form-label">Total Bayar:</label>
                    <input type="text" class="form-control" id="total_bayar" name="total_bayar">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal:</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="mb-3">
                    <label for="jenis_cuci" class="form-label">Jenis Cuci:</label>
                    <select class="form-select" id="jenis_cuci" name="jenis_cuci">
                        <option value="Cuci Kilat">Cuci Kilat</option>
                        <option value="Cuci Lambat">Cuci Lambat</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-sm" name="tombol_simpan">Simpan Data</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="Bersihkan()">Bersihkan</button>
                    <button type="submit" class="btn btn-success btn-sm" name="tombol_edit" id="tombol_edit" style="display:none;">Simpan Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="BatalEdit()" id="tombol_batal" style="display:none;">Batal</button>
                </div>
            </form>
            </div>

            <div class="col-md-6">
            <table class="table table-hover">
                <tr>
                    <th scope="col">ID Nota</th>
                    <th>Plat Nomor Kendaraan</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Total Bayar</th>
                    <th>Tanggal</th>
                    <th>Jenis Cuci</th>
                    <th>Opsi</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($query_tampil_data)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['id_nota'] . "</th>";
                    echo "<td>" . $row['plat_nomor_kendaraan'] . "</td>";
                    echo "<td>" . $row['nama_pelanggan'] . "</td>";
                    echo "<td>" . $row['jenis_kendaraan'] . "</td>";
                    echo "<td>Rp " . number_format($row['total_bayar'], 0, ',', '.') . "</td>";
                    echo "<td>" . $row['tanggal'] . "</td>";
                    echo "<td>" . $row['jenis_cuci'] . "</td>";
                    echo "<td>
                    <a href='?delete_id_nota=" . $row['id_nota'] . "' onclick=\"return confirm('Yakin hapus data?')\">Hapus</a> 
                    <a href='#' onclick=\"editData('" . $row['id_nota'] . "', '" . $row['plat_nomor_kendaraan'] . "', '" . $row['nama_pelanggan'] . "', '" . $row['jenis_kendaraan'] . "', '" . $row['total_bayar'] . "', '" . $row['tanggal'] . "', '" . $row['jenis_cuci'] . "')\">Edit</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </table>
            </div>
        </div>
    </div>

    <?php
        if (isset($_POST['tombol_simpan'])) {
            $id_nota = $_POST['id_nota'];
            $plat_nomor_kendaraan = $_POST['plat_nomor_kendaraan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $jenis_kendaraan = $_POST['jenis_kendaraan'];
            $total_bayar = $_POST['total_bayar'];
            $tanggal = $_POST['tanggal'];
            $jenis_cuci = $_POST['jenis_cuci'];

            $query_simpan = mysqli_query($koneksi_db, "INSERT INTO cuci_kendaraan 
            VALUES (
                '$id_nota',
                '$plat_nomor_kendaraan',
                '$nama_pelanggan',
                '$jenis_kendaraan',
                '$total_bayar',
                '$tanggal',
                '$jenis_cuci'
            )");

            if ($query_simpan) {
                echo "<script>alert('Operasi berhasil');</script>";
                echo "<meta http-equiv='refresh' content='0; url=index.php'>";
            } else {
                $error_message = mysqli_error($koneksi_db);
                if (strpos($error_message, "Duplicate entry") !== false) {
                    echo "<script>alert('Gagal menyimpan data. ID Nota sudah ada');</script>";
                } else {
                    echo "<script>alert('Gagal menyimpan data. Error: $error_message');</script>";
                }
            }
        }

    if (isset($_POST['tombol_edit'])) {
        $id_asli = $_POST['id_asli'];
        $id_nota = $_POST['id_nota'];
        $plat_nomor_kendaraan = $_POST['plat_nomor_kendaraan'];
        $nama_pelanggan = $_POST['nama_pelanggan'];
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $total_bayar = $_POST['total_bayar'];
        $tanggal = $_POST['tanggal'];
        $jenis_cuci = $_POST['jenis_cuci'];
    
        $query_edit = "UPDATE cuci_kendaraan SET id_nota='$id_nota', plat_nomor_kendaraan='$plat_nomor_kendaraan', 
        nama_pelanggan='$nama_pelanggan', jenis_kendaraan='$jenis_kendaraan', total_bayar='$total_bayar', tanggal='$tanggal', jenis_cuci='$jenis_cuci' WHERE id_nota='$id_asli'";
    
        if (mysqli_query($koneksi_db, $query_edit)) {
            echo "<script>alert('Data berhasil diubah.');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            $error_message = mysqli_error($koneksi_db);
            if (strpos($error_message, "Duplicate entry") !== false) {
                echo "<script>alert('Gagal mengubah data. ID Nota sudah ada');</script>";
            } else {
                echo "<script>alert('Gagal mengubah data. Error: $error_message')</script>";
            }
        }
    }
    ?>

    <!-- //hapus -->
    <?php
    if (isset($_GET['delete_id_nota'])) {
        $delete_id_nota = $_GET['delete_id_nota'];
        $query_delete = "DELETE FROM cuci_kendaraan WHERE id_nota = '$delete_id_nota'";

        if (mysqli_query($koneksi_db, $query_delete)) {
            echo "<script>alert('Data Pelanggan dengan ID Nota $delete_id_nota berhasil dihapus.');</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "<script>alert('Gagal menghapus data.'); window.location = window.location.href;</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        }
    }
    ?>

    <script type="text/javascript">
        function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }

        function Bersihkan() {
            document.getElementById("form_login").reset();
        }

        function editData(id_nota, plat_nomor_kendaraan, nama_pelanggan, jenis_kendaraan, total_bayar, tanggal, jenis_cuci) {
            document.getElementById("id_asli").value = id_nota;
            document.getElementById("id_nota").value = id_nota;
            document.getElementById("plat_nomor_kendaraan").value = plat_nomor_kendaraan;
            document.getElementById("nama_pelanggan").value = nama_pelanggan;
            document.getElementById("jenis_kendaraan").value = jenis_kendaraan;
            document.getElementById("total_bayar").value = total_bayar;
            document.getElementById("tanggal").value = tanggal;
            document.getElementById("jenis_cuci").value = jenis_cuci;
            isEditing = true;
            document.getElementById("edit_mode").value = "1";
            document.getElementById("tombol_edit").style.display = "inline";
            document.getElementById("tombol_batal").style.display = "inline";
        }

        function BatalEdit() {
            isEditing = false;
            document.getElementById("edit_mode").value = "0";
            document.getElementById("tombol_edit").style.display = "none";
            document.getElementById("tombol_batal").style.display = "none";
        }

        const refreshButton = document.getElementById("refresh-button");
        const refreshIcon = document.getElementById("refresh-icon");

        refreshButton.addEventListener("click", () => {
            animateRefreshButton();
            setTimeout(() => {
                location.reload();
            }, 1000);
        });

        function animateRefreshButton() {
            refreshIcon.classList.add("animate-refresh");
            setTimeout(() => {
                refreshIcon.classList.remove("animate-refresh");
            }, 1000);
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
                document.querySelector('link[href*="css/bootstrap.min.css"]').removeAttribute('sdata-bs-theme');
            } else {
                document.querySelector('link[href*="css/bootstrap.min.css"]').setAttribute('data-bs-theme', 'dark');
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
</body>

</html>