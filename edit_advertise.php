<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
$advid = $_GET['id'];
$select = "Select * from advertise1 where adv_id='$advid'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advertisement Details</title>
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
                                            <h5 class="m-b-10">Advertisement</h5>
                                            <p class="m-b-0">Edit Advertisement Details</p>
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
                                                    <h5>Edit Advertisement Details</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material" method="post"
                                                        action="submit_advertise.php?id=<?php echo $row['adv_id']; ?>">
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <?php
                                                                $clientid = $row['client_id'];

                                                                $sql1 = "select client_name from client where client_id ='$clientid'";
                                                                $data1 = mysqli_query($con, $sql1);
                                                                $result1 = mysqli_num_rows($data1);
                                                                if ($result1) {
                                                                    while ($row1 = mysqli_fetch_array($data1)) {

                                                                        ?>

                                                                        <input value="<?php echo $row1['client_name']; ?>"
                                                                            type="text" class="form-control" name="clientname"
                                                                            placeholder="Client Name" readonly>
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                    }
                                                                }

                                                                $categoryid = $row['category_id'];
                                                                $sql2 = "select category_name from category where category_id ='$categoryid'";
                                                                $data2 = mysqli_query($con, $sql2);
                                                                $result2 = mysqli_num_rows($data2);
                                                                if ($result2) {
                                                                    while ($row2 = mysqli_fetch_array($data2)) {


                                                                        ?>

                                                                <div class=" form-group form-default row">
                                                                    <div class="col-sm-6">
                                                                        <input value="<?php echo $row2['category_name']; ?>"
                                                                            type="text" class="form-control" name="categoryname"
                                                                            placeholder="Category" required>
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                }
                                                                $subcategoryid = $row['sub_category_id'];
                                                                $sql3 = "select sub_category from sub_category where subcategory_id ='$subcategoryid'";
                                                                $data3 = mysqli_query($con, $sql3);
                                                                $result3 = mysqli_num_rows($data3);
                                                                if ($result3) {
                                                                    while ($row3 = mysqli_fetch_array($data3)) {
                                                                        ?>
                                                                    <div class="col-sm-6">
                                                                        <input value="<?php echo $row3['sub_category']; ?>"
                                                                            type="text" class="form-control" name="subcategory"
                                                                            placeholder="Sub Category" required>
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                </div>
                                                                <?php

                                                                    }
                                                                }
                                                                ?>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['contact_person']; ?>"
                                                                    type="text" class="form-control"
                                                                    name="contactperson" placeholder="Contact Person"
                                                                    required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['contact_no']; ?>"
                                                                    type="text" class="form-control" name="contactno"
                                                                    placeholder="Contact No" required>
                                                                <span class="form-bar"></span>
                                                            </div>

                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['alternate_no']; ?>"
                                                                    type="text" class="form-control" name="alternateno"
                                                                    placeholder="Alternate No">
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['email']; ?>" type="email"
                                                                    class="form-control" id="email" name="email"
                                                                    placeholder="Email"
                                                                    onchange="validateEmail(this.id)" required>
                                                                <span class="form-bar"></span>
                                                            </div>

                                                        </div>
                                                        <!-- <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <textarea value="<?php echo $row['description']; ?>"
                                                                    name="description" rows="5" cols="60"
                                                                    maxlength="200" id="myText"
                                                                    placeholder="Please write 200 characters description"></textarea>
                                                                <span class="form-bar" id="wordCount">0</span> of 200

                                                            </div>
                                                        </div> -->
                                                        <div class=" form-group form-default row">

                                                            <!-- <div class="col-sm-6">
                                                                <label for="isactive">Is Active</label><br>
                                                                <input type="radio" id="yes" name="isactive" value="1"
                                                                    <?php
                                                                    if ($row['is_active'] == "1") {
                                                                        echo "checked";
                                                                    }
                                                                    ?>>
                                                                <label for="yes">Yes</label><br>
                                                                <input type="radio" id="no" name="isactive" value="0"
                                                                    <?php
                                                                    if ($row['is_active'] == "0") {
                                                                        echo "checked";
                                                                    }
                                                                    ?>>
                                                                <label for="no">No</label>
                                                                <span class="form-bar"></span>
                                                            </div> -->
                                                            <div class="col-sm-6">
                                                                <input value="<?php echo $row['start_date']; ?>"
                                                                    type="date" class="form-control" name="startdate"
                                                                    required>
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
        var myText = document.getElementById("myText");
        var wordCount = document.getElementById("wordCount");
        myText.addEventListener("keyup", function () {
            var characters = myText.value.split('');
            wordCount.innerText = characters.length;
        });
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