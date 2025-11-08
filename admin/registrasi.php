<?php
include '../lib/koneksi.php'; // sambungkan ke database

if (isset($_POST['btn'])) {
  $nama = $_POST['nama'];
  $username = $_POST['usr'];
  $password = $_POST['pwd'];
  $konfirmasi = $_POST['pwd2'];

  // cek apakah password dan konfirmasi sama
  if ($password !== $konfirmasi) {
    $pesan = "<div class='alert alert-danger text-center'>Password dan konfirmasi tidak sama!</div>";
  } else {
    $password_enkripsi = md5($password); // enkripsi untuk login

    // cek apakah username sudah ada
   $cek = $koneksi->query("SELECT * FROM tbuser WHERE username='$username'");
    if ($cek->num_rows > 0) {
      $pesan = "<div class='alert alert-warning text-center'>Username sudah digunakan!</div>";
    } else {
      // simpan data ke database
      $simpan = $koneksi->query("
        INSERT INTO tbuser (nama_lengkap, username, password, password_asli)
        VALUES ('$nama', '$username', '$password_enkripsi', '$password')
      ");
      if ($simpan) {
        $pesan = "<div class='alert alert-success text-center'>
                    Registrasi berhasil! <a href='login.php' class='text-success fw-bold'>Login disini</a>
                  </div>";
      } else {
        $pesan = "<div class='alert alert-danger text-center'>Registrasi gagal, coba lagi.</div>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Admin Kampus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
   body {
    height: 100vh;
    background: linear-gradient(135deg, #11998e, #38ef7d);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Poppins", sans-serif;
  }

  .card {
    width: 30rem;
    border: none;
    border-radius: 1.25rem;
    backdrop-filter: blur(0.9375rem);
    background: rgba(255, 255, 255, 0.12);
    box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.25);
    color: #fff;
    transition: all 0.3s ease;
    margin-top: -0.03125rem;
  }

  .card:hover {
    transform: translateY(-0.375rem);
    box-shadow: 0 0.875rem 2.8125rem rgba(0, 0, 0, 0.35);
  }

  .card-header {
    border-radius: 1.25rem 1.25rem 0 0;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(0.3125rem);
    font-weight: 600;
    letter-spacing: 0.03125rem;
  }

  .card-body {
    padding: 2rem;
    margin-top: -2rem;
  }

  .form-label {
    font-weight: 500;
    color: #e9e9e9;
    transition: text-shadow 0.3s ease;
  }

  .form-label:hover {
    text-shadow: 0 0 0.5rem #00ffae, 0 0 0.75rem #00ffae;
  }

  .form-control {
    border-radius: 0.75rem;
    background-color: rgba(255, 255, 255, 0.1);
    border: none;
    color: #fff;
    transition: background-color 0.3s ease;
  }

  .form-control::placeholder {
    color: rgba(255, 255, 255, 0.6);
  }

  .form-control:focus {
    background-color: rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 0 0.125rem rgba(56, 239, 125, 0.4);
    color: #fff;
  }

  .btn-primary {
    border: none;
    border-radius: 0.75rem;
    background: linear-gradient(135deg, #00b09b, #96c93d);
    font-weight: 600;
    color: #fff;
    transition: all 0.3s ease;
    box-shadow: 0 0 0 transparent;
  }

  .btn-primary:hover {
    transform: scale(1.05);
    text-shadow: 0 0 0.5rem #b3ffcc, 0 0 1rem #66ff99;
    box-shadow: 0 0 0.9375rem rgba(102, 255, 153, 0.4);
  }

  .btn-outline-secondary {
    border: none;
    background: transparent;
    color: #fff;
    transition: text-shadow 0.3s ease;
  }

  .card-footer {
    border-top: 0.0625rem solid rgba(255, 255, 255, 0.1);
    background: transparent;
    color: rgba(255, 255, 255, 0.85);
    margin-top: -1rem;
  }

  a {
    color: #ffffff;
    font-weight: 500;
    position: relative;
    text-decoration: underline;
    text-decoration-color: #ffffff;
    text-underline-offset: 0.3rem;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(0.625rem); }
    to { opacity: 1; transform: translateY(0); }
  }

  .card {
    animation: fadeIn 0.8s ease-out;
  }

  .login-header {
    animation: fadeInDown 0.8s ease;
  }

  .logo-kampus {
    width: 4.06rem;
    height: 4.06rem;
    object-fit: contain;
  }

  .login-header h3 {
    font-family: "Poppins", sans-serif;
    letter-spacing: 0.1875rem;
    text-shadow: 0 0 0.5rem rgba(255, 255, 255, 0.3);
    font-size: 1.125rem;
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-1.25rem);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* ========================= */
  /* 📱 RESPONSIVE DESIGN 📱 */
  /* ========================= */
  @media (max-width: 1024px) {
    .card {
      width: 25rem;
    }
    .login-header h3 {
      font-size: 1rem;
      letter-spacing: 0.125rem;
    }
    .logo-kampus {
      width: 3.5rem;
      height: 3.5rem;
    }
  }

  @media (max-width: 768px) {
    body {
      flex-direction: column;
      padding: 1rem;
    }

    .card {
      width: 100%;
      margin-top: 1rem;
    }

    .login-header {
      flex-direction: column;
      text-align: center;
    }

    .login-header h3 {
      font-size: 0.95rem;
      letter-spacing: 0.1rem;
      margin-top: 0.5rem;
    }

    .logo-kampus {
      width: 3rem;
      height: 3rem;
      margin-bottom: 0.3rem;
    }

    .form-label {
      font-size: 0.9rem;
    }

    .btn-primary {
      font-size: 0.9rem;
      padding: 0.6rem;
    }
  }
  </style>
</head>
<body class="bg-light d-flex flex-column justify-content-center align-items-center vh-100">

  <div class="card shadow-lg">
    <!-- Header dengan logo & nama kampus -->
    <div class="card-header text-center login-header d-flex align-items-center justify-content-center mb-4">
      <img src="../img/Logo1.png" alt="Logo Kampus" class="logo-kampus me-3">
      <h3 class="text-white fw-bold m-0">STAI YAPERI CIBINONG</h3>
    </div>

    <!-- Isi Form Registrasi -->
    <div class="card-body">
      <?php if (!empty($pesan)) echo $pesan; ?>

      <form method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap:</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
          <label for="usr" class="form-label">Username:</label>
          <input type="text" class="form-control" id="usr" name="usr" placeholder="Masukkan username" required>
        </div>

        <div class="mb-3 position-relative">
          <label for="pwd" class="form-label">Password:</label>
          <div class="input-group">
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Masukkan password" required>
            <button type="button" class="btn btn-outline-secondary" id="togglePwd">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <div class="mb-3 position-relative">
          <label for="pwd2" class="form-label">Konfirmasi Password:</label>
          <div class="input-group">
            <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Ulangi password" required>
            <button type="button" class="btn btn-outline-secondary" id="togglePwd2">
              <i class="bi bi-eye"></i>
            </button>
          </div>
        </div>

        <button type="submit" name="btn" class="btn btn-primary w-100">Daftar</button>
      </form>
    </div>

    <div class="card-footer text-center">
      Sudah punya akun? <a href="login.php">Login disini</a>
    </div>
  </div>

  <script>
    // Toggle tampil/sembunyi password
    document.getElementById('togglePwd').addEventListener('click', function() {
      const pwd = document.getElementById('pwd');
      const icon = this.querySelector('i');
      if (pwd.type === 'password') {
        pwd.type = 'text';
        icon.classList.replace('bi-eye', 'bi-eye-slash');
      } else {
        pwd.type = 'password';
        icon.classList.replace('bi-eye-slash', 'bi-eye');
      }
    });

    document.getElementById('togglePwd2').addEventListener('click', function() {
      const pwd2 = document.getElementById('pwd2');
      const icon2 = this.querySelector('i');
      if (pwd2.type === 'password') {
        pwd2.type = 'text';
        icon2.classList.replace('bi-eye', 'bi-eye-slash');
      } else {
        pwd2.type = 'password';
        icon2.classList.replace('bi-eye-slash', 'bi-eye');
      }
    });
  </script>
</body>
</html>

