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
              
            <form method="post" action="proses_simpan.php" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
              <span class="input-group-text" id="inputGroup-sizing-sm">Id kelas</span>
              <input type="text" class="form-control" placeholder="Masukkan Id kelas Anda" aria-label="Id kelas" aria-describedby="basic-addon1" name="id_kelas">
            </div>
            <div class="input-group mb-5">
              <span class="input-group-text" id="inputGroup-sizing-sm">Nama Kelas</span>
              <input type="text" class="form-control" placeholder="Masukkan Nama Kelas Anda" aria-label="Nama Kelas" aria-describedby="basic-addon1" name="nama_kelas">
            </div>
            </table>
            <div class="form-group">
              <select class="form-control selectric" name="kompetensi_keahlian">
                <option value=" ">~~ Pilih Kompetensi Keahlian ~~</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak </option>
                <option value="Teknik Audio Video">Teknik Audio Vidio </option>
                <option value="Desain Permodelan Dan Informasi Bangunan">Desain Permodelan Dan Informasi Bangunan </option>
                <option value="Teknik Dan Bisnis Sepeda Motor">Teknik Dan Bisnis Sepeda Motor </option>
                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif </option>
                  </select>
                  </div>
        </table>
        <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
        <a href="CRUD-Kelas.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
        </form>
                

          </div>
        </div>
      </div>
  </section>
</div>
      
<?php
include "../template-spp/footer.php";
?>
