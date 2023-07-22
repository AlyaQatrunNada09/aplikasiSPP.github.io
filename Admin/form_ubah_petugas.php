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
                    <h3>Update Data Petugas</h3>

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_petugas"])){
                    $id_petugas = $_GET['id_petugas'];
                    $query = "SELECT*FROM petugas WHERE id_petugas='".$id_petugas."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>

            <form method="post" action="proses_ubah_petugas.php?id_petugas=<?php echo $id_petugas; ?>" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id Petugas</span>
              <input type="text" class="form-control" placeholder="Masukkan Id Petugas" aria-label="Id Petugas" aria-describedby="basic-addon1" name="id_petugas"value="<?php echo $data['id_petugas'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
              <input type="text" class="form-control" placeholder="Masukkan Username" aria-label="username" aria-describedby="basic-addon1" name="username"value="<?php echo $data['username'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
              <input type="password" class="form-control" placeholder="Masukkan Password" aria-label="password" aria-describedby="basic-addon1" name="password"value="<?php echo $data['password'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nama Petugas</span>
              <input type="text" class="form-control" placeholder="Masukkan Nama Petugas" aria-label="nama Petugas" aria-describedby="basic-addon1" name="nama_petugas"value="<?php echo $data['nama_petugas'];?>">
                </div>
                <div class="form-grup mb-5">_
                  <select class="form-control selectric" name="level"value="<?php echo $data['level'];?>">
                  <option value="<?php echo $data['level'];?>"><?php echo $data['level'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                    while($data = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data['level']; ?>"><?php echo $data['level'];?></option>
                    <?php } ?>
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