<!DOCTYPE html>
<html>

<head>
    <?php require_once(__DIR__.'/../lib/autoload.php') ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <title>Nhạc của tui - Nghe nhạc mới hot</title>
    <link rel="icon" type="image/png" href="https://stc-id.nixcdn.com/v11/images/favicon_64x64.png">
    <link rel="stylesheet" type="text/css" href="./public/site/css/index.css">

    <script src="https://kit.fontawesome.com/d04809f9cf.js" crossorigin="anonymous"></script>
    <style>
        .box_login_user{
            height: 45px;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
        }
        .box_user_profile{
            position: relative;
            height: 56px;
            display: flex;
            align-items: center;
        }
        .box_user_profile a{
            color: rgba(0,0,0,0.88);
            text-decoration: none;
            transition: all 0.2s linear;
        }
        .userprofile-items{
            margin-left: 16px;
            z-index: 1001;
            display: flex;
            width: 160px;
            height: 41px;
            background-color: transparent;
            position: relative;
        }
        .userprofile-avatar{
            position: relative;
            margin-left: 4px;
            width: 40px;
            border-radius: 50px;
        }
        .userprofile-avatar img{
            max-width: 100%;
            vertical-align: middle;
        }
        .userprofile-card-avatar{

        }
        .userprofile-card-info-content{
        }
        .username-card-info {
            width: 90px;
            font-size: 14px;
            color: #000;
            font-weight: bold;
            display: block;
            margin:8px 0 0 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .coin-card-info {
            display: flex;
            align-items: center;
        }
        .ic-coin {
            width: 14px;
            height: 14px;
            margin-right: 4px;
            margin-bottom: 15px;
        }
        .total-coin {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 12px;
            color: #2daaed;
            font-weight: 600;
        }
        .icon-arrow-login {
            position: absolute;
            right: 16px;
            width: 10px;
            margin-top: 15px;
        }
        .box_show_header{
            position: absolute;
            z-index: 2001;
            transition: opacity 0.2s linear, visibility 0.2s linear;
            margin: 0;
            width: 184px;
            background: #ffffff;
            border: 1px solid #d9d9d9;
            margin-top: 220px;
            display: none;
        }
        .box_show_header ul{
            margin: 0 0 0 16px;
            padding: 0px;
        }
        .box_show_header li{
            font-size: 14px;
            width: calc(100% - 16px);
            color: #222222;
            list-style: none;
            float: left;
            border-top: #f3f3f3 solid 1px;
        }
        .box_show_header li a {
            float: left;
            display: block;
            width: 200px;
            padding: 5px 5px 6px 0px;
            font-size: 15px;
            text-align: left;
        }
        .box_user_profile:hover .box_show_header{
            display: block;
        }
        .box_show_header li:hover a{
            color: #2daaed;
        }
        
        .main-container {
            display: flex;
        }
        
        .right-sidebar {
            padding-left: 40px;
        }
    </style>
</head>
<?php
    $sql_cat = "SELECT * FROM `category` WHERE 1";
    $category = $db->fetchAll($sql_cat);
    $sql_cat_chill = "SELECT * FROM `cat_chill`";
    $cat_chill = $db->fetchAll($sql_cat_chill);
    $sql_country = "SELECT * FROM `country`";
    $country = $db->fetchAll($sql_country);
    
?>
<body>
    <div class="right_support_online" id="right_support_online">
        <!--<div class="contact_nct hover">
            <a id="btnFeedBack" rel="nofollow" href="javascript:;" >&nbsp;</a>     
            <div class="myTip trans" style="font-size: 12px !important; display: none;">Góp ý</div>
        </div>-->
        <!--<div class="clear"></div>-->
        <!--<div class="offads hover">
            <a id="_aOnOffAdv" rel="nofollow" href="javascript:;" onclick="NCTAdv.annouceOffAdv();" title="Tắt Quảng Cáo">&nbsp;</a>     
            <div id="_divOnOffAdv" class="myTip trans" style="top: 40px; font-size: 12px !important; display: none;">Tắt Quảng Cáo</div>
        </div>-->


    </div>

    
    <div class="header">
        <div class="container">
            <div class="menu-bar">
                <div class="menu left-menu">
                    <a class="nct-image-link" href="#no">
                        <img src="./public/site/img/imgheader/nct_image.png" class="nct-image">
                    </a>

                    <div class="submenu word-0">
                        <div class="title-submenu-box">
                            <a class="newver-image-link" href="#no">
                                <img src="./public/site/img/imgheader/newver.png" class="newver-image">
                            </a>
                        </div>
                    </div>
                    <?php foreach($category as $item) : ?>
                        <?php if($item['slug'] == 'top-100') :?>
                            <div class="submenu submenu-1">
                                <div class="title-submenu-box">
                                    <a class="title-submenu" href="<?php echo str_replace("-", "",$item['slug']) ?>.php"><?php echo $item['name'] ?></a>
                                </div>
                                <div class="hidden-menu">
                                    <ul class="list list-1">
                                        <li class="un-bold"><a href="#no" title="Việt Nam">Việt Nam</a></li>
                                        <li><a href="#no" title="Âu Mỹ">Âu Mỹ</a></li>
                                        <li><a href="#no" title="Châu Á">Châu Á</a></li>
                                        <li><a href="#no" title="Không Lời">Không Lời</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="submenu submenu-1">
                                <div class="title-submenu-box">
                                    <a class="title-submenu" href="<?php echo str_replace("-", "",$item['slug']) ?>.php"><?php echo $item['name'] ?></a>
                                </div>
                                <div class="hidden-menu"> 
                                    <?php foreach($country as $item_country) : ?>
                                    <ul class="list list-1">
                                        <?php foreach($cat_chill as $item_cat_chill) : ?>
                                            <?php if($item_cat_chill['country_id'] == $item_country['id']) :?>
                                            <li><a href="#no" title="VIỆT NAM"><?php echo $item_cat_chill['name'] ?></a></li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </ul>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>

                    

                    <div class="submenu submenu-8">
                        <div class="title-submenu-box">
                            <a class="title-submenu" href="#no">
                                <i class="fas fa-ellipsis-v fa-rotate-90"></i>
                            </a>
                        </div>
                        <div class="hidden-menu">
                            <ul class="list list-1">
                                <li class="un-bold"><a href="#no" title="Khám Phá">Khám Phá</a></li>
                                <li><a href="#no" title="Nghệ Sĩ">Nghệ Sĩ</a></li>
                                <li><a href="#no" title="Tin Tức Âm Nhạc">Tin Tức Âm Nhạc</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="menu center-menu">
                    <div class="menu menu-search-box">
                        <div class="p-1 bg-light ">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button id="button-addon2" type="submit" class="btn btn-link " style="color: rgb(182, 180, 180);"><i class="fa fa-search"></i></button>
                                </div>
                                <input type="search" placeholder="Tìm kiếm" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                            </div>
                        </div>
                    </div>
                    <!-- menu-search-box -->
                    <div class="button-upgrade-item">
                        <a class="ic-image-link" href="#no">
                            <img src="./public/site/img/imgheader/ic_store.png" class="ic_store-image">
                        </a>
                    </div>
                    <div class="button-upload-item">
                        <a class="ic-image-link" href="#no">
                            <img src="./public/site/img/imgheader/ic_upload.png" class="ic_upload-image">
                        </a>
                    </div>
                    <?php if(isset($_SESSION['user'])):?>
                        
                        <div class="box_login_user">
                            <div class="box_user_profile">
                                <a href="#no">
                                    <div class="userprofile-items" style="cursor: pointer;">
                                        <div class="userprofile-avatar">
                                            <img class="userprofile-card-avatar" src="imgheader/avatar_user.jpg" alt="">

                                        </div>
                                        <div class="userprofile-card-info-content">
                                            <h3 class="username-card-info"><?php echo $_SESSION['user'] ?></h3>
                                            <div class="coin-card-info">
                                                <img class="ic-coin" src="imgheader/coin.png" alt="">
                                                <p id="totalCoin" class="total-coin">0</p>
                                            </div>
                                        </div>
                                        <img class="icon-arrow-login" src="imgheader/arrow.png" alt="">
                                    </div>
                                </a>
                                <div id="user_control" class="box_show_header">
                                    <ul>
                                        <li><a rel="nofollow" href="#no" title="Trang cá nhân">Trang cá nhân</a></li>
                                        <li><a rel="nofollow" href="#no" title="Nhạc của tui">Nhạc của tui</a></li>

                                        <li><a rel="nofollow" href="#no" title="Quản lý tài khoản">Tài khoản </a></li>


                                        <li class="vipnct"><a href="#no" title="Lịch sử nghe nhạc">Lịch sử</a></li>

                                        <li><a href="logout.php" title="Thoát">Thoát</a></li>


                                    </ul>
                                </div>
                            </div>


                        </div>

                    <?php else : ?>

                        <div class="button-signin-item">
                            <a class="signin-link" href="signin.php"> Đăng nhập</a>
                        </div>
                        <div class="button-signup-item">
                            <a href="signup.php" class="signup-link">Đăng ký </a>
                        </div>
                        <div class="hidden-menu hidden-menu-icon">
                            <ul class="list-icon">
                                <li class="un-bold"><a href="#no">Giới thiệu</a></li>
                                <li><a href="#no">Mua NhacCuaTui VIP</a></li>
                                <li><a href="#no">Thông tin thanh toán</a></li>
                                <li class="un-margin-bottom"><a href="#no">Tin tức VIP</a></li>
                            </ul>
                        </div>
                    <?php endif ?>
                </div>
                <!-- center-menu -->
            </div>
            <!-- menu bar-->
        </div>
        <hr style="margin-top: 10px;margin-bottom: 0px;">
    </div>