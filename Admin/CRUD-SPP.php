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
        <h3 class="card-title">Data SPP</h3>
          </div>
            <div class="card-body">
              <h6 class="card-text" >Tambah Data SPP</h6>
            <a class='btn btn-outline-primary' href="../Admin/form_tambah_spp.php">Tambah</a>
      <div class="card-header-action">
                
              </div>
              </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-bordered">
              <tr class="table-info">
                <th>Id Spp</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>ACTION</th>

              </tr>

              <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT*FROM spp");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['id_spp']."</td>";
                    echo"<td>".$data['tahun']."</td>";
                    echo"<td>".$data['nominal']."</td>";
                    echo"<td><a class='btn btn-outline-info' href='form_ubah_spp.php?id_spp=".$data['id_spp']."'>Ubah</a>
                            <a class='btn btn-outline-warning' href='proses_hapus_spp.php?id_spp=".$data['id_spp']."'>Hapus</a></td>";
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