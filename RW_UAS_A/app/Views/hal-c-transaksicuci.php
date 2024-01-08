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

                    <!-- coba baru -->
                    <div class="row mb-2">
                        <label class="col-4">ID Kendaraan</label>
                        <div class="col-8">
                            <select class="form-control" name="inputan_id_kendaraan" required>
                                <?php if(!empty($detail_transaksicuci->ID_Kendaraan)) { ?>
                                <option value="<?= $detail_transaksicuci->ID_Kendaraan ?>"></option>
                                <?php } ?>
                                
                                <option value=""> -- Silahkan Pilih --</option>
                                <?php foreach ($data_kendaraan as $kendaraan) { ?>
                                <option value="<?= $kendaraan['ID_Kendaraan'] ?>"><?= $kendaraan['ID_Kendaraan']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
<!-- end of coba baru -->

                    <!-- <div class="row mb-2">
                        <label class="col-4">ID Kendaraan</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_id_kendaraan" required value="<?= $detail_transaksicuci->ID_Kendaraan ?>">
                        </div>
                    </div> -->

                    <div class="row mb-2">
                        <label class="col-4">Tanggal Cuci</label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="inputan_tanggal_cuci" required value="<?= $detail_transaksicuci->Tanggal_Cuci ?>">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Jenis Cuci</label>
                        <div class="col-8">
                            <select class="form-control" name="inputan_jenis_cuci" id="inputan_jenis_cuci" required onchange="updateTotalBiaya()">
                                <option value=""> -- Silahkan Pilih --</option>
                                <option value="Cuci Kilat" <?php if ($detail_transaksicuci->Tipe_Cuci == 'Cuci Kilat') echo 'selected'; ?>>Cuci Kilat</option>
                                <option value="Cuci Lambat" <?php if ($detail_transaksicuci->Tipe_Cuci == 'Cuci Lambat') echo 'selected'; ?>>Cuci Lambat</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Total Biaya</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_total_biaya" id="inputan_total_biaya" readonly value="<?= $detail_transaksicuci->Total_Biaya ?>">
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
                                <td><?= $transaksicuci['Tipe_Cuci'] ?></td>
                                <td><?= $transaksicuci['Total_Biaya'] ?></td>
                                <td>
                                    <a href="<?= base_url('haltransaksicuci/detaildata/' . $transaksicuci['ID_Transaksi']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Yakin hapus ?')" href="<?= base_url('haltransaksicuci/hapusdata/' . $transaksicuci['ID_Transaksi']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    function updateTotalBiaya() {
        var jenisCuci = document.getElementById('inputan_jenis_cuci').value;
        var totalBiayaField = document.getElementById('inputan_total_biaya');

        // Set default value to 0
        var totalBiaya = "0";

        // Calculate total biaya based on the selected jenisCuci
        if (jenisCuci === 'Cuci Kilat') {
            totalBiaya = "Rp 40.000";
        } else if (jenisCuci === 'Cuci Lambat') {
            totalBiaya = "Rp 20.000";
        }

        // Set the calculated totalBiaya to the input field
        totalBiayaField.value = totalBiaya;
    }

    // Call the function when the page loads
    window.onload = updateTotalBiaya;
</script>
</div>
