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
    $sql = "Select * from category order by category_name ASC";
    $query = mysqli_query($con, $sql);
    $str = "";
    while ($row = mysqli_fetch_array($query)) {
        $str .= "<option value='{$row['category_id']}'>{$row['category_name']}</option>";

    }

} else if ($_POST['type'] == "category") {
    $sql = "Select * from sub_category where category_id = {$_POST['id']} order by sub_category ASC";
    $query = mysqli_query($con, $sql);
    $str = "";
    while ($row = mysqli_fetch_array($query)) {
        $str .= "<option value='{$row['subcategory_id']}'>{$row['sub_category']}</option>";

    }
}
echo $str;
?>