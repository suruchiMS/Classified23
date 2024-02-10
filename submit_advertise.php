<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$advid = $_GET['id'];
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST['update_btn'])) {
    $clientname = $_POST['clientname'];
    $sql = "select client_id from client where client_name ='$clientname'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {

            $clientid = $row['client_id'];
        }
    }
    $categoryid = $_POST['Category'];
    // $sql1 = "select category_id from category where category_name ='$categoryname'";
    // $data1 = mysqli_query($con, $sql1);
    // $result1 = mysqli_num_rows($data1);
    // if ($result1) {
    //     while ($row1 = mysqli_fetch_array($data1)) {

    //         $categoryid = $row1['category_id'];
    //     }
    // }
    $subcategoryid = $_POST['SubCategory'];
    // $sql2 = "select subcategory_id from sub_category where sub_category ='$subcategory'";
    // $data2 = mysqli_query($con, $sql2);
    // $result2 = mysqli_num_rows($data2);
    // if ($result2) {
    //     while ($row2 = mysqli_fetch_array($data2)) {

    //         $subcategoryid = $row2['subcategory_id'];
    //     }
    // }
    // $contactperson = $_POST['contactperson'];
    // $contactno = $_POST['contactno'];
    // $alternateno = $_POST['alternateno'];
    // $email = $_POST['email'];
    // $startdate = $_POST['startdate'];
    $featured = $_POST['featured'];
    $description = $_POST['description'];
    $title = $_POST['title'];

    $update = "UPDATE advertise1 SET client_id='$clientid',category_id='$categoryid', sub_category_id='$subcategoryid',description='$description',title='$title',featured='$featured' where adv_id='$advid'";
    //echo $update;
    $data = mysqli_query($con, $update);
    if ($data) {

        //echo "<script>window.location.href='view_advertise.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>