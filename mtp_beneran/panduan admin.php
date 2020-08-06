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
     <h3>PANDUAN </h3><hr class="bg-secondary">
<br><br>
     <form action="input_panduan.php" method="post" enctype="multipart/form-data">
    <table cellpadding="3" cellspacing="0" >
      <tr>
        <td>File</td>
        <td>:</td>
        <td><input type="file" name="data"></td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>:</td>
        <td><input type="text" name="judul" size="30" required class="form-control"></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td><input type="submit" name="tambah" class="btn btn-dark text-white" value="Upload"></td>
    </tr>
  </table>
</form>

<div class="container pt-4">
    <table class="table">
      <tr>
        <th>ID</th>
        <th>File</th>
        <th>Judul</th>
        <th>Keterangan</th> 
      </tr>

      <?php 
      include "koneksi.php";
      $query_mysql = mysql_query("SELECT * FROM panduan")or die(mysql_error());
      while($data = mysql_fetch_array($query_mysql)){
        ?>
        <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['data']; ?></td>
          <td><?php echo $data['judul']; ?></td>
          <td>
            <a href="data/<?php echo $data['data']; ?>" class= "text-dark"download><i class="fas fa-file-download"></i></a> |
            <a  href="edit_panduan.php?id=<?php echo $data['id']; ?>" class="text-info">Edit</a>  |
            <a  href="delete_panduan.php?id=<?php echo $data['id']; ?>" class="text-danger">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </table>
    <input type="button" name="batal" class="btn btn-danger" value="Kembali" onclick=self.history.back()>
  </div>

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