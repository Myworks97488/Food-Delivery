<?php 

include("admin/include/db.php");
extract($_POST);
$t = time();
$connection->query("INSERT INTO book_order SET odate='$t' , pname='$pname',category='$category',price='$price',description='$description',cname='$cname' , contact_number='$cnumber' , customer_address='$address'");
header("location: myOrder.php");
?>