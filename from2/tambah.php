<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_mahasiswa (nama,nik,alamat,jenis_kelamin) VALUES ('$nama','$nik','$alamat','$jenis_kelamin')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Mahasiswa';
		}else{
			echo 'Gagal Menambahkan Mahasiswa';
		}
		
		mysqli_close($con);
	}
?>