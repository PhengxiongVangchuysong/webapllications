<?php
require 'db.php';
$stuID = $_POST['stuID'];
$sql = "DELETE FROM `information` WHERE ID='$stuID'";
mysqli_query($conn, $sql);
?>