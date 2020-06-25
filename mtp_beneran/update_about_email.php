
<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$email		= $_POST['email'];	//membuat variabel $nis dan datanya dari inputan NIS	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE about_email SET email='$email' WHERE id='$id'");

	
	//jika query update sukses
	if($update){
		
		echo "<script>alert('Edit data sukses!!!');window.location='about_admin.php'</script>";
		
	}else{
		
		echo "<script>alert('Edit data gagal!!!');window.location='about_admin.php'</script>";
	}


}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>
