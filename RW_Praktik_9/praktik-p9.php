<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Komponen data tabel -->
    <!-- Jquery js -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- data tables js -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <!-- data tables css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

    <!-- membuat datatables -->
    <script type="text/javascript">
        $(document).ready(function(){$('#tabel_mahasiswa').DataTable();});
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a>Baris 1</a>
            </div>
            <div class="col">
                <h1>Kolom 1</h1>
            </div>
            <div class="col">
                <h1>Kolom 2</h1>
            </div>
            <div class="col">
                <h1>Kolom 3</h1>
            </div>
            <div class="col">
                <h1>Kolom 4</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a>Baris 2</a>
            </div>
            <div class="col">
                <h1>Kolom 1</h1>
            </div>
            <div class="col">
                <h1>Kolom 2</h1>
            </div>
            <div class="col">
                <h1>Kolom 3</h1>
            </div>
            <div class="col">
                <h1>Kolom 4</h1>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2 href="">Form Entri</h2>
                <form action="">
                    <div class="row mb-3">
                        <label for="" class="col-2">NIM</label>
                        <div class="col-10">
                        <input type="number" name="inputan_nim" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-2">Nama</label>
                        <div class="col-10">
                        <input type="text" name="inputan_nama" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-2">Tanggal Lahir</label>
                        <div class="col-10">
                        <input type="date" name="inputan_tgl" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-2">Alamat</label>
                        <div class="col-10">
                        <textarea name="inputan_alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-2">Jenis Kelamin</label>
                        <div class="col-10">
                            <select name="inputan_jk" id="" class="form-control">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Primary <i class="fa-solid fa-arrow-right"></i> </button>
                    <button type="button" class="btn btn-secondary">Secondary <i class="fa-solid fa-xmark"></i></button>
                    <button type="button" class="btn btn-success">Success <i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                    <button type="button" class="btn btn-danger">Danger <i class="fa-solid fa-film"></i></button>
                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-film"></i></button>
                    <button type="button" class="btn btn-info"><i class="fa-solid fa-share"></i></button>
                    <button type="button" class="btn btn-light"><i class="fa-solid fa-thumbs-up"></i></button>
                    <button type="button" class="btn btn-dark"><i class="fa-brands fa-android"></i></button>
                    <button type="button" class="btn btn-link"><i class="fa-solid fa-right-to-bracket"></i></button>
                </form>
            </div>
            <div class="col">
                <h2 href="">Tabel Data</h2>
                <table id="tabel_mahasiswa" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>202154023</td>
                            <td>Eka Amin</td>
                            <td>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash "></i> </button>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>202154044</td>
                            <td>Yusuf Amin</td>
                            <td>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash "></i> </button>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>202154012</td>
                            <td>Joko Amin</td>
                            <td>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash "></i> </button>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>202154045</td>
                            <td>Yeni Wulandari</td>
                            <td>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash "></i> </button>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>202154062</td>
                            <td>Faisal Amin</td>
                            <td>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash "></i> </button>
                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> </button>
                            </td>danger
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>