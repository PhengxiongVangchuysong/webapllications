<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['password'] = !'')) {
  header("location: login.php");
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


    <div class="container-fluid"">
        <div class=" mt-3 mb-3">
      <a href="employees.php" type="button" class="btn-primary" style="text-decoration: none; padding: 10px; border-radius: 10px;"><i class="fas fa-plus-circle"></i>&nbsp;ເພີ່ມ​ຂໍ້​ມູນ​ພະ​ນັກ​ງານ</a>
    </div>

    <div class="row my-3 bg-white">
      <table class="table" style="background-color: #FDF6EC;">
  <thead>
    <tr>
            <th scope="col">ລຳ​ດັບ</th>
            <th scope="col"> ເພດ </th>
            <th scope="col">​ ຊື່ ແລະ ນາມສະກຸນ </th>
            <th scope="col"> ວ​ັນ​ເດືອນປີ​ເຂົ້າ </th>
            <th scope="col"> ລະ​ຫັດ </th>
            <th scope="col"> ​ອີ​ເມວ </th>
            <th scope="col">ເບີ​ໂທ</th>
            <th scope="col">ວັນເດືອນປີ</th>
            <td>ການປ່ຽນແປງ</td>
    </tr>
  </thead>
  <tbody>
  <?php
      require "db.php";
      $sql = "SELECT * FROM `information`";
      $query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
          <td><?=$row['ID']?></td>
          <td><?=$row['sex']?></td>
          <td><?=$row['firstname']?></td>
          <td><?=$row['birthday']?></td>
          <td><?=$row['password']?></td>
          <td><?=$row['email']?></td>
          <td><?=$row['telephone']?></td>
          <td><?=$row['date']?></td>
          <td>
            <a href="/updateEmployees.php?id=<?=$row['ID']?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" onclick="deleteData(<?php echo '\'' . $row['ID'] . '\''?>)" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ລຶບ"><i class="fas fa-trash"></i></a>
            <!-- <a href="/listEmployees.php?id=<?=$row['ID']?>" onclick="return confirm('do you want to delete')" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> -->
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
<script>
    function deleteData(ID) {
        swal({
                title: "ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ແທ້ບໍ?",
                text: "ຂໍ້ມູນນັກສຶກສາລະຫັດ" + "" + ID + "" + "ເມື່ອລືບແລ້ວຈະບໍ່ສາມາດກູ້ຄືນໄດ້",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ['ຍົກເລີກ', 'ຕົກລົງ']
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "deleteEmployees.php",
                        method: "post",
                        data: {
                          stuID: ID
                        },
                        success: function(data) {
                            swal("success!", "Data trues delete success", "success", {
                                buttons: "ຕົກລົງ"
                            });
                            setTimeout(function(){
                                location.reload();
                            }, 2000); // 2000 = 2 ວິນາທີ
                        }
                    });
                } else {
                    swal("ຂໍ້ມູນຂອງທ່ານຍັງປອດໄພຄືເກົ່າ", "success", {
                        buttons: "ຕົກລົງ"
                    });
                }
            });
    }
</script>