<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Example Quary data Employees </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     
</head>

<body>

    <?php ?>
<?php 
require "db.php";
$date = date("Y-m-d H:i:s"); 
if(isset($_POST['btnregister'])){
    $username = $_POST['Username'];
    $gmail = $_POST['Gmail'];
    $password = $_POST['Password'];
    $confirnpassword = $_POST['Confirnpassword'];
    

    $select = "SELECT*FROM user WHERE gmail='$gmail'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0) {
        echo "Your gmail has been use !";
    }
    elseif($password == $confirnpassword){
       $sql = "INSERT INTO user(username, gmail, password,date) VALUES ('$username','$gmail','$password','$date')";
    $insert = mysqli_query($conn, $sql);
    if($insert){
        echo "send data success";
    }else{
        echo "send data fales";
    }
    }else{
        echo "password and confirnpassword not match";
    }
}
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="row justify-content-center mt-5">
    <div class="col-md-4 col-sm-12">
        <div class="card " style="box-shadow: 1px 2px 2px p2x">
            <div class="card-body">
                <h3 class="mb-2 mt-2 text-center"> Form register </h3>
                <form class="mt-5" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Username </label>
                        <input type="username" name="Username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gmail</label>
                        <input type="gmail" name="Gmail" class="form-control" placeholder="Gmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirn Password</label>
                        <input type="password" name="Confirnpassword" class="form-control" placeholder="Password" required>
                    </div>
                    <button style="margin-left: 70%;" type="submit" name="btnregister" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php ?>
    
</body>

</html>