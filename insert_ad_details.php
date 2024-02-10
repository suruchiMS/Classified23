<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from admin where user_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_admin.php'; </script>";
}

if (isset($_POST['submit_btn'])) {
    $clientname = $_SESSION['username'];
    $sql = "select client_id from client where client_name ='$clientname'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
            $clientid = $row['client_id'];
        }
    }
    $categoryid = $_POST['Category'];
    $subcategoryid = $_POST['SubCategory'];
    // $categoryname = $_POST['Category'];
    // $subcategoryname = $_POST['SubCategory'];
    // $sql = "select category_id from category where category_name='$categoryname'";
    // $data = mysqli_query($con, $sql);
    // $result = mysqli_num_rows($data);
    // if($result) {
    //     while($row = mysqli_fetch_array($data)) {
    //         $categoryid = $row['category_id'];
    //     }
    // }
    // $sql1 = "select subcategory_id from sub_category where sub_category ='$subcategoryname'";
    // $data1 = mysqli_query($con, $sql1);
    // $result1 = mysqli_num_rows($data1);
    // if($result1) {
    //     while($row = mysqli_fetch_array($data1)) {
    //         $subcategoryid = $row['subcategory_id'];
    //     }
    // }
    // $contactperson = $_POST['contactperson'];
    // $contactno = $_POST['contactno'];
    // $alternateno = $_POST['alternateno'];
    // $email = $_POST['email'];
    $description = $_POST['description'];
    $adcatid = $_POST['adcatid'];
    $title = $_POST['title'];

    $sql = "select add_date from client where client_name= '$clientname'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_num_rows($data);
    if ($result) {
        while ($row = mysqli_fetch_array($data)) {

            $startdate = $row['add_date'];
        }
    }
    $sql1 = "select * from config where ad_category_id = '$adcatid'";
    $data1 = mysqli_query($con, $sql1);
    $result1 = mysqli_num_rows($data1);
    if ($result1) {
        while ($row1 = mysqli_fetch_array($data1)) {
            $advlimit = $row1['adv_limit'] . "days";
            $date = date_create($startdate);
            $interval = date_interval_create_from_date_string($advlimit);
            $expirydate = date_add($date, $interval);
            $expirydate = date_format($expirydate, "Y-m-d");

        }
    }
    $status = "Pending";
    $query = "INSERT INTO advertise1 (client_id,category_id,sub_category_id,description,title,start_date,ad_category_id,expiry_date,status) VALUES('$clientid','$categoryid','$subcategoryid','$description','$title','$startdate',' $adcatid','$expirydate','$status')";

    $data = mysqli_query($con, $query);
    if ($data) {

        echo "<script>window.location.href='add_ad_details.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
}
?>