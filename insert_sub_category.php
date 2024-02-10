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


    $subcategory = $_POST['subcategory'];
    $categoryid = $_POST['Category'];

    // $sql = "select category_id from category where category_name='$categoryname'";
    // $data = mysqli_query($con, $sql);
    // $result1 = mysqli_num_rows($data);
    // if ($result1) {
    //     while ($row = mysqli_fetch_array($data)) {
    //         $categoryid = $row['category_id'];

    //     }
    // }
    $sql1 = "select * from sub_category where sub_category = '$subcategory'";
    $data1 = mysqli_query($con, $sql1);
    $result2 = mysqli_num_rows($data1);
    if ($result2) {
        echo "<script> alert('Sub Category already exists!'); </script>";
        echo "<script>window.location.href='add_sub_category.php';</script>";
    } else {

        $query = "INSERT INTO sub_category (sub_category,category_id) VALUES('$subcategory','$categoryid')";

        $data = mysqli_query($con, $query);
        if ($data) {

            echo "<script>window.location.href='view_sub_category.php';</script>";
        } else {
            echo "Error: " . $sub_registration . "<br>" . $con->error;

        }
    }
} ?>