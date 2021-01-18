<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_penduduk_Masuk.xls");
?>

<h2>Data Penduduk Masuk Desa Sidokare</h2>
<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Nik</td>
            <td>Gender</td>
            <td>Tanggal Datang</td>
        </tr>
    </thead>
    <tbody>
        <?php $no_dtg = 1;
        foreach ($datang as $key => $row) : ?>
            <tr>
                <td><?= $no_dtg++ ?></td>
                <td><?= $row['nik'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jk'] ?></td>
                <td><?= $row['tanggal_datang'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>