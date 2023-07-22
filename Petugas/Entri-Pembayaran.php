<?php
    include "../template-spp/header.php";
    include "../template-spp/navbar2.php";
    include "../template-spp/sidebar2.php";
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

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_spp"])){
                    $id_pembayaran = $_GET['id_pembayaran'];
                    $query = "SELECT*FROM pembayaran WHERE id_pembayaran='".$id_pembayaran."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>
    <form method="post" action="proses_entri_pembayaran.php" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id Pembayaran</span>
              <input type="text" class="form-control" placeholder="Masukkan Id Pembayaran" aria-label="Id Pembayaran" aria-describedby="basic-addon1" name="id_pembayaran">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id Petugas</span>
              <input type="text" class="form-control" placeholder="Masukkan Id Petugas" aria-label="Id Petugas" aria-describedby="basic-addon1" name="id_petugas">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">NISN</span>
              <input type="text" class="form-control" placeholder="Masukkan NISN" aria-label="NISN" aria-describedby="basic-addon1" name="nisn">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Bayar</span>
              <input type="date" class="form-control" placeholder="Masukkan Tanggal Bayar" aria-label="Tanggal Bayar" aria-describedby="basic-addon1" name="tgl_bayar">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Bulan di Bayar</span>
              <input type="text" class="form-control" placeholder="Masukkan Bulan" aria-label="Bulan di Bayar" aria-describedby="basic-addon1" name="bulan_dibayar">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tahun di Bayar</span>
              <input type="text" class="form-control" placeholder="Masukkan Tahun" aria-label="Tahun di Bayar" aria-describedby="basic-addon1" name="tahun_dibayar">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id SPP</span>
              <input type="text" class="form-control" placeholder="Masukkan Id SPP" aria-label="Id SPP" aria-describedby="basic-addon1" name="id_spp">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
              <input type="text" class="form-control" placeholder="Masukkan Jumlah Bayar" aria-label="Jumlah Bayar" aria-describedby="basic-addon1" name="jumlah_bayar">
            </div>
            </div>
                  </table>
                    <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
                    <a href="Histori-Pembayaran.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
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


