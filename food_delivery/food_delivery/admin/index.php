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
    <link href="style.css" rel="stylesheet">
    
    <title>FoodPlaza Admin | Add Products </title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">   
<!-- Custom styles for this template-->
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
            
<div class="row">
<div class="col-md-6"><h2 >Add new products </h2></div>
<div class="col-md-6">
<h4 class="font-weight-bold" style="text-align: right;color: red;" id="test"></h4>
</div>
</div>
<hr>
<form method="post" action="insert.php" enctype="multipart/form-data"> <!--add form tag for database creation-->
        <h5>Product Name<h5>
        <p><input type="text" id="name" name="name" placeholder="enter food name.." class="form-control"></p>
        <h5> Catagory</h5>
        <p>
        <p><input type="radio" name="category" value="Indian"> Indian &nbsp;&nbsp;
        <input type="radio" name="category"  value="Chinese"> Chinese  &nbsp;&nbsp;
        <input type="radio" name="category" value="Italian" > Italian</p>
        </p>
        <h5>Description</h5>
        <p><textarea name="description" id="description" rows="10" class="form-control" placeholder="briefly describe about that food .."></textarea></p>
        <h5>Course Price</h5>
        <p><input type="text" id="" name="price" placeholder="enter price of the food here .." class="form-control"></p>
        <h5>Upload product image</h5>
        <p><label><input type="file" name="image" id="imgs" required onchange="return func();" style="display: none; "> <span class="btn btn-danger" style="color: white;">Upload Image</span></label></p>
        <p><img src="" id="imgurl" style="height: 200px;"></p>
        <p><input type="Submit" class="btn btn-danger" value="Add Product" ></p>
    </form>
    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("include/footer.php");?>
            <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
            <script>
             //   CKEDITOR.replace('description');
            </script>
            <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>