<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/7.jpeg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login Siswa</h4></div>

              <div class="card-body">
                <form method="POST" action="Siswa/Histori_Pembayaran.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="nisn" class="form-control" name="nisn" tabindex="1" placeholder="Masukkan NISN Anda" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your NISN
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="nama" class="control-label">Nama</label>
                      <div class="float-right">
                      
                      </div>
                    </div>
                    <input id="nama" type="nama" class="form-control" name="nama" tabindex="2" placeholder="Masukkan Nama Anda" required>
                    <div class="invalid-feedback">
                      please fill in your Name
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login untuk Petugas/Admin</div>
                </div>
                  <div class="form-group">
                    <button onclick="submit" class="btn btn-warning btn-lg btn-block" tabindex="4"><a href="loginAdmin.php">
                      Petugas/Admin
                      </a>
                    </button>
                  </div>
                </form>
                
                
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Alya 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>