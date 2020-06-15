
<?php 
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		body {
			font-family: Arial;
		}

		* {
			box-sizing: border-box;
		}

		form.example input[type=text] {
			padding: 10px;
			font-size: 17px;
			border: 1px solid grey;
			float: left;
			width: 80%;
			background: #f1f1f1;
		}

		form.example button {
			float: left;
			width: 20%;
			padding: 10px;
			background: #2196F3;
			color: white;
			font-size: 17px;
			border: 1px solid grey;
			border-left: none;
			cursor: pointer;
		}

		form.example button:hover {
			background: #0b7dda;
		}

		form.example::after {
			content: "";
			clear: both;
			display: table;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.php">Beranda</a>
			</div>
			<div class="navbar-header">
				<a class="navbar-brand" href="input.php">Input Data</a>
			</div>
			<div class="navbar-header">
				<a class="navbar-brand" href="cari.php">Pencarian Data</a>
			</div>
			<div class="navbar-header">
				<a class="navbar-brand" href="edit.php">Edit Data</a>
			</div>
			<!-- <div class="navbar-header">
				<a class="navbar-brand" href="kalkulator_home.html">Kalkulator</a>
			</div> -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">Kwitansi</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
			</ul>
		</div>
	</nav>
	<h3><center>PENCARIAN DATA</center></h3>
	<form class="example" action="cari.php" method="get">
		<input type="text" placeholder="Search" name="cari">
		<button type="submit" value="Cari"><i class="fa fa-search"></i></button>
	</form>

	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>
	
	<br><br>
	<div class="container">
		<table class="table">
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Jiwa</th>
				<th>zakat</th>
				<th>Total Zakat</th>
				<th>Tanggal</th>
			</tr>


			<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysql_query("select * from data_jiwa where nama like '%".$cari."%'");				
		}else{
			$data = mysql_query("select * from data_jiwa");		
		}
		while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jumlah_jiwa']; ?></td>
				<td><?php echo $d['zakat']; ?></td>
				<td><?php echo $d['total_zakat']; ?></td>
				<td><?php echo $d['tgl_input']; ?></td>
			</tr>
		<?php } ?>

		</table>
	</div>
</body>
</html>
