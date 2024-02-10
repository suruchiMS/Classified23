<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
} ?>
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
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Agnis Designers" />
    <!-- Favicon icon -->
    <?php include("include_css.php") ?>
</head>

<body>
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include('include_header.php'); ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include('include_sidebar_admin.php'); ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Master</h5>
                                            <p class="m-b-0">Add Client</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="main-body">
                            <div class="page-wrapper">

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Add Client</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material" method="post"
                                                        action="insert_client.php">
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    name="clientname" placeholder="Client Name"
                                                                    Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="mobile"
                                                                    placeholder="Mobile" onkeyup="val(this)" Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control" id="email"
                                                                    name="email" placeholder="Email"
                                                                    onchange="validateEmail(this.id)" Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="password" class="form-control"
                                                                    name="password" placeholder="Password" Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <!-- <div class="col-sm-6">
                                                                <label for="isactive">Is Active</label><br>
                                                                <input type="radio" id="yes" name="isactive" value="1"
                                                                    checked>
                                                                <label for="yes">Yes</label><br>
                                                                <input type="radio" id="no" name="isactive" value="0" />
                                                                <label for="no">No</label>
                                                                <span class="form-bar"></span>
                                                            </div> -->

                                                            <div class="col-sm-6">
                                                                <input type="date" class="form-control" name="date"
                                                                    Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <input type="submit" name="submit_btn" class="btn btn-primary"
                                                            value="Add">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <?php include("include_js.php"); ?>
    <script type="text/javascript">
        var radioState = false;
        function test(element) {
            if (radioState == false) {
                check();
                radioState = true;

            } else {
                uncheck();
                radioState = false;
            }
        }
        function check() {
            document.getElementById("radioBtn").checked = true;
        }
        function uncheck() {
            document.getElementById("radioBtn").checked = false;
        }
        function validateEmail(inputtext) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (document.getElementById(inputtext).value.match(mailformat)) {
                return true;
            } else {
                alert("You have entered an invalid email address!");
                document.getElementById(inputtext).focus();
                return false;
            }

        }
    </script>
</body>

</html>