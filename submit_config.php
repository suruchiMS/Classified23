<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$adcategoryid = $_GET['id'];
if(isset($_POST['update_btn'])) {
    $adcategory = $_POST['advcat'];
    $advlimit = $_POST['advlimit'];
    $update = "UPDATE config SET advertise_category='$adcategory', adv_limit='$advlimit' where ad_category_id='$adcategoryid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if($data) {

        echo "<script>window.location.href='view_config.php';</script>";
    } else {
        echo "Error: ".$sub_registration."<br>".$con->error;

    }
} ?>