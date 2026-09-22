<?php
session_start();
if (isset($_SESSION["admin"])) {
?>

    <!doctype html>
    <html class="no-js" lang="">



    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ROYAL | Home 5</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="fonts/flaticon.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Data Table CSS -->
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.min.css">
        <!-- Modernize js -->
        <script src="js/modernizr-3.6.0.min.js"></script>

    </head>

    <body>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper bg-ash">
            <!-- Header Menu Area Start Here -->
            <?php require "common/header.php" ?>
            <!-- Header Menu Area End Here -->
            <!-- Page Area Start Here -->
            <div class="dashboard-page-one">
                <!-- Sidebar Area Start Here -->
                <?php require "slidebar.php" ?>
                <!-- Sidebar Area End Here -->
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Word Practice</h3>
                        <ul>
                            <li>
                                <a href="index-2.php">Home</a>
                            </li>
                            <li>Word Practice</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <div class="row">
                        <!-- Dashboard summery Start Here -->
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                    <div class="dashboard-summery-two">
                                        <div class="item-icon bg-light-magenta">
                                            <i class="flaticon-classmates text-magenta"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-number"><span class="counter" data-num="35000">35,000</span></div>
                                            <div class="item-title">Total Students</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                    <div class="dashboard-summery-two">
                                        <div class="item-icon bg-light-blue">
                                            <i class="flaticon-shopping-list text-blue"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-number"><span class="counter" data-num="19050">19,050</span></div>
                                            <div class="item-title">Total Exams</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                    <div class="dashboard-summery-two">
                                        <div class="item-icon bg-light-yellow">
                                            <i class="flaticon-mortarboard text-orange"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-number"><span class="counter" data-num="100">100</span></div>
                                            <div class="item-title">best mark Studes</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-xxxl col-lg-3 col-sm-6 col-12">
                                    <div class="dashboard-summery-two">
                                        <div class="item-icon bg-light-red">
                                            <i class="flaticon-mortarboard text-red"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-number"><span class="counter" data-num="100">100</span></div>
                                            <div class="item-title">lowest mark student</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard summery End Here -->
                        <!-- Students Chart End Here -->
                        <!-- <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-three">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Students</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Female Students</h4>
                                        <div class="item-number">10,500</div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Male Students</h4>
                                        <div class="item-number">24,500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- Students Chart End Here -->
                        <!-- Notice Board Start Here -->
                        <!-- <div class="col-lg-6 col-4-xxxl col-xl-6">
                        <div class="card dashboard-card-six">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Notifications</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="notice-box-wrap">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend lectus
                                                sed maximus mi faucibusnting.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed mim
                                                us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- Notice Board End Here -->
                    </div>
                    <!-- Student Table Area Start Here -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card dashboard-card-eleven">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Word Practice</h3>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-box-wrap">
                                        <form class="search-form-box">
                                            <div class="row gutters-8">
                                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                                </div>
                                                <div class="col-4-xxxl col-xl-4 col-lg-4 col-12 form-group">
                                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                                </div>
                                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                                </div>
                                                <div class="col-1-xxxl col-xl-2 col-lg-2 col-12 form-group">
                                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="table-responsive student-table-box">
                                            <table class="table bs-table table-striped table-bordered text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="text-left">Date</th>
                                                        <?php
                                                        date_default_timezone_set("Asia/Colombo");
                                                        ?>
                                                        <th><?php echo date("Y/m/d") . " - " . date("h:i"); ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="text-left">Student No</td>
                                                        <td><input type="number" placeholder="Student Index" class="form-control" id="index"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left">Status</td>
                                                        <td>
                                                            <select id="marks" class="form-control">
                                                                <option value="Very Good">Very Good</option>
                                                                <option value="Good">Good</option>
                                                                <option value="Week">Week</option>
                                                                <option value="Next Week">Next Week</option>
                                                                <option value="Not Answer">Not Answer</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo date("Y/m/d"); ?></td>
                                                        <!-- <td><i class="fas fa-check text-success"></i></td> -->
                                                        <td><button onclick="mark();" class="btn btn-primary">Submit</button></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                            <form action="process/send_email.php" method="POST">
                                                <input type="text" value="<?php echo $_SESSION["admin"]["usercode"] ?>" name="adminid">
                                                <button name="submit" value="SUBMIT" type="submit" class="btn btn-success">All Submit</button>
                                            </form>

                                            <a href="download.php?id=<?php echo $_SESSION["admin"]["usercode"] ?>">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Student Table Area End Here -->
                    <footer class="footer-wrap-layout1">
                        <div class="copyright">© Copyrights <a href="#">Diligent</a> 2022. All rights reserved. Designed by <a href="#">Diligent Software Solutions</a></div>
                    </footer>

                </div>
            </div>
            <!-- Page Area End Here -->
        </div>
        <!-- jquery-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Counterup Js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints Js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Scroll Up Js -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Data Table Js -->
        <script src="js/jquery.dataTables.min.js"></script>
        <!-- Chart Js -->
        <script src="js/Chart.min.js"></script>
        <!-- Custom Js -->
        <script src="js/main.js"></script>

        <script src="process/wordpractice_process.js"></script>

    </body>


    </html>

<?php
} else {
?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
?>