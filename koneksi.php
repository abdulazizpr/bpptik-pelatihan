<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db = "latihan";
	
	$koneksi = new mysqli($hostname,$username,$password,$db);
	
	if(!$koneksi) echo "gagal konek!";


?>