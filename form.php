<?php 

	include "koneksi.php"; 
	
	$act = $_GET['act'];
	
	if($act == "input") $judul = "Input";
	else $judul = "Edit";
	
	
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$query = "select * from barang where kd_barang=".$id;
		$result = $koneksi->query($query);
		
		$row = $result->fetch_assoc();
		
	}else{
		$row['nama_brg'] = "";
		$row['harga'] = "";
		$row['tahun'] = "";
	}
	
	if(isset($_POST['Simpan'])){
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$tahun = $_POST['tahun'];
		
		if($act == "input"){
			$query = "insert into barang(nama_brg,harga,tahun) values('".$nama_barang."','".$harga."','".$tahun."')";
		}else{
			$query = "update barang set nama_brg='".$nama_barang."',harga='".$harga."',tahun='".$tahun."' where kd_barang=".$_GET['id'];
		}
		
		if($koneksi->query($query)==TRUE) echo "Sukses";
		else echo $koneksi->error;
		
		header('Location: barang.php');
	}
	
?>

<html>
	<head>
		<title>Admin | Tabel Barang</title>
	</head>
	<body>
		<h1><?php echo $judul;?> Barang</h1>
		<form method="post">
			Nama Barang : <input type="text" name="nama_barang" value="<?php echo $row['nama_brg'];?>"/></br> 
			Harga : <input type="text" name="harga" value="<?php echo $row['harga'];?>" /></br> 
			Tahun : <input type="text" name="tahun" value="<?php echo $row['tahun'];?>" /></br>
			<input type="submit" name="Simpan" value="Simpan"></br>
		</form>
		<a href="barang.php">Kembali ke Halaman Barang</a> | <a href="barang.php">Kembali ke halaman barang</a>
	</body>
</html>