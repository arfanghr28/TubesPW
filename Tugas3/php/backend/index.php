<?php 
require 'function.php';
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
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="tambah.php">Tambah Data Mobil</a>
	<form action="" method="get">
		<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
		<button type="submit" name="cari" id="cari">Search</button>
	</form>
	
	<br><br>
	<table border="1px" cellpadding="2px">
		<thead>
			<tr>	
				<th>#</th>
				<th>Opsi</th>
				<th>Foto</th>
				<th>Nama Mobil</th>
				<th>Merk Mobil</th>
				<th>Asal Negara</th>
				<th>Tahun Awal Produksi</th>
				<th>Jenis Mobil</th>
			</tr>
		</thead>
			<tbody>
				<?php if(empty($mobil)) : ?>
					<tr>
						<td colspan="7">
							<h1 align="center">Data tidak ditemukan</h1>
						</td>
					</tr>
				<?php else : ?>
				<?php $no=1; ?>
				<?php foreach ($mobil as $car):?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td>
							<a href="hapus.php?ID=<?=$car['ID'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus</a>
							<a href="ubah.php?ID=<?=$car['ID'];?>">Edit</a>
						</td>
						<td> <img width="100px" src="../../../assets/img/<?php echo $car['foto'] ?>">
						</td>
						<td>
							<?php echo $car['namamobil']; ?>
						</td>
						<td>
							<?php echo $car['merkmobil']; ?>
						</td>
						<td>
							<?php echo $car['asalnegara']; ?>
						</td>
						<td>
							<?php echo $car['tahunawalproduksi']; ?>
						</td>
						<td>
							<?php echo $car['jenismobil']; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			</tbody>
	</table>
	<a href="../../index.php">LOGOUT</a>
</body>
</html>