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
                    <h3>Update Data Pembayaran</h3>

                    <?php
                    include "../koneksi.php";

                    if(isset($_GET["id_pembayaran"])){
                    $id_pembayaran = $_GET['id_pembayaran'];
                    $query = "SELECT pembayaran.id_pembayaran, petugas.nama_petugas,petugas.id_petugas,siswa.nisn, siswa.nama, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, 
                    pembayaran.tahun_dibayar,spp.id_spp, spp.nominal, pembayaran.jumlah_bayar FROM pembayaran, petugas, spp, siswa WHERE pembayaran.nisn=siswa.nisn AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_pembayaran = '".$id_pembayaran."'";
                    $sql = mysqli_query($koneksi,$query);
                    $data = mysqli_fetch_array($sql);
                    }
                    ?>
    <form method="post" action="proses_ubah_pembayaran.php?id_pembayaran=<?php echo $id_pembayaran; ?>" enctype="multypart/form-data">
            <table cellpadding="10">
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id Pembayaran</span>
              <input type="text" class="form-control" placeholder="Masukkan Id Pembayaran" aria-label="Id Pembayaran" aria-describedby="basic-addon1" name="id_pembayaran"value="<?php echo $data['id_pembayaran'];?>">
            </div>
            <div class="form-grup mb-5">
                  <select class="form-control selectric" name="nama_petugas"value="<?php echo $data['nama_petugas'];?>">
                  <option value="<?php echo $data['id_petugas'];?>"><?php echo $data['nama_petugas'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                    while($data_petugas = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data_petugas['id_petugas']; ?>"><?php echo $data_petugas['nama_petugas'];?></option>
                    <?php } ?>
                    </select>
                </div>
            <div class="form-grup mb-5">_
                  <select class="form-control selectric" name="nama"value="<?php echo $data['nama'];?>">
                  <option value="<?php echo $data['nisn'];?>"><?php echo $data['nama'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                    while($data_siswa = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data_siswa['nisn']; ?>"><?php echo $data_siswa['nama'];?></option>
                    <?php } ?>
                    </select>
                </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Bayar</span>
              <input type="date" class="form-control" placeholder="Masukkan Tanggal Bayar" aria-label="Tanggal Bayar" aria-describedby="basic-addon1" name="tgl_bayar"value="<?php echo $data['tgl_bayar'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Bulan di Bayar</span>
              <input type="text" class="form-control" placeholder="Masukkan Bulan" aria-label="Bulan di Bayar" aria-describedby="basic-addon1" name="bulan_dibayar"value="<?php echo $data['bulan_dibayar'];?>">
            </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Tahun di Bayar</span>
              <input type="text" class="form-control" placeholder="Masukkan Tahun" aria-label="Tahun di Bayar" aria-describedby="basic-addon1" name="tahun_dibayar"value="<?php echo $data['tahun_dibayar'];?>">
            </div>
            <div class="form-grup mb-5">
                  <select class="form-control selectric" name="nominal"value="<?php echo $data['nominal'];?>">
                  <option value="<?php echo $data['id_spp'];?>"><?php echo $data['nominal'];?></option>
                  <option value="">~~~~~~~~~~~~~~~~~</option>
                    <?php
                    include "../koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                    while($data_spp = mysqli_fetch_array($sql)){ ?>
                    <option value="<?php echo $data_spp['id_spp']; ?>"><?php echo $data_spp['nominal'];?></option>
                    <?php } ?>
                    </select>
                </div>
            <div class="input-group mb-5">
            <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
              <input type="text" class="form-control" placeholder="Masukkan Jumlah Bayar" aria-label="Jumlah Bayar" aria-describedby="basic-addon1" name="jumlah_bayar"value="<?php echo $data['jumlah_bayar'];?>">
            </div>
            </div>
                  </table>
                    <input type="submit" class="btn btn-outline-info me-md-2" value="Simpan">
                    <a href="Entri_Pembayaran.php"><input type="button" class="btn btn-outline-warning"  value="Batal"></a>
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


