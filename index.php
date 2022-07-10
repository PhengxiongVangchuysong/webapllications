

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

        <!-- This is nav -->
        <?php require "inclu/nav.php" ?>
            

        <div class="container-fluid">
            <!-- This is card -->
            <?php require "inclu/card.php" ?>

            <!-- <div class="row my-5">
                <h3 class="fs-4 mb-3">Recent Orders</h3>
                <div class="col">

                </div>
            </div> -->

        </div>
    </div>
</div>
  <!-- This is footer -->
     <?php require "inclu/footer.php" ?>


