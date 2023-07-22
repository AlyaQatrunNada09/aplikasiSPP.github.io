<?php
    include "../template-spp/header.php";
    include "../template-spp/navbar.php";
    include "../template-spp/sidebar.php";
    ?>
    
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title text-center">
                    <h3>Input data baru</h3>
            <form method="post" action="proses_tambah_petugas.php" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id Petugas</span>
              <input type="text" class="form-control" placeholder="Masukkan Id Petugas Anda" aria-label="Id Petugas" aria-describedby="basic-addon1" name="id_petugas">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
              <input type="text" class="form-control" placeholder="Masukkan Username Anda" aria-label="username" aria-describedby="basic-addon1" name="username">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
              <input type="password" class="form-control" placeholder="Masukkan Password Anda" aria-label="password" aria-describedby="basic-addon1" name="password">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nama Petugas</span>
              <input type="text" class="form-control" placeholder="Masukkan Nama Petugas Anda" aria-label="nama Petugas" aria-describedby="basic-addon1" name="nama_petugas">
                </div>
              <div class="form-group">
              <select class="form-control selectric" name="level">
                <option value=" ">~~ Pilih Level ~~</option>
                <option value="admin">Admin </option>
                <option value="petugas">Petugas </option>
                  </select>
                  </div>
                  </table>
                    <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
                    <a href="CRUD-petugas.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
                </form>
            </div>
            </div>
        </div>
      </div>
  </section>
</div>
      
<?php
include "../template-spp/footer.php";
?>