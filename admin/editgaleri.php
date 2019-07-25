  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Tambah Galeri</h1>
                </div>

                <?php
                include "koneksi.php";
                $sql = $conn->query("SELECT * FROM galeri WHERE judul='$_GET[judul]'");
                $row = $sql->fetch_assoc();
                ?>

                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']; ?>" required/>
                  </div>
                  <div class="form-group">
                    <img width="70px" src="img/galeri/<?php echo $row['gambar'];?>" id="showgambar">
                    <p></p>
                    <label for="gambar">Upload Gambar </label>
                    <input type="file" name="gambar" id="inputgambar">
                  </div>
                  <div class="text-center mb-2">
                    <a class="small" href="">Pastikan Data Yang Anda Masukkan Sudah Benar !</a>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <button type="reset" name="reset" class="col-sm-4-6 btn btn-danger btn-user btn-block">Reset</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="simpan" class="col-sm-4-6 btn btn-primary btn-user btn-block">Simpan</button>
                    </div>
                  </div>
                  <hr>
                </form>

                <?php
                if(isset($_POST['simpan'])){
                  $judul = $_POST['judul'];
                  $gambar = $_FILES['gambar']['name'];
                  $tmp_name = $_POST['gambar']['tmp_name'];
                  if ($gambar == "") {
                    #hanya update text
                    $sql = $conn->query("UPDATE galeri SET 
                      judul='$judul' WHERE judul='$_GET[judul]'");
                    if ($sql) {
                      # cek data berhasil
                      ?>
                      <script type="text/javascript">
                        alert("Data Berhasil di Update"); document.location = '?halaman=datagaleri';
                      </script>
                      <?php
                    } else {
                      # cek data gagal
                      ?>
                      <script type="text/javascript">
                        alert("Data Gagal di Update"); document.location = '?halaman=datagaleri';
                      </script>
                      <?php
                    }
                  } else {
                    # code...
                    $tempat_foto = "img/galeri/$gambar";

                    if (is_file($tempat_foto)) {
                      unlink($tempat_foto);
                    }
                    move_uploaded_file($tmp_name, $tempat_foto);

                    $sql = $conn->query("UPDATE galeri SET 
                      judul='$judul',
                      gambar='$gambar' WHERE judul='$_GET[judul]'");

                    if ($sql) {
                      # cek data berhasil
                      ?>
                      <script type="text/javascript">
                        alert("Data Berhasil di Update"); document.location = '?halaman=datagaleri';
                      </script>
                      <?php
                    } else {
                      # cek data gagal
                      ?>
                      <script type="text/javascript">
                        alert("Data Gagal di Update"); document.location = '?halaman=datagaleri';
                      </script>
                      <?php
                    }

                  }

                }


                ?>

                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>