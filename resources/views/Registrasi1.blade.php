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
    <img src="{{url('asset/front-end/image/gambar-template-registrasi.png')}}" alt="gambar-template-regsitrasi" width="930" height="1,296">
    <div class="logo">
    <img src="{{url('asset/front-end/image/Logo-Idestinasi.png')}}" alt="Logo-Idestinasi" width="164,93" height="54">
    </div>
    <div class="wrapper">
      <form action="">
        <h2>Mulai Perjalanan Wisatamu! <span>👋</span></h2>
        <p>Masukkan detail untuk membuat akun dan pilih peranmu!</p>
        <center>
          <a class="google" href="#"
            ><img src="img/google.png" />Lanjutkan dengan Google</a
          >
          <p class="or">atau</p>
        </center>
        <div class="input-box">
          <input type="text" required />
          <label>Alamat Email</label>
        </div>
        <div class="input-box">
          <input type="password" required />
          <label>Kata sandi</label>
        </div>
        <div class="input-box">
          <input type="password" required />
          <label>Konfirmasi sandi</label>
        </div>
        <div class="input-box">
          <button for="tombol">Pengelola Objek Wisata</button>
          <button for="tombol">Wisatawan</button>
        </div>

        <button type="submit" class="btn">Daftar</button>

        <div class="register">
          <p>Sudah memiliki akun? <a href="login.html">Masuk ke akun</a></p>
        </div>
      </form>
    </div>
  </body>
</html>


  