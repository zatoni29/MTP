<?php 
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" >SELAMAT DATANG ADMIN | <b>SISTEM INFORMASI KARYA CIPTA</b></a>
    <!-- <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  
  <div class="icons ml-4">
    <h5>
      <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
      <i class="fas fa-bell mr-3 " data-toggle="tooltip" title="Notifikasi"></i>
      <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
    </h5>
  </div> -->
</nav>

<div class="row">
  <div class="col-md-2 bg-success mt-5 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-2">
      <li class="nav-item">
    <a class="nav-link text-white"  href="dashboard.html"><i class="fas fa-user mr-3 display-4"></i>Admin</a>
  </li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-md-2 bg-dark pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-3">
  <li class="nav-item">
    <a class="nav-link text-white"  href="index.html"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="far fa-question-circle mr-3"></i>
    About</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="dosen.html"><i class="fas fa-bell mr-3"></i>
    New Notification</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="panduan admin.php"><i class="fas fa-calendar-alt mr-3"></i>Panduan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">   
    <a class="nav-link text-white" href="informasi.html"><i class="fas fa-paper-plane mr-3"></i>Informasi</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt mr-3 mt-5"></i>Logout</a>
  </li>
</ul>
  </div>

  <div class="col-md-10">
     <h3>DATA GURU </h3><hr class="bg-secondary">

      <a href="input_dataguru.php" class="btn btn-primary" ><i class="fas fa-plus-square mr-3" ></i>TAMBAH DATA GURU</a>
  <?php 
  if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
      echo "Data berhasil di input.";
    }else if($pesan == "update"){
      echo "Data berhasil di update.";
    }else if($pesan == "hapus"){
      echo "Data berhasil di hapus.";
    }
  }
  ?>

  <br><br>
  <form class="example" action="data guru.php" method="get">
    <input type="text" placeholder="Search name" name="cari">
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
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Jabatan</th>
        <th>Email</th>
        <th>Keterangan</th>
      </tr>


      <?php 
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $data = mysql_query( "select * from guru where nama like '%".$cari."%' " );       
    }else{
      $data = mysql_query( "select * from guru");   
    }
    while($d = mysql_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['agama']; ?></td>
        <td><?php echo $d['jabatan']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td>
            <a  href="lihat_guru.php?id=<?php echo $d['id']; ?>"><i class="fas fa-search text-warning"></i></a>
            <a  href="edit_dataguru.php?id=<?php echo $d['id']; ?>">| <i class="fas fa-edit text-primary"></i></a>
            <a  href="delete_guru.php?id=<?php echo $d['id']; ?>">| <i class="fas fa-trash-alt text-danger"></i></a> 
          </td>
      </tr>
    <?php } ?>

    </table>
  </div>
  </div>
    </div>

<!--     <div class="row mt-5">
      <div class="card ml-4 text-white text-center" style="width: 18rem;">
        <div class="card-header bg-danger display-4 pt-4 pb-4">
          <i class="fab fa-instagram"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title text-danger">INSTAGRAM</h5>
          <a href="#" class="btn btn-danger">follow</a>
        </div>
        </div>

      <div class="card ml-4 text-white text-center" style="width: 18rem;">
        <div class="card-header bg-info display-4 pt-4 pb-4">
          <i class="fab fa-facebook-square"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title text-info">FACEBOOK</h5>
          <a href="#" class="btn btn-info">Like</a>
        </div>
        </div>

      <div class="card ml-4 text-white text-center" style="width: 18rem;">
        <div class="card-header bg-primary display-4 pt-4 pb-4">
          <i class="fab fa-twitter"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title text-primary">TWITTER</h5>
          <a href="#" class="btn btn-primary">Like</a>
        </div>
        </div>


    </div>
  </div>
</div>
 -->    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>