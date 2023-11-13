<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                </form>
            </div>
            <div class="col" style="background-color: orange;">
                <p href="">Tabel Data</p>
            </div>
        </div>
    </div>
</body>
</html>