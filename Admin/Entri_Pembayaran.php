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
                  <h3 class="card-title">Entri Transaksi</h3>
                    </div>
                      <div class="card-body">
                      <h6 class="card-text" >Tambah Data Entri Transaksi</h6>
                  <a class='btn btn-outline-primary' href="../Admin/Form_Tambah_Pembayaran.php">Tambah</a>
                    <div class="card-header-action">
                  
                          
                        </div>
                        </div>
                    <div class="card-body p-0">
                      <div class="table-responsive table-invoice">
                        <table class="table table-bordered">
                        <tr class="table-info">
                          <th>Id Pembayaran</th>
                          <th>Nama Petugas</th>
                          <th>Nama Siswa</th>
                          <th>Tanggal Bayar</th>
                          <th>Bulan di Bayar</th>
                          <th>Tahun di Bayar</th>
                          <th>Nominal</th>
                          <th>Jumlah Bayar</th>
                          <th>ACTION</th>

                  </tr>
                  <?php
                  include "../koneksi.php";
                  $sql = mysqli_query($koneksi, "SELECT pembayaran.id_pembayaran, petugas.nama_petugas,petugas.id_petugas,siswa.nisn, siswa.nama, 
                  pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, spp.id_spp,spp.nominal, pembayaran.jumlah_bayar 
                  FROM pembayaran, petugas, spp, siswa WHERE pembayaran.nisn=siswa.nisn AND pembayaran.id_petugas=petugas.id_petugas 
                  AND pembayaran.id_spp=spp.id_spp");

                  while($data = mysqli_fetch_array($sql)){
                    echo"<tr>";
                    echo"<td>".$data['id_pembayaran']."</td>";
                    echo"<td>".$data['nama_petugas']."</td>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".$data['tgl_bayar']."</td>";
                    echo"<td>".$data['bulan_dibayar']."</td>";
                    echo"<td>".$data['tahun_dibayar']."</td>";
                    echo"<td>".$data['nominal']."</td>";
                    echo"<td>".$data['jumlah_bayar']."</td>";
                    echo"<td><a class='btn btn-outline-info' href='form_ubah_pembayaran.php?id_pembayaran=".$data['id_pembayaran']."'>Ubah</a>
                            <a class='btn btn-outline-warning' href='proses_hapus_pembayaran.php?id_pembayaran=".$data['id_pembayaran']."'>Hapus</a></td>";
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
    
      
      