

<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: login.php");
}
?>

<?php
require "db.php";
$msg = "";
$date = date("Y-m-d H:i:s");

if (isset($_POST['addEmployees'])){

     $sex = $_POST['sex'];
     $firstN = $_POST['firstname'];
     $birthday = $_POST['birthday'];
     $password = $_POST['password'];
     $email = $_POST['email'];
     $phone = $_POST['telephone'];

     // check data from database 

     $select = "SELECT * FROM `information` WHERE firstname='$firstN' and email='$email'";
     $query = mysqli_query($conn, $select);
     if (mysqli_num_rows($query) > 0){
          $msg = "ຂໍ້ມູນຊື່ ແລະ ອີເມວມີຢູ່ໃນລະບົບແລ້ວ!";
            // echo "this data had on";
     }else{
          // check database 
            $sql = "INSERT INTO `information`(`sex`, `firstname`, `birthday`, `password`, `email`, `telephone`, `date`)
             VALUES ('$sex','$firstN','$birthday','$password','$email','$phone','$date')";

          $result = mysqli_query($conn, $sql);
          if ($result){
               header("location: listEmployees.php?add");
            //    echo "insert";
          }else{
               echo "insert not found";
          }
     }
}
?>

<!-- This is header -->
<?php require "inclu/header.php" ?>

<div class="d-flex wrapper">


    <!-- This is sidebar -->
    <?php require "inclu/sidebar.php" ?>

    <div class="page content wrapper">

        <!-- This is nav -->
        <?php require "inclu/nav.php" ?>
        
    </div>
</div>

<div class="row justify-content-center mt-5" style="margin-left: 150px;">
    <div class="col-md-5 col-sm-12">
        <div class="card" style="box-shadow: 0px 1px 1px 1px grey; margin-top: -750px;">
            <div class="card-body" style="background-color: #5EE6EB;">
                <h3 class="mt-3 mb-2 text-center"> ຟ​ອມ​ລົງ​ທະ​ບຽນ </h3>
                <form method="POST">
                    <div class="mb-3">
                        <label style=" font-size: 20px; justify-content: center; display: flex; align-items: center;" class="form-label"> ​ເພດ </label>
                        <select class="form-select" name="sex" aria-label="Default select example" required value=<?= @$sex ?>>
                            <option selected style="background: red; color: white;">​ເລືອກ</option>
                            <option value="male">ຜູ້​ຊາຍ</option>
                            <option value="women">​ຜູ້​ຍິງ</option>
                            <option value="others">​ອື່ນໆ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label">firstname</label>
                        <input type="text" style="margin-left: 38px; font-size: 20px; text-align: center;" class="col-6" name="firstname" class="form-control" placeholder="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label">birthday</label>
                        <input type="date" style="margin-left: 50px; font-size: 20px; text-align: center;" class="col-6" name="birthday" class="form-control" placeholder="birthday">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" style="font-size: 20px;" class="form-label">password</label>
                        <input type="password" style="margin-left: 36px; font-size: 20px; text-align: center;" class="col-6" name="password" class="form-control" placeholder="********">
                    </div>
                    <div class="mb-3">
                        <label for="email" style="font-size: 20px;" class="form-label"> email </label>
                        <input type="email" style="margin-left: 74px; font-size: 20px; text-align: center;" class="col-6" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="telephone" style="font-size: 20px;" class="form-label">telephone</label>
                        <input type="number" style="margin-left: 34px; font-size: 20px; text-align: center;" class="col-6" name="telephone" class="form-control" placeholder="telephone">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" style="font-size: 20px;" for="exampleCheck1"> ກວດ​ເບິ່ງ​ຂໍ້​ມູນ​ຂອງ​ທ່ານ​ໃຫ້​ຖືກ​ຕ້ອງ </label>
                    </div>
                    <p style="color: red"><?= @$msg ?></p>
                       <!-- <button type="submit" name="addEmployees" class="btn btn-primary">ບັນ​ທຶກ</button> -->
                    <div class="button">
                    <button type="button" name="btndelete" style="margin-left: 220px;" class="btn btn-danger"> <i class="fas fa-backspace"></i>&nbsp;ລຶບ </button>
                    <button type="submit" name="addEmployees" class="btn btn-success"> <i class="fas fa-paper-plane"></i>&nbsp;ສົ່ງ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


  <!-- This is footer -->
  <?php require "inclu/footer.php" ?>