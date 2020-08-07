<?php
include_once('koneksi.php');

    $id = addslashes(htmlentities($_POST['id']));
   $nim = addslashes(htmlentities($_POST['nim']));
   $nama = addslashes(htmlentities($_POST['namamahasiswa']));
   $alamat = addslashes(htmlentities($_POST['alamat']));
    $judul = addslashes(htmlentities($_POST['judulbuku']));
    $pengarang = addslashes(htmlentities($_POST['pengarang']));
    $penerbit = addslashes(htmlentities($_POST['penerbit']));
    $tahun = addslashes(htmlentities($_POST['tahun']));


//$insert = "INSERT INTO data_mhs (id, nim, nama, jurusan) VALUES ('$id','$nim','$nama','$jurusan')";
$result = "INSERT INTO `perpus`(`id`, `nim`, `namamahasiswa`, `alamat`, `judulbuku`, `pengarang`, `penerbit`, `tahun`) VALUES ('$id','$nim','$nama','$alamat','$judul','$pengarang','$penerbit','$tahun')";

$inserting = mysqli_query($kon,$result);
$res = array();
if($inserting){
  $res['code'] =1;
  $res['message'] = "Data sukses";
}else{
  $res['code'] =0;
  $res['message'] = "Gagal";
}
echo json_encode($res);
?>