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

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_spp"])){
                    $id_spp = $_GET['id_spp'];
                    $query = "SELECT*FROM spp WHERE id_spp='".$id_spp."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>
    <form method="post" action="proses_tambah_spp.php" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id SPP</span>
              <input type="text" class="form-control" placeholder="Masukkan Id SPP" aria-label="Id SPP" aria-describedby="basic-addon1" name="id_spp">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tahun</span>
              <input type="text" class="form-control" placeholder="Masukkan Tahun" aria-label="Tahun" aria-describedby="basic-addon1" name="tahun">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
              <input type="text" class="form-control" placeholder="Masukkan Nominal" aria-label="Nominal" aria-describedby="basic-addon1" name="nominal">
            </div>
            </div>
                  </table>
                    <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
                    <a href="CRUD-SPP.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
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


