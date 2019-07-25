                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM pemesanan WHERE email='$_GET[email]'");
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
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Data Order "<?php echo $d['email']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="210px">Email</th><td width="360px"><?php echo $d['email']; ?></td>
                                      <!-- <th width="165px">Nama Santri</th><td width="260px">Achmad Najib Ibrahim</td> -->
                                    </tr>
                                    <tr>
                                      <th>Nama barang</th><td><?php echo $d['nama_p']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Jumlah Barang</th><td><?php echo $d['jumlah_p']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Keterangan Lain</th><td><?php echo $d['ket']; ?></td>
                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>