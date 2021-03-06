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
    <a class="nav-link text-white"  href="#"><i class="fas fa-user mr-3 display-4"></i>Admin</a>
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
    <a class="nav-link text-white" href="about_admin.php"><i class="far fa-question-circle mr-3"></i>
    About</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><i class="fas fa-bell mr-3"></i>
    New Notification</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="panduan admin.php"><i class="fas fa-calendar-alt mr-3"></i>Panduan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">   
    <a class="nav-link text-white" href="#"><i class="fas fa-paper-plane mr-3"></i>Informasi</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt mr-3 mt-5"></i>Logout</a>
  </li>
</ul>
  </div>

  <div class="col-md-10  pt-2">
     <h3><i class="far fa-question-circle mr-3"></i>EDIT DATA GURU </h3><hr class="bg-secondary">

<?php
    include 'koneksi.php';

    $data = mysql_query("select * from guru where id = '" . $_GET['id'] . "'");
    while ($hasil = mysql_fetch_array($data)) {
     $id = $hasil['id'];
     $nama = $hasil['nama'];
     $agama = $hasil['agama'];
     $jabatan = $hasil['jabatan'];
     $email = $hasil['email'];
     $no_hp = $hasil['no_hp'];
     $alamat = $hasil['alamat'];
     $tanggal_lahir = $hasil['tanggal_lahir'];
     $bidang_studi = $hasil['bidang_studi'];
     $pendidikan = $hasil['pendidikan'];
     $image = $hasil['image'];
    }

    function cekJK($jk) {
     $queryjk = mysql_query("select * from guru where id = '" . $_GET['id'] . "'");
     while ($hasiljk = mysql_fetch_array($queryjk)) {
      if ($jk == $hasiljk['jenis_kelamin']) {
       echo 'checked';
      }
     }
    }
    ?>
 <form style="margin-top: 30px; width: 500px;" enctype="multipart/form-data" method="post" action="update_dataguru.php?id=<?php echo $_GET['id']; ?>">
 <table>
  <tr> 
   <td>Foto</td>
   <td><img src="gambar/<?php echo $image ?>" width="100px" heigt="100px">
    <!-- <input type="file" name="image"> -->
  </tr>
  <tr> 
   <td> ID </td><td> <input type="text" name="id" size="30" value="<?php echo $id; ?>"> </td> 
  </tr>
  <tr> 
   <td> Nama </td><td> <input type="text" name="nama" size="30" value="<?php echo $nama; ?>"> </td> 
  </tr>
  <tr> 
   <td> Jenis Kelamin </td>
   <td> 
    <input type="radio" name="jenis_kelamin" value="pria" <?php cekJK('pria') ?>> Pria
    <input type="radio" name="jenis_kelamin" value="wanita" <?php cekJK('wanita') ?>> Wanita 
   </td>
  </tr>
  <tr> 
   <td> Agama </td><td> <input type="text" name="agama" size="30" value="<?php echo $agama; ?>"></td> 
  </tr>
  <tr> 
   <td> Jabatan </td><td> <input type="text" name="jabatan" size="30" value="<?php echo $jabatan; ?>"></td> 
  </tr>
  <tr> 
   <td> email </td><td> <input type="text" name="email" size="30" value="<?php echo $email; ?>"></td> 
  </tr>
  <tr> 
   <td> no_hp </td><td> <input type="text" name="no_hp" size="30" value="<?php echo $no_hp; ?>"></td> 
  </tr>
  <tr> 
   <td> Alamat </td><td> <textarea name="alamat"><?php echo $alamat; ?></textarea> </td> 
  </tr>
  <tr> 
   <td> tanggal_lahir </td><td> <input type="date" name="tanggal_lahir" size="30" value="<?php echo $tanggal_lahir; ?>"></td> 
  </tr>
  <tr> 
   <td> bidang_studi </td><td> <input type="text" name="bidang_studi" size="30" value="<?php echo $bidang_studi; ?>"></td>
  </tr>
  <tr> 
   <td> pendidikan </td><td> <input type="text" name="pendidikan" size="30" value="<?php echo $pendidikan; ?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" class="btn btn-primary mt-5" value="EDIT">
    <input type="button" name="batal" class="btn btn-danger mt-5" value="KEMBALI" onclick=self.history.back()></td>
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