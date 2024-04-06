<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/registrasi.css" />
  </head>
  <body>
    <img src="{{url('asset/front-end/image/gambar-template-registrasi.png')}}" alt="gambar-template-registrasi" width="930" height="1,296">
    <div class="logo">
    <img src="{{url('asset/front-end/image/logoidestinasi.png')}}" alt="logoidestinasi.png" width="164,93" height="54">
    </div>
    <div class="wrapper">
      <form action="">
        <h2>Mulai Perjalanan Wisatamu! <span>👋</span></h2>
        <p>Masukkan detail untuk membuat akun dan pilih peranmu!</p>
        <div class="input-box">
          <input type="text" required />
          <label>Alamat Email</label>
        </div>
        <div class="input-box">
          <input type="" required />
          <label>Kata sandi</label>
        </div>
        <div class="input-box">
          <input type="password" required />
          <label>Konfirmasi sandi</label>
        </div>
        
        <input type="option" id="option"  value="Pengelola objek wisata">
        <label for="Pengelola objek wisata">Pengelola objek wisata</label><br>

        <input type="option" id="option"  value="Wisatawan">
        <label for="Wisatawan">Wisatawan</label><br>


        <button type="submit" class="btn">Daftar</button>

        <div class="register">
          <p>Sudah memiliki akun? <a href="login.php">Masuk ke akun</a></p>
          <center>
          <a class="google" href="#"
            ><img src="img/google.png" />Lanjutkan dengan Google</a
          >
          <p class="or">atau</p>
        </center>
        <div class="input-box">
        </div>
      </form>
    </div>
  </body>
</html>


  