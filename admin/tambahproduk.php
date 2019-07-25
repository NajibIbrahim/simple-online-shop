  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Tambah Produk</h1>
                </div>
                <form class="user" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nama_p" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="harga_p" placeholder="Harga Produk">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="stok_p" placeholder="Stok Produk">
                  </div>
                  <div>
                    <textarea class="textarea" placeholder="Spesifikasi" name="spesifikasi_p" 
                    style="width: 100%; height: 250px; font-size: 13px; line-height: 18px; border: 1px solid #dddddd; 
                    padding: 10px;"></textarea>
                  </div>
<!--                   <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="gambar">
                      <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="gambar">Upload Gambar </label>
                    <input type="file" name="gambar_p">
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
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php
    include 'koneksi.php';
    // date_default_timezone_set('Asia/Jakarta');
// move_uploaded_file($file,"foto/$name");
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama_p = $_POST['nama_p'];
    $harga_p = $_POST['harga_p'];
    $stok_p = $_POST['stok_p'];
    $spesifikasi_p = $_POST['spesifikasi_p'];
    $gambar_p = $_FILES['gambar_p']['name'];
    $tmp = $_FILES['gambar_p']['tmp_name'];

// $fotobaru = date('dmY').$gambar;
    $fotobaru = $gambar_p;
    // Set path folder tempat menyimpan fotonya
    $path = "img/produk/$fotobaru";

                // $sql = "INSERT INTO berita (judul, isi, gambar)
                // VALUES ('".$_POST['judul']."', '".$_POST['isi']."', '$nama')";
                // $s1 = mysqli_query($c,$sql);
                    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // buat query
      $sql = "INSERT INTO produk (nama_p, harga_p, stok_p, spesifikasi_p, gambar_p)
      VALUES ('$nama_p',
      '$harga_p',
      '$stok_p',
      '$spesifikasi_p',
      '$fotobaru')";

      $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
      if($query){
        ?>
        <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=dataproduk';
      </script>
      <?php
    }
    else
    {
      ?>
      <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=dataproduk';
    </script>
    <?php

  }
} ?> 