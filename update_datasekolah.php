
<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesny
	$id= $_POST['id'];
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$no_telpon= $_POST['no_telpon'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$kecamatan= $_POST['kecamatan'];
	$kabupaten= $_POST['kabupaten'];
	$provinsi= $_POST['provinsi'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE sekolah SET nama='$nama', alamat='$alamat', no_telpon='$no_telpon', kecamatan='$kecamatan', kabupaten='$kabupaten', provinsi='$provinsi' WHERE id='$id'");

	
	//jika query update sukses
	if($update){
		
		echo "<script>alert('Edit data sukses!!!');window.location='data sekolah.php'</script>";
		
	}else{
		
		echo "<script>alert('Edit data gagal!!!');window.location='edit_datasekolah.php'</script>";
	}


}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>
