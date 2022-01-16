<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //
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
    $insert = $db->insert('cat_chill', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else {
        $_SESSION['error'] = "không thành công";
        header('Location: ./add.php');
    }
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
                            <h4 class="card-title">Thêm Category</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" required name="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Tiêu Đề</label>
                                        <input type="text" name="detail" required class="form-control" placeholder="1234 Main St">
                                    </div>

                                    <div class="form-group">
                                        <label>Mô Tả</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="10" cols="80"></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Danh Mục</label>
                                            <input type="number" required name="cat_id" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Khu Vực</label>
                                            <input type="number" required name="country_id" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng Thái</label>
                                        <input type="number" name="state" required class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-dark">Tạo Category</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
       
        
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