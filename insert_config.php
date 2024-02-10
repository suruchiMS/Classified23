<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
if(isset($_POST['submit_btn'])) {

    $advcat = $_POST['advcat'];
    $advlimit = $_POST['advlimit'];



    $query = "INSERT INTO config (advertise_category,adv_limit) VALUES('$advcat','$advlimit')";

    $data = mysqli_query($con, $query);
    if($data) {
        echo "<script>window.location.href='view_config.php';</script>";
    } else {
        echo "Error: ".$sub_registration."<br>".$con->error;

    }
} ?>