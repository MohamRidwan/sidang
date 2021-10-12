<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   <style>
    body {
   background-image: url("bg.jpeg");
   background-repeat: no-repeat;
   background-size:cover
}
table {
    border-radius: 8px;
    height: 190px;
    box-shadow: 1px 2px 8px rgba(0,0,0,.65);
    width: 329px
}
footer {
  text-align: center;
  padding: 30px;
  background-color: black;
  color: white;
}</style>
  </head>
  <body>
  <?php
session_start();;
include "konek.php";
?>
<br>
<center>
    <br>
    <h1>SELAMAT DATANG</h1>
<img src="logo.png" height="200px">
    <form action="" method="POST">
   

            <table class="btn-primary active">
                <tr>
                <th colspan="3" height="70"><center><h3> LOGIN FORM </h3></center></th>
            </tr>
            <tr><td width="100"></td>
                <td width="100">Username</td>
                <td><input style="border:2px solid Tomato;" type="text"  name="username"></td>
                <td width="100"></td>
            </tr>
            <tr><td></td>
                <td>Password</td>
                <td><input style="border:2px solid Tomato;" type="password" name="password"></td>
            </tr>
            <tr><td></td><td></td>
            <td><center><br><input class="btn btn-warning" height="70"type="submit" value="Login" name="proseslog"><br><br></center></td></tr>
        </table>

</form>
</center>

<?php
if (isset($_POST['proseslog']))
 {
    $sql = mysqli_query($koneksi, "select * from user where username= '$_POST[username]' 
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if ($cek > 0) {
    $_SESSION['username'] = $_POST['username'];

    echo "<meta http-equiv=refresh content=0;URL='home.php'>";
    }
    else {

        echo "<h3><center><p align=center+<b>Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'></center></h3>";
    }
}?>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
  <center>

  mohamad_213@smkassalaambandung.sch.id
</center>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

