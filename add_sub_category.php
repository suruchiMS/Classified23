<?php require("include_db.php");
include("include_session.php");
$username = $_SESSION['username'];
$select = "select * from client where client_name='$username'";
$run = mysqli_query($con, $select);
$result = mysqli_num_rows($run);
if ($result == 1) {
    echo "<script> window.location.href='dashboard_client.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sub Category</title>
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
                    <?php include('include_sidebar_admin.php'); ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Master</h5>
                                            <p class="m-b-0">Add Sub Category</p>
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
                                                    <h5>Add Sub Category</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material" method="post"
                                                        action="insert_sub_category.php">
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <label>Select a Category</label>&nbsp;&nbsp;
                                                                <select name="Category" id="Category">
                                                                    <option value="">Select Category</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label>Sub Categories available :</label>
                                                                <select id="SubCategory">
                                                                    <option value="">Sub Category</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=" form-group form-default row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control"
                                                                    name="subcategory" placeholder="Sub Category"
                                                                    required>
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

    <?php include("include_js.php"); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            function loadData(type, category_id) {
                $.ajax({
                    url: "load-cs.php",
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