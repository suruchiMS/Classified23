<?php require("include_db.php");
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $sql = "SELECT client_id FROM client WHERE client_name = ?";
    $stmt = mysqli_prepare($con, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        // Set the value of param username
        $param_username = trim($_POST['username']);

        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                $username_err = "This username already taken";
                echo "<script> alert('This username already taken'); </script>";


            } else {
                $username = trim($_POST['username']);
            }
        } else {
            echo "Something went wrong";
        }

    }

    //mysqli_stmt_close($stmt);

    $password = trim($_POST['password']);

    // Check for confirm password field
    if (trim($_POST['password']) != trim($_POST['confirmpassword'])) {
        $password_err = "Password should match";
        echo "<script> alert('Password should match'); </script>";
        echo "<script>window.location.href='registration_form.php';</script>";
    }
    // If there were no errors, go ahead and insert into the database

    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "Insert into client(client_name, mobileno, email, password, add_date) values(?,?,?,?,?)";
        $stmt = mysqli_prepare($con, $sql);
        if ($stmt) {
            $param_date = date("y-m-d");
            mysqli_stmt_bind_param($stmt, "sssss", $param_clientname, $param_mobile, $param_email, $param_password, $param_date);

            //set these parameters
            $param_clientname = $username;
            $param_password = $password;
            $param_mobile = $_POST['mobileno'];
            $param_email = $_POST['email'];
            $param_date = $_POST['date'];


            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                echo $_POST['username'];
                // header("location: login_form.php");
            } else {
                echo "Something went wrong! Can not redirect to login page";
            }


        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}

?>