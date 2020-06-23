<html>
<head>
  <title>Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="collspan pt-5">
  <h2><center>FORM PENDAFTARAN ADMIN</center></h2>
  <form action="proses_daftar.php" method="post" name="Pendaftaran">
    <center><table cellpadding="3" cellspacing="0" ></center>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" size="30" required class="form-control"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" size="30" required class="form-control"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="Password" name="password" size="30" required class="form-control"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td><input type="submit" name="daftar" class="btn btn-primary" value="DAFTAR">
            <a href="login.php" class="btn btn-danger" ></i>KEMBALI</a></td>
      </tr>
    </table>
  </form>
  </div>
</body>
</html>