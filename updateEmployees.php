<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: login.php");
}
?>
<?php
require "inclu/header.php";
require 'db.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `information` WHERE ID='$id'");
while($row = mysqli_fetch_assoc($sql)){
         $id = $row['ID'];
         $sex = $row['sex'];
         $firstN = $row['firstname'];
         $birthday = $row['birthday'];
         $password = $row['password'];
         $email = $row['email'];
         $telephone = $row['telephone'];
}

if (isset($_POST['updateEmployees'])) {
  $sex = $_POST['sex'];
  $firstN = $_POST['firstname'];
  $birthday = $_POST['birthday'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];

  $sql = "UPDATE `information` SET `sex`='$sex',`firstname`='$firstN',`birthday`='$birthday',`password`='$password',`email`='$email',`telephone`='$telephone' WHERE ID='$id'";
  $result = mysqli_query($conn, $sql);
//   header('location: listEmployees.php');
    echo 'insert';
    if($result){
        // echo "Insert success";
        header('location: listEmployees.php');
    }else{
        echo "Cnn't update";
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
            <div class="card-body" style="background-color: wheat;">
                <h3 class="mt-3 mb-2 text-center"> ຟ​ອມ​ແກ້​ໄຂ​ຂໍ້​ມູນ​ພະ​ນັກ​ງານ </h3>
                <form method="POST">
                    <div class="mb-3">
                        <label style=" font-size: 20px; justify-content: center; display: flex; align-items: center;" class="form-label"> ​ເພດ </label>
                        <select class="form-select" name="sex" aria-label="Default select example" value=<?=@$sex?>>
                            <option selected style="background: red; color: white;">​ເລືອກ</option>
                            <option value="male">ຜູ້​ຊາຍ</option>
                            <option value="women">​ຜູ້​ຍິງ</option>
                            <option value="others">​ອື່ນໆ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label">firstname</label>
                        <input type="text" style="margin-left: 38px; font-size: 20px; text-align: center;" class="col-6" name="firstname" value=<?=@$firstN?>>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label">birthday</label>
                        <input type="date" style="margin-left: 50px; font-size: 20px; text-align: center;" class="col-6" name="birthday" value=<?=@$birthday?>>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" style="font-size: 20px;" class="form-label">password</label>
                        <input type="password" style="margin-left: 36px; font-size: 20px; text-align: center;" class="col-6" name="password" value=<?=@$password?>>
                    </div>
                    <div class="mb-3">
                        <label for="email" style="font-size: 20px;" class="form-label"> email </label>
                        <input type="email" style="margin-left: 74px; font-size: 20px; text-align: center;" class="col-6" name="email" value=<?=@$email?>>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" style="font-size: 20px;" class="form-label">telephone</label>
                        <input type="number" style="margin-left: 34px; font-size: 20px; text-align: center;" class="col-6" name="telephone" value=<?=@$telephone?>>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" style="font-size: 20px;" for="exampleCheck1"> ກວດ​ເບິ່ງ​ຂໍ້​ມູນ​ຂອງ​ທ່ານ​ໃຫ້​ຖືກ​ຕ້ອງ </label>
                    </div>
                       <!-- <button type="submit" name="updateEmployees" class="btn btn-primary">ບັນ​ທຶກ</button> -->
                    <div class="button">
                    <button type="button" name="editbtn" style="margin-left: 220px;" class="btn btn-danger"> <i class="fas fa-backspace"></i>&nbsp;ລຶບ </button>
                    <button type="submit" name="updateEmployees" class="btn btn-success"> <i class="fas fa-paper-plane"></i>&nbsp;ສົ່ງ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- This is footer -->
  <?php require "inclu/footer.php" ?>