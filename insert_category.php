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


    $categoryname = $_POST['categoryname'];
    $sql1 = "select * from category where category_name = '$categoryname'";
    $data1 = mysqli_query($con, $sql1);
    $result2 = mysqli_num_rows($data1);
    if ($result2) {
        echo "<script> alert('Category already exists!'); </script>";
        echo "<script>window.location.href='add_category.php';</script>";
    } else {
        $query = "INSERT INTO category (category_name) VALUES('$categoryname')";

        $data = mysqli_query($con, $query);
        if ($data) {

            echo "<script>window.location.href='view_category.php';</script>";
        } else {
            echo "Error: " . $sub_registration . "<br>" . $con->error;

        }
    }
} ?>