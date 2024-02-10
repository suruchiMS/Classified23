<?php require("include_db.php");
include("include_session.php");
$clientid = $_GET['id'];
if (isset($_POST['update_btn'])) {
    $clientname = $_POST['clientname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $update = "UPDATE client SET client_name='$clientname',mobileno='$mobile',email='$email',password='$password',add_date='$date' where client_id='$clientid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if ($data) {

        echo "<script>window.location.href='view_client.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>