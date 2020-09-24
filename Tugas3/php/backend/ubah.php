<?php 
require 'function.php';
$ID = $_GET['ID'];
$car = query("SELECT * FROM mobil WHERE ID = $ID")[0];
if (isset($_POST["ubah"])) {
		if (ubah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil diubah!');
		document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('Data gagal diubah!');
			document.location.href = 'index.php';
			</script>";
	}
}	
	


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>ubah Data Mobil</title>
 </head>
 <body>
 	<form action="" method="post">
 		<input type="hidden" name="ID" value="<?= $car['ID']; ?>">
 		<label for="gambar">Foto :</label><br>
 		<input type="text" name="gambar" id="gambar" value="<?= $car['foto']; ?>"><br><br>
 		<label for="nama">Nama Mobil :</label><br>
 		<input type="text" name="nama" id="nama" value="<?= $car['namamobil']; ?>" ><br><br>
 		<label for="merk">Merk Mobil :</label><br>
 		<input type="text" name="merk" id="merk" value="<?= $car['merkmobil']; ?>"><br><br>
 		<label for="asal">Asal Negara :</label><br>
 		<input type="text" name="asal" id="asal" value="<?= $car['asalnegara']; ?>"><br><br>
 		<label for="tahun">Tahun Awal Produksi :</label><br>
 		<input type="text" name="tahun" id="tahun" value="<?= $car['tahunawalproduksi']; ?>"><br><br>
 		<label for="jenis">Jenis Mobil :</label><br>
 		<input type="text" name="jenis" id="jenis" value="<?= $car['jenismobil']; ?>"><br><br>

 		<button type="submit" name="ubah">Ubah</button>
 		 <button class="back"><a href="index.php">Kembali</a></button>
 	</form>
 </body>
 </html>