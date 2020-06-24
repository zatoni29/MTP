

<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id= $_POST['id'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$judul= $_POST['judul'];
	
	$data = $_FILES['data']['name'];
	$lokasi = $_FILES['data']['tmp_name'];
	move_uploaded_file($lokasi, "data/".$data);

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO panduan VALUES('$id','$judul', '$data')");

	
	//jika query input sukses
	if($input){
		
		echo "<script>alert('Input data baru sukses!!!');window.location='panduan admin.php'</script>";
		
	}else{
		
		echo "<script>alert('Input data baru gagal!!!');window.location='panduan admin.php'</script>";
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>