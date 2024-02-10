<?php
include_once("include_db.php");
$str = "";
$id = $_GET['id'];
$sql = "Select * from advertise1 where adv_id = '$id'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $views = $row['views'];
        $sql1 = "Update advertise1 set views=$views+1 where sub_category_id='$id'";
        $data1 = mysqli_query($con, $sql1);

    }

}


?>