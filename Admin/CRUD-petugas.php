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
                  <h3 class="card-title">Data Petugas</h3>
                    </div>
                      <div class="card-body">
                        <h6 class="card-text" >Tambah Data Petugas</h6>
                      <a class='btn btn-outline-primary' href="../Admin/form_tambah_petugas.php">Tambah</a>
                <div class="card-header-action">
                          
                        </div>
                        </div>
                    <div class="card-body p-0">
                      <div class="table-responsive table-invoice">
                        <table class="table table-bordered">
                        <tr class="table-info">
                          <th>Id Petugas</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Nama Petugas</th>
                          <th>Level</th>
                          <th>ACTION</th>

                  </tr>
                  <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT*FROM petugas");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['id_petugas']."</td>";
                    echo"<td>".$data['username']."</td>";
                    echo"<td>".$data['password']."</td>";
                    echo"<td>".$data['nama_petugas']."</td>";
                    echo"<td>".$data['level']."</td>";
                    echo"<td><a class='btn btn-outline-info' href='form_ubah_petugas.php?id_petugas=".$data['id_petugas']."'>Ubah</a>
                            <a class='btn btn-outline-warning' href='proses_hapus_petugas.php?id_petugas=".$data['id_petugas']."'>Hapus</a></td>";
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
    
      
      