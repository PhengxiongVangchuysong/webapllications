
<?php
require "db.php";
session_start();
require "inclu/header.php";
if(isset($_POST['btnLogin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confrimPassword']);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0 ){
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
         $_SESSION['confrimPassword'] = $confirm;
         header('location: index.php');
     }else{
         $message = 'username and password fasle! try again';
     }
}
?>
<div class="row justify-content-center mt-5">
    <div class="col-md-4 col-sm-12">
        <div class="card" style=" box-shadow: 0px 1px 1px 1px grey">
            <div class="card-body">
                <h3 class="mt-2 mb-2 text-center">ຟອມເຂົ້າໃຊ້ລະບົບ</h3>
                <form class="mt-5" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ຊື່ເຂົ້າໃຊ້ລະບົບ</label>
                        <input type="text" class="form-control" name="username" placeholder="ປ້ອນຊື່ເຂົ້າໃຊ້ລະບົບ" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ລະຫັດຜ່ານ</label>
                        <input type="password" name="password" class="form-control" placeholder="ປ້ອນລະຫັດຜ່ານ" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">​ຢືນ​ຢັນລະຫັດຜ່ານ</label>
                        <input type="password" name="confrimPassword" class="form-control" placeholder="ຢືນ​ຢັນ​ລະ​ຫັດ​ຜ່ານ" required>
                    </div>
                    <div class="mt-3">
                        <div class="mb-3 text-danger">
                            <?= @$message ?>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info" name="btnLogin">Login</button>

                    <div class="mt-3">
                        <p>ຍັງບໍ່ທັນໄດ້ເປັນສະມາຊິກ? <a href="register.php">ລົງທະບຽນ</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php require "inclu/footer.php" ?>


<!-- header -->

<!-- require "db.php";
session_start();
require "inclu/header.php";
if(isset($_POST['btnLogin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm']);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0 ){
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
         $_SESSION['confirm'] = $confirm;
         header('location: index.php');
     }else{
         $msg = 'username and password fasle! try again';
     }
} -->


<!-- section or center -->

<!-- <div class="row justify-content-center mt-5">
    <div class="col-md-4" style="background-color: #FDF6F0;">
    <h3 style="text-align: center; margin-top: 8px; color: purple;" >ຟ​ອມ​ເຂົ້າ​ໃຊ້​ລ​ະ​ບົບ</h3>
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">​ຊື່ເຂົ້າ​ໃຊ້​ລະ​ບົບ</label>
    <input type="text" class="form-control" name="username" placeholder="firstname" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">ລະ​ຫັດ​ຜ່ານ</label>
    <input type="password" class="form-control" name="password" placeholder="******" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">​ຢືນ​ຢັນ​ລະ​ຫັດ​ຜ່ານ</label>
    <input type="password" class="form-control" name="confirm" placeholder="******" required>
  </div>
  <div class="mt-3">
      <div class="mb-3 text-danger">
          <?= @$msg ?>
      </div>
  </div>
  <button type="submit" name="btnLogin" class="btn btn-success">​ເຂົ້າ​ສູ່​ລະ​ບົບ</button>
  <p class="mt-3"> ຍັງ​ບໍ​ທັນ​ໄດ້​ເປັນ​ສະ​ໝັກ​ຊິກ! <a href="/register.php">​ລົງ​ທະ​ບຽນ</a></p>
</form>
    </div>
</div> -->
