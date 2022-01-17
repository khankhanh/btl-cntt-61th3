<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // 1
    $sql_album  = "SELECT COUNT(*) as 'count' FROM `album` WHERE 1;";
    $sql_music  = "SELECT COUNT(*) as 'count' FROM `music` WHERE 1;";
    $sql_cat_chill  = "SELECT COUNT(*) as 'count' FROM `cat_chill`";
    $sql_user  = "SELECT COUNT(*) as 'count' FROM `user` WHERE 1;";
    

    $album = $db->fetchOne($sql_album);
    $music = $db->fetchOne($sql_music);
    $cat_chill = $db->fetchOne($sql_cat_chill);
    $user = $db->fetchOne($sql_user);

    //2 list 10 bài nhạc nhiều view nhất
    $sql_list_music  = "SELECT * FROM `music` LIMIT 10";
    $music_Top = $db->fetchAll($sql_list_music);
    // account

    $sql_acc = "SELECT * FROM `account` LIMIT 4";
    $account = $db->fetchAll($sql_acc);
    

}


?>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require_once(__DIR__ . '/layout/nav_header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once(__DIR__ . '/layout/side_bar.php') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Album</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $album['count'] ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Bài Hát</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $music['count'] ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Danh Mục </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $cat_chill['count'] ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Người Dùng</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $user['count'] ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <h4>Top 10 Bài Hát Nhiều View nhất</h4>
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Ảnh</th>
                                                    <th>Tên Bài</th>
                                                    <th>Tác Giả</th>
                                                    <th>Views</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($music_Top as $item) : ?>
                                                <tr>
                                                    <td><?php echo $item['id'] ?></td>
                                                    <td> <img width="50px" height="50px" src="<?php echo $base_url.$item['img'] ?>" alt=""> </td>
                                                    <td><?php echo $item['name'] ?></td>
                                                    <td><?php echo $item['author'] ?></td>
                                                    <td><?php echo $item['views'] ?></td>
                                                    
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <?php foreach($account as $item) :?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img width="100px" height = "100px" src="<?php echo $base_url.$item['img'] ?>" class="rounded-circle" alt="">
                                    <h5 class="mt-3 mb-1"><?php echo $item['username'] ?></h5>
                                    <p class="m-0"><?php echo $item['email'] ?></p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
                

                <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-facebook">
                                    <span class="s-icon"><i class="fa fa-facebook"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-googleplus">
                                    <span class="s-icon"><i class="fa fa-instagram"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="social-graph-wrapper widget-twitter">
                                    <span class="s-icon"><i class="fa fa-twitter"></i></span>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">89k</h4>
                                            <p class="m-0">Friends</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                            <h4 class="m-1">119k</h4>
                                            <p class="m-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once(__DIR__ . '/layout/script.php') ?>

</body>

<!-- Chartjs -->
<script src=" <?php echo $base_url ?>public/admin/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src=" <?php echo $base_url ?>public/admin/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src=" <?php echo $base_url ?>public/admin/plugins/d3v3/index.js"></script>
<script src=" <?php echo $base_url ?>public/admin/plugins/topojson/topojson.min.js"></script>
<script src=" <?php echo $base_url ?>public/admin/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src=" <?php echo $base_url ?>public/admin/plugins/raphael/raphael.min.js"></script>
<script src=" <?php echo $base_url ?>public/admin/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src=" <?php echo $base_url ?>public/admin/plugins/moment/moment.min.js"></script>
<script src=" <?php echo $base_url ?>public/admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src=" <?php echo $base_url ?>public/admin/plugins/chartist/js/chartist.min.js"></script>
<script src=" <?php echo $base_url ?>public/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



</html>