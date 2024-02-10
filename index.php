<?php
include_once("include_db.php");
$select = "SELECT * FROM category order by category_name ASC";
$query = mysqli_query($con, $select);
$result = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Collapsible sidebar using Bootstrap 4</title>

    <style>

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/agnis-style.css" />
    <!-- <link rel="stylesheet" href="css/agnis-style"> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css"
        integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css"
        integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Classified</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <li class="active">

                            <a href="#<?php echo $row['category_id']; ?>" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <h6>
                                    <?php echo $row['category_name']; ?>
                                </h6>
                            </a>
                            <ul class="collapse list-unstyled" id="<?php echo $row['category_id']; ?>">
                                <?php

                                $category_id = $row['category_id'];
                                $query1 = "Select * from sub_category where category_id='$category_id' order by sub_category ASC";
                                $data1 = mysqli_query($con, $query1);
                                $result1 = mysqli_num_rows($data1);
                                if ($result1) {
                                    while ($row1 = mysqli_fetch_array($data1)) {

                                        ?>

                                        <li>
                                            <a href="index1.php?id=<?php echo $row1['subcategory_id']; ?>">
                                                <?php echo $row1['sub_category']; ?>
                                            </a>
                                        </li>
                                        <?php



                                    }

                                }

                                ?>

                            </ul>

                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fa fa-align-left" aria-hidden="true"></i>

                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login_form.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registration_form.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content p-1">
                <section class="content">
                    <div class="container-fluid">
                        <?php
                        $query2 = "Select * from advertise1 where featured=1";
                        $data2 = mysqli_query($con, $query2);
                        $result2 = mysqli_num_rows($data2);
                        if ($result2) {
                            while ($row2 = mysqli_fetch_array($data2)) {
                                $cat_id = $row2['category_id'];
                                $query3 = "Select * from category where category_id='$cat_id'";
                                $data3 = mysqli_query($con, $query3);
                                $result3 = mysqli_num_rows($data3);
                                if ($result3) {
                                    while ($row3 = mysqli_fetch_array($data3)) {
                                        $color = $row3['color'];
                                        $categoryname = $row3['category_name'];
                                        ?>
                                        <figure id="advertise1" style="background-color:<?php echo $color; ?>">
                                            <div class="coloured-heading">
                                                <h6>

                                                    &nbsp;&nbsp;&nbsp;
                                                    <?php echo $categoryname; ?>

                                                </h6>
                                            </div>
                                            <div class=" card">
                                                <div class="card-header">
                                                    <?php
                                                    echo "<h7>" . $row2['title'] . "</h7>";
                                                    ?>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php
                                                        echo $row2['description'] . "<br>";
                                                        ?>
                                                        <br>
                                                        <span>
                                                            <?php echo $row2['views'] + 1; ?>

                                                        </span>
                                                        <span id="visibility">

                                                            <i class="material-icons left">visibility</i>
                                                        </span>
                                                        <?php
                                                        $views = $row2['views'];
                                                        $query4 = "Update advertise1 set views=$views+1 where featured = 1";
                                                        $data4 = mysqli_query($con, $query4);
                                                        ?>


                                                    </p>
                                                </div>
                                            </div>
                                        </figure>
                                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal",
            });

            $("#sidebarCollapse").on("click", function () {
                $("#sidebar, #content").toggleClass("active");
                $(".collapse.in").toggleClass("in");
                $("a[aria-expanded=true]").attr("aria-expanded", "false");
            });
        });
    </script>
</body>

</html>