<?PHP require("include_db.php");
session_start();
$_SESSION = array();
session_destroy();
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
        echo "<script>window.location.href='registration_form1.php';</script>";
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
                echo 
                //header("location: login_form.php");
            } else {
                echo "Something went wrong! Can not redirect to login page";
            }


        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($con);
}

$strusername = isset($username) ? $username : "";
$strmobileno = isset($_POST['mobileno']) ? $_POST['mobileno'] : "";
$stremail = isset($_POST['email']) ? $_POST['email'] : "";
$strdate = isset($_POST['date']) ? $_POST['date'] : "";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
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
                    <form class="md-float-material form-material" action="registration_form1.php" method="post">
                        <div class="text-center">
                            <img src="assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Register</h3>
                                    </div>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="text" id="username" name="username" value="<?php echo $strusername; ?>"
                                        class="form-control" onchange="CheckValidation()" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">User Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" id="password" name="password" onchange="CheckValidation()"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" id="confirmpassword" name="confirmpassword"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Confirm Password</label>
                                </div>


                                <div class="form-group form-primary">
                                    <input type="text" value="<?php echo $strmobileno; ?>" id="mobileno" name="mobileno"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Mobile No.</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" value="<?php echo $stremail; ?>" id="email" name="email"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="date" value="<?php echo $strdate; ?>" id="date" name="date"
                                        class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <!-- <label class="float-label">Date</label> -->
                                </div>
                                <!-- <div class="form-group form-primary">
                                    <label for="isactive">Is Active</label><br>
                                    <input type="radio" id="yes" name="isactive" value="1" checked />
                                    <label for="yes">Yes</label><br>

                                    <input type="radio" id="no" name="isactive" value="0" />
                                    <label for="no">No</label>
                                    <span class="form-bar"></span>
                                </div> -->
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block"
                                            onclick="CheckUser()">Register</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0"><a href="index.php"><u>Log In</u></a>
                                        </p>

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

</body>

</html>