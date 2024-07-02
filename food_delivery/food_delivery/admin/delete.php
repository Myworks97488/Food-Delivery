<?php
include("include/db.php");
$id=$_GET["id"];

$sel="SELECT * from product where id='$id'";
$res=$connection->query($sel);
while($row = $res->fetch_assoc()){
    $pic = $row['image'];
    unlink("product_image/".$pic);
}
$del = "DELETE FROM product WHERE id='$id'";
$connection->query($del);
header("location: list.php");
?>
