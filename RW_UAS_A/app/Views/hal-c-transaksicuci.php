<!-- File: App/Views/transaksiCuci/hal-c-transaksicuci.php -->

<div class="row">
    <!-- Form Entri -->
    <div class="col-5">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Form Entri (Transaksi Cuci)</b></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('haltransaksicuci/simpandata'); ?>">

                    <input class="form-control" type="hidden" name="inputan_id_transaksi" value="<?= $id_transaksi ?>">

                    <!-- Add fields for id_kendaraan and id_transaksi -->
                    <div class="row mb-2">
                        <label class="col-4">ID Transaksi</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_id_transaksi" required>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-4">ID Kendaraan</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_id_kendaraan" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Tanggal Cuci</label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="inputan_tanggal_cuci" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Jenis Cuci</label>
                        <div class="col-8">
                            <select class="form-control" name="inputan_jenis_cuci" required>
                                <option value=""> -- Silahkan Pilih --</option>
                                <option value="Cuci Kilat">Cuci Kilat</option>
                                <option value="Cuci Lambat">Cuci Lambat</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Total Biaya</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_total_biaya" required>
                        </div>
                    </div>

                    <!-- Button atau tombol -->
                    <button class="btn btn-success btn-block btn-lg"><i class="fa fa-save"></i> Simpan</button>
                    <a href="<?= base_url('haltransaksicuci') ?>" class="btn btn-danger btn-block"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>

                </form>
            </div>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="col-7">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Tabel Data (Transaksi Cuci)</b></div>
            <div class="card-body">
                <table class="table table-bordered" id="tabel_data">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Transaksi</th>
                            <th>ID Kendaraan</th>
                            <th>Tanggal Cuci</th>
                            <th>Jenis Cuci</th>
                            <th>Total Biaya</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_transaksicuci as $transaksicuci) { ?>
                            <tr style="font-size: smaller;">
                                <td><?= $no++ ?></td>
                                <td><?= $transaksicuci['ID_Transaksi'] ?></td>
                                <td><?= $transaksicuci['ID_Kendaraan'] ?></td>
                                <td><?= $transaksicuci['Tanggal_Cuci'] ?></td>
                                <td><?= $transaksicuci['Jenis_Cuci'] ?></td>
                                <td><?= $transaksicuci['Total_Biaya'] ?></td>
                                <td>
                                    <a href="<?= base_url('haltransaksicuci/detaildata/' . $transaksicuci['id_transaksi']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Yakin hapus ?')" href="<?= base_url('haltransaksicuci/hapusdata/' . $transaksicuci['id_transaksi']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
