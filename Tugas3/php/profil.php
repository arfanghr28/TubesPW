<!DOCTYPE html>
<html>
<head>
    <title>latihan 5c</title>
</head>
<style>
        table{
            border : 1px solid black;
            text-align : center;
            font-size : 20px;
            background-color: gray;
        }
        td{
            padding : 15px;
        }
        h3{
            text-align : center;
            font-size : 30px;
        }
        button {margin-left: 650px}
    </style>
<body>
<?php 
    if (!isset($_GET['ID'])) {
        header('location : ../latihan6c.php');
        exit;
    }
    require 'backend/function.php';
    $ID=$_GET['ID'];
    $car = query("SELECT * FROM mobil WHERE ID = $ID")[0];
 ?>
    <h3>Informasi Mobil</h3>
    <table border="1px">
    <tr>
        <th>Foto</th>
        <th>Nama Mobil</th>
        <th>Merk Mobil</th>
        <th>Asal Negara</th>
        <th>Tahun Awal Produksi</th>
        <th>Jenis Mobil</th>
    </tr>
    <tr>
    <td><img width="300px" src="../../assets/img/<?= $car['foto']; ?>" alt ="foto"></td>
   
    <td><?= $car['namamobil']; ?></td>
    
    <td><?= $car['merkmobil']; ?></td>

    <td><?= $car['asalnegara']; ?></td>

    <td><?= $car['tahunawalproduksi']; ?></td>

    <td><?= $car['jenismobil']; ?></td>
    
    </tr>
    </table>
    <form method="post">
    <button><a href="../index.php"> kembali</a></button>
</form>
</body>
</html>