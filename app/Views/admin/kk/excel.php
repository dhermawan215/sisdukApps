<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Kartu_Keluarga.xls");
?>

<h2>Data Kartu Keluarga Desa Sidokare</h2>
<table border="1">
    <thead>
        <th>No</th>
        <th>No KK</th>
        <th>Kepala</th>
        <th>Desa</th>
        <th>RT</th>
        <th>RW</th>
        <th>Kec</th>
        <th>Kab</th>
        <th>Prov</th>

    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($kk as $key => $row) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['no_kk'] ?></td>
                <td><?= $row['kepala'] ?></td>
                <td><?= $row['desa'] ?></td>
                <td><?= $row['rt'] ?></td>
                <td><?= $row['rw'] ?></td>
                <td><?= $row['kecamatan'] ?></td>
                <td><?= $row['kabupaten'] ?></td>
                <td><?= $row['provinsi'] ?></td>

            </tr>
        <?php endforeach ?>
    </tbody>
</table>