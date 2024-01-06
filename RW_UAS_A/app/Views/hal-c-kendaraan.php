<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Form Entri (Kendaraan)</b></div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('halkendaraan/simpandata'); ?>">

                    <input class="form-control" type="hidden" name="inputan_id_kendaraan" value="<?= $id_kendaraan ?>">                    
<!-- coba baru -->
                    <div class="row mb-2">
                        <label class="col-4">ID Pelanggan</label>
                        <div class="col-8">
                            <select class="form-control" name="inputan_idpelanggan" required>
                                <?php if(!empty($detail_kendaraan->ID_Pelanggan)) { ?>
                                <option value="<?= $detail_kendaraan->ID_Pelanggan ?>"></option>
                                <?php } ?>
                                
                                <option value=""> -- Silahkan Pilih --</option>
                                <?php foreach ($data_pelanggan as $pelanggan) { ?>
                                <option value="<?= $pelanggan['ID_Pelanggan'] ?>"><?= $pelanggan['ID_Pelanggan']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
<!-- end of coba baru -->

                    <div class="row mb-2">
                        <label class="col-4">ID Pelanggan</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_idpelanggan" required value="<?= $detail_kendaraan->ID_Pelanggan ?>">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                        <label class="col-4">Jenis Kendaraan</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_jeniskendaraan" required value="<?= $detail_kendaraan->Jenis_Kendaraan ?>">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label class="col-4">Nomor Plat</label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="inputan_nomor_plat" required value="<?= $detail_kendaraan->Nomor_Plat ?>">
                        </div>
                    </div>
                    <!-- ... Add other fields ... -->

                    <!-- Button or submit -->
                    <button class="btn btn-success btn-block btn-lg"> <i class="fa fa-save"></i> Simpan</button>
                    <a href="<?= base_url('halkendaraan'); ?>" class="btn btn-danger btn-block"><i class="fa fa-refresh fa-spin"></i> Muat Ulang</a>

                </form>    
            </div>
        </div>
    </div>
    
    <div class="col-7">
        <div class="card">
            <div class="card-header bg-secondary text-white"><b>Tabel Data (Kendaraan)</b></div>
            <div class="card-body">
                <table class="table table-bordered" id="tabel_data">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Kendaraan</th>
                            <th>ID Pelanggan</th>
                            <th>Jenis Kendaraan</th>
                            <th>Nomor Plat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($data_kendaraan as $kendaraan) { ?>
                        <tr style="font-size: smaller;">
                            <td><?= $no++ ?></td>
                            <td><?= $kendaraan['ID_Kendaraan'] ?></td>
                            <td><?= $kendaraan['ID_Pelanggan'] ?></td>
                            <td><?= $kendaraan['Jenis_Kendaraan'] ?></td>
                            <td><?= $kendaraan['Nomor_Plat'] ?></td>
                            <td>
                                <a href="<?= base_url('halkendaraan/detaildata/'.$kendaraan['ID_Kendaraan']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin hapus ?')" href="<?= base_url('halkendaraan/hapusdata/'.$kendaraan['ID_Kendaraan']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
