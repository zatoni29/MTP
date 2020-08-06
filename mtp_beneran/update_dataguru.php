<?php
include 'koneksi.php';
$fileName = $_FILES['image']['name'];

if ($fileName != "")
{
 mysql_query("UPDATE guru SET id = '$_POST[id]', nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    agama = '$_POST[agama]',
    jabatan = '$_POST[jabatan]',   
    email = '$_POST[email]',   
    no_hp = '$_POST[no_hp]',   
    alamat = '$_POST[alamat]', 
    tanggal_lahir = '$_POST[tanggal_lahir]',   
    bidang_studi = '$_POST[bidang_studi]',   
    pendidikan = '$_POST[pendidikan]',   
    image = '$fileName'
    WHERE id= '$_GET[id]'");
 move_uploaded_file($_FILES['image']['tmp_name'],"gambar/".$_FILES['image']['name']);
} else {
 mysql_query("UPDATE guru SET id = '$_POST[id]', nama = '$_POST[nama]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    agama = '$_POST[agama]',
    jabatan = '$_POST[jabatan]',   
    email = '$_POST[email]',   
    no_hp = '$_POST[no_hp]',   
    alamat = '$_POST[alamat]', 
    tanggal_lahir = '$_POST[tanggal_lahir]',   
    bidang_studi = '$_POST[bidang_studi]',   
    pendidikan = '$_POST[pendidikan]',   
    image = '$fileName'
    WHERE id= '$_GET[id]'");
}

header("location:lihat_guru.php?id=$_GET[id]");
?>