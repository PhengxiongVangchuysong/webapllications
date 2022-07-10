<?php
require 'db.php';
session_start();
require "inclu/header.php";
if(isset($_POST['Btnlogin'])){
    $username = mysqli_real_escape_string($conn, $_POST['Username']);
    $password = mysqli_real_escape_string($conn, $_POST['Password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['Confirm']);
    $sql = "SELECT * FROM pheng WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['Username'] = $username;
        $_SESSION['Password'] = $password;
        $_SESSION['Confirm'] = $confirm;
        header('location: Index.php');
        // echo "Send success";
    }else{
        $message = 'username and password fale! try again';
    }
}
?>
<div class="row justify-content-center mt-5">
    <div class="col-md-4 col-sm-12">
        <div class="card" style="box-shadow: 0 2px 2px 0; background-color: greenyellow;">
            <div class="card-body">
                <h3 class="mt-2 mb-2 text-center"> Form login use data </h3>
                <form class="mt-5" method="POST">
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Name use data </label>
                        <input type="text" class="form-control" name="Username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Password use data </label>
                        <input type="password" class="form-control" name="Password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> ConfirmPassword use data </label>
                        <input type="password" class="form-control" name="Confirm" placeholder="confirmPassword" required>
                    </div>
                    <div class="mt-3">
                        <div class="mb-3 text-danger">
                            <?= @$message?>
                        </div>
                    </div>
                    <button type="submit" name="Btnlogin" class="btn btn-info" style="margin-left: 82%;">Submit</button>
                    <div class="mt-3">
                        <p>Still_confirm? <a href="/pheng_register.php">Register_now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<? require 'inclu/footer.php'?>;