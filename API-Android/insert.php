<?php

require_once "../library/inc.connection.php";
require_once "../library/inc.library.php";

opendb();

#mencari item barang
	
	$kdBarang=trim($_POST['kdBarang']);
	$noFaktur=trim($_POST['noFaktur']);
	$user_id=trim($_POST['userid']);
	
	$errMsg="";
	
	$qri = "SELECT * FROM nama_obat WHERE kd_barang='$kdBarang' AND active='Y'";
	$hsl = querydb($qri);
	$row = numrows($hsl);
	if($row>=1){
		while($rek = arraydb($hsl)){
			//cari data harga beli rata-rata untuk barang tsb. 
			$qri2 = "SELECT * FROM stock_barang WHERE kd_barang='$kdBarang'";
			$hsl2 = querydb($qri2);
			$rek2 = arraydb($hsl2);
				$hrgAvg = $rek2['hrg_beli_rata2'];
			
			$subTtl = $rek['hrg_jual'] * 1;
			$id = buatKode("penjualan_tmp","");
			$qri3 = "INSERT INTO penjualan_tmp (id,no_faktur,kd_barang,jumlah,harga,sub_total,hrg_pokok,user) VALUES ('$id','$noFaktur','$rek[kd_barang]','1','$rek[hrg_jual]','$subTtl','$hrgAvg','$user_id')";
			$hsl3 = querydb($qri3);	
		
		}
	}else{
	
		$errMsg  = "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">";
		$errMsg .= "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>";
		$errMsg .= " Kode Barang : <b>$kdBarang</b> Tidak Ada dalam database !!!"; 
		$errMsg .= "</div>";
	}


?>