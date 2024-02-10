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
    <title>View Advertisement Details</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Advertisement</h5>
                                            <p class="m-b-0">View Advertisement Details</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body pt-3">
                                    <div class="card">

                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <?php
                                                $clientname = $_SESSION['username'];
                                                $sql = "select client_id from client where client_name ='$clientname'";
                                                $data = mysqli_query($con, $sql);
                                                $result = mysqli_num_rows($data);
                                                if ($result) {
                                                    while ($row = mysqli_fetch_array($data)) {
                                                        $clientid = $row['client_id'];
                                                    }
                                                }

                                                $query = "Select * from advertise1";
                                                $data = mysqli_query($con, $query);
                                                $result = mysqli_num_rows($data); ?>
                                                <table class="table table-hover " id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Client Name</th>
                                                            <th>Category Name</th>
                                                            <th>Sub Category Name</th>
                                                            <!-- <th>Contact Person</th>
                                                            <th>Contact No.</th>
                                                            <th>Alternate No.</th>
                                                            <th>Email</th>
                                                            <th>Description</th> -->
                                                            <th>Start Date</th>
                                                            <th>Advertisement Category</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if ($result) {
                                                            while ($row = mysqli_fetch_array($data)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php
                                                                        $clientid = $row['client_id'];

                                                                        $sql1 = "select client_name from client where client_id ='$clientid'";
                                                                        $data1 = mysqli_query($con, $sql1);
                                                                        $result1 = mysqli_num_rows($data1);
                                                                        if ($result1) {
                                                                            while ($row1 = mysqli_fetch_array($data1)) {
                                                                                echo $row1['client_name'];
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </td>

                                                                    <td>
                                                                        <?php
                                                                        $categoryid = $row['category_id'];

                                                                        $sql1 = "select category_name from category where category_id ='$categoryid'";
                                                                        $data1 = mysqli_query($con, $sql1);
                                                                        $result1 = mysqli_num_rows($data1);
                                                                        if ($result1) {
                                                                            while ($row1 = mysqli_fetch_array($data1)) {
                                                                                echo $row1['category_name'];
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        $subcategoryid = $row['sub_category_id'];

                                                                        $sql2 = "select sub_category from sub_category where subcategory_id ='$subcategoryid'";
                                                                        $data2 = mysqli_query($con, $sql2);
                                                                        $result2 = mysqli_num_rows($data2);
                                                                        if ($result2) {
                                                                            while ($row2 = mysqli_fetch_array($data2)) {
                                                                                echo $row2['sub_category'];
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <!-- <td>
                                                                        <?php echo $row['contact_person']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['contact_no']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['alternate_no']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['email']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['description']; ?> 
                                                                    </td> -->
                                                                    <td>
                                                                        <?php echo $row['start_date']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        $adcatid = $row['ad_category_id'];

                                                                        $sql2 = "select advertise_category from config where ad_category_id ='$adcatid'";
                                                                        $data2 = mysqli_query($con, $sql2);
                                                                        $result2 = mysqli_num_rows($data2);
                                                                        if ($result2) {
                                                                            while ($row2 = mysqli_fetch_array($data2)) {
                                                                                echo $row2['advertise_category'];
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </td>

                                                                    <!-- <td>
                                                                        <?php
                                                                        if ($row['is_active'] == 1) {
                                                                            echo "active";
                                                                        } else {
                                                                            echo "inactive";
                                                                        }
                                                                        ?>
                                                                    </td> -->
                                                                    <td>
                                                                        <?php echo $row['status']; ?>
                                                                    </td>



                                                                    <td><a
                                                                            href="update_status_accept.php?id=<?php echo $row['adv_id']; ?>&status=<?php echo $row['status']; ?>"><button
                                                                                class='btn-success btn-sm'>Accept</button></a>
                                                                        <a
                                                                            href="update_status_reject.php?id=<?php echo $row['adv_id']; ?>&status=<?php echo $row['status']; ?>"><button
                                                                                class='btn-danger btn-sm'>Reject</button></a>
                                                                    </td>

                                                                </tr>
                                                                <?php
                                                            }
                                                        } else {
                                                            ?>
                                                            <tr>
                                                                <td>No Record Found</td>
                                                            </tr>
                                                            <?php
                                                        }

                                                        ?>
                                                    </tbody>
                                                </table>
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
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "pageLength": 10
            });
        });
    </script>
</body>

</html>