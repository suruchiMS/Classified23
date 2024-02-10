<?PHP require("include_db.php"); ?>
<?php
if (isset($_GET['logout'])) {
    session_start();
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    header('location:index.php');
}
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $select = "select * from client where client_name='$username'";
    $run = mysqli_query($con, $select);
    $result = mysqli_num_rows($run);
    if ($result == 1) {
        echo "<script> window.location.href='dashboard_client.php'; </script>";
    }
    $select1 = "select * from admin where user_name='$username'";
    $run1 = mysqli_query($con, $select1);
    $result1 = mysqli_num_rows($run1);
    if ($result1 == 1) {
        echo "<script> window.location.href='dashboard_admin.php'; </script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Agnis Designers" />
    <meta name="keywords" content="Agnis Designers" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body themebg-pattern="theme1">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->

                    <form class="md-float-material form-material" action="login.php" method="post">
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" id="username" name="username" onchange="CheckValidation()"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">User Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" id="password" name="password" onchange="CheckValidation()"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0"><a href="forgot_password2.php"><u>Forgot
                                                    Password?</u></a>
                                        </p>

                                    </div>

                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block"
                                            onclick="CheckUser()">Sign In</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0"><a
                                                href="registration_form1.php"><u>Register</u></a>
                                        </p>
                                        <!-- <p class="text-inverse text-left m-b-0"><a href="index.php"><u>Home</u></a>
                                        </p> -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

    <!-- // if (isset($_POST["submit"])) {
    // $uname = $_POST["username"];
    // $password = $_POST["password"];
    // // $encrypted_password = encrypt_decrypt('encrypt', $password);
    // $select1 = "select * from client where client_name='$uname' AND password='$password'";

    // $run1 = mysqli_query($con, $select1);
    // $log = mysqli_num_rows($run1);
    // if ($log == 1) {
    // @session_start();

    // $_SESSION["username"] = $uname;

    // echo "
    <script> alert('login done'); </script>";
    // echo "
    <script> window.location.href = 'dashboard_client.php'; </script>";
    // } else {
    // $select2 = "select * from admin where user_name='$uname' AND password='$password'";
    // $run2 = mysqli_query($con, $select2);
    // $log = mysqli_num_rows($run2);
    // if ($log == 1) {

    // echo "
    <script> window.location.href = 'dashboard_admin.php'; </script>";
    // }
    // }
    // } -->

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>

    <script type="text/javascript">
        function CheckUser() {
            var letters = /^[^'"]*$/;
            if (username.value == "" && password.value == "") {
                alert('Enter username & password');

            }
            else if (username.value.match(letters) && password.value.match(letters)) {
                this.focus();
                return true;
            }

            else {
                alert('Cant get special characters like single and double quotes');
                return false;
            }
        }

        function CheckValidation() {
            var letters = /^[^'"]*$/;
            if (username.value.match(letters) && password.value.match(letters)) {

                this.focus();
                //$("#username").val()=" ";
                return true;
            }

            else {
                alert('Cant get special characters like single and double quotes');
                document.getElementById("username").value = "";
                document.getElementById("username").focus();
                return false;
            }
        }
    </script>
</body>

</html>