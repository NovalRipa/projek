<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <div class="Zalora" id="Zalora">
        <div class="container text-center">
            <div class="row">
                <h1>Gramedia</h1>
		  <p>Projeck Penjualan Buku By | Ripa Noval Kh | XII RPL 2 😁</p>            
                </div>
            </div>
            <div class="nav">
            <ul class="nav nav-tabs">
                <li ><a href="beranda.php">Beranda</a></li>
                <li ><a href="about.html">About</a></li>
                <li ><a href="Login.php">Log out</a></li>
                <div class="col-sm-5 col-sm-offset-8">
                    <form class="form-inline md-form mr-auto mb-4">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                    </form>
                  </div>
                  </ul>
  </head>
  <body>
  <div class="col-sm-4">
                        <a class="thumbnail">
                        <img src="img/download.jfif">
                        </a>
                        </div> 
                        <p align="left"> BUKU CATATAN / NOTE BOOK / NOTE BOOK SIMPLE </p>
                        <p align="left">5.0 ⭐⭐⭐⭐⭐ | 173 Penilaian | 412 Terjual</p> 
                        <p align="left">Pembelian sukses</p>
                        <br><br>
    <footer>
        <br><br><br><br>
        <hr>  
        <div class="container text-center">
          <div class="row">
            <p> &copy; Copyright 2020 | 2020 created by Ripa Noval Kh <i class="glyphicon glyphicon-user"></i>
              <a href="https://www.instagram.com/ripanaupal/">Ripa Noval Kh</a>
            </p>
          </div>
        </div>
        <hr>
      </footer>
  </body >
</html>

<html>
    <table>
        <?php
        if (isset($_POST['button'])){
            $alamat = $_POST['alamat'];

            echo  "<tr><td>Nama : " .$alamat. "</td></tr>";
            echo  "<tr><td>Alamat : " .$alamat. "</td></tr>";
            echo  "<tr><td>Catatan : " .$alamat. "</td></tr>";
            echo  "<tr><td>Metode : " .$alamat. "</td></tr>";
            

    }
        ?>
    </table>
</html>