<?PHP require("include_db.php");

if (isset($_GET['logout'])) {
    session_start();
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header('location:index.php');
}


if (isset($_POST["submit"])) {
    $uname = $_POST["username"];
    $password = $_POST["password"];

    // $encrypted_password = encrypt_decrypt('encrypt', $password);

    $select = "select * from client where client_name='$uname'";
    $run = mysqli_query($con, $select);
    $vemail1 = mysqli_num_rows($run);

    $select = "select * from admin where user_name='$uname'";
    $run = mysqli_query($con, $select);
    $vemail2 = mysqli_num_rows($run);

    if ($vemail1 == 1 || $vemail2 == 1) {
        if ($vemail1 == 1) {
            $select2 = "select * from client where client_name = '$uname'";
            $run2 = mysqli_query($con, $select2);
            $vpass = mysqli_num_rows($run2);

            if ($vpass) {
                // $row = mysqli_fetch_array($run2);
                // $hashedPassword = $row['password'];
                // if (!password_verify($password, $hashedPassword)) {
                //     echo "<script> alert('wrong password'); </script>";
                //     echo "<script> window.location.href='index.php'; </script>";
                // } else {
                //     @session_start();

                //     $_SESSION["username"] = $uname;

                //     echo "<script> alert('login done'); </script>";
                //     echo "<script> window.location.href='dashboard_client.php'; </script>";
                // }
                // }
                $select3 = "select * from client where  client_name='$uname' AND password='$password'";
                $run3 = mysqli_query($con, $select3);

                $log = mysqli_num_rows($run3);

                if ($log == 1) {
                    @session_start();

                    $_SESSION["username"] = $uname;

                    echo "<script> alert('login done'); </script>";
                    echo "<script> window.location.href='dashboard_client.php'; </script>";
                }
            } else {
                echo "<script> alert('wrong password'); </script>";
                echo "<script> window.location.href='login_form.php'; </script>";
                // $_SESSION["login_attempts"] += 1;
            }
        } elseif ($vemail2 == 1) {
            $select2 = "select * from admin where password='$password'";
            $run2 = mysqli_query($con, $select2);

            $vpass = mysqli_num_rows($run2);
            if ($vpass) {
                // $row = mysqli_fetch_array($run2);
                // $hashedPassword = $row['password'];
                // if (!password_verify($password, $hashedPassword)) {
                //     echo "<script> alert('wrong password'); </script>";
                //     echo "<script> window.location.href='index.php'; </script>";
                // } else {
                //     @session_start();

                //     $_SESSION["username"] = $uname;

                //     echo "<script> alert('login done'); </script>";
                //     echo "<script> window.location.href='dashboard_admin.php'; </script>";
                // }
                $select3 = "select * from admin where  user_name='$uname' AND password='$password'";
                $run3 = mysqli_query($con, $select3);

                $log = mysqli_num_rows($run3);

                if ($log == 1) {
                    @session_start();

                    $_SESSION['username'] = $uname;

                    echo "<script> alert('login done'); </script>";
                    echo "<script> window.location.href='dashboard_admin.php'; </script>";
                }

            } else {
                echo "<script> alert('wrong password'); </script>";
                echo "<script> window.location.href='login_form.php'; </script>";
                // $_SESSION['login_attempts'] += 1;
            }
        } else {
            echo "<script> alert('wrong username'); </script>";
            echo "<script> window.location.href='login_form.php'; </script>";
        }
    } else {
        echo "<script> alert('you are not Registered'); </script>";
        echo "<script> window.location.href='login_form.php'; </script>";
        // $_SESSION['login_attempts'] += 1;

    }
}
?>