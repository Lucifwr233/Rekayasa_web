<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Form Entri (Pelanggan)</b></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('halpelanggan/simpandata'); ?>">

                    <input class="form-control" type="hidden" name="inputan_id_pelanggan" value="<?= $id_pelanggan ?>">

                    <div class="row mb-2">
                        <label class="col-4">ID Pelanggan</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_id_pelanggan" required value="<?= $detail_pelanggan->id_pelanggan ?>">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Nama</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_nama" required value="<?= $detail_pelanggan->nama_pelanggan ?>">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Alamat</label>
                        <div class="col-8">
                            <textarea class="form-control" name="inputan_alamat" required><?= $detail_pelanggan->alamat_pelanggan ?></textarea>
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                        <label class="col-4">Nomor Telepon</label>
                        <div class="col-8">
                            <textarea class="form-control" name="inputan_telp" required><?= $detail_pelanggan->inputan_telp ?></textarea>
                        </div>
                    </div>
                    <!-- Add more fields as needed -->

                    <!-- Button or submit -->

                    <button class="btn btn-success btn-block btn-lg"> <i class="fa fa-save"></i> Simpan</button>
                    <a href="<?= base_url('halpelanggan') ?>" class="btn btn-danger btn-block"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>

                </form>    
            </div>
        </div>
    </div>

    <div class="col-7">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Tabel Data (Pelanggan)</b></div>
            <div class="card-body">
                <table class="table table-bordered" id="tabel_data">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($data_pelanggan as $pelanggan) { ?>
                        <tr style="font-size: smaller;">
                            <td><?= $no++ ?></td>
                            <td><?= $pelanggan['ID_Pelanggan'] ?></td>
                            <td><?= $pelanggan['Nama_Pelanggan'] ?></td>
                            <td><?= $pelanggan['Alamat'] ?></td>
                            <td><?= $pelanggan['Nomor_Telepon'] ?></td>
                            <td>
                                <a href="<?= base_url('halpelanggan/detaildata/'.$pelanggan['id_pelanggan']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin hapus ?')" href="<?= base_url('halpelanggan/hapusdata/'.$pelanggan['id_pelanggan']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
