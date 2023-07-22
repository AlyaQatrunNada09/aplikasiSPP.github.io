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
                    <h3>Update Data SPP</h3>

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_spp"])){
                    $id_spp = $_GET['id_spp'];
                    $query = "SELECT*FROM spp WHERE id_spp='".$id_spp."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>
    <form method="post" action="proses_ubah_spp.php?id_spp=<?php echo $id_spp; ?>" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id SPP</span>
              <input type="text" class="form-control" placeholder="Masukkan Id SPP" aria-label="Id SPP" aria-describedby="basic-addon1" name="id_spp"value="<?php echo $data['id_spp'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tahun</span>
              <input type="text" class="form-control" placeholder="Masukkan Tahun" aria-label="Tahun" aria-describedby="basic-addon1" name="tahun"value="<?php echo $data['tahun'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nominal</span>
              <input type="text" class="form-control" placeholder="Masukkan Nominal" aria-label="Nominal" aria-describedby="basic-addon1" name="nominal"value="<?php echo $data['nominal'];?>">
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


