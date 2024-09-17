<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/site/css/signin.css">
    <?php require_once(__DIR__ .'/lib/autoload.php')?>
</head>

<?php 
// kiểm tra đã đăng nhập chưa : bằng session
// nếu đã đăng nhập thì chuyển về indexx
if(isset($_SESSION['user'])){
    header("location:./index.php");
}
else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["username"]) || empty($_POST['password'])){
            echo "<script>alert('KO dc de trong')</script>";
        }else{
            $username  = $_POST["username"];
            $password  = md5($_POST["password"]); // md5 mã hóa pass

            $sql = "select * from user where username = '$username' and password = '$password' ";

            $rs = $db->fetchOne($sql);
            if($rs > 0){
                echo "Đăng Nhập Thành Công";
                $_SESSION['user'] =  $rs['username']; // cấp session đăng nhập để kiểm tra
                header("location:./index.php");
            }else{
                echo "<script>alert('Đăng Nhập Thất Bại')</script>";
            }

        }
    }
}
?>

<body>
    <div id="htmlSigninForm" class="">
        <div class="full_bglightbox">
            <div class="content-user-login">
                <div class="page_lightbox ">
                    <div class="title_lightbox">
                        <label>Đăng nhập</label>
                        <a href="#no" class="close_icon">
                            <img src="./public/site/img/closeicon.png" alt="">
                        </a>
                    </div>
                    <div class="content-lightbox">
                        <div id="divFunLogin" class="fun_login">
                            <!-- method : post | gửi dữ liệu lên để xác nhận xem đăng nhập 
                                action : rỗng | tự gửi đến chính nó
                            -->
                            <form target="_frameLogin" id="_frmLogin" method="post" action="">
                                <div class="pdform">
                                    <div class="txt-required">Những thông tin có đánh dấu (<span style="color:#e74c3c">*</span>) là bắt buộc nhập.</div>
                                    <label class="lb">Tên đăng nhập<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input type="text" name="username" class="form-control" id="text">
                                    </div>
                                    <label class="lb">Mật khẩu<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input type="password" class="form-control" name="password" id="password"></div>
                                    <div class="box_more_option">
                                        <span class="box-checkbox"> 
                                                <input id="rememberpass" checked="checked" type="checkbox" name="isRemember">
                                                <label for="checkbox1" style="font-size:14px; width:90px;">Nhớ mật khẩu</label>
                                            </span>
                                        <a href="#no" class="lost_pw">Quên mật khẩu?</a>
                                    </div>
                                    <button type="submit" class="login_submit">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-right-login">
                        <div class="box-user-have-acc">
                            <span class="txt-alert-user">Bạn chưa có tài khoản NCT ID?</span>
                            <div class="box-show-btn"><a href="#no" title="Đăng ký ngay" class="btn-action-login-register">Đăng ký ngay</a></div>
                            <label class="title-or">HOẶC</label>
                        </div>
                        <div class="box_more_login">
                            <div class="login-social">
                                <a id="FbLogin" href="#no">
                                    <img src="./public/site/img/iconfb.png" style="width: 25px" alt="">
                                    <span class="name-social">Đăng nhập qua Facebook</span>
                                </a>
                            </div>
                            <div class="login-social">
                                <a id="GoogleLogin" href="#no">
                                    <img src="./public/site/img/icongg.jpg" style="width: 25px" alt="">
                                    <span class="name-social">Đăng nhập qua Google +</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>