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
                                            <h5 class="m-b-10">Admin</h5>
                                            <p class="m-b-0">View Admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-body">

                            <div class="page-wrapper">

                                <div class="page-body pt-3">
                                    <a href="add_admin.php">
                                        <button style="font-size:15px; background-color:spinner-blue; color:black;">Add
                                            Admin</button>
                                    </a>
                                    <!-- <p class="text-inverse text-left m-b-0"><a
                                            href="registration_form1.php"><u>Register</u></a>
                                    </p> -->
                                    <div class="card">


                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <?php
                                                $query = "Select * from admin";
                                                $data = mysqli_query($con, $query);
                                                $result = mysqli_num_rows($data); ?>
                                                <table class="table table-hover " id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Full Name</th>
                                                            <th>User Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile No</th>
                                                            <th>Authentication</th>
                                                            <th>Date</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if ($result) {
                                                            while ($row = mysqli_fetch_array($data)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $row['full_name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['user_name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['email']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['mobileno']; ?>
                                                                    </td>

                                                                    <td>
                                                                        <?php
                                                                        if ($row['is_authentication'] == 1) {
                                                                            echo "Yes";
                                                                        } else {
                                                                            echo "No";
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $row['date_added']; ?>
                                                                    </td>

                                                                    <td><a
                                                                            href="edit_admin.php?id=<?php echo $row['user_id']; ?>"><i
                                                                                class="fa fa-edit"></i></a>
                                                                    </td>
                                                                    <td><a onclick="return confirm('Are you sure, you want to delete?')"
                                                                            href=" delete_admin.php?id=<?php echo $row['user_id']; ?>"><i
                                                                                class="fa fa-trash"></i></a>
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