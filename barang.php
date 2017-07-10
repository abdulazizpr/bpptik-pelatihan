<?php 

	include "koneksi.php"; 
	
	$query = "select * from barang";
	$result = $koneksi->query($query);
	
	if(!empty($_GET['act'])){
		$act = $_GET['act'];
		
		if($act == "hapus"){
			
			$query = "delete from barang where kd_barang=".$_GET['id'];
			
			if($koneksi->query($query)==TRUE) echo "Sukses";
			else echo $koneksi->error;
		
			header('Location: barang.php');
		}	
	}
	
?>

<html>
	<head>
		<title>Admin | Tabel Barang</title>
	</head>
	<body>
		<h1>Tabel Barang</h1>
		<?php 
			if($result->num_rows > 0) {
		?>
		<table border="1">
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Tahun</th>
				<th>Action</th>
			</tr>
			<?php
				$i = 1;
				while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama_brg']?></td>
				<td><?php echo $row['harga']?></td>
				<td><?php echo $row['tahun']?></td>
				<td><a href="form.php?act=edit&&id=<?php echo $row['kd_barang'];?>">Edit</a> | <a href="barang.php?act=hapus&&id=<?php echo $row['kd_barang'];?>">Hapus</a></td>
			</tr>
			<?php 
					$i++;
				} 
			?>
		</table>
		<?php }else{
			echo "<p>Barang kosong</p>";
		} ?>
		</br>
		</br>
		
		<a href="form.php?act=input">Input Barang</a> | <a href="index.php">Kembali ke halaman awal</a>
	</body>
</html>