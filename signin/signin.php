<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div id="htmlSigninForm" class="">
        <div class="full_bglightbox" >
            <div class="content-user-login">
                <div class="page_lightbox ">
                    <div class="title_lightbox">
                        <label>Đăng nhập</label>
                        <a href="#no" class="close_icon">
                            <img src="images/closeicon.png" alt="">
                        </a>
                    </div>
                    <div class="content-lightbox">
                        <div id="divFunLogin" class="fun_login">
                            <form target="_frameLogin" id="_frmLogin" method="post" action="#no"><div class="pdform"  >    
                                <div class="txt-required">Những thông tin có đánh dấu (<span style="color:#e74c3c">*</span>) là bắt buộc nhập.</div>  
                                <label class="lb">Tên đăng nhập<span class="required" style="color:#e74c3c">*</span></label>
                                <div class="row">
                                <input type="text" name="txtUser" class="form-control" id="text" ">  
                                </div>
                                    <label class="lb">Mật khẩu<span class="required" style="color:#e74c3c">*</span></label>
                                <div class="row">
                                        <input type="password" class="form-control" name="password" id="password" ></div> 
                                        <div class="box_more_option">
                                            <span class="box-checkbox"> 
                                                <input id="rememberpass" checked="checked" type="checkbox" name="isRemember">
                                                <label for="checkbox1" style="font-size:14px; width:90px;">Nhớ mật khẩu</label>
                                            </span>        
                                        <a href="#no" class="lost_pw">Quên mật khẩu?</a>   
                                </div>
                                    <a class="login_submit" name = "btnSignIn" title="Đăng nhập"> Đăng nhập </a>
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
                                    <img src="images/iconfb.png" style = "width: 25px" alt="">
                                    <span class="name-social">Đăng nhập qua Facebook</span>
                                </a>
                            </div> 
                            <div class="login-social">                  
                                <a  id="GoogleLogin" href="#no">
                                    <img src="images/icongg.jpg" style = "width: 25px" alt="">
                                <span class="name-social">Đăng nhập qua Google +</span></a>
                            </div>
                        </div>  
                </div>           
            </div>
        </div>
    </div>
</body>
</html>

