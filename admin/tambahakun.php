  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg-8">
            <div class="p-3">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"><b>Tambah Akun</h1>
                </div>
                <form class="user" method="post"  action="">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Name">
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
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
    if(isset($_POST['simpan'])){

      $level = "User";
      $password = md5($_POST['password']);

      $sql= "INSERT INTO `login`(`name`,`username`, `password`, `level`) 
      VALUES ('".$_POST['name']."',
      '".$_POST['username']."',
      '$password',
      '$level')";

      $s1 = mysqli_query($conn,$sql);


      if($s1){
        ?>
        <script>alert("Alhamdulillah Berhasil Menyimpan Data"); document.location= '?halaman=dataakun';
      </script>
      <?php
    }
    else
    {
      ?>
      <script>alert("Gagal Menyimpan Data"); document.location= '?halaman=dataakun';
    </script>
    <?php

  }
} ?>