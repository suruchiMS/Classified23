<?php require("include_db.php");
include("include_session.php");
$id = $_GET['id'];
$query = "DELETE FROM client WHERE client_id='$id'";
$data = mysqli_query($con, $query);
if ($data) {
    echo "<script>window.location.href='view_client.php';</script>";
} else {
    echo "Error: " . $sub_registration . "<br>" . $con->error;
} ?>