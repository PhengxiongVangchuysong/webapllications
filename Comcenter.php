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

    <div class="page content wrapper">

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Comcenter College</title>
            <link rel="stylesheet" type="text/css" href="/Comcenter.css">
        </head>
        <body>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Located</a></li>
                    <li><a href="#">Service </a></li>
                    <li><a href="#">Contact us</a></li>
                    <label for="#">
                        <i class="fas fa-bars"></i>
                    </label>
                </ul>
                <img src="/product/lk-removebg-preview.png" alt="image">
                <h5>Comcenter College</h5>
                <h4>EST-1991</h4>
            </nav>
            <!-- header -->
            <header>
                   <img style="width: 40.5%; height: 439px; border-radius: 5px; margin-left: 8px;" src="/product/Comcenter College.jpg" alt="image">
            </header>
            
             <!-- Banner section -->
             <section class="banner">
                <ul>
                    <br>
                <h5> This is my Comcenter College </h5>
                    <li>ສະ​ຖາ​ນະ​ຂອງ ວິ​ທະ​ຍາ​ໄລ​ ຄອມ​ເຊັນ​ເຕີ ​ທີ່​ສວຍ​ງາມ​ຕາມ​ສະ​ພາບ​ແວດ​ລ້ອມ</li>
                    <li>ສະ​ຖາ​ນະ​ຂອງ​ ວິ​ທະ​ຍາ​ໄລ​ ຄອມ​ເຊັນ​ເຕີ ເປັນ​ຮູບ​ພາບ​​ເຕັມ​ດ້ວຍ​ຄວາມ​ສວຍ​ງາມ</li>
                    <li>ສະ​ຖາ​ນະ​ຂອງ​ ວິ​ທະ​ຍາ​ໄລ​ ຄອມ​ເຊັນ​ເຕີ ເປັນ​ຮູບ​ພາບ​ທີ​ເຕັມ​ດ້ວຍ​ນັກ​ສຶກ​ສາ</li>
                    <li>ສະ​ຖາ​ນະ​ຂອງ ວິ​ທະ​ຍາ​ໄລ​ ຄອມ​ເຊັນ​ເຕີ ໃນ​ຕອນ​ຕາ​ເວັນ​ໃກ້​ລົງ</li>
                    <li>ສະ​ຖາ​ນະ​ຂອງ ວິ​ທະ​ຍາ​ໄລ ​ຄອມ​ເຊັນ​ເຕີ ​ສະ​ພາບ​ຂອງ​ການ​ຈັດ​ງານ</li>
                    <li>ສະ​ຖາ​ນະ​ຂອງ ວິ​ທະ​ຍາ​ໄລ​ ຄອມ​ເຊັນ​ເຕີ ​ສະ​ພາບ​ຂອງ​ບຸນ​ປີ​ໃໝ່</li>
                </ul>
             </section>
             <p> This is video introduct in Comcenter College </p>

             <!-- ໂຕ​ນີ້​ຫລິ້ນ​ໄປ​ສຸດ​ແລ້ວ​ຈະ​ຢຸດ -->
             <!-- <video style="margin-left: 70px; margin-top: 10px;" autoplay muted>
                <source src="/Video/pheng.mp4" type="video/mp4">
             </video> -->

                            <!-- ໂຕ​ນີ້​ຫລິ້ນ​ໄປ​ສຸດ​ແລ້ວ​ຈະກັບ​ມາ​ຕໍ່​ທາງ​ໄປ​ເລີຍ -->
             <!-- <video style="margin-left: 70px; margin-top: 10px;" loop autoplay>
                <source src="/Video/VID20220411182241.mp4" type="video/mp4">
             </video> -->

             <!-- ໂຕ​ນີ້​ແມ່ນ​ໃຫ້​ເຮົາ​ເປີດ​ເອງ -->
             <video style="margin-left: 10px; margin-top: 10px;" controls>
                <source src="/Video/pheng.mp4" type="video/mp4">
             </video>

             <!-- This is map in Comcenter College -->
             <h2> This is my map Comcenter College in Vientiane Capital Khouvieng Road </h2>
             <div class="map-wrap">
             <div style="width: 99%; margin-left: 10px;">
                  <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=comcenter%20college+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/wearable-gps/">Kids wearables</a></iframe>
            </div>
             </div>

             <!-- This is footer -->
             <footer>
                <div class="ft">
                    <ul>
                        <li>Contact us</li>
                        <li>Website </li>
                        <li>Facebook</li>
                        <li>Whatsapp</li>
                        <li>My page </li>
                        <li>Instagram</li>
                        <li> Tiktok </li>
                    </ul>
                </div>
             </footer>
        </body>
        </html>

    </div>
</div>
<!-- This is footer -->
<?php require "inclu/footer.php" ?>