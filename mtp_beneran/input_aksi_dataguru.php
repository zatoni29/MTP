

<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id= $_POST['id'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$nama= $_POST['nama'];
	$jenis_kelamin= $_POST['jenis_kelamin'];
	$agama= $_POST['agama'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jabatan= $_POST['jabatan'];
	$email= $_POST['email'];
	$no_hp= $_POST['no_hp'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$alamat= $_POST['alamat'];
	$tanggal_lahir= $_POST['tanggal_lahir'];
	$bidang_studi= $_POST['bidang_studi'];
	$pendidikan= $_POST['pendidikan'];

	$image = $_FILES['image']['name'];
	$lokasi = $_FILES['image']['tmp_name'];
	move_uploaded_file($lokasi, "gambar/".$image);

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO guru VALUES('$id','$nama','$jenis_kelamin','$agama','$jabatan','$email','$no_hp','$alamat','$tanggal_lahir','$bidang_studi','$pendidikan', '$image')");

	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Input data baru sukses!!!');window.location='data guru.php'</script>";
		
	}else{
		
		echo "<script>alert('Input data baru gagal!!!');window.location='input_dataguru.php'</script>";
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>