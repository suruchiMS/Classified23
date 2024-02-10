<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$categoryid = $_GET['id'];
if (isset($_POST['update_btn'])) {
    $categoryname = $_POST['categoryname'];
    $update = "UPDATE category SET category_name='$categoryname' where category_id='$categoryid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if ($data) {

        echo "<script>window.location.href='view_category.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>