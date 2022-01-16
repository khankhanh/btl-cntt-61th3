<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT * FROM `account` WHERE `username` = '$username' ;";
    $account = $db->fetchOne($sql);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $check = false;
    if (isset($_FILES['file'])) {
        $errors = array();
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.";
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, '../../public/img/account/' . $file_name);
            $check = true;
        }
    }

    //


    $data =
        [
            // "userName" => $_POST['userName'] ? $_POST['userName'] : '',
            // "password" => md5($_POST['password']),
            "displayname" => $_POST['displayname'] ? $_POST['displayname'] : '',
            "email" => $_POST['email'] ? $_POST['email'] : '',
            "role" => $_POST['role'] ? $_POST['role'] : '',
        ];
    if($check){
        $data["img"] = "public/img/account/" . $file_name;
    }
    $update = $db->update('account', $data, array('username' => $username));
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
                            <h4 class="card-title">Sửa Account</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên hiển thị</label>
                                            <input type="text" name="displayname" required class="form-control" placeholder="userName" value="<?php echo $account['displayname'] ?>">
                                        </div>
                                        

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <img src="<?php echo $base_url . $account['img'] ?>" width="100" height="100" alt="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="file" name="file" class="form-control-file">
                                        </div>
                                        

                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" required class="form-control" value="<?php echo $account['email'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Role</label>
                                            <select id="inputState" name="role" required class="form-control">
                                                <?php if ($account['role'] == 1) :  ?>
                                                    <option selected value="1">Admin</option>
                                                    <option value="0">Nhân Viên</option>
                                                <?php else : ?>
                                                    <option value="1">Admin</option>
                                                    <option selected value="0">Nhân Viên</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>

                                    </div>
                                    

                                    <button type="submit" class="btn btn-dark">Sửa Tài Khoản</button>
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