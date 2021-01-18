<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_penduduk_pindah.xls");
?>

<h2>Data Penduduk Pindah Desa Sidokare</h2>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tgl pindah</th>
            <th>Sebab</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pindah as $key => $row) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nik'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tanggal_pindah'] ?></td>
                <td><?= $row['alasan'] ?></td>

            </tr>
        <?php endforeach; ?>
    </tbody>

</table>