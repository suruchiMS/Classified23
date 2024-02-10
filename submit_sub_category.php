<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$subcategoryid = $_GET['id'];
if (isset($_POST['update_btn'])) {
    $subcategory = $_POST['subcategory'];
    $categoryname = $_POST['categoryname'];
    $sql = "select * from category where category_name = '$categoryname'";
    $data = mysqli_query($con, $sql);
    $result1 = mysqli_num_rows($data);
    if ($result1) {
        while ($row1 = mysqli_fetch_array($data)) {
            $categoryid = $row1['category_id'];
        }
    }

    $update = "UPDATE sub_category SET sub_category='$subcategory', category_id='$categoryid' where subcategory_id='$subcategoryid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if ($data) {

        echo "<script>window.location.href='view_sub_category.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>