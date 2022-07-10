<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
    header("location: index.php");
}
?>
<?php
require "db.php";
$date = date("Y-m-d H:i:s");

// this is cheack delete
if(isset($_GET['actioin'])){
   $id = $_GET['actioin'];
   $delete = "DELETE  FROM students_if WHERE id='$id'";
   $query = mysqli_query($conn, $delete);
   if($query){
       header('location: listStudents.php');
    //    echo "Delete success";
   }else{
       echo "Not delete";
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

        <div class="container-fluid">
        <div class="mt-3 mb-3">
            <a href="students.php" type="button" class="btn btn-primary"><i class="fas fa-plus-circle"></i> ເພີ້ມ​ຂໍ້​ມູນ​ນັກ​ສຶກ​ສາ </a>
        </div>

            <div class="row my-3 bg-white">
            <table class="table" >
                <thead>
                    <tr>
                        <th scope="col">ລຳ​ດັບ</th>
                        <th scope="col"> ເພດ </th>
                        <th scope="col">​ຊື່ ແລ​ະ ນາມ​ສະ​ກຸນ</th>
                        <th scope="col">​ລະ​ຫັດ</th>
                        <th scope="col">​ເບີ​ໂທ</th>
                        <th scope="col"> ອີ​ເມວ </th>
                        <th scope="col">ລະຫັດ</th>
                        <th scope="col"> ວັນ​ເດືອນ​ປີ </th>
                        <th> ການປ່ຽນແປງ </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `students_if`";
                    $query = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['sex']?></td>
                            <td><?=$row['firstname']?></td>
                            <td><?=$row['birthday']?></td>
                            <td><?=$row['phone']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['date']?></td>
                            <td>
                                <a href="/updateStudents.php?actioin=<?=$row['id']?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>

                                <a href="/listStudents.php?actioin=<?=$row['id']?>" onclick="return confirm('do you want to delete')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                   <?php } ?>        
                </tbody>
            </table>
            </div>
            </div>
    </div>
</div>
<!-- This is footer -->
<?php require "inclu/footer.php" ?>