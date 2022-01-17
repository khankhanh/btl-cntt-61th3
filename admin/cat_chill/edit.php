<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cat_chill WHERE id=$id ";
    $cat_chill = $db->fetchOne($sql);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $data =
        [
            "name" => $_POST['name'] ? $_POST['name'] : '',
            "slug" => slugify($_POST['name']),
            "detail" => $_POST['detail'] ? $_POST['detail'] : '',
            "description" => $_POST['description'] ? $_POST['description'] : '',
            'cat_id' => $_POST['cat_id'] ? $_POST['cat_id'] : '',
            'country_id' => $_POST['country_id'] ? $_POST['country_id'] : '',
            'state' => $_POST['state'] ? $_POST['state'] : '',
        ];
    
    $update = $db->update('cat_chill', $data, array('id' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sửa cat_chill</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" required value="<?php echo $cat_chill['name'] ?>" name="name" class="form-control" placeholder="name">
                                    </div>

                                    <div class="form-group">
                                        <label>Tiêu Đề</label>
                                        <input type="text" name="detail" required value="<?php echo $cat_chill['detail'] ?>" class="form-control" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô Tả</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="10" cols="80"><?php echo $cat_chill['description'] ?></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Danh Mục</label>
                                            <input type="number" required value="<?php echo $cat_chill['cat_id'] ?>" name="cat_id" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Khu Vực</label>
                                            <input type="number" required value="<?php echo $cat_chill['country_id'] ?>" name="country_id" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng Thái</label>
                                        <input type="number" name="state" required value="<?php echo $cat_chill['state'] ?>" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Sửa cat_chill</button>
                                </form>
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