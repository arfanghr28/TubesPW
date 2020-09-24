<?php 
require 'php/backend/function.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['s'];
    $mobil = query("SELECT * FROM mobil WHERE 
        namamobil LIKE '%$keyword%' OR 
        merkmobil LIKE '%$keyword%' OR 
        asalnegara LIKE '%$keyword%' OR 
        tahunawalproduksi LIKE '%$keyword%' OR 
        jenismobil LIKE '%$keyword%' ");
}else{
$mobil = query("SELECT * FROM mobil") ;}
?>

<html>
    <head>
        <title>Latihan 6c</title>
    </head>
    <style>
     .container {border: 1px solid black;
                text-align: center;
                background-color: gray;
                    margin-left: 500px;
                    margin-right: 500px}
        h3{
            font-size : 60px;
        }
        .gambar {width: 50px};
        
        button {margin-left: 500px;}
    </style>
    <body>
    
        <h3 text align="Center">Koleksi Mobil</h3>
        <form action="" method="get">
        <input type="text" name="s" id="s" class="form-control" placeholder="Search...">
        <button type="submit" name="cari" id="cari">Search</button>
        <?php if(empty($mobil)) {
            echo "data tidak ditemukan";}?>
        
    </form>
        <a href="php/login.php">LOGIN</a>
    <div class="container">
        <?php
           foreach ($mobil as $car) :
        ?>
            <p><a href="php/profil.php?ID=<?=$car['ID']; ?>"><?= $car['namamobil']; ?></a></p>
      
            <?php endforeach ?>
</div>
		
    
    </body>
</html>
