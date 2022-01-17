<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://stc-id.nixcdn.com/v11/images/favicon_64x64.png">
    <title>Playlist HOT | Playlist Hay Nhất, Chất Lượng Cao</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/d04809f9cf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/site/css/phatnhac.css">
</head>
<?php require_once(__DIR__.'/lib/autoload.php') ?>
<?php 

    $sql_cat = "SELECT * FROM `category` WHERE 1";
    $category = $db->fetchAll($sql_cat);
    $sql_cat_chill = "SELECT * FROM `cat_chill`";
    $cat_chill = $db->fetchAll($sql_cat_chill);
    $sql_country = "SELECT * FROM `country`";
    $country = $db->fetchAll($sql_country);
    
    $sql_album = "SELECT * FROM `album` LIMIT 5";
    $album = $db->fetchAll($sql_album);

    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $sql = "SELECT * FROM `music` where slug = '$name'";
        $music = $db->fetchOne($sql);
    }

?>
<body>

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



    <div class="main-container">
        <div class="left-sidebar">

            <div class="topbreadCrumb" xmlns:v="http://rdf.data-vocabulary.org/">
                <span><a class="listen_music" href="http://www.nhaccuatui.com/"  alt="nghe nhac" title="nghe nhạc">Nghe nhạc> </a></span>
                <span><a class="listen_music"  alt="Playlist nhac tre" title="Playlist Nhạc Trẻ"  href="https://www.nhaccuatui.com/playlist/nhac-tre-moi.html">Playlist Nhạc Trẻ> </a></span>
                <span><a class="listen_music" href="https://www.nhaccuatui.com/nghe-si-va.html" alt="v.a" >V.A</a></span>
            </div>
            <div class="name-music" style="padding-left: 150px;">
                <h1 style="font-size: 22px;"><?php echo $music['name'] ?>- <a style="color: #000; text-decoration: none;" href="" class="name_singer"><?php echo $music['author'] ?></a> </h1>
            </div>

            <div class="box__music__player">
                <audio id="audio" src="<?php echo $base_url.$music['mp3'] ?>" >
                    
                </audio>
                <div class="player-panel">
                  <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">
                </div>
                <div class="player_control">
                    <div class="btn__left">
                        <div class="btn btn-prev">
                        <i class="fas fa-step-backward"></i>
                        </div>
                        <div class="btn btn-toggle-play">
                        <i class="fas fa-pause icon-pause" onclick="document.getElementById('audio').pause()"></i>
                        <i style="margin-left : 10px" class="fas fa-play icon-play" onclick="document.getElementById('audio').play()"></i>
                        </div>
                        <div class="btn btn-next">
                        <i class="fas fa-step-forward"></i>
                        </div>
                        <div class="Start-time">
                            00:00
                        </div>
                        <div class="forward-slash">
                            /
                        </div>
                        <div class="End-time">
                            00:00
                        </div>
                    </div>
                    <div class="btn__center">
                         <h2></h2>
                         <p></p>
                    </div>           
                    <div class="btn__right">
                        <div class="btn btn-repeat">
                        <i class="fas fa-redo" title="Lặp 1 bài"></i>
                        </div>
                        <div class="btn btn-random">
                        <i class="fas fa-random" title="Ngẫu Nhiên"></i>
                        </div>
                        <div class="btn btn-volume">
                            <span class="material-icons-outlined">
                                volume_up
                            </span>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="box-music">
                <div class="user_upload">
                    <img src="https://avatar-ex-swe.nixcdn.com/mv/2021/04/07/d/f/e/8/1617784916622_536.jpg" alt="" />
                    <div class="user-name">
                        <span>Tạo bởi : </span>
                        <span>Trần Khánh Linh</span>
                    </div>
                </div>
                <div class="music-list">
                    <div class="music-item">
                        <i class="bi bi-suit-heart"></i>
                        <span>Thêm Vào</span>
                    </div>
                    <div class="music-item">
                        <i class="bi bi-download"></i>
                        <span>Tải playlist</span>
                    </div>
                    <div class="music-item">
                        <i class="bi bi-share-fill"></i>
                        <span>Chia sẻ</span>
                    </div>
                    <div class="submenu submenu-8">
                        <div class="title-submenu-box">
                            <a class="title-submenu" href="#no">
                                <i style="margin-top: 5px;" class="fas fa-ellipsis-v fa-rotate-90"></i>
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
            </div>
            <form class="form-tag-buttons" action="">
                <div class="nowplaying_playlist_tag_box">
                    <span><span class="material-icons">
                            local_offer
                            </span>Tags:</span>
                    <div class="box_list_tags" id="box_list_tags" style="height: 23px;">

                        <button type="button" class="btn btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/tinh-yeu">Tình Yêu</a></button>
                        <button type="button" class="btn  btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/mua-xuan">Mùa Xuân</a></button>
                        <button type="button" class="btn  btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/buoi-sang">Buổi Sáng</a></button>
                        <button type="button" class="btn btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/ngot-ngao">Ngọt Ngào</a></button>
                        <button type="button" class="btn btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/vui-ve">Vui Vẻ</a></button>
                        <button type="button" class="btn btn-sm"><a href="https://www.nhaccuatui.com/playlist/tags/hy-vong">Hy Vọng</a></button>
                        <button type="button" class="btn btn-sm ">Xem them</a></button>

                    </div>
                </div>
            </form>

            <!--playlist  |  album-->

            <div class="list-album-playlist">
                <div class="title-top-box">
                    <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">PLAYLIST | ALBUM</a>
                    <i style="color:#2DAAED;" class="fas fa-chevron-right angle-right angle-right-albumHot"></i>
                </div>
                <ul style="list-style-type:none;" class="list-album-content-box">
                <?php foreach($album as $item) :?>
                    <li class="list-album-content">
                        <a href="#no">
                            <div class="list-album-image Spirited-away" style="background-image: url('<?php echo $base_url.$item['img']?>')">
                                <div class="overlay-hover">
                                    <i style="padding: 50px 0px 0px 50px ;" class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                </div>
                            </div>
                        </a>

                        <!-- 	reuse top-100-name class in top-100 component -->
                        <a class="top-album-playlist" href="#no"><?php echo $item['name']?></a>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>

        </div>

        <div style="margin: 50px 200px 1000px 0px," class="right-sidebar">
            <div class="top-box-music">
                <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">NGHE TIẾP</a>
                <i style="color:#2DAAED;" class="fas fa-chevron-right angle-right angle-right-albumHot"></i>
                <div class="box-music-icon">
                    <a style="color: rgb(143, 132, 132); text-decoration: none; font-size: 15px;" href="">AUTOPLAY</a>
                    <i style="font-size: 15px;" class="bi bi-info-circle"></i>
                </div>
            </div>
            <ul class="list-album-content-box list-song-content-box">
                <li class="list-album-content-list-song">
                    <div class="playlist-song">
                        <a href="#no">
                            <div class="list-song-adele"><img style="height: 70px;" src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/3/8/e/2/38e293510189e91f96109b9150c1a1d8.jpg" alt=""></div>
                        </a>
                        <div class="song-infor-list-song">
                            <div class="song-infor-list-img">
                                <a style="text-decoration: none;" href="#no">
                                    <p style="margin: 10px 0px 0px 5px; color: black;list-style-type: none;">Easy On Me</p>
                                </a>
                                <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;list-style-type: none;" href="#no" class="list-song-singer">
                                Adele
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="playlist-song">
                        <a href="#no">
                            <div class="list-song-rum-daa"><img style="height: 70px;" src="https://avatar-ex-swe.nixcdn.com/song/2021/01/06/1/6/a/7/1609922114277_500.jpg" alt=""></div>
                        </a>
                        <div class="song-infor-list-song">
                            <div class="song-infor-list-img">
                                <a style="text-decoration: none;" href="#no">
                                    <p style="margin: 10px 0px 0px 5px; color: black;list-style-type: none;">Người Em Cố Đô</p>
                                </a>
                                <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;list-style-type: none;" href="#no" class="list-song-singer">
                                Rum , Đaa
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="playlist-song">
                        <a href="#no">
                            <div class="list-song-rum-daa"><img style="height: 70px;" src="https://avatar-ex-swe.nixcdn.com/song/2021/08/30/2/1/a/e/1630316309035.jpg" alt=""></div>
                        </a>
                        <div class="song-infor-list-song">
                            <div class="song-infor-list-img">
                                <a style="text-decoration: none;" href="#no">
                                    <p style="margin: 10px 0px 0px 5px; color: black;list-style-type: none;">Ái Nộ</p>
                                </a>
                                <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;list-style-type: none;" href="#no" class="list-song-singer">
                                Masew,Khôi Vũ
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>



    </div>
    </div>
    <div class="footer">
        <div class="list-cooperation">
            <div class="list-cooperation-box">
                <p class="titile-list-cooperation">Liên kết và hợp tác</p>
                <div class="list-cooperation-logo-box">
                    <a href="#no" class="list-cooperation-logo list-cooperation-logo-1">
                        <img src="./public/site/img/image/imgfooter/yinyang.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/image/imgfooter/sony.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/image/imgfooter/believe.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/image/imgfooter/YGPlus.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo-5">
                        <img src="./public/site/img/image/imgfooter/universal.png">
                    </a>


                    <div class="button left-button">
                        <a href="#no">
                            <i class="fas fa-chevron-left fa-2x list-cooperation-icon"></i>
                        </a>
                    </div>


                    <div class="button right-button">
                        <a href="#no">
                            <i class="fas fa-chevron-right fa-2x list-cooperation-icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-footer">
            <div class="support-footer-box">
                <div class="navigation navigation-1">
                    <p class="navigation-title">Hỗ Trợ</p>

                    <ul class="navigation-list-box navigation-list-box-1">
                        <li>
                            <a href="#no">Trợ giúp</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">Chính sách bảo mật</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-2">
                        <li>
                            <a href="#no">Sơ đồ</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">Chính sách SHTT</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-3">
                        <li>
                            <a href="#no">NCCI</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">Thoả thuận sử dụng</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-4">
                        <li>
                            <a href="#no">Liên hệ quảng cáo</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                </div>

                <div class="navigation navigation-2">
                    <p class="navigation-title">Sản phẩm khác</p>

                    <ul class="navigation-list-box navigation-list-box-1">
                        <li>
                            <a href="#no">Mobile </a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">Dịch vụ 3G</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-2">
                        <li>
                            <a href="#no">Mobile Web</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">NCT Corp</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-3">
                        <li>
                            <a href="#no">Smart TV</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                        <li>
                            <a href="#no">Tuyển Dụng</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                    <ul class="navigation-list-box navigation-list-box-4">
                        <li>
                            <a href="#no">Desktop</a>
                            <i class="fas fa-chevron-right fa-1x navigation-icon"></i>
                        </li>
                    </ul>
                </div>


                <div class="hot-keyword">
                    <div class="hot-keyword-title">
                        Top từ khoá
                    </div>
                    <p class="keywords-box">
                        <a href="#no">Top Trending Music 2021,</a>
                        <a href="#no">Nhạc Mới Phát Hành 2021,</a>
                        <a href="#no">Âm Nhạc Chữa Lành Tâm Hồn,</a>
                        <a href="#no">An Early Christmas</a>
                    </p>
                    <div class=" hot-keyword-title-2">
                        Kết Nối Với Chúng Tôi
                    </div>
                    <div class="logo-in-keyword-box">
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_ic_facebook.png">
                        </a>
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_ic_instagram.png">
                        </a>
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_ic_tiktok.png">
                        </a>
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_ic_zalo.png">
                        </a>
                    </div>

                    <div class="logo-in-keyword-box logo-in-keyword-box-2">
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_google_play.png">
                        </a>
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_app_store.png">
                        </a>
                        <a href="#no">
                            <img src="https://stc-id.nixcdn.com/v11/images/footer/t_appgallery.png">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="company-info">
            <div class="company-info-box">
                <a href="#no" class="nct-company-logo"></a>

                <div class="company-info-detail">
                    <p class="detail-name">công ty cổ phần n c t</p>
                    <li class="detail-company">Chủ sở hữu website: <b>Ông Nhan Thế Luân</b></li>
                    <li class="detail-company">Giấy phép MXH số 499/GP-BTTTT do Bộ Thông Tin và Truyền thông cấp ngày 28/09/2015.</li>
                    <li class="detail-company">Giấy Chứng nhận Đăng ký Kinh doanh số 0305535715 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp ngày 01/03/2008.</li>
                </div>

                <a href="#no" class="bo-cong-thuong-logo"></a>
                <a href="#no" class="DMCA-logo"></a>
            </div>
        </div>

        <div class="copyright">
            <div class="copyright-box">
                <a href="#no">
                    <i class="fas fa-map-marker-alt copyright-icon"></i> Tầng 19,Tòa nhà The 678 Tower,Số 67 đường Hoàng Văn Thái,phường Tân Phú,quận 7,TP HCM
                </a>

                <a href="#no">
                    <i class="fas fa-envelope copyright-icon"></i> support@nct.vn
                </a>
                <a href="#no">
                    <i class="fas fa-phone-alt copyright-icon"></i> (028) 3868 7979
                </a>
                <span class="copyright-note">©NCT Corp. All rights reserved</span>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>