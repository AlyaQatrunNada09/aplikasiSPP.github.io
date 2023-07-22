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
                <h3 class="card-title">Data Siswa</h3>
                </div>
                  <div class="card-body">
                    <h6 class="card-text" >Tambah Data Siswa</h6>
                <a class='btn btn-outline-primary' href="../Admin/form_tambah_siswa.php">Tambah</a>
                  <div class="card-header-action">
                
                  </div>
                  </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-bordered">
              <tr class="table-info">
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Nama Kelas</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Nominal</th>
                <th>ACTION</th>
              </tr>

              <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, siswa.alamat, siswa.no_telp, spp.nominal FROM siswa, kelas, spp WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['nisn']."</td>";
                    echo"<td>".$data['nis']."</td>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".$data['nama_kelas']."</td>";
                    echo"<td>".$data['alamat']."</td>";
                    echo"<td>".$data['no_telp']."</td>";
                    echo"<td>".$data['nominal']."</td>";
                    echo"<td><a class='btn btn-outline-info' href='form_ubah_siswa.php?nisn=".$data['nisn']."'>Ubah</a>
                            <a class='btn btn-outline-warning' href='proses_hapus_siswa.php?nisn=".$data['nisn']."'>Hapus</a></td>";
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
    
      
      


