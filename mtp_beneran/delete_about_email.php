<?php 
include 'koneksi.php';
$id = $_GET['id'];
$delete = mysql_query("DELETE FROM about_email WHERE id='$id'")or die(mysql_error());

//jika query update sukses
	if($delete){
		
		echo "<script>alert('Apakah anda yakin data ini dihapus ???');window.location='about_admin.php'</script>";
		
	}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}

// header("location:home.php?pesan=hapus");
?>