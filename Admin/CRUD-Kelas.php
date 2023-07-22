<?php
    include "../template-spp/header.php";
    include "../template-spp/navbar.php";
    include "../template-spp/sidebar.php";
    ?>
    
      
      <!-- Main Content -->
        <div class="main-content">
            <div class="row">
              <div class="col-md-12">
                <div class="card text-center">
                  <div class="card-header">
                  <h3 class="card-title">Data Kelas</h3>
                  </div>
                    <div class="card-body">
                      <h6 class="card-text" >Tambah Data Kelas</h6>
                  <a class='btn btn-outline-primary' href="../Admin/form_tambah_kelas.php">Tambah</a>
                    <div class="card-header-action">
                      </div>
                      </div>
                      <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Siswa</h4>
                  </div>
                  <div class="card-body">
                    3
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">

              <div class="card-stats">
                    </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kelas</h4>
                  </div>
                  <div class="card-body">
                    3
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">

              <div class="card-stats">
                    </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total SPP</h4>
                  </div>
                  <div class="card-body">
                    1
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10">
              <div class="card card-statistic-2">

              <div class="card-stats">
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Transaksi Bulanan</h4>
                    </div>
                    <div class="card-body">
                      59
                    </div>
                </div>
            </div>
          </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">

              <div class="card-stats">
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Transaksi Tahunan</h4>
                    </div>
                    <div class="card-body">
                      59
                    </div>
                </div>
            </div>
          </div>
        </section>


                    <div class="card-body p-0">
                      <div class="table-responsive table-invoice">
                        <table class="table table-bordered">
                        <tr class="table-info">
                          <th>Id Kelas</th>
                          <th>Nama Kelas</th>
                          <th>Kompetensi Keahlian</th>
                          <th>ACTION</th>

                  </tr>
                  <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT*FROM kelas");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['id_kelas']."</td>";
                    echo"<td>".$data['nama_kelas']."</td>";
                    echo"<td>".$data['kompetensi_keahlian']."</td>";
                    echo"<td><a class='btn btn-outline-info' href='form_ubah_kelas.php?id_kelas=".$data['id_kelas']."'>Ubah</a>
                            <a class='btn btn-outline-warning' href='proses_hapus_kelas.php?id_kelas=".$data['id_kelas']."'>Hapus</a></td>";
                    echo"</tr>";
                  }
                  ?>
</table>
</div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php

      include "../template-spp/footer.php";
      ?>