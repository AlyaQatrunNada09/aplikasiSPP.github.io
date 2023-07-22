<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?> 

      <!-- Main Content -->
                <div class="main-content">
                <div class="row">
                <div class="col-md-12">
                <div class="card text-center">
                <div class="card-header">
                  <h3 class="card-title">Histori Pembayaran</h3>
                  </div>
                      <div class="card-body">
                      <h6 class="card-text" ></h6>
                  
                    <div class="card-header-action">
                  
                  
                          
                        </div>
                        </div>
                    <div class="card-body p-0">
                      <div class="table-responsive table-invoice">
                        <table class="table table-bordered">
                        <tr class="table-info">
                          <th>Id Pembayaran</th>
                          <th>Id Petugas</th>
                          <th>NISN</th>
                          <th>Tanggal Bayar</th>
                          <th>Bulan di Bayar</th>
                          <th>Tahun di Bayar</th>
                          <th>Id SPP</th>
                          <th>Jumlah Bayar</th>
                         

                  </tr>
                  <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT*FROM pembayaran");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['id_pembayaran']."</td>";
                    echo"<td>".$data['id_petugas']."</td>";
                    echo"<td>".$data['nisn']."</td>";
                    echo"<td>".$data['tgl_bayar']."</td>";
                    echo"<td>".$data['bulan_dibayar']."</td>";
                    echo"<td>".$data['tahun_dibayar']."</td>";
                    echo"<td>".$data['id_spp']."</td>";
                    echo"<td>".$data['jumlah_bayar']."</td>";
                  
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
    
      
      