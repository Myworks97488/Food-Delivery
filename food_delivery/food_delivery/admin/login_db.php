<?php
session_start();
include("include/db.php");
extract($_POST);
//$u = $_POST['uname'];
$sel = "SELECT * FROM admin WHERE (email='$uname' OR username='$uname') AND pass='$pass'";
//echo($sel);die;
$res = $connection->query($sel);
if($res->num_rows>0){

while($row = $res->fetch_assoc()){ 

$_SESSION['adminid'] = $row['id'];
$_SESSION['adminusername'] = $row['username'];

header("location: list.php");
} } else { ?>
<script>
    alert("enter valid informations....!!!!");
    window.location = "login.php";
</script>
<?php } ?>