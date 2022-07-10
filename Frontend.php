<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: index.php");
}
?>
<!-- This is header -->
<?php require "inclu/header.php" ?>

<div class="d-flex wrapper">

    <!-- This is sidebar -->
    <?php require "inclu/sidebar.php" ?>

    <div class="page centent wrapper">

        <!-- This is navbar -->
        <?php require "inclu/nav.php" ?>

        <h3 style="color: red; margin-left: 100px;"> = This is my teamwork in Company us</h3>

        <div class="row" style="background-color: wheat; width: 20%; height: 30%; margin-left: 100px; border-radius: 8px;">
            <div class="picture">
                <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="text-align: center; margin-top: 5px; color: purple;">Phokee Chanxay</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/Backend_data.jpg" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="text-align: center; color: black;">Developer Frontend:</h5>
                    <h5 style="text-align: center; color: black;">Flutter,Java</h5>
                </div>
            </div>
            <div class="card" style="background-color: wheat; margin-left:250px; width: 500px; height: 100%; margin-top: -306px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 150px; margin-left: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: green;">LeokhamToukai</h5>
                </div>
                    <img style="width: 197px; margin-left: -18px; border-radius: 8px;" src="/product/design.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -18px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: green;">ReactJs ReactNative</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:240px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: purple;">Phoukeo kham</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/graphice.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: green;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: purple;">ReactJs PHP</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:250px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: red;">Phoukeo kham</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/laravel.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: green;">Angular ReactNative</h5>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: wheat; width: 20%; height: 27%; margin-left: 100px; border-radius: 8px;">
            <div class="picture">
            <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="text-align: center; margin-top: 5px; color: green;">Thong chandy</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/frontend.png" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="text-align: center; margin-top: 5px; color: purple;">Developer Frontend</h5>
                    <h5 style="text-align: center; color: purple;">Flutter Java RactJs</h5>
                </div>
            </div>
            <div class="card" style="background-color: wheat; margin-left:250px; width: 500px; height: 100%; margin-top: -310px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB;  width: 150px; margin-left: 1-px;">
                    <h5 style="margin-top: -10px; color: red;">Meekham souk</h5>
                </div>
                    <img style="width: 197px; margin-left: -18px; border-radius: 8px;" src="/product/backendesign.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -18px; border-radius: 8px;">
                        <h5 style="text-align: center; color: #1363DF;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: #F94C66;">Vue Angular</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:240px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: green;">Thongme koun</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/backend.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: red;">ReactJs Javascript</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:250px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px;text-align: center; color: blue;">Chanthong kham</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/A.jpg" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: red;">PHP ReactJs</h5>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: wheat; width: 20%; height: 27%; margin-left: 100px; border-radius: 8px;">
            <div class="picture">
            <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="margin-left: 20px; margin-top: 5px; color: black;">Khamkeo say</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/flutter.png" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="text-align: center; margin-top: 5px; color: red;">Developer Frontend:</h5>
                    <h5 style="text-align: center; color: purple;">ReactJs Javascript</h5>
                </div>
            </div>
        </div>
         <div class="card" style="background-color: wheat; margin-left:350px; width: 225px; height: 27%; margin-top: -305px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB;  width: 150px; margin-left: 20px;">
                    <h5 style="margin-top: -10px; color: green;">Chansouk mee</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/B.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -5px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: red;">ReactNative Flutter</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: wheat; margin-left:255px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: red;">Meesay mee</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/C.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: blue;">Angular ReactJs</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: wheat; margin-left:250px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: green;">Wanjin wull</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/D.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Frontend:</h5>
                        <h5 style="text-align: center; color: red;">Javascript Pyton</h5>
                    </div>
                </div>
            </div>
            </div>
            </div>
    </div>
</div>

<!-- This is footer -->
<?php require "inclu/footer.php" ?>