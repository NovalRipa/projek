<?php  

   // Lampirkan dbconfig 

   require_once "dbconfig.php"; 

   // Cek status login user 

   if($user->isLoggedIn()){ 

     header("location: index.php"); //Redirect ke index 

   } 

   //Cek adanya data yang dikirim 

   if(isset($_POST['kirim'])){ 

     $nama = $_POST['nama']; 

     $email = $_POST['email']; 

     $password = $_POST['password']; 

     // Registrasi user baru 

     if($user->register($nama, $email, $password)){ 

       // Jika berhasil set variable success ke true 

       $success = true; 

     }else{ 

       // Jika gagal, ambil pesan error 

       $error = $user->getLastError(); 

     } 

   } 

  ?> 

 <!DOCTYPE html>  

 <html>  

   <head> 

     <meta charset="utf-8"> 

     <title>Register</title> 

     <link rel="stylesheet" href="sa.css" media="screen" title="no title" charset="utf-8"> 

   </head> 

   <body> 

     <div class="login-page"> 

      <div class="form"> 

        <form class="register-form" method="post"> 

        <?php if (isset($error)): ?> 

          <div class="error"> 

            <?php echo $error ?> 

          </div> 

        <?php endif; ?> 

        <?php if (isset($success)): ?> 

          <div class="success"> 

            Berhasil mendaftar. Silakan <a href="login.php">login</a>. 

          </div> 

        <?php endif; ?> 
        <label for=""><p align="left">
          Nama Lengkap
        </p></label>
        <input type="text" name="nama" placeholder="nama" required/> 

        <label for=""><p align="left">
          Masukkan Email</p></label>
        <input type="email" name="email" placeholder="email address" required/> 

        <label for=""><p align="left">
          Masukkan Password</p></label>
        <input type="password" name="password" placeholder="password" required/> 

        <button type="submit" name="kirim">Buat</button> 

        <p class="message">Sudah punya akun <a href="login.php">Masuk</a></p> 

        </form> 

      </div> 

     </div> 

   </body> 

 </html>  