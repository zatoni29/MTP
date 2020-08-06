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
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
  <a class="navbar-brand" >SELAMAT DATANG ADMIN | <b>SISTEM INFORMASI KARYA CIPTA</b></a>
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
    <a class="nav-link text-white" href="jadwal.html"><i class="fas fa-calendar-alt mr-3"></i>Panduan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">   
    <a class="nav-link text-white" href="informasi.html"><i class="fas fa-paper-plane mr-3"></i>Informasi</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt mr-3 mt-5"></i>Logout</a>
  </li>
</ul>
  </div>

  <div class="col-md-10  pt-2">
     <h3><i class="far fa-question-circle mr-3"></i>EDIT DATA GURU </h3><hr class="bg-secondary">

  <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $show = mysql_query("SELECT * FROM guru WHERE id='$id'");
    
    if(mysql_num_rows($show) == 0){
    
      echo '<script>window.history.back()</script>';
      
    }else{
    
      $data = mysql_fetch_assoc($show);
    
    }
    ?>
    

   <form action="update_dataguru.php" method="post">
    <table cellpadding="3" cellspacing="0" >
      <tr>
        <td>ID</td>
        <td>:</td>
        <td><input type="text" name="id" value="<?php echo $data['id']; ?>" required></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jenis_kelamin" value="pria" <?php if($data['jenis_kelamin']=='pria') echo 'checked'?> required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="wanita" <?php if($data['jenis_kelamin']=='wanita') echo 'checked'?> required> Perempuan</td>
      </tr>
     <tr>
        <td>Agama</td>
        <td>:</td>
        <td><input type="text" name="agama" value="<?php echo $data['agama']; ?>" required></td>
      </tr> 
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" required></td></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email" value="<?php echo $data['email']; ?>" required></td></td>
      </tr>
      <tr>
        <td>No.HP</td>
        <td>:</td>
        <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" required></td></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required></td></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required></td></td>
      </tr>
      <tr>
        <td>Bidang Studi</td>
        <td>:</td>
        <td><input type="text" name="bidang_studi" value="<?php echo $data['bidang_studi']; ?>" required></td></td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td><input type="text" name="pendidikan" value="<?php echo $data['pendidikan']; ?>" required></td></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td><input type="submit" name="simpan" value="Simpan" class="btn btn-outline-success"></td></td>
    </tr>
  </table>
</form>
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