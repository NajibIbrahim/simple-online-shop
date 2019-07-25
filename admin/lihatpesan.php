                   <?php
                   include "koneksi.php";
                   $sql = $conn->query("SELECT * FROM data WHERE no='$_GET[no]'");
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
                                <h1 class="h4 text-gray-900 mb-4"><b>Lihat Data Pesan dari "<?php echo $d['nama']; ?>"</h1>
                                </div>

                                <table style="text-align: left;" border='0' class="table table-striped table-bordered table-hover">
                                  <!-- <tr class="text-lighten"> -->
                                    <tr>
                                      <th width="170px">Nama</th><td><?php echo $d['nama']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Email</th><td><?php echo $d['email']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>No. Telepon</th><td><?php echo $d['hanphone']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Isi Pesan</th><td><?php echo $d['pesan']; ?></td>
                                    </tr>
                                  </table>
                                  <hr>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>