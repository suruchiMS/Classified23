<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$userid = $_GET['id'];
$status = $_GET['status'];


if ($status == "pending" || $status == "Accepted") {
    $update = "UPDATE advertise1 SET status='Rejected' where adv_id='$userid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    echo $data;
    if ($data) {

        echo "<script>window.location.href='admin_approval.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
}
?>