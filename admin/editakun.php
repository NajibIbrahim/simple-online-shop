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

                <?php
                include "koneksi.php";
                $sql = $conn->query("SELECT * FROM login WHERE name='$_GET[name]'");
                $row = $sql->fetch_assoc();

                ?>

                <form class="user" method="post"  action="">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name" value="<?php echo $row['name']; ?>" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" value="<?php echo $row['username']; ?>" required/>
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
    if (isset($_POST['simpan'])) {

      $name     = $_POST['name'];
      $username = $_POST['username'];
      // $level   = $_POST['level']; 

      $sql = $conn->query("UPDATE login SET 
        name        =  '$name',
        username    =  '$username' WHERE name='$_GET[name]'");
      if ($sql) {

        ?>
        <script type="text/javascript">
          alert("Data Berhasil di Update"); document.location = '?halaman=dataakun';
        </script>
        <?php

      } else {

        ?>
        <script type="text/javascript">
          alert("Data Gagal di Update"); document.location = '?halaman=dataakun';
        </script>
        <?php

      }

    }
    ?>