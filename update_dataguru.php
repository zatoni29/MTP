
<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
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
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE guru SET nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', jabatan='$jabatan', email='$email', no_hp='$no_hp', alamat='$alamat', tanggal_lahir='$tanggal_lahir', bidang_studi='$bidang_studi', pendidikan='$pendidikan' WHERE id='$id'");

	
	//jika query update sukses
	if($update){
		
		echo "<script>alert('Edit data sukses!!!');window.location='data guru.php'</script>";
		
	}else{
		
		echo "<script>alert('Edit data gagal!!!');window.location='edit_dataguru.php'</script>";
	}


}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>
