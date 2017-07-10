<?php 

	include "koneksi.php"; 
	
	$query = "select * from barang";
	$result = $koneksi->query($query);
	
	
?>

<html>
	<head>
		<title>Admin | Tabel Barang</title>
	</head>
	<body>
		<h1>Transaksi</h1>
		<?php 
			if($result->num_rows > 0) {
		?>
		<form action="hasil.php" method="post">
			<table border="1">
				<tr>
					<th>No.</th>
					<th>Nama Barang</th>
					<th>Qty</th>
					<th>Harga</th>
					<th>Tahun</th>
				</tr>
				<?php
					$i = 1;
					while($row = $result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['nama_brg']?><input type="hidden" name="nama_brg[]" value="<?php echo $row['nama_brg']?>"></td>
					<td><input type="number" name="qty[]"></td>
					<td><?php echo $row['harga']?><input type="hidden" name="harga[]" value="<?php echo $row['harga']?>"></td>
					<td><?php echo $row['tahun']?><input type="hidden" name="tahun[]" value="<?php echo $row['tahun']?>"></td>
				</tr>
				<?php 
						$i++;
					} 
				?>
			</table>
			</br>
			<input type="submit" name="transaksi" value="Beli"/>
		</form>
		<?php }else{
			echo "<p>Barang kosong</p>";
		} ?>
		</br>		
		<a href="index.php">Kembali ke halaman awal</a>
	</body>
</html>