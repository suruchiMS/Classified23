<?php require("include_db.php");
include("include_session.php"); ?>
<?php
if (isset($_POST['submit_btn'])) {

    $clientname = $_POST['clientname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // if (isset($_POST['isactive'])) {
    //     $isactive = 1;
    // } else {
    //     $isactive = 0;
    // }
    $date = $_POST['date'];


    $query = "INSERT INTO client (client_name,mobileno,email,password,add_date) VALUES('$clientname','$mobile','$email','$password','$date')";

    $data = mysqli_query($con, $query);
    if ($data) {

        echo "<script>window.location.href='view_client.php';</script>";
    } else {
        echo "Error: " . $sub_registration . "<br>" . $con->error;

    }
} ?>