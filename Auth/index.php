<?php  

   // Lampirkan dbconfig 

   require_once "dbconfig.php"; 

   // Cek status login user 

   if(!$user->isLoggedIn()){ 

     header("location: login.php"); //Redirect ke halaman login 

   } 

   // Ambil data user saat ini 

   $currentUser = $user->getUser(); 

  ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

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
                <li ><a href="logout.php">Log out</a></li>
                <div class="col-sm-5 col-sm-offset-8">
                    <form class="form-inline md-form mr-auto mb-4">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
                    </form>
                  </div>
                  </ul>
  </head>
  <body>
    
      </form>
    <section class="new product" id="new product">
            <section class="container">
                <div class="row">
                   <h2 class="text-center">New Product</h2> 
                   <hr>
                   
                   <div class="col-sm-4">
                        <a class="thumbnail">
                        <img src="img/1.jfif ">
                        <p>Lazada
                            BUKU GAMBAR A3
                            Rp 395.000
                        </p>
                        </a>
                    </div>     
                    <div class="col-sm-4">
                        <a href="beli.php" class="thumbnail">
                        <img src="img/download.jfif">
                        <p>Potentate Sketchbook 110 Sheets 100gsm/Kertas Buku Gambar & Sketsa</p>
                        <p>Rp 249.000</p>
                        </a>
                        </div> 
                    <div class="col-sm-4">
                        <a class="thumbnail">
                        <img src="img/download (1).jfif">
                        <p>Majalah Bobo</p>
                           <p> Rp 234.000</p>
                        </a>
                        </div>
                        </div>
                        </section>
                        
    </section class="Popularity" id="Popularity">
        <div class="row">
            <h2 class="text-center">Popularity</h2>
            <hr>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/images.jfif">
                <p>Buku Death note
                    Rp 249.000</p>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/images (2).jfif">
                <p>Buku Bahasa Indonesia Kelas 7 SMP - Buku Sekolah Digital</p>
                <p>  Rp 245.000</p>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/buku-kelas-10-revisi-2017.jpg">
                <p>Buku Kurikulum 2013 Kelas 10 Edisi Revisi 2017 Siswa dan Guru </p>
                   <p> Rp 214.000</a></p>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/ICON mat.jpg">
                <p>KUMPULAN BUKU SISWA KURIKULUM K-13 ~ SMPN 2 BAYAN - Situs Pendidikan</p>
                   <P> Rp 222.000</p>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/download (3).jfif">
                <p>Buku Paket SD / MI Kurikulum Terbaru/<p>
                <p> Rp 2460.000</p>
                </a>
            </div>

            <div class="col-sm-4">
                <a class="thumbnail">
                <img src="img/buku-kelas-10-revisi-2017 (1).jpg">
                <p>Buku Paket Kurikulum 2013 Kelas 10 Edisi Revisi 2017 Siswa dan Guru</p>
                    <p> Rp 275.000</p>
                </a>
            </div>
            </div>
    </section>
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