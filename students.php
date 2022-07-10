<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: index.php");
}
?>
<?php
require "db.php";
$msg = "";
$date = date("Y-m-d H:i:s");

if(isset($_POST['addStudents'])){
    $sex = $_POST['sex'];
    $firstname = $_POST['firstname'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `students_if` WHERE email='$email' and password='$password'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0){
        $msg = "This data has useted in database!";
    }else{
        $insert = "INSERT INTO `students_if`(`sex`, `firstname`, `birthday`, `phone`, `email`, `password`, `date`) 
        VALUES ('$sex','$firstname','$birthday','$phone','$email','$password','$date')";

        $query = mysqli_query($conn, $insert);
        if($query){
            header('location: listStudents.php');
            // echo "ສຳ​ເລັດ";
        }else{
            echo "insert not fount";
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
<div class="row justify-content-center mt-6" style="margin-left: 250px;">
    <div class="col-md-5 col-sm-12">
        <div class="card" style="box-shadow: 0px 1px 1px 1px grey; margin-top: -750px;">
            <div class="card-body" style="background-color: #AEFEFF">
            <h3 class="mt-3 mb-2 text-center"> ຟ​ອມ​ລົງ​ທະ​ບຽນ </h3>
        <form method="POST">
                    <div class="mb-3">
                        <label style="font-size: 20px; justify-content: center; display:flex; align-items: center;" class="form-label"> ເພດ </label>
                        <select class="form-select" name="sex" aria-label="default select example" require value=<?=@$sex?>>
                        <option selected style="background-color: green; color: white;"> ເລືອກ </option>
                        <option value="male">ຜູ​້​ຊາຍ</option>
                        <option value="women"> ຜູ້​ຍິງ </option>
                        <option value="others"> ອື່ນໆ. </option>
                        </select>
                    </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label">ຊື່ ແລະ ນາມ​ສະ​ກຸນ </label>
                <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" style="font-size: 20px;" class="form-label"> ວັນ​ເກີດ </label>
                <input type="date" name="birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" style="font-size: 20px;" style="font-size: 22px;" class="form-label"> ເບີ​ໂທ </label>
                <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" style="font-size: 20px;" class="form-label"> ອີ​ເມວ </label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" style="font-size: 20px;" class="form-label"> ລະ​ຫັດ​ຜ່ານ </label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"> ກ​ວດ​ເບິ່ງ​ຂໍ້​ມູນ​ຂອງ​ທ່ານ​ໃຫ້​ຖືກ​ຕ້ອງ </label>
            </div>
            <p style="color: red;"><?=@$msg?></p>
            <button type="submit" name="addStudents" class="btn btn-primary" style="margin-left: 350px;"><i class="fas fa-paper-plane"></i>&nbsp;ສົ່ງ</button>
        </form>
        </div>
        </div>
    </div>
</div>
<!-- This is footer -->
<?php require "inclu/footer.php" ?>