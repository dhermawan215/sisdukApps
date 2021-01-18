<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_penduduk.xls");
?>

<h2>Data Penduduk Desa Sidokare</h2>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th width="200px">NIK</th>
            <th>Nama</th>
            <th>Tempat</th>
            <th>Tgl Lahir </th>
            <th>Gender</th>
            <th>Desa</th>
            <th>RT</th>
            <th>RW</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomer = 1; ?>
        <?php foreach ($penduduk as $key => $row) : ?>
            <tr>
                <td><?= $nomer++ ?></td>
                <td style="content: center;"><?= $row['nik'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tempat_lahir'] ?></td>
                <td> <?= $row['tanggal_lahir'] ?></td>
                <td><?= $row['jk'] ?></td>
                <td><?= $row['desa'] ?></td>
                <td><?= $row['rt'] ?></td>
                <td><?= $row['rw'] ?></td>
                <td><?= $row['agama'] ?></td>
                <td><?= $row['status_menikah'] ?></td>
                <td><?= $row['pekerjaan'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>