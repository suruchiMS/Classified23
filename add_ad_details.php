<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from admin where user_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_admin.php'; </script>";
}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ajax-script.js" type="text/javascript"></script>
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
                    <?php include('include_sidebar_client.php'); ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Advertisement</h5>
                                            <p class="m-b-0">Add Advertisement Details</p>
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
                                                    <h5>Add Advertise</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material" method="post"
                                                        action="insert_ad_details.php">
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <label>Select a Category</label>&nbsp;&nbsp;
                                                                <select name="Category" id="Category">
                                                                    <option value="">Select Category</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>Select Sub Category</label>
                                                                <select name="SubCategory" id="SubCategory">
                                                                    <option value="">Select Sub Category</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    name="contactperson" placeholder="Contact Person"
                                                                    required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="contactno"
                                                                    placeholder="Contact No" onkeyup="val(this)"
                                                                    required>
                                                                <span class=" form-bar"></span>
                                                                <div id="res"></div>
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    name="alternateno" placeholder="Alternate No"
                                                                    onkeyup="val1(this)">
                                                                <span class="form-bar"></span>
                                                                <div id="res1"></div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="email" class="form-control" name="email"
                                                                    placeholder="Email" required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div> -->
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="title"
                                                                    placeholder="title" required>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div><br>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <textarea name="description" rows="5" cols="60"
                                                                    maxlength="200" id="myText"
                                                                    placeholder="Please write 200 characters description"></textarea>
                                                                <span class="form-bar" id="wordCount">0</span> of 200
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <label for="adcatid"><b>Advertisement
                                                                        Category</b></label><br>
                                                                <?php
                                                                $query = "Select * from config";
                                                                $data1 = mysqli_query($con, $query);
                                                                $result1 = mysqli_num_rows($data1);
                                                                if ($result1) {
                                                                    while ($row1 = mysqli_fetch_array($data1)) {
                                                                        ?>
                                                                        <input type="radio"
                                                                            id="<?php echo $row1['advertise_category']; ?>"
                                                                            name="adcatid"
                                                                            value="<?php echo $row1['ad_category_id']; ?>"
                                                                            checked />
                                                                        <label for="<?php echo $row1['advertise_category']; ?>">
                                                                            <?php echo $row1['advertise_category']; ?>
                                                                        </label><br>

                                                                        <?php

                                                                    }
                                                                } ?>
                                                            </div>
                                                        </div>
                                                        <!-- <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <label for="isfree">Is Free</label><br>
                                                                <input type="radio" id="yes" name="isfree" value="1"
                                                                    checked>
                                                                <label for="yes">Yes</label><br>
                                                                <input type="radio" id="no" name="isfree" value="0" />
                                                                <label for="no">No</label>
                                                                <span class="form-bar"></span>
                                                            </div>
                                                        </div> -->
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
        function val1(elem) {
            if (isNaN(elem.value)) {
                document.getElementById('res1').innerText = "Please enter numbers only";
            } else {
                document.getElementById('res1').innerText = "";

            }
        }
        var myText = document.getElementById("myText");
        var wordCount = document.getElementById("wordCount");
        myText.addEventListener("keyup", function () {
            var characters = myText.value.split('');
            wordCount.innerText = characters.length;
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            function loadData(type, category_id) {
                $.ajax({
                    url: "load-cs1.php",
                    type: "POST",
                    data: { type: type, id: category_id },
                    success: function (data) {
                        if (type == "category") {
                            $("#SubCategory").html(data);
                        } else {
                            $("#Category").append(data);
                        }
                    }
                });
            }
            loadData();
            $("#Category").on("change", function () {
                var category = $("#Category").val();
                loadData("category", category);
            })
        });

    </script>
</body>

</html>