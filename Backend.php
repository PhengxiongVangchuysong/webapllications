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

        <h3 style="color: red; margin-left: 200px;"> = This is my teamwork in Company us</h3>

        <div class="row" style="background-color: wheat; width: 20%; height: 30%; margin-left: 200px; border-radius: 8px;">
            <div class="picture">
                <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="text-align: center; margin-top: 5px; color: green;">Chansay souk</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/MongoDB.jpg" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="margin-left: 8px; color: blue;">Developer Backend:</h5>
                    <h5 style="text-align: center; color: blue;">MongoDB, Reactjs</h5>
                </div>
            </div>
            <div class="card" style="background-color: wheat; margin-left:250px; width: 500px; height: 100%; margin-top: -306px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 150px; margin-left: 5px;">
                    <h5 style="margin-top: -10px; text-align: center;">Kimnana wan</h5>
                </div>
                    <img style="width: 197px; margin-left: -18px; border-radius: 8px;" src="/product/design.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -18px; border-radius: 8px;">
                        <h5 style="margin-left: 10px; color: purple;">Developer Backend:</h5>
                        <h5 style="margin-left: 5px; color: purple;">ReactJs ReactNative</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:240px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; margin-left: 12px; color: green;">Phoukeo kham</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/graphice.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Backend:</h5>
                        <h5 style="text-align: center; color: purple;">Mysql PHP</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: wheat; width: 20%; height: 27%; margin-left: 200px; border-radius: 8px;">
            <div class="picture">
            <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="margin-left: 20px; margin-top: 5px; color: black;">Thong chandy</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/frontend.png" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="text-align: center; margin-top: 5px; color: purple;">Developer Backend</h5>
                    <h5 style="text-align: center; color: purple;">NodeJs Database</h5>
                </div>
            </div>
            <div class="card" style="background-color: wheat; margin-left:250px; width: 500px; height: 100%; margin-top: -310px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB;  width: 150px; margin-left: 1-px;">
                    <h5 style="margin-top: -10px; text-align: center; color: blue;">Dethao Vilay</h5>
                </div>
                    <img style="width: 197px; margin-left: -18px; border-radius: 8px;" src="/product/backendesign.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -18px; border-radius: 8px;">
                        <h5 style="text-align: center; color: green;">Developer Backend:</h5>
                        <h5 style="text-align: center; color: green;">Vue NodeJs</h5>
                    </div>
                </div>
                <div class="card" style="background-color: wheat; margin-left:240px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; text-align: center; color: blue;">Pheng xiong</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/backend.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: blue;">Developer Backend:</h5>
                        <h5 style="text-align: center; color: blue;">Mysql NodeJs PHP</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row" style="background-color: wheat; width: 20%; height: 27%; margin-left: 200px; border-radius: 8px;">
            <div class="picture">
            <div class="position" style="background-color: #EDE6DB;">
                    <h5 style="text-align: center; margin-top: 5px; color: blue;">Leokham done</h5>
                </div>
                <img style="width: 197px; margin-top: 8px; border-radius: 8px;" src="/product/flutter.png" alt="image">
                <div class="position" style="background-color: #EDE6DB; border-radius: 5px;">
                    <h5 style="text-align: center; margin-top: 5px; color: red;">Developer Backend:</h5>
                    <h5 style="text-align: center; color: red;">nodeJs Mysql</h5>
                </div>
            </div>
        </div>
         <div class="card" style="background-color: wheat; margin-left:450px; width: 230px; height: 27%; margin-top: -310px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB;  width: 150px; margin-left: 20px;">
                    <h5 style="margin-top: -10px; text-align: center; color: black;">Kimmer wanh</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/B.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 200px; margin-left: -5px; border-radius: 8px;">
                        <h5 style="text-align: center; color: purple;">Developer Backend:</h5>
                        <h5 style="text-align: center; color: purple;">ReactJs NodeJs</h5>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: wheat; margin-left:255px; width: 220px; height: 100%; margin-top: -350px; border-radius: 8px;">
                <div class="card-body" style="margin-right: 20px;">
                <div class="position" style="background-color: #EDE6DB; width: 170px; margin-left: 5px; border-radius: 5px;">
                    <h5 style="margin-top: -10px; margin-left: 12px; color: green;">Chanxay vongsa</h5>
                </div>
                    <img style="width: 197px; margin-left: -5px; border-radius: 8px;" src="/product/C.png" alt="image">
                    <div class="position" style="background-color: #EDE6DB; margin-top: 10px; width: 210px; margin-left: -12px; border-radius: 8px;">
                        <h5 style="text-align: center; color: green;">Developer Backend:</h5>
                        <h5 style="text-align: center; color: green;">Angular ReactJs</h5>
                    </div>
                </div>
                <br>
            </div>
            </div>
    </div>
</div>

<!-- This is footer -->
<?php require "inclu/footer.php" ?>