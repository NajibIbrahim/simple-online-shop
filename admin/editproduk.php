  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Edit Produk</h1>
                </div>

                <?php
                include "koneksi.php";
                $sql = $conn->query("SELECT * FROM produk WHERE nama_p='$_GET[nama_p]'");
                $row = $sql->fetch_assoc();
                // var_dump($row);
                $gambar=$row['gambar_p'];
                $tempat_foto2 = "img/produk/$gambar";

                ?>

                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama_p" value="<?php echo $row['nama_p']; ?>" required/>
                  </div>
<!--                   <div class="form-group">
                    <select class="custom-select" name="id_label">
                      <option selected for="label">Pilih Label Produk</option>
                      <?php 
                      $get_label = $row['id_label'];
                      $sql = $conn->query("SELECT * FROM label");
                      while ($data = $sql->fetch_assoc()) {
                       if ($data['id_label'] == $get_label) {
                           # selected
                        ?>
                        <option selected="" value="<?= $data['id_label']; ?>"><?= $data['ket']; ?></option>
                        <?php
                      } else {
                        ?>
                        <option value="<?= $data['id_label']; ?>"><?= $data['ket']; ?></option>
                        <?php                      
                      }
                    } 

                    ?>
                    >
                  </select>
                </div> -->
                <div>
                  <textarea class="textarea"  name="spesifikasi_p"
                  style="width: 100%; height: 250px; font-size: 13px; line-height: 18px; border: 1px solid #dddddd; 
                  padding: 10px;"><?php echo $row['spesifikasi_p']; ?></textarea>
                </div>
                <div class="form-group">
                  <img width="90px" src="img/produk/<?php echo $row['gambar'];?>" id="showgambar">
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
                // $id_label = $_POST['id_label'];
                $nama_p = $_POST['nama_p'];
                if ($_FILES['gambar_p']['name'] == "") {
                    #hanya update text
                  $sql = $conn->query("UPDATE produk SET 
                    nama_p='$nama_p' WHERE nama_p='$_GET[nama_p]'");
                  if ($sql) {
                      # cek data berhasil
                    ?>
                    <script type="text/javascript">
                      alert("Data Berhasil di Update"); document.location = '?halaman=dataproduk';
                    </script>
                    <?php
                  } else {
                      # cek data gagal
                    ?>
                    <script type="text/javascript">
                      alert("Data Gagal di Update"); document.location = '?halaman=dataproduk';
                    </script>
                    <?php
                  }
                } else {
                  // $mysql="SELECT * FROM berita WHERE judul='$_GET[judul]'";
                  // $query= mysqli_query($conn,$mysql);
                  // $data= mysqli_fetch_array($query);

                  // $gambar = $data['gambar'];
                    # code...
                  $gambar_new = $_FILES['gambar_p']['name'];
                  $tmp_name = $_FILES['gambar_p']['tmp_name'];

                  $tempat_foto_new = "img/produk/$gambar_new";
// 
                  if (is_file($tempat_foto2)) {
                    unlink($tempat_foto2);
                  }
                  move_uploaded_file($tmp_name, $tempat_foto_new);

                  $sql = $conn->query("UPDATE produk SET 
                    id_label='$id_label',
                    nama_p='$nama_p',
                    gambar_p='$gambar_new' WHERE nama_p='$_GET[nama_p]'");

                  if ($sql) {
                      # cek data berhasil
                    ?>
                    <script type="text/javascript">
                      alert("Data Berhasil di Update"); document.location = '?halaman=dataproduk';
                    </script>
                    <?php
                  } else {
                      # cek data gagal
                    ?>
                    <script type="text/javascript">
                      alert("Data Gagal di Update"); document.location = '?halaman=dataproduk';
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