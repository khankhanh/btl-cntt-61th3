<?php require_once(__DIR__ .'/layout/header.php') ?>
<?php require_once(__DIR__ .'/lib/autoload.php') ?>
<?php
$sql_album1 = "SELECT * FROM `album` LIMIT 5";
$album1 = $db->fetchAll($sql_album1);
$sql_album2 = "SELECT * FROM `album` LIMIT 5, 5";
$album2 = $db->fetchAll($sql_album2);
$sql_album3 = "SELECT * FROM `album` LIMIT 10, 5";
$album3 = $db->fetchAll($sql_album3);
?>
    <link rel="stylesheet" href="./public/site/css/playlist.css">

    <div class="main">
        <div class="box-container">
            <div class="box-left">
                <div class="box_cata_control">
                    <ul class="detail_menu_browsing_dashboard">
                        <li class="cate">
                            <h3><a title="VIỆT NAM">VIỆT NAM</a></h3>
                        </li>
                        <li><a class="" href="#no" rel="dofollow" title="Nhạc Trẻ">Nhạc Trẻ</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Trữ Tình">Trữ Tình</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Remix Việt">Remix Việt</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Tiền Chiến">Tiền Chiến</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Nhạc Trịnh">Nhạc Trịnh</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Rock Việt">Rock Việt</a></li>

                        <li><a class="" href="#no" rel="dofollow" title="Cách Mạng">Cách Mạng</a></li>

                        <li class="line"></li>
                        <li class="cate">
                            <h3><a rel="dofollow" title="ÂU MỸ">ÂU MỸ</a></h3>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Pop">Pop</a>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Rock">Rock</a>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Electronica/Dance">Electronica/Dance</a>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="R&amp;B/Hip Hop/Rap">R&amp;B/Hip Hop/Rap</a>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Blues/Jazz">Blues/Jazz</a>
                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Country">Country</a>

                        </li>
                        <li>
                            <a pr="list_aumy" href="#no" rel="dofollow" title="Latin">Latin</a>
                        </li>
                        <li class="view_more_list">
                            <a id="listchild_aumy">... Xem thêm</a>
                            <ul class="dot_more ">
                                <li>

                                    <a pr="listchild_aumy" href="#no" rel="dofollow" title="Indie">Indie</a>
                                </li>
                                <li>

                                    <a pr="listchild_aumy" href="#no" rel="dofollow" title="Âu Mỹ khác">Âu Mỹ khác</a>
                                </li>
                            </ul>

                        </li>
                        <li class="line"></li>
                        <li class="cate" style="height: 34px;">
                            <h3><a rel="dofollow" title="CHÂU Á">CHÂU Á</a></h3>
                        </li>
                        <li>
                            <a pr="list_chaua" href="#no" rel="dofollow" title="Nhạc Hàn">Nhạc Hàn</a>
                        </li>
                        <li>
                            <a pr="list_chaua" href="#no" rel="dofollow" title="Nhạc Hoa">Nhạc Hoa</a>
                        </li>
                        <li>
                            <a pr="list_chaua" href="#no" rel="dofollow" title="Nhạc Nhật">Nhạc Nhật</a>
                        </li>
                        <li>
                            <a pr="list_chaua" href="#no" rel="dofollow" title="Nhạc Thái">Nhạc Thái</a>
                        </li>

                        <li class="line"></li>
                        <li class="cate" style="height: 34px;">
                            <h3><a rel="dofollow" title="KHÁC">KHÁC</a></h3>
                        </li>
                        <li>
                            <a pr="list_khac" href="#no" rel="dofollow" title="Thiếu Nhi">Thiếu Nhi</a>
                        </li>
                        <li>
                            <a pr="list_khac" href="#no" rel="dofollow" title="Không Lời">Không Lời</a>
                        </li>
                        <li>
                            <a pr="list_khac" href="nhacphim.html" rel="dofollow" title="Nhạc Phim">Nhạc Phim</a>
                        </li>
                        <li>
                            <a pr="list_khac" href="#no" rel="dofollow" title="Thể Loại Khác">Thể Loại Khác</a></li>
                    </ul>
                </div>
                <div class="album__container">
                    <div class="title_box_key_left">
                        <h1><a title="" href="#no" class="nomore">PLAYLIST HOT NHẤT</a></h1>
                    </div>
                    <ul class="list-album-content-box albumHot-content-box">
                        <?php foreach($album1 as $item) :?>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image  LALISA">
                                    <img src="<?php echo $base_url.$item['img'] ?>" alt="">
                                    <div class="overlay-hover">
                                        <i class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="the-name-song-list-album-link" href="#no"><?php echo $item['name'] ?></a>
                            <p class="albumHot-singer"><a class="name-singer-top-music" href="#no"><?php echo $item['name'] ?></a></p>
                        </li>
                        <?php endforeach ?>

                    </ul>
                    <ul class="list-album-content-box albumHot-content-box">
                        <?php foreach($album2 as $item) :?>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image  LALISA">
                                    <img src="<?php echo $base_url.$item['img'] ?>" alt="">
                                    <div class="overlay-hover">
                                        <i class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="the-name-song-list-album-link" href="#no"><?php echo $item['name'] ?></a>
                            <p class="albumHot-singer"><a class="name-singer-top-music" href="#no"><?php echo $item['name'] ?></a></p>
                        </li>
                        <?php endforeach ?>

                    </ul>
                    <ul class="list-album-content-box albumHot-content-box">
                        <?php foreach($album3 as $item) :?>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image  LALISA">
                                    <img src="<?php echo $base_url.$item['img'] ?>" alt="">
                                    <div class="overlay-hover">
                                        <i class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="the-name-song-list-album-link" href="#no"><?php echo $item['name'] ?></a>
                            <p class="albumHot-singer"><a class="name-singer-top-music" href="#no"><?php echo $item['name'] ?></a></p>
                        </li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>

            <div class="box-right">
                <div class="list-singer-hot">
                    <div class="title_box_key_right">
                        <h3><a title="Ca Sĩ | Nghệ Sĩ" href="#no">Ca Sĩ | Nghệ Sĩ</a></h3>
                        <ul class="list-singer-content-box">
                            <li class="list-singer-content">
                                <a href="#no">
                                    <div class="list-singer-image  marhmello">
                                        <img src="./public/site/img/playlistHotNhat/marshmello.jpg" style="width:310px" alt="">
                                        <div class="overlay-hover-1">
                                            <p class="info-singer"><a class="info-name-singer" href="#no">Marshmello</a></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <ul class="list-singer-content-box">
                            <li class="list-singer-content">
                                <a href="#no">
                                    <div class="list-singer-image toctien">
                                        <img src="./public/site/img/playlistHotNhat/toctien.jpg" style="width:150px" alt="">
                                        <div class="overlay-hover-1">
                                            <p class="info-singer"><a class="info-name-singer-2" href="#no">Tóc Tiên</a></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-singer-content">
                                <a href="#no">
                                    <div class="list-singer-image vietathen">
                                        <img src="./public/site/img/playlistHotNhat/vietathen.jpg" style="width:150px" alt="">
                                        <div class="overlay-hover-1">
                                            <p class="info-singer"><a class="info-name-singer-2" href="#no">Việt Athen</a></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <ul class="list-singer-content-box">
                            <li class="list-singer-content">
                                <a href="#no">
                                    <div class="list-singer-image martingarrix">
                                        <img src="./public/site/img/playlistHotNhat/martingarrix.jpg" style="width:150px" alt="">
                                        <div class="overlay-hover-1">
                                            <p class="info-singer"><a class="info-name-singer-2" href="#no">Martin Garrix</a></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="list-singer-content">
                                <a href="#no">
                                    <div class="list-singer-image ikon">
                                        <img src="./public/site/img/playlistHotNhat/ikon.jpg" style="width:150px" alt="">
                                        <div class="overlay-hover-1">
                                            <p class="info-singer"><a class="info-name-singer-2" href="#no">IKON</a></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="box_pageview">
            <a href="#no" class="number active " rel="Trang đầu" title="">Trang đầu</a>
            <a href="#no" class="number " rel="previous" title="">←</a>
            <a href="#no" class="number " rel="previous" title="">1</a>
            <a href="#no" class="number">2</a>
            <a href="#no" class="number " rel="next" title="">3</a>
            <a href="#no" class="number " rel="next" title="">4</a>
            <a href="#no" class="number " rel="next" title="">5</a>
            <a href="#no" class="number " rel="next" title="">6</a>
            <a href="#no" class="number " rel="next" title="">→</a>
            <a href="#no" class="number " rel="Trang cuối" title="">Trang cuối</a>
        </div>
    </div>
    <div class="footer">
        <div class="list-cooperation">
            <div class="list-cooperation-box">
                <p class="titile-list-cooperation">Liên kết và hợp tác</p>
                <div class="list-cooperation-logo-box">
                    <a href="#no" class="list-cooperation-logo list-cooperation-logo-1">
                        <img src="./public/site/img/imgfooter/yinyang.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/imgfooter/sony.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/imgfooter/believe.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo">
                        <img src="./public/site/img/imgfooter/YGPlus.png">
                    </a>
                    <a href="#no" class="list-cooperation-logo-5">
                        <img src="./public/site/img/imgfooter/universal.png">
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