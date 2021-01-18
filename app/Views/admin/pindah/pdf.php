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
        <h2>Data Penduduk Pindah Desa Sidokare</h2>

        <table id="penduduk" style="border: 1; ">
            <thead id="customers">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tgl pindah</th>
                    <th>Sebab</th>
                </tr>
            </thead>
            <tbody id="customers">
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
    </div>

</body>

</html>