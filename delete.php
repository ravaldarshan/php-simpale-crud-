<?php
include("cennection.php");
$id = $_GET['id'];

$sql = "DELETE FROM record WHERE id='$id'";
 $data = mysqli_query($conn, $sql);

echo "recode delated sucsesfully";
header("location: display.php");
?>