<?php
    $arr = [
        [
            'nama' => 'fira',
            'nim' => '192410101102',
            'usia' => '20'
        ],
        [
            'nama' => 'yusi',
            'nim' => '182410101001',
            'usia' => '27'
        ],
        [
            'nama' => 'rukmana',
            'nim' => '202410101008',
            'usia' => '21'
        ]
    ];

    $arr2 = ['fira', '192410101023', '20']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>