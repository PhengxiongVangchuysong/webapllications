<?php
require 'db.php';
session_start();
require "inclu/header.php";
if(isset($_POST['Btnsubmit'])){
    require 'db.php';
    if(isset($_POST['Btnsubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        $sql = "SELECT * FROM pheng WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "Your email has been used";
        }else{
            $sql = "INSERT INTO `pheng`(`username`, `password`, `email`, `Telephone`)
             VALUES ('$username','$password','$email','$telephone')";
            $insert = mysqli_query($conn, $sql);
            if($insert){
                echo "Insert succed";
            }else{
                echo "Insert data faled";
            }
        }
    }
}
?>
<div class="row justify-content-center mt-5">
    <div class="col-md-4 col-sm-12">
        <div class="card" style="box-shadow: 0 2px 2px 0;">
            <div class="card-body">
                <h3 class="mt-2 mb-2 text-center"> Form register first use data </h3>
                <form class="mt-5" method="POST">
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> username </label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Password use data </label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> email </label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> Telephone </label>
                        <input type="number" class="form-control" name="telephone" placeholder="telephone" required>
                    </div>
                
                    <button type="submit" name="Btnsubmit" class="btn btn-success" style="margin-left: 82%;">Submit</button>
                    <div class="mt-3">
                        <p><a href="/pheng_login.php">Back_home_login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footter -->
<?php
require "inclu/footer.php";
?>
