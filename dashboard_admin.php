<?php include("include_db.php"); ?>
<?php include("include_session.php");

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
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Admin Panel</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
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
                                                $query = "Select * from advertise1 where status = 'Pending'";
                                                $data = mysqli_query($con, $query);
                                                $result = mysqli_num_rows($data); ?>
                                                <table class="table table-hover " id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Client Id</th>
                                                            <th>Category Name</th>
                                                            <th>Sub Category Name</th>
                                                            <!-- <th>Contact Person</th>
                                                            <th>Contact No.</th>
                                                            <th>Alternate No.</th>
                                                            <th>Email</th> -->
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
                                                                        <?php echo $row['client_id']; ?>
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


                                                                    <td>
                                                                        <?php echo $row['start_date']; ?>
                                                                    </td>

                                                                    <td>
                                                                        <?php
                                                                        $adcategoryid = $row['ad_category_id'];

                                                                        $sql3 = "select advertise_category from config where ad_category_id ='$adcategoryid'";
                                                                        $data3 = mysqli_query($con, $sql3);
                                                                        $result3 = mysqli_num_rows($data3);
                                                                        if ($result3) {
                                                                            while ($row3 = mysqli_fetch_array($data3)) {
                                                                                echo $row3['advertise_category'];
                                                                            }
                                                                        } ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['status']; ?>
                                                                    </td>

                                                                    <!-- <td><a
                                                                            href="edit_advertise2.php?id=<?php echo $row['adv_id']; ?>"><i
                                                                                class="fa fa-edit"></i></a>
                                                                    </td>
                                                                    <td><a onclick="return confirm('Are you sure, you want to delete?')"
                                                                            href=" delete_advertise.php?id=<?php echo $row['adv_id']; ?>"><i
                                                                                class="fa fa-trash"></i></a>
                                                                    </td> -->
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

    <!-- Required Jquery -->
    <?php include("include_js.php"); ?>
</body>

</html>