                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM produk WHERE nama_p='$_GET[nama_p]'");
                   $d = $sql->fetch_assoc();

                   ?>
                   <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                      <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                          <div class="col-lg-8">
                            <div class="p-3">
                              <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Produk "<?php echo $d['nama_p']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="170px">Nama Produk</th><td><?php echo $d['nama_p']; ?></td>
                                      <!-- <th width="165px">Nama Santri</th><td width="260px">Achmad Najib Ibrahim</td> -->
                                    </tr>
                                    <tr>
                                      <th>Harga</th><td>Rp. <?php echo $d['harga_p']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Stok</th><td><?php echo $d['stok_p']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Spesifikasi</th><td><?php echo $d['spesifikasi_p']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Gambar</th><td><img width="50%" src="img/produk/<?php echo $d['gambar_p'];?>"></td>

                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>