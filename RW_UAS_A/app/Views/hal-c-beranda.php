<!-- Views/hal-c-beranda.php -->

<div class="container">

    <div class="row">
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card border-info">
                    <h5 class="card-header bg-info text-white">Transaksi Cuci</h5>
                    <div class="card-body">
                        <h5 class="card-title"> <?= $jumlah_data_transaksi_cuci ?> Data</h5>
                        <p class="card-text mb-0">Data terakhir : </p>
                        <p class="card-text text-info"><?= $dt_terakhir_transaksi_cuci ?></p>
                    </div>
                </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card border-success">
                <h5 class="card-header bg-success text-white">Pelanggan</h5>
                <div class="card-body">
                    <h5 class="card-title"> <?= $jumlah_data_pelanggan ?> Data</h5>
                    <p class="card-text mb-0">Data terakhir : </p>
                    <p class="card-text text-success"><?= $dt_terakhir_pelanggan ?></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card border-primary">
                <h5 class="card-header bg-primary text-white">Kendaraan</h5>
                <div class="card-body">
                    <h5 class="card-title"> <?= $jumlah_data_kendaraan ?> Data</h5>
                    <p class="card-text mb-0">Data terakhir : </p>
                    <p class="card-text text-primary"><?= $dt_terakhir_kendaraan ?></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
            <div class="card border-warning">
                <h5 class="card-header bg-warning text-white">User</h5>
                <div class="card-body">
                    <h5 class="card-title"> <?= $jumlah_data_user ?> Data</h5>
                    <p class="card-text mb-0">Data terakhir : </p>
                    <p class="card-text text-warning"><?= $dt_terakhir_user ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
