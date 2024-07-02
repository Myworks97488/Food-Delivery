<?php
include("include/db.php");
$eid=$_POST['eid'];
$name = $connection->real_escape_string($_POST['name']);
$description = $connection->real_escape_string($_POST['description']);
$catagory=$_POST['category'];
$price=$_POST['price'];
if($_FILES['image']['name'] && $_FILES['image']['name']!=""){

    $fn = $_FILES['image']['name'];
    $b = $_FILES['image']['tmp_name'];
    $fn = time() . $fn;
    $fa = explode(".", $fn); 
    $c = count($fa); // 2
    $le = $c - 1;
    if($fa[$le]=="jpg" || $fa[$le]=="jpeg" || $fa[$le]=="png" || $fa[$le]=="webp") {
    move_uploaded_file($b,"product_image/".$fn);
    $update="UPDATE product SET name='$name', category='$catagory',description='$description',price='$price',image='$fn' where id='$eid'";
 //echo($update);die;
} } else{
    $update="UPDATE product SET name='$name', category='$catagory',description='$description',price='$price' where id='$eid'";   
    //echo($update);die;
}
$connection->query($update);
header("location:list.php");
?> 