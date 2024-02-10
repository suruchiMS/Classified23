<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
if (isset($_POST['submit_btn'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    // if (isset($_POST['isauthentication'])) {
    //     $isauthentication = 1;
    // } else {
    //     $isauthentication = 0;
    // }
    $isauthentication = $_POST['isauthentication'];
    $dateadded = $_POST['dateadded'];

    $query = "INSERT INTO admin (full_name,user_name,email,mobileno,password,is_authentication,date_added) VALUES('$fullname','$username','$email','$mobile','$password','$isauthentication','$dateadded')";

    $data = mysqli_query($con, $query);
    if ($data) {

        echo "<script>window.location.href='view_admin.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>