<?php 
require 'function.php';
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data Berhasil ditambahkan!');
		document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'index.php';
			</script>";
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data Mobil</title>
 </head>
 <body>
 	<form action="" method="post">
 		<label for="gambar">Gambar :</label><br>
 		<input type="text" name="gambar" id="gambar"><br><br>
 		<label for="nama">Nama Mobil :</label><br>
 		<input type="text" name="nama" id="nama" autofocus="on"><br><br>
 		<label for="merk">Merk Mobil :</label><br>
 		<input type="text" name="merk" id="merk"><br><br>
 		<label for="asal">Asal Negara :</label><br>
 		<input type="text" name="asal" id="asal"><br><br>
 		<label for="tahun">Tahun Awal Produksi :</label><br>
 		<input type="text" name="tahun" id="tahun"><br><br>
 		<label for="jenis">Jenis Mobil :</label><br>
 		<input type="text" name="jenis" id="jenis"><br><br>

 		<input type="submit" name="submit" id="submit">
 		 		<button class="back"><a href="index.php">Kembali</a></button>
 	</form>
 </body>
 </html>