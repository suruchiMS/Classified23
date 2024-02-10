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

if (isset($_POST['update_btn'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $isauthentication = $_POST['isauthentication'];
    $dateadded = $_POST['dateadded'];

    $update = "UPDATE admin SET full_name='$fullname',user_name='$username', email='$email', mobileno='$mobile', password='$password',is_authentication='$isauthentication',date_added='$dateadded' where user_id='$userid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if ($data) {

        echo "<script>window.location.href='view_admin.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>