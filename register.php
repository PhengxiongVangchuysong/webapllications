<?php require "inclu/header.php" 
?>

<?php
require "db.php";
$date = date("Y-m-d H:i:s");
// $mgs = "";
if (isset($_POST['btnRegister'])) {

     $username = $_POST['username'];
     $email = $_POST['email'];
     $pass = $_POST['password'];
     $confirmp = $_POST['confirmpass'];

     $select = "SELECT*FROM users where email='$email'";
     $result = mysqli_query($conn, $select);
     if (mysqli_num_rows($result) > 0) {
          echo "Your Email has been used !";
     } elseif ($pass == $confirmp) {

          $sql = "INSERT INTO users(username,email,password,date) VALUES ('$username','$email', '$pass','$date')";
          $insert = mysqli_query($conn, $sql);
          if ($insert) {
               //  echo "insert data success!";
                header("location: login.php");

          } else {
               echo "insert data failed";
          }
     } else {
          echo "password and confirm password not match";
     }
}

?>

          <div class="row justify-content-center mt-5">

               <div class="col-md-4 col-sm-12">
                    <div class="card" style=" box-shadow: 0px 1px 1px 1px grey">

                         <div class="card-body">
                              <h3 class="mt-2 mb-2 text-center">ຟອມລົງທະບຽນ</h3>
                              <form class="mt-5" method="post">
                                   <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ຊື່ເຂົ້າໃຊ້ລະບົບ</label>
                                        <input type="text" class="form-control" name="username" placeholder="ຊື່ເຂົ້າໃຊ້ລະບົບ" required>
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ອິເມວ</label>
                                        <input type="email" class="form-control" name="email" placeholder="ອິເມວ" required>
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">ລະຫັດຜ່ານ</label>
                                        <input type="password" name="password" class="form-control" placeholder="******" required>
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">ຢັ້ງຢື່ນລະຫັດຜ່ານ</label>
                                        <input type="password" name="confirmpass" class="form-control" placeholder="******" required>
                                   </div>
                                   <button type="submit" name="btnRegister" class="btn btn-success">Submit</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>

<?php  require "inclu/footer.php" ?>