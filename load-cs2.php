<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
if ($_POST['type'] == "") {
    $sql = "Select * from config order by advertise_category ASC";
    $query = mysqli_query($con, $sql);
    $str = "";
    while ($row = mysqli_fetch_array($query)) {
        $str .= "<option value='{$row['ad_category_id']}'>{$row['advertise_category']}</option>";

    }
} else if ($_POST['type'] == "category") {
    $sql = "Select * from config where ad_category_id = {$_POST['id']}";
    $query = mysqli_query($con, $sql);
    $str = "";
    while ($row = mysqli_fetch_array($query)) {

        $str .= $row['adv_limit'];

    }
}
echo $str;
?>