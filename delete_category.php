<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}


$id = $_GET['id'];
$query = "DELETE FROM category WHERE category_id='$id'";
$data = mysqli_query($con, $query);
if ($data) {
    echo "<script>window.location.href='view_category.php';</script>";
} else {
    echo "Error: " . $sub_registration . "<br>" . $con->error;
} ?>