<!DOCTYPE html>
<html>

<head>
    <title>Export pdf - Sisduk Apps</title>

    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/icon.png" />
    <style>
        #penduduk {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #penduduk th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4e73df;
            color: white;
        }
    </style>
</head>

<body>


    <div>
        <h2>Data Penduduk Desa Sidokare</h2>

        <table id="penduduk" style="border: 1; ">
            <thead id="customers">
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
            <tbody id="customers">
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
    </div>

</body>

</html>