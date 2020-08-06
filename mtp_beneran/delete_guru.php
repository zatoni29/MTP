<?php 
include 'koneksi.php';
$id = $_GET['id'];
// $ambil = $host->query("SELECT * FROM guru WHERE id='$id'");
// $data = mysql_fetch_assoc($ambil);
$image = $data['image'];
if (file_exists("gambar/$image")){
	unlink("gambar/$image");
}
$delete = mysql_query( "DELETE FROM guru WHERE id='$id'")or die(mysql_error());

//jika query update sukses
	if($delete){
		
		echo "<script>alert('Apakah anda yakin data ini dihapus ???');window.location='data guru.php'</script>";
		
	}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}

// header("location:home.php?pesan=hapus");
?>