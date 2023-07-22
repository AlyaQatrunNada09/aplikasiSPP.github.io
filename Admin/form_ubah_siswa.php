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
                    <h3>Update Data Siswa</h3>

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["nisn"])){
                    $nisn = $_GET['nisn'];
                    $query = "SELECT siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, kelas.id_kelas, spp.id_spp, siswa.alamat, siswa.no_telp, spp.nominal FROM siswa, kelas, spp WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND siswa.nisn = '".$nisn."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>
    <form method="post" action="proses_ubah_siswa.php?nisn=<?php echo $nisn; ?>" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">NISN</span>
              <input type="text" class="form-control" placeholder="Masukkan NISN" aria-label="NISN" aria-describedby="basic-addon1" name="nisn"value="<?php echo $data['nisn'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">NIS</span>
              <input type="text" class="form-control" placeholder="Masukkan NIS" aria-label="NIS" aria-describedby="basic-addon1" name="nis"value="<?php echo $data['nis'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
              <input type="text" class="form-control" placeholder="Masukkan Nama" aria-label="Nama" aria-describedby="basic-addon1" name="nama"value="<?php echo $data['nama'];?>">
            </div>
            <div class="input-group mb-5">
                  <select class="form-control selectric" name="nama_kelas"value="<?php echo $data['nama_kelas'];?>">
                  <option value="<?php echo $data['id_kelas'];?>"><?php echo $data['nama_kelas'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM kelas");
                    while($data_kelas = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data_kelas['id_kelas']; ?>"><?php echo $data_kelas['nama_kelas'];?></option>
                    <?php } ?>
                    </select>
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
              <input type="text" class="form-control" placeholder="Masukkan Alamat" aria-label="Alamat" aria-describedby="basic-addon1" name="alamat"value="<?php echo $data['alamat'];?>">
                </div>
                <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">No Telp</span>
              <input type="text" class="form-control" placeholder="Masukkan No Telp" aria-label="No Telp" aria-describedby="basic-addon1" name="no_telp"value="<?php echo $data['no_telp'];?>">
                </div>
                <div class="form-grup">
                  <select class="form-control selectric" name="nominal">
                  <option value="<?php echo $data['id_spp'];?>"><?php echo $data['nominal'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                    while($data_spp = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data_spp['id_spp']; ?>"><?php echo $data_spp['nominal'];?></option>
                    <?php } ?>
                    <select/>
                </div>
                    
                  </table>
                    <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
                    <a href="CRUD-Siswa.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
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