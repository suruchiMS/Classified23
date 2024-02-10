<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$userid = $_GET['id'];
$select = "Select * from admin where user_id='$userid'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
// $type = $row['is_authentication'];
// echo $type;
// $checked[$type] = "checked";
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
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Agnis Designers" />
    <!-- Favicon icon -->
    <?php include("include_css.php") ?>
</head>

<body>

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
                                            <p class="m-b-0">Edit Admin</p>
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
                                                    <h5>Edit Admin</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form action="submit_admin.php?id=<?php echo $row['user_id']; ?>"
                                                        class="form-material" method="POST">
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">

                                                                <input value="<?php echo $row['full_name'] ?>"
                                                                    type="text" class="form-control" name="fullname"
                                                                    placeholder="Full name" Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['user_name'] ?>"
                                                                    type="text" class="form-control" name="username"
                                                                    placeholder="User name" Required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['email'] ?>" type="email"
                                                                    class="form-control" id="email" name="email"
                                                                    placeholder="Email"
                                                                    onchange="validateEmail(this.id)" required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['mobileno'] ?>"
                                                                    type="text" class="form-control" name="mobile"
                                                                    placeholder="Mobile" onkeyup="val(this)" required>
                                                                <span class="form-bar"></span>
                                                                <div id="res"></div>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="col-sm-6">
                                                                <label for="groupid">Group ID
                                                                </label><br>
                                                                <input type="radio" id="Admin" name="groupid" value="1" <?php
                                                                if ($row['group_id'] == "1") {
                                                                    echo "checked";
                                                                }
                                                                ?> />
                                                                <label for="Admin">Admin</label><br>

                                                                <input type="radio" id="Client" name="groupid" value="2" <?php
                                                                if ($row['group_id'] == "2") {
                                                                    echo "checked";
                                                                }
                                                                ?> />
                                                                <label for="Client">Client</label>
                                                                <span class="form-bar"></span>
                                                            </div> -->

                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <label for="isauthentication">Is
                                                                    Authentication</label><br>
                                                                <input type="radio" id="yes" name="isauthentication"
                                                                    value="1" <?php
                                                                    if ($row['is_authentication'] == "1") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> />

                                                                <label for="yes">Yes</label><br>

                                                                <input type="radio" id="no" name="isauthentication"
                                                                    value="0" <?php
                                                                    if ($row['is_authentication'] == "0") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> />

                                                                <label for="no">No</label>
                                                                <span class="form-bar"></span>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <!-- <time class="form-control"
                                                                    datetime="1914-12-20 08:30:45" placeholder="date"> -->
                                                                <input value="<?php echo $row['date_added'] ?>"
                                                                    type="datetime-local" class="form-control"
                                                                    name="dateadded" required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['password'] ?>"
                                                                    type="text" class="form-control" name="password"
                                                                    placeholder="Password" required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div>
                                                        <input type="submit" name="update_btn" class="btn btn-primary"
                                                            value="Update">
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
        function val(elem) {
            if (isNaN(elem.value)) {
                document.getElementById('res').innerText = "Please enter numbers only";
            } else {
                document.getElementById('res').innerText = "";
                if (elem.value.length > 10) {
                    document.getElementById('res').innerText = "Please enter 10 digits only ";
                } else {
                    document.getElementById('res').innerText = "";
                }
            }
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