<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: index.php");
}
?>
<?php
require "db.php";
$date = date("Y-m-d H:i:s");

if (isset($_POST['Addorder'])) {
    $type = $_POST['type'];
    $price = $_POST['price'];
    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $find = $_POST['find'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $night = $_POST['night'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $trawel = $_POST['trawel'];
    $thethin = $_POST['thethin'];
    $fourthin = $_POST['fourthin'];
    $fithin = $_POST['fithin'];
    $sixthin = $_POST['sixthin'];



    // $sql = "SELECT * FROM `foods` WHERE type='$type'";
    // $query = mysqli_query($conn, $sql);
    // if (mysqli_num_rows($query) > 0) {
    //     echo "This product has in";
    // }else
    {
        $insert = "INSERT INTO `foods`(`type`, `price`, `one`, `two`, `three`, `four`, `find`, `six`, `seven`, `eight`, `night`, `ten`, `eleven`, `trawel`, `thethin`, `fourthin`, `fithin`, `sixthin`, `date`) 
        VALUES ('$type','$price','$one','$two','$three','$four','$find','$six','$seven','$eight','$night','$ten','$eleven','$trawel','$thethin','$fourthin','$fithin','$sixthin','$date')";

        $query = mysqli_query($conn, $insert);
        if ($query) {
            echo "submit success";
        } else {
            echo "submit not found";
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
        <form method="POST">
            <h3 style="color: blue; margin-top: 10px; margin-left: 150px;"> +:ທ່ານ​ສາ​ມາດ​ເລືອກ​ສິນ​ຄ້າ​ໄດ້​ຕາມ​ໃຈ​ມັກ This is my products</h3>
            <div class="row" style="margin-right: 50px; margin-left: 90px; margin-top: 30px;">
                <div class="item" style="background-color: 	#ffe6e6; width: 257px; margin-left: 38px; border-radius: 8px;">
                    <div class="mb">
                        <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                        <input type="text" name="type" class="form-control">
                    </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/rice delicours.jpg" alt="image">
                    <div class="mb">
                        <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:10 000K</h5>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #A3E4D7; width: 257px; margin-left: 38px; border-radius: 8px;">
                <div class="mb">    
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="one" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/food1.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:15 000K</h5>
                    <input type="text" name="two" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #9BA3EB; width: 257px; margin-left: 38px; border-radius: 8px;">
                    <div class="mb">
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="three" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/food2.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:15 000K</h5>
                    <input type="text" name="four" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
            </div>
            <br>
            <div class="row" style="margin-right: 50px; margin-left: 90px;">
                <div class="item" style="background-color: #F9CEEE; width: 257px; margin-left: 38px; border-radius: 8px;">
                    <div class="mb">
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="find" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/bamboo shoots.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:15 000K</h5>
                    <input type="text" name="six" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #88FFF7; width: 257px; margin-left: 38px; border-radius: 8px;">
                <div class="mb">    
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="seven" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/bambo.jpg" alt="image">
                   <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:15 000K</h5>
                    <input type="text" name="eight" class="form-control">
                   </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #CA82FF; width: 257px; margin-left: 38px; border-radius: 8px;">
                <div class="mb">  
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="night" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/food.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:10 000K</h5>
                    <input type="text" name="ten" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
            </div>
            <br>
            <div class="row" style="margin-right: 50px; margin-left: 90px;">
                <div class="item" style="background-color: #FFC3C3; width: 257px; margin-left: 38px; border-radius: 8px;">
                    <div class="mb">
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="eleven" class="form-control">
                    </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/pizza.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:25 000K</h5>
                    <input type="text" name="trawel" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #B8F1B0; width: 257px; margin-left: 38px; border-radius: 8px;">
                    <div class="mb">
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="thethin" class="form-control">
                    </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/pizza1.jpg" alt="image">
                   <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄ:25 000K</h5>
                    <input type="text" name="fourthin" class="form-control">
                   </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
                <div class="item" style="background-color: #F6C6EA; width: 257px; margin-left: 38px; border-radius: 8px;">
                <div class="mb">   
                <p style="margin-left: 65px; font-size: 22px;">ປະ​ເພດ​ສິນ​ຄ້າ</p>
                <input type="text" name="fithin" class="form-control">
                </div>
                    <img style="width: 150px; height: 175px; margin-left: 40px; border-radius: 5px;" src="/product/foodlaos.jpg" alt="image">
                    <div class="mb">
                    <h5 style="margin-left: 57px; margin-top: 10px;">ລາ​ຄາ:30 000K</h5>
                    <input type="text" name="sixthin" class="form-control">
                    </div>
                    <button class="btn btn-primary ntn-sm" name="Addorder" style="margin-left: 82px;">ກ​ົດ​ສັ່ງ​</button>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- This is footer -->
<?php require "inclu/footer.php" ?>