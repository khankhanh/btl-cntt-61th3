<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
    $sql = "select * from music";
    $music = $db->fetchAll($sql);
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
        <?php require_once(__DIR__ . '/../layout/nav_header.php') ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once(__DIR__ . '/../layout/side_bar.php') ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="./add.php">Thêm Bài Hát</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Tên Hiển Thị</th>
                                                <th scope="col">slug</th>
                                                <th scope="col">mp3</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">lyric</th>
                                                <th scope="col">views</th>
                                                <th scope="col">Tác giả</th>
                                                <th scope="col">Khu vực</th>
                                                <th scope="col">Loại</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($music as $item) : ?>
                                            <tr>
                                                <td><?php echo $item['id'] ?></td>
                                                <td><?php echo $item['name'] ?></td>
                                                <td><?php echo $item['slug'] ?></td>
                                                <td>
                                                    <audio controls>
                                                        <source src="<?php echo $base_url.$item['mp3'] ?>" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </td>
                                                <td><img width="100" height="100" src="<?php echo $base_url.$item['img'] ?>" alt=""></td>
                                                <td><?php echo $item['lyric'] ?></td>
                                                <td><?php echo $item['views'] ?></td>
                                                <td><?php echo $item['author'] ?></td>
                                                <td><?php echo $item['country_id'] ?></td>
                                                <td><?php echo $item['cat_chill_id'] ?></td>
                                                
                                                <td>
                                                    <span>
                                                        <a href="./edit.php?id=<?php echo $item['id'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['id'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </a>
                                                    </span>
                                                </td>
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
    <?php require_once(__DIR__ . '/../layout/script.php') ?>

</body>

</html>