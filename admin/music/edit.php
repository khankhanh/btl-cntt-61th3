<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `music` WHERE `id` = '$id' ;";
    $music = $db->fetchOne($sql);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $check1 = false;
    $check2 = false;
    if(isset($_FILES['file1'])){
        $errors = array();
        $file_name1 = $_FILES['file1']['name'];
        $file_size1 = $_FILES['file1']['size'];
        $file_tmp1 = $_FILES['file1']['tmp_name'];
        $file_type1 = $_FILES['file1']['type'];
        $file_ext1 = strtolower(end(explode('.',$_FILES['file1']['name'])));
        $expensions1 = array("jpeg","jpg","png");
        
        if(in_array($file_ext1, $expensions1)=== false){
           $errors[] = "Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn MP3.";
        }
                    
        if(empty($errors) == true){
           move_uploaded_file($file_tmp1, '../../public/img/mp3/'.$file_name1);
           $check1 = true;
        }
    }

    if(isset($_FILES['file2'])){
        $errors= array();
        $file_name2 = $_FILES['file2']['name'];
        $file_size2 = $_FILES['file2']['size'];
        $file_tmp2 = $_FILES['file2']['tmp_name'];
        $file_type2 = $_FILES['file2']['type'];
        $file_ext2 = strtolower(end(explode('.',$_FILES['file2']['name'])));
        $expensions2 = array("mp3");
        
        if(in_array($file_ext2, $expensions2)=== false){
           $errors[]="Không chấp nhận định dạng file có đuôi này, mời bạn chọn MP3.";
        }
                    
        if(empty($errors)==true){
           move_uploaded_file($file_tmp2, '../../public/mp3/'.$file_name2);
           $check2 = true;
        }
    }

    $data =
            [
                "name" => $_POST['name'] ? $_POST['name'] : '',
                "slug" => slugify($_POST['name']),
                "lyric" => $_POST['lyric'] ? $_POST['lyric'] : '',
                "views" => $_POST['views'] ? $_POST['views'] : '',
                "author" => $_POST['author'] ? $_POST['author'] : '',
                "country_id" => $_POST['country_id'] ? $_POST['country_id'] : '',
                "cat_chill_id" => $_POST['cat_chill_id'] ? $_POST['cat_chill_id'] : '',
            ];
    if($check1){
        $data["img"] = "public/img/mp3/".$file_name1;
    }
    if($check2){
        $data["mp3"] = "public/mp3/".$file_name2;
    }
    $update = $db->update('music', $data, array('id' => $id));
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
                            <h4 class="card-title">Sửa Nhạc</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" required name="name" value="<?php echo $music['name'] ?>"  class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>lyric</label>
                                        <textarea name="lyric" id="" cols="30" class="form-control" rows="10"><?php echo $music['lyric'] ?></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>views</label>
                                            <input type="number" name="views" value="<?php echo $music['views'] ?>" required class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tác giả</label>
                                            <input type="text" name="author" value="<?php echo $music['author'] ?>" required class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>MP3</label>
                                            <div style="height: 100px;" >
                                                <audio controls>
                                                    <source src="<?php echo $base_url.$music['mp3'] ?>" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                            
                                            <input type="file" name="file2" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Ảnh</label>
                                            <div>
                                                <img width="100px" height="100px" src="<?php echo $base_url.$music['img'] ?>" alt="">
                                            </div>
                                            <input type="file"  name="file1" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Khu Vực</label>
                                            <input type="number"  name="country_id" value="<?php echo $music['country_id'] ?>" required class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Danh Mục</label>
                                            <input type="number"  name="cat_chill_id" value="<?php echo $music['cat_chill_id'] ?>" required class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Tạo Bài Hát</button>
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