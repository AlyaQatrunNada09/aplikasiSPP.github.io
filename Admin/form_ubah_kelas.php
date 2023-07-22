<?php
    include "../template-spp/header.php";
    include "../template-spp/navbar.php";
    include "../template-spp/sidebar.php";
    ?>
    
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title text-center">
                    <h3>Update Data Kelas</h3>

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_kelas"])){
                    $id_kelas = $_GET['id_kelas'];
                    $query = "SELECT*FROM kelas WHERE id_kelas='".$id_kelas."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>

<form method="post" action="proses_ubah_kelas.php?id_kelas=<?php echo $id_kelas; ?>" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
              <span class="input-group-text" id="inputGroup-sizing-sm">Id kelas</span>
              <input type="text" class="form-control" placeholder="Masukkan Id kelas" aria-label="Id kelas" aria-describedby="basic-addon1" name="id_kelas"value="<?php echo $data['id_kelas'];?>">
            </div>
            <div class="input-group mb-5">
              <span class="input-group-text" id="inputGroup-sizing-sm">Nama Kelas</span>
              <input type="text" class="form-control" placeholder="Masukkan Nama Kelas" aria-label="Nama Kelas" aria-describedby="basic-addon1" name="nama_kelas"value="<?php echo $data['nama_kelas'];?>">
            </div>
            </table>
            <div class="form-grup mb-5">
                  <select class="form-control selectric" name="kompetensi_keahlian"value="<?php echo $data['kompetensi_keahlian'];?>">
                  <option value="<?php echo $data['kompetensi_keahlian'];?>"><?php echo $data['kompetensi_keahlian'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM kelas");
                    while($data = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data['kompetensi_keahlian']; ?>"><?php echo $data['kompetensi_keahlian'];?></option>
                    <?php } ?>
                    </select>
                </div>
        
        <input type="submit" class="btn btn-outline-info me-md-2" value="Ubah">
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
