<?php 
include("include/db.php");
$name = $connection->real_escape_string($_POST['name']);
$description = $connection->real_escape_string($_POST['description']);
$category=$_POST['category'];
$price=$_POST['price'];
$fn = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];
$fn = time().$fn;
$fa = explode(".",$fn); 
$c = count($fa);
$le = $c - 1; 
if($fa[$le]=="jpg" || $fa[$le]=="jpeg" || $fa[$le]=="png" || $fa[$le]=="webp") {
    move_uploaded_file($b , "product_image/" . $fn);
 }
$ins="INSERT INTO product SET name='$name',category='$category',description='$description',price='$price',image='$fn'";
$connection->query($ins);
header("location:list.php");
?> 