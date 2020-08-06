<?php 
include 'koneksi.php';
$id = $_GET['id'];
// $ambil = $host->query("SELECT * FROM guru WHERE id='$id'");
// $data = mysql_fetch_assoc($ambil);
$data = $data['data'];
if (file_exists("data/$data")){
	unlink("data/$data");
}
$delete = mysql_query( "DELETE FROM panduan WHERE id='$id'")or die(mysql_error());

//jika query update sukses
	if($delete){
		
		echo "<script>alert('Apakah anda yakin data ini dihapus ???');window.location='panduan admin.php'</script>";
		
	}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}

// header("location:home.php?pesan=hapus");
?>