<?php

	$nama_brg = $_POST['nama_brg'];
	$qty = $_POST['qty'];
	$harga = $_POST['harga'];
	$tahun = $_POST['tahun'];
	
?>
<h1>Hasil Transaksi</h2>
<table border=1>
	<tr>
		<th>No.</th>
		<th>Nama Barang</th>
		<th>Qty</th>
		<th>Harga</th>
		<th>Tahun</th>
		<th>Quantity Harga</th>
		<th>Diskon 1</th>
		<th>Diskon 2</th>
		<th>Total Harga</th>
	</tr>
<?php 

	$jumlah_qh = 0;
	$jumlah_diskon1 = 0;
	$jumlah_diskon2 = 0;
	$jumlah_th = 0;
	for($i=0;$i<count($nama_brg);$i++){ 
?>
	<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $nama_brg[$i]; ?></td>
		<td><?php echo $qty[$i]; ?></td>
		<td><?php echo $harga[$i]; ?></td>
		<td><?php echo $tahun[$i]; ?></td>
		<td><?php 
				$qh = $qty[$i] * $harga[$i];
				$jumlah_qh = $jumlah_qh + $qh;
				echo $qh;
			?>
		</td>
		<td>
		<?php  
			$sekarang = date('Y');
			$produksi = (int)$tahun[$i];
			
			$diskon1 = ($sekarang - $produksi) * 0.15 * $qh;
			$jumlah_diskon1 = $jumlah_diskon1 + $diskon1;
			echo $diskon1;
			
		?>
		
		</td>
		<td><?php 
				if($qty[$i] >= 5){
					$diskon2 = $qh * 0.25;
				}else{
					$diskon2 = 0;
				}
				
				$jumlah_diskon2 = $jumlah_diskon2 + $diskon2;
				echo $diskon2;
			?>
		</td>
		<td>
			<?php
				
				$diskon = $diskon1 + $diskon2;
				
				$total_harga = $qh - $diskon;
				
				$jumlah_th = $jumlah_th + $total_harga;
				echo $total_harga;
				
			?>
		</td>
	</tr>
<?php } ?>
	<tr>
		<td colspan=5><b>Total</b></td>
		<td><?php echo $jumlah_qh;?></td>
		<td><?php echo $jumlah_diskon1;?></td>
		<td><?php echo $jumlah_diskon2;?></td>
		<td><?php echo $jumlah_th;?></td>
	</tr>
</table>
</br>
<a href="index.php">Kembali ke halaman awal</a>