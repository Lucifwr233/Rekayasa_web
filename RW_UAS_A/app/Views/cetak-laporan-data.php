<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak - Laporan Cuci Kendaraan</title>
    <!-- data tables css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div style="height: 20px; width: 100%; background-color: green;"></div>
    <div class="m-5">
        <h1>Aplikasi UAS Rekayasa Web</h1>
        <h3>Laporan Cuci Kendaraan (<?= date("d/M, Y", strtotime($tanggal_cetak)) ?>)</h3>

        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Transaksi</th>
                    <th>ID Kendaraan</th>
                    <th>Tanggal Cuci</th>
                    <th>Jenis Cuci</th>
                    <th>Tipe Kendaraan</th> <!-- New column for Tipe Kendaraan -->
                    <th>Total Biaya</th>
                    <!-- Add more headers as needed -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($data_laporan as $laporan) { ?>
                    <tr style="font-size: smaller;">
                        <td><?= $no++ ?></td>
                        <td><?= $laporan['ID_Transaksi'] ?></td>
                        <td><?= $laporan['ID_Kendaraan'] ?></td>
                        <td><?= $laporan['Tanggal_Cuci'] ?></td>
                        <td><?= $laporan['Tipe_Cuci'] ?></td>
                        <td><?= $laporan['Jenis_Kendaraan'] ?></td>
                        <td><?= $laporan['Total_Biaya'] ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div style="height: 20px; width: 100%; background-color: black; position: absolute; bottom: 0;"></div>
</body>
</html>
<script type="text/javascript">
    window.print();
    window.onfocus = function(){ window.close(); }
</script>
