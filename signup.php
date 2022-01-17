<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/site/css/signin.css">

</head>
<?php require_once(__DIR__ .'/lib/autoload.php')?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // upload file
        $data =
        [
            "username" => $_POST['username'] ? $_POST['username'] : '',
            "displayname" => $_POST['username'] ? $_POST['username'] : '',
            "password" => md5($_POST['password']),
            "email" => $_POST['email'] ? $_POST['email'] : '',
        ];
        $insert = $db->insert('user', $data);
        header('Location: ./index.php');
    }

?>
<body>
    <div id="htmlRegisterForm" class="">
        <div class="full_bglightbox">
            <div class="content-user-login">
                <div class="page_lightbox ">
                    <div class="title_lightbox">
                        <label>Đăng Ký</label>
                        <a href="#no" class="close_icon">
                            <img src="./public/site/img/closeicon.png" alt="">
                        </a>
                    </div>
                    <div class="content-lightbox">
                        <div id="divFunLogin" class="fun_login">
                            <form target="_frameLogin" id="_frmLogin" method="post" action="">
                                <div class="pdform">
                                    <div class="txt-required">Những thông tin có đánh dấu (<span style="color:#e74c3c">*</span>) là bắt buộc nhập.</div>
                                    <label class="lb">Tên đăng nhập<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input class="blk-note" name="username" id="notetext">
                                    </div>
                                    <label class="lb">Mật khẩu<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input class="blk-note" name="password" id="notepassword">
                                    </div>
                                    <label class="lb">Nhập lại mật khẩu<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input class="blk-note" id="noterepassword">
                                    </div>
                                    <label class="lb">Email<span class="required" style="color:#e74c3c">*</span></label>
                                    <div class="row">
                                        <input class="blk-note" name="email" id="noteEmail">
                                    </div>
                                    
                                    <button class="login_submit" type="submit">Đăng Ký</button>
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
</body>

</html>