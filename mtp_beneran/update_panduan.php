<?php
include 'koneksi.php';
$fileName = $_FILES['data']['name'];

if ($fileName != "")
{
 mysql_query("UPDATE panduan SET id = '$_POST[id]', judul = '$_POST[judul]',
    data = '$fileName'
    WHERE id= '$_GET[id]'");
 move_uploaded_file($_FILES['data']['tmp_name'],"data/".$_FILES['data']['name']);
} else {
 mysql_query("UPDATE panduan SET id = '$_POST[id]', judul = '$_POST[judul]',
    data = '$fileName'
    WHERE id= '$_GET[id]'");
}

header("location:panduan admin.php?id=$_GET[id]");
?>