

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Kas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Kas Masuk dan Keluar</h1>
    <h2>Transaksi Hari Ini</h2>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Jenis Kas</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tran_hari_ini as $tran) : ?>
                <tr>
                    <td><?= date('Y-m-d', strtotime($tran['created'])); ?></td>
                    <td><?= $tran['keterangan']; ?></td>
                    <td><?= $tran['jenis_kas']; ?></td>
                    <td><?= number_format($tran['nominal'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Total Hari Ini</h2>
    <p>Total Kas Masuk: <?= number_format($total_masuk_hari_ini, 2); ?></p>
    <p>Total Kas Keluar: <?= number_format($total_keluar_hari_ini, 2); ?></p>
    <h2>Total Keseluruhan</h2>
    <p>Total Kas Masuk: <?= number_format($total_masuk, 2); ?></p>
    <p>Total Kas Keluar: <?= number_format($total_keluar, 2); ?></p>
</body>
</html>


