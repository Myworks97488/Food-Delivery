<?php 
session_start();
if($_SESSION['adminid']=="" || !isset($_SESSION['adminid'])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">   
    <title>FoodPlaza Admin |List of orders </title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("include/sidebar.php");?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("include/topbar.php");?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

            
            
<div class="container-fluid">
<div class ="row">
<div class="col-md-6"><h2 >List of Orders</h2></div>
<div class="col-md-6">
<h4 class="font-weight-bold text-dark" style="text-align: right;" id="test"></h4>
</div>   
<form action="" method ="POST">
<p><input type="text" name = "search" > &nbsp;<input type="submit" value="search" class = "btn btn-success"></p>
</form>

<table class="table table-bordered">
<thead>
<tr>
<th>product Name</th>
<th>Category</th>
<th>Price</th>
<th>Description</th>
<th>Customer Name</th>
<th>Customer Contact No</th>
<th>Customer Address</th>
<th>Order Date</th>
</tr>
</thead>
<tbody>
<?php 
include("include/db.php");
if(isset($_POST['search']) && ($_POST['search'])==!""){
$s= ($_POST['search']);
$select = "SELECT * FROM book_order WHERE pname LIKE '$s%'";}
else {
$select = "SELECT * FROM book_order";
}
//echo ($select);
$result = $connection->query($select);
if($result->num_rows){
while($row = $result->fetch_assoc()){ ?>

<tr>
<td><?php echo $row['pname']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['cname']; ?></td>
<td><?php echo $row['contact_number']; ?></td>
<td><?php echo $row['customer_address']; ?></td>
<td><?php echo date('Y-m-d H:i:s', $row['odate']); ?></td>
</tr>
<?php } }else { ?>
<tr>
<th style="text-align: center;" colspan="6">Sorry  ,no data exist for your search</th>
</tr>
<?php } ?>
</tbody>
</table>

</div>
</div>

           
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("include/footer.php");?>
            <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>