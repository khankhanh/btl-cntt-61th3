<?php require_once(__DIR__ .'/layout/header.php') ?>
<?php
    $sql_cat = "SELECT * FROM `category` WHERE 1";
    $category = $db->fetchAll($sql_cat);
    $sql_cat_chill = "SELECT * FROM `cat_chill`";
    $cat_chill = $db->fetchAll($sql_cat_chill);
    $sql_country = "SELECT * FROM `country`";
    $country = $db->fetchAll($sql_country);

?>

    <footer style="position: relative;">
        <div style="width:1200px;margin:0 auto;" class="main ">
            <!-- <div class="container-fluid">
                <div class="slide-default">
                    <div style="max-width: 1300px; margin-left:130px;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./slide-default/bestmusic.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./slide-default/music2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./slide-default/christmas-2021.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./slide-default/music1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div> -->
            <div style="padding-top: 30px;" id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.ytimg.com/vi/bqLls2Tj2Rc/maxresdefault.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://thitruongdiaoc.vn/wp-content/uploads/2020/12/wp7891437-xmas-2021-wallpapers.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://avatar-ex-swe.nixcdn.com/playlist/share/2021/12/07/9/8/b/a/1638876890406.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="false"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
            </div>
        </div>
        <div class="main-container" style="margin: 70px 0px 0px 160px">
            <div class="left-sidebar">
                <div class="list-album Chrismas">
                    <div class="title-top-box">
                        <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">GIÁNG SINH 2021</a>
                    </div>
                    <ul style="padding-top: 10px;" class="list-album-content-box">
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Chrismas-Pop" style=" background-image: url('public/site/img/slide-default/chrismas1.png');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.308</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Chrimas Pop</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image All-I-Want-For-Chrismas" style=" background-image: url('public/site/img/merry-christmas-happy-new-year-2021-greeting-card_155957-327.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.941</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">All I Want For Chrismas</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Its-Chrismas-Time " style="    background-image: url('public/site/img/christmas\ 2.jpg'); ">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.937</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">It's Chrismas Time</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Chrimas-Coffeehouse" style="background-image: url('public/site/img/christmas3.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.948</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Chrimas Coffeehouse</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Merry-Chrimas" style="  background-image: url('public/site/img/christmas4.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.038</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Merry Chrimas </a>
                        </li>
                    </ul>
                </div>

                <div class="list-album piano">
                    <div class="title-top-box">
                        <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">PIANO đẶC SẮC NHẤT</a>
                    </div>

                    <ul style="padding-top: 10px;" class="list-album-content-box">
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Chill" style="background-image: url('public/site/img/slide-default/chill.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.308</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Chilled with the piano</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Pure-piano" style="    background-image: url('public/site/img/slide-default/pure.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.941</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Pure Piano Chill</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Relax" style="background-image: url('public/site/img/slide-default/relax.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.937</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Relaxing Piano</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Peaceful" style="background-image: url('public/site/img/slide-default/peaceful.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.948</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Peaceful Piano</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image collection" style="    background-image: url('public/site/img/slide-default/collection.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.038</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Thẻ Piano Collection</a>
                        </li>
                    </ul>
                </div>

                <div class="list-album feeling">
                    <div class="title-top-box">
                        <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">THAY LỜI MUỐN NÓI</a>
                    </div>

                    <ul style="padding-top: 10px;" class="list-album-content-box">
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Sun" style="    background-image: url('public/site/img/slide-default/sun.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.308</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Một Ngày Đầy Nắng</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Young" style="background-image: url('public/site/img/slide-default/young.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.941</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Tuổi Xuân Rơi Theo Mối Tình</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image The-Past" style="background-image: url('public/site/img/slide-default/the-past.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.937</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Chuyện Mình Rồi Cùng Sẽ Qua</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Tear" style="background-image: url('public/site/img/slide-default/tear.webp');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.948</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Mưa Hay Nước Mắt</a>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Staunch" style="background-image: url('public/site/img/slide-default/stauch.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.038</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Để Mình Nói Những Câu Chân Thành</a>
                        </li>
                    </ul>
                </div>

                <div class="list-album new-releases">
                    <div class="title-top-box">
                        <a style="text-decoration: none;font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">MỚI PHÁT HÀNH</a>
                    </div>

                    <ul style="padding-top: 10px;" class="list-album-content-box">
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image King" style="background-image: url('public/site/img/slide-default/king.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.308</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Đế Vương</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">ACV</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image we" style="    background-image: url('public/site/img/slide-default/da-lab.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.941</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Chuyện Đôi Ta</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Da-Lab, Emcee L</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image tiny-love" style="background-image: url('public/site/img/slide-default/tiny.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.937</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Tiny Love</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Thịnh Duy</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image walking-through" style="background-image: url('public/site/img/slide-default/through.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.948</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Bước Qua Nhau</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Vũ</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image twenty-three" style="background-image: url('public/site/img/slide-default/23.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>1.038</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">23</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Gừng,Pixel Neko, Bít, ...</a></p>
                        </li>
                    </ul>




                    <ul class="list-album-content-box albumHot-content-box">
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image chrismas-day" style="background-image: url('public/site/img/slide-default/come.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>212</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">When Chrismas...</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Kelly Clarkson</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Taylor" style="background-image: url('public/site/img/slide-default/well.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>3.663</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">All Too Well</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Taylor Swift</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Merry" style="background-image: url('public/site/img/slide-default/merry.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>3.663</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Merry-Chrimas</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Mariah Carey</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image Sheeran" style="background-image: url('public/site/img/slide-default/ed.jpg');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>3.663</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">Bad Habits</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Ed Sheeran</a></p>
                        </li>
                        <li class="list-album-content">
                            <a href="#no">
                                <div class="list-album-image jessi" style="background-image: url('public/site/img/slide-default/jessi.png');">
                                    <div class="overlay-hover">
                                        <i  class="far fa-play-circle fa-3x play-icon-mv-1"></i>
                                    </div>

                                    <div class="view-box">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>3.663</span>
                                    </div>
                                </div>
                            </a>

                            <!-- 	reuse top-100-name class in top-100 component -->
                            <a class="top-100-name list-album-link" href="#no">This Chrismas Day</a>
                            <p class="albumHot-singer"><a style="color: grey;font-size: 10px;" class="name-singer-top-music" href="#no">Jessi J</a></p>
                        </li>
                </div>
                <div class="list-album mv-hot">

                </div>
                <div class="list-album list_song">
                    <div class="title-top-box">
                        <a style="text-decoration: none;font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">Bài Hát</a>
                        <i style="color:#0d6efd;" class="fas fa-chevron-right angle-right angle-right-albumHot"></i>
                    </div>

                    <ul class="list-album-content-box list-song-content-box">
                        <li class="list-album-content-list-song">
                            <a href="#no">
                                <div class="list-song-bich"><img style="height: 50px;" src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/f/8/d/7/f8d715152be52e11c7397aca0029de3f.jpg" alt=""></div>
                            </a>
                            <div class="song-infor-list-song">
                                <a href="#no">
                                    <p style="margin: 10px 0px 0px 5px;">Em Bỏ Hút Thuốc Chưa ?</p>
                                </a>

                                <span>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                        Bích Phương,
                                    </a>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd; font-size: 12px;" href="#no" class="list-song-singer">
                                        traitimtrongvong
                                    </a>
                                </span>
                            </div>
                            <div class="view-infor-list-song">
                                <a style="margin-left: 80px; color: #adb5bd; font-size: 12px;" href="#no">
                                    <i class="fas fa-headphones-alt small"></i>
                                    <span>2.273.293</span>
                                </a>

                            </div>
                            <div class="box-song-action">
                                <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                            </div>
                        </li>

                        <div>

                            <li class="list-album-content-list-song no-margin-right">
                                <a href="#no">
                                    <div class="list-song-justin"><img style="height: 50px;" src="https://i1.sndcdn.com/artworks-000656776837-qtfghs-t500x500.jpg" alt=""></div>
                                </a>
                                <div class="song-infor-list-song">
                                    <a href="#no">
                                        <p style="margin: 10px 0px 0px 5px;">10.000 hours</p>
                                    </a>

                                    <span>
                                           <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                              Justin Bieber,
                                           </a>
                                           <a style="margin: 10px 0px 0px 0px; color: #adb5bd; font-size: 12px;" href="#no" class="list-song-singer">
                                              Dan
                                           </a>
                                       </span>
                                </div>
                                <div class="view-infor-list-song">
                                    <a style="margin-left: 170px; color: #adb5bd; font-size: 12px;" href="#no">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.273.293</span>
                                    </a>

                                </div>
                                <div class="box-song-action">
                                    <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                    <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                    <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                                </div>
                            </li>

                        </div>
                    </ul>

                    <ul class="list-album-content-box list-song-content-box">
                        <li class="list-album-content-list-song">
                            <a href="#no">
                                <div class="list-song-adele"><img style="height: 50px;" src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/3/8/e/2/38e293510189e91f96109b9150c1a1d8.jpg" alt=""></div>
                            </a>
                            <div class="song-infor-list-song">
                                <a href="#no">
                                    <p style="margin: 10px 0px 0px 5px;">Easy On Me</p>
                                </a>

                                <span>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                       Adele
                                    </a>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd; font-size: 12px;" href="#no" class="list-song-singer">
                                       
                                    </a>
                                </span>
                            </div>
                            <div class="view-infor-list-song">
                                <a style="margin-left: 169px; color: #adb5bd; font-size: 12px;" href="#no">
                                    <i class="fas fa-headphones-alt small"></i>
                                    <span>8.283.373</span>
                                </a>

                            </div>
                            <div class="box-song-action">
                                <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                            </div>
                        </li>

                        <div>

                            <li class="list-album-content-list-song no-margin-right">
                                <a href="#no">
                                    <div class="list-song-justin"><img style="height: 50px;" src="https://cafebiz.cafebizcdn.vn/2019/12/23/all-i-want-for-christmas-is-you-15770727420652046746371.jpg" alt=""></div>
                                </a>
                                <div class="song-infor-list-song">
                                    <a href="#no">
                                        <p style="margin: 10px 0px 0px 5px;">All I Want For Chrismas</p>
                                    </a>

                                    <span>
                                           <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                            Mariah Carey
                                           </a>
                                       </span>
                                </div>
                                <div class="view-infor-list-song">
                                    <a style="margin-left:113px; color: #adb5bd; font-size: 12px;" href="#no">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>12.472.293</span>
                                    </a>

                                </div>
                                <div class="box-song-action">
                                    <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                    <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                    <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                                </div>
                            </li>
                        </div>
                    </ul>

                    <ul class="list-album-content-box list-song-content-box">
                        <li class="list-album-content-list-song">
                            <a href="#no">
                                <div class="list-song-me"><img style="height: 50px;" src="https://data.chiasenhac.com/data/cover/152/151596.jpg" alt=""></div>
                            </a>
                            <div class="song-infor-list-song">
                                <a href="#no">
                                    <p style="margin: 10px 0px 0px 5px;">Mình Yêu Đến Đây Thôi</p>
                                </a>

                                <span>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                       Tóc Tiên
                                    </a>
                                </span>
                            </div>
                            <div class="view-infor-list-song">
                                <a style="margin-left: 99px; color: #adb5bd; font-size: 12px;" href="#no">
                                    <i class="fas fa-headphones-alt small"></i>
                                    <span>1.301.213</span>
                                </a>

                            </div>
                            <div class="box-song-action">
                                <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                            </div>
                        </li>

                        <div>

                            <li class="list-album-content-list-song no-margin-right">
                                <a href="#no">
                                    <div class="list-song-holy"><img style="height: 50px;" src="https://avatar-ex-swe.nixcdn.com/playlist/2017/10/19/1/9/f/d/1508378179288_500.jpg" alt=""></div>
                                </a>
                                <div class="song-infor-list-song">
                                    <a href="#no">
                                        <p style="margin: 10px 0px 0px 5px;">A Holy Night</p>
                                    </a>

                                    <span>
                                           <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                            Leona Lewis
                                           </a>
                                       </span>
                                </div>
                                <div class="view-infor-list-song">
                                    <a style="margin-left:184px; color: #adb5bd; font-size: 12px;" href="#no">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.102.213</span>
                                    </a>

                                </div>
                                <div class="box-song-action">
                                    <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                    <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                    <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                                </div>
                            </li>

                        </div>
                    </ul>

                    <ul class="list-album-content-box list-song-content-box">
                        <li class="list-album-content-list-song">
                            <a href="#no">
                                <div class="list-song-coming"><img style="height: 50px;" src="https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/cover/3/b/f/6/3bf6a637783cfe6fab0fd75c43939964.jpg" alt=""></div>
                            </a>
                            <div class="song-infor-list-song">
                                <a href="#no">
                                    <p style="margin: 10px 0px 0px 5px;">Dịu Dàng Là Ngày Em Đến</p>
                                </a>

                                <span>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                     Erik
                                    </a>
                                </span>
                            </div>
                            <div class="view-infor-list-song">
                                <a style="margin-left: 80px; color: #adb5bd; font-size: 12px;" href="#no">
                                    <i class="fas fa-headphones-alt small"></i>
                                    <span>1.011.213</span>
                                </a>

                            </div>
                            <div class="box-song-action">
                                <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                            </div>
                        </li>

                        <div>

                            <li class="list-album-content-list-song no-margin-right">
                                <a href="#no">
                                    <div class="list-song-only"><img style="height: 50px;" src="https://i1.sndcdn.com/artworks-CTtMbOqjozUpd7bK-1mE4AA-t500x500.jpg" alt=""></div>
                                </a>
                                <div class="song-infor-list-song">
                                    <a href="#no">
                                        <p style="margin: 10px 0px 0px 5px;">Only</p>
                                    </a>

                                    <span>
                                           <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                            Lee Hi
                                           </a>
                                       </span>
                                </div>
                                <div class="view-infor-list-song">
                                    <a style="margin-left:228px; color: #adb5bd; font-size: 12px;" href="#no">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.102.213</span>
                                    </a>

                                </div>
                                <div class="box-song-action">
                                    <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                    <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                    <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                                </div>
                            </li>

                        </div>
                    </ul>

                    <ul class="list-album-content-box list-song-content-box">
                        <li class="list-album-content-list-song">
                            <a href="#no">
                                <div class="list-song-aloha"><img style="height: 50px;" src="https://avatar-ex-swe.nixcdn.com/song/2020/04/14/7/b/f/3/1586834785908_640.jpg" alt=""></div>
                            </a>
                            <div class="song-infor-list-song">
                                <a href="#no">
                                    <p style="margin: 10px 0px 0px 5px;">Aloha</p>
                                </a>

                                <span>
                                    <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                     Jo Jung-Suk
                                    </a>
                                </span>
                            </div>
                            <div class="view-infor-list-song">
                                <a style="margin-left: 176px; color: #adb5bd; font-size: 12px;" href="#no">
                                    <i class="fas fa-headphones-alt small"></i>
                                    <span>11.210.001</span>
                                </a>

                            </div>
                            <div class="box-song-action">
                                <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                            </div>
                        </li>

                        <div>

                            <li class="list-album-content-list-song no-margin-right">
                                <a href="#no">
                                    <div class="list-song-rainy"><img style="height: 50px;" src="https://avatar-ex-swe.nixcdn.com/song/2021/09/01/0/7/7/f/1630492999170_640.jpg" alt=""></div>
                                </a>
                                <div class="song-infor-list-song">
                                    <a href="#no">
                                        <p style="margin: 10px 0px 0px 5px;">On Rainy Days</p>
                                    </a>

                                    <span>
                                           <a style="margin: 10px 0px 0px 5px; color: #adb5bd;font-size: 12px;" href="#no" class="list-song-singer">
                                            Lee Hi
                                           </a>
                                       </span>
                                </div>
                                <div class="view-infor-list-song">
                                    <a style="margin-left:170px; color: #adb5bd; font-size: 12px;" href="#no">
                                        <i class="fas fa-headphones-alt small"></i>
                                        <span>2.293.881</span>
                                    </a>

                                </div>
                                <div class="box-song-action">
                                    <!-- hover icon sẽ cuộn lên icon khác như nhaccuatui.vn (thủ thuật) -->
                                    <div class="heart-icon"><i class="bi bi-suit-heart-fill"></i></div>
                                    <div class="play-icon-nct"><i class="bi bi-caret-right-fill"></i></div>
                                </div>
                            </li>

                        </div>
                    </ul>
                </div>
            </div>

            <div class="right-sidebar">
                <div class="right-sidebar-box">


                    <div class="top-box-music">

                        <h3 style="width: auto;
                        display: inline-block;"><a class="nomore" href="#no" title="BXH Bài hát">BXH Bài hát</a></h3>
                        <a style="margin-right: 150px;float: right;" href="#no" title="BXH Bài hát" class="play_all"></a>
                    </div>
                    <div class="btn_tab_select">
                        <a id="top20_bai-hat_nhac-viet" onclick="BXH_click(this, 'VN');" href="#no" class="active" title="Việt Nam">Việt Nam</a>
                        <span></span>
                        <a id="top20_bai-hat_au-my" onclick="BXH_click(this, 'EU');" href="#no" title="Âu Mỹ">Âu Mỹ</a>
                        <span></span>
                        <a id="top20_bai-hat_nhac-han" onclick="BXH_click(this, 'HQ');" href="#no" title="Hàn Quốc">Hàn Quốc</a>

                    </div>

                    <div class="top-box-mv">
                        <ul id="bxh_data" style="list-style-type: none;">
                            <li>
                                <span style="    float: left;
                                width: 31px;
                                color: #7a7a7a;
                                height: 42px;
                                margin-right: 10px;
                                font-size: 20px;
                                text-align: center;
                                line-height: 42px;
                                vertical-align: middle;" class="number special-2">2</span>
                                <div class="info_data">

                                    <h3><a style="font-size: 14px;
                                        margin: 0 0 4px 0;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.3;
                                        width: 248px;" title="Bước Qua Nhau - Vũ" href="https://www.nhaccuatui.com/bai-hat/buoc-qua-nhau-vu.EdENCgJm9dAa.html" onclick="lt(['home','BXH','click','song','EdENCgJm9dAa','','Nhac Viet']);" ga="_gaq.push(['_trackEvent', 'TOP 20', 'Click', 'Top 20 Bai Hat Trang Chu Nhac Viet']);"
                                            class="name_song">Bước Qua Nhau</a></h3>
                                    <h4 style="margin-top: -15px;"><a style="    font-size: 12px;
                                        color: #a2a2a2;
                                        line-height: 15px; margin-top: -10px; " href="https://www.nhaccuatui.com/nghe-si-vu.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Vũ trình bày" target="_blank">Vũ</a></h4>

                                </div>
                                <!--span id="NCTCounter__7120388" class="icon_listen">0</span-->
                            </li>
                            <li>
                                <span style="    float: left;
                                width: 31px;
                                color: #7a7a7a;
                                height: 42px;
                                margin-right: 10px;
                                font-size: 20px;
                                text-align: center;
                                line-height: 42px;
                                vertical-align: middle;" class="number special-2">2</span>
                                <div class="info_data">

                                    <h3><a style="font-size: 14px;
                                        margin: 0 0 4px 0;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.3;
                                        width: 248px;" title="Bước Qua Nhau - Vũ" href="https://www.nhaccuatui.com/bai-hat/buoc-qua-nhau-vu.EdENCgJm9dAa.html" onclick="lt(['home','BXH','click','song','EdENCgJm9dAa','','Nhac Viet']);" ga="_gaq.push(['_trackEvent', 'TOP 20', 'Click', 'Top 20 Bai Hat Trang Chu Nhac Viet']);"
                                            class="name_song">Bước Qua Nhau</a></h3>
                                    <h4 style="margin-top: -15px;"><a style="    font-size: 12px;
                                        color: #a2a2a2;
                                        line-height: 15px; margin-top: -10px; " href="https://www.nhaccuatui.com/nghe-si-vu.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Vũ trình bày" target="_blank">Vũ</a></h4>

                                </div>
                                <!--span id="NCTCounter__7120388" class="icon_listen">0</span-->
                            </li>
                            <li>
                                <span style="    float: left;
                                width: 31px;
                                color: #7a7a7a;
                                height: 42px;
                                margin-right: 10px;
                                font-size: 20px;
                                text-align: center;
                                line-height: 42px;
                                vertical-align: middle;" class="number special-2">2</span>
                                <div class="info_data">

                                    <h3><a style="font-size: 14px;
                                        margin: 0 0 4px 0;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.3;
                                        width: 248px;" title="Bước Qua Nhau - Vũ" href="https://www.nhaccuatui.com/bai-hat/buoc-qua-nhau-vu.EdENCgJm9dAa.html" onclick="lt(['home','BXH','click','song','EdENCgJm9dAa','','Nhac Viet']);" ga="_gaq.push(['_trackEvent', 'TOP 20', 'Click', 'Top 20 Bai Hat Trang Chu Nhac Viet']);"
                                            class="name_song">Bước Qua Nhau</a></h3>
                                    <h4 style="margin-top: -15px;"><a style="    font-size: 12px;
                                        color: #a2a2a2;
                                        line-height: 15px; margin-top: -10px; " href="https://www.nhaccuatui.com/nghe-si-vu.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Vũ trình bày" target="_blank">Vũ</a></h4>

                                </div>
                                <!--span id="NCTCounter__7120388" class="icon_listen">0</span-->
                            </li>
                            <li>
                                <span style="    float: left;
                                width: 31px;
                                color: #7a7a7a;
                                height: 42px;
                                margin-right: 10px;
                                font-size: 20px;
                                text-align: center;
                                line-height: 42px;
                                vertical-align: middle;" class="number special-2">2</span>
                                <div class="info_data">

                                    <h3><a style="font-size: 14px;
                                        margin: 0 0 4px 0;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        line-height: 1.3;
                                        width: 248px;" title="Bước Qua Nhau - Vũ" href="https://www.nhaccuatui.com/bai-hat/buoc-qua-nhau-vu.EdENCgJm9dAa.html" onclick="lt(['home','BXH','click','song','EdENCgJm9dAa','','Nhac Viet']);" ga="_gaq.push(['_trackEvent', 'TOP 20', 'Click', 'Top 20 Bai Hat Trang Chu Nhac Viet']);"
                                            class="name_song">Bước Qua Nhau</a></h3>
                                    <h4 style="margin-top: -15px;"><a style="    font-size: 12px;
                                        color: #a2a2a2;
                                        line-height: 15px; margin-top: -10px; " href="https://www.nhaccuatui.com/nghe-si-vu.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Vũ trình bày" target="_blank">Vũ</a></h4>

                                </div>
                                <!--span id="NCTCounter__7120388" class="icon_listen">0</span-->
                            </li>
                        </ul>
                    </div>

                    <div class="top-box-suggest">
                        <!--   <img style="height: 250px; width: 350px;" src="./slide-default/bg_discovery_playlist.png" alt="">    -->
                        <a style="text-decoration: none;" href="#no" class="discovery_playlist_link">
                            <div class="bg_discovery_playlist" style=" height: 260px; width:335px">
                                <div class="content_discovery_playlist" >
                                    <h2 style=" margin-block-start: 0.83em;margin-block-end: 0.83em;
                                    margin-inline-start: 0px;
                                    margin-inline-end: 0px;font-size: 20px; color: rgba(255,255,255,0.88);padding-top: 45px; text-decoration: none;">GỢI Ý DÀNH CHO BẠN</h2>
                                    <p style="color:rgba(255, 255, 255, 0.5); padding-top: 10px;display: block;" class="text-detail">Thưởng thức những ca khúc phù hợp nhất với bạn</p>
                                    <div class="btn-playlist">
                                        <span style="margin-top: 10px;" class="icon-in-btn-playlist"><i class="fas fa-play"></i></span>
                                        <span style="margin-top: 10px; margin-left: 10px;" class="text-in-btn-playlist">Nghe bài hát</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-box-the-hot-topic">
                        <div class="title-top-box">
                            <a style="font-size: 27px; text-decoration: none; color: #2DAAED;" class="top-box-link" href="#no">CHỦ ĐỀ HOT</a>
                            <i style=" color: #2DAAED; margin: 5px 5px 0px 0px;" class="fas fa-chevron-right angle-right"></i>
                        </div>

                        <ul style="padding: 0px 0px 10px 0px" class="top-hot-topic">


                            <li style=" list-style-type: none;">
                                <a href="#no">
                                    <img style="height: 150px; width: 350px;" src="https://avatar-ex-swe.nixcdn.com/topic/share/2021/03/11/1/6/1/7/1615451437437.jpg" alt="">
                                </a>
                            </li>
                            <li style=" list-style-type: none;">
                                <a href="#no">
                                    <img style="height: 150px; width: 350px;padding-top: 20px;" src="https://avatar-ex-swe.nixcdn.com/topic/share/2020/08/13/e/9/1/9/1597291430873.jpg" alt="">
                                </a>
                            </li>
                            <li style=" list-style-type: none;">
                                <a href="#no">
                                    <img style="height: 150px; width: 350px;padding-top: 20px;" src="https://avatar-ex-swe.nixcdn.com/topic/share/2020/11/05/c/8/6/1/1604568785929.jpg" alt="">
                                </a>
                            </li>

                            <li style=" list-style-type: none;">
                                <a href="#no">
                                    <img style="height: 150px; width: 350px;padding-top: 20px;" src="https://avatar-ex-swe.nixcdn.com/topic/mobile/2021/12/13/d/9/4/2/1639371220839_org.jpg" alt="">
                                </a>
                            </li>

                            <li style=" list-style-type: none;">
                                <a href="#no">
                                    <img style="height: 150px; width: 350px;padding-top: 20px;" src="https://avatar-ex-swe.nixcdn.com/playlist/share/2020/12/16/c/1/2/a/1608113532195.jpg" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>

            </div>

        </div>

        <div style="padding: 30px 0px 5px 0px;margin: 70px 0px 0px 160px" class="list-album list_top">
            <div class="tittle-top-box">
                <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">Top 100</a>
            </div>
            <ul style="padding-top: 10px;" class="list-album-content-box">
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image us-uk">
                            <img style="height: 150px; width: 140px;" src="https://avatar-ex-swe.nixcdn.com/playlist/2021/11/02/b/4/7/0/1635818384011_500.jpg" alt="">

                        </div>
                    </a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image Pop">
                            <img style="height: 150px; width: 140px;" src="https://1.bp.blogspot.com/-11_QD7DAjG8/YCFJ-M0y7nI/AAAAAAAAD4E/_MNGqjFlmlYf62nUwIAr7_hnvZ023ArnwCLcBGAsYHQ/s500/100pop.jpg" alt="">
                        </div>
                    </a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image K-pop ">
                            <img style="height: 150px; width: 140px;" src="https://avatar-ex-swe.nixcdn.com/playlist/2020/09/16/e/1/f/f/1600239362951_500.jpg" alt="">
                        </div>
                    </a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image v-pop">
                            <img style="height: 150px; width: 140px;" src="https://avatar-ex-swe.nixcdn.com/playlist/2021/05/04/3/b/6/d/1620100988545_500.jpg" alt="">
                        </div>
                    </a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image country-song">
                            <img style="height: 150px; width: 140px;" src="https://avatar-ex-swe.nixcdn.com/playlist/2020/09/16/e/1/f/f/1600250721042_500.jpg" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div style="padding: 30px 0px 5px 0px;margin: 70px 0px 0px 160px" class="list-album artist">
            <div class="title-top-box">
                <a style="text-decoration: none; font-size: 27px; color: #2DAAED;" class="top-box-link uppercase" href="#no">Weekly Artist Chart</a>
            </div>
            <ul style="padding-top: 10px; display: flex; list-style-type: none;" class="list-album-content-box">
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image adele-song">
                            <img style="height: 150px; width: 140px; border-radius: 50%;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Adele_-_Live_2016%2C_Glasgow_SSE_Hydro_03.jpg/220px-Adele_-_Live_2016%2C_Glasgow_SSE_Hydro_03.jpg" alt="">
                        </div>
                    </a>

                    <!-- 	reuse top-100-name class in top-100 component -->
                    <a style="color: black;" class="top-100-name list-album-link" href="#no">Adele</a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image mean">
                            <img style="height: 150px; width: 140px; border-radius: 50%;" src="https://media-cdn.laodong.vn/storage/newsportal/2021/11/1/969445/Justin-Bieber-Tiet-L.jpg?w=414&h=276&crop=auto&scale=both" alt="">
                        </div>
                    </a>

                    <!-- 	reuse top-100-name class in top-100 component -->
                    <a style="color: black;" class="top-100-name list-album-link" href="#no">Justin Bieber</a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image sweet">
                            <img style="height: 150px; width: 140px; border-radius: 50%;" src="https://media-cdn.laodong.vn/storage/newsportal/2021/6/24/923749/Taylor-Swift-Nu-Nghe.jpg" alt="">
                        </div>

                    </a>

                    <!-- 	reuse top-100-name class in top-100 component -->
                    <a style="color: black;" class="top-100-name list-album-link" href="#no">Taylor Swift</a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image son-tung">
                            <img style="height: 150px; width: 140px; border-radius: 50%;" src="https://kenh14cdn.com/thumb_w/660/203336854389633024/2021/5/28/13285652342587086741428035430233108735653736n-1622165532863738421439.jpg" alt="">
                        </div>

                    </a>

                    <!-- 	reuse top-100-name class in top-100 component -->
                    <a style="color: black;" class="top-100-name list-album-link" href="#no">Sơn Tùng</a>
                </li>
                <li class="list-album-content">
                    <a href="#no">
                        <div class="list-album-image ariana">
                            <img style="height: 150px; width: 140px; border-radius: 50%; display: flex;" src="data:image/jpeg;base64,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"
                                alt="">
                        </div>

                    </a>

                    <!-- 	reuse top-100-name class in top-100 component -->
                    <a style="color: black;" class="top-100-name list-album-link" href="#no">Ariana Grande</a>
                </li>
            </ul>
        </div>

        <div class="footer">
            <div class="list-cooperation">
                <div class="list-cooperation-box">
                    <p class="titile-list-cooperation">Liên kết và hợp tác</p>
                    <div class="list-cooperation-logo-box">
                        <a href="http://www.ygplus.com/" class="list-cooperation-logo list-cooperation-logo-1">
                            <img style="height: 100px; width: 200px; padding: 0px 20px 0px 20px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAABnCAMAAABcidwFAAAAZlBMVEX///8mJylRUlS3t7iztLT8/Pxub3Cio6SKi4xCQ0VgYWIrLC7MzM2EhYZ5enswMTNmZ2jk5ORaW1xzdHU6Oz01NjjW1teYmZnv7+/d3d29vr7ExcWqqqvP0NDt7e2QkJFLTE6dnp4It9sUAAAE3ElEQVR4nO3ciZaiOhAAUFFow2Lb2Lg04vb/P/mqQjaUQEQgeWdS58woIZXkCkQQ7cXChw8fPnz48PEPxc+yM0JN2rk7TR/RnLg46Aqis6WdaR3hDm58mzs4rW072OYMbgqbK7jNFDZHcDpb9pHNDdxENidwU9lcwE1mcwA3nc0+bkKbddz3hDbbuEltlnHT2uziJrZZxQ22JV9mYRE3fLvdT3OO2jAauE/2yaWDOhX32fHmoE7BfWuOh4vhXOKeTuI+tTmoE7jPbe7pOG4Mm3O6eEyba7p4mG1b/B908SBbWv6Z6TbPq2c/Q9HZDnutbbEw01nHDbIZ6mzjBtrMdJZxg20dVaTOLu423Gais4vThJHNQOciztDWr3MQZ2zrqLqjOvdwb9j6dM7h3rL16FzDvWnr1jmGe9vWqXMLN8DWpft2CTfIBpcPurSXsIgbaOtIdAc32GZ+yW4N94HNWGcLp7etTNLNdJZwepvu221PYaSzg/vYZqazghvBZnRTwQZO+5HBOzYTnQXcSDYD3fy40Wz9utlxI9p6dXPjRrX16WbGjWzr0c2LG93WrZsVN4Gt88u0s+KylSYun7R60LVqdJbqw4cPHz58+PDhw4cPH/9slGEd7P4FXrPh3fecX6Xx9WGY0eUzW2JXWxd65VUe2IVlJGqHB1aC66+8t5w3Qy/jsPi0WmWiKZbDxtDeGyZdeVIu+xN9KMG//hrXiwk8PcJjyL+AfhcXxj90eceWtnX9X774qCnyOvrGxoPPH7y3NW9mgfdRsYcsCJK65CcIdiLlLIdDr/U1SSvZX2aG25/ex7HhvOIIPt+149JcxWHXf/gEb46XWlwjqR+3WUOESmsPBReu1zcogholx31j/UrgvqrqVrBf0kWwBkYQwwP77AFenCJI+fe7mjjMkTh82fAn2RHeipDD+cXe1pqkHFZBXgIPmt3yrCxSXBFJHLYARaLCTnTMcbgXP8Sg6au5XCi5y41MecJtrwruXvdcb41KDKdSentNqgtvLTCGKyMM0VqBDXbhKqU+w1VKbw0cqAkUfLXhChyVHCc9QEp67MGeInFKb69Jvbig2RqMJ466cOohxXBH3ZaD9s6nNNhGLbgjlJ/kOOkHh1+LK/1jDkeRToOoSfvTcFwG/1Zv4H6Ox81e+fWqiqtdOzFBNHAhjlWOcx9sEzg68XUSzb/inpJ6ccsEQk5PGUzF96oDd8f6ckJh89mhDRdSzE3Qm7g8DYqzGCdsEkhd34OiEvWTZm+vSb24pwklo3OU+YRCYy8bUXGwulguoY+iDYf//fJxRjidFPSYWonOXyeUZtIAHGz11By3OcB7WSo/dVZwkbzBfGnDwVZI+ThP+F57o29kJQxfj1OT+nGPDOKi4OpdXYu7KfXphBJBYSy+iK3gYPfZ4h/cKXj/T7h6bk94LzEOHOaUUkyvMBCCvWWapH4cDXmGktE3yb4JRZ6hwMSWb5XqCm7DikNe9IxDDBvnHxxekJEk2eLcOGtpnqE0k4bgKOENHL7PBfzGhYKL2T58hdV5G45uhXqcB5mWiRO2VpyS1IN7kDrYuW1FCI7iACXiLssJFkT9itVn7YWEZKwZfnb8R8haJtZ765EQOpteCGHH0KouyQkvyUWa8vSpt5ckVqjOGj58+PDhw8d/ImVXYtWFIrEAAAAASUVORK5CYII=">
                        </a>
                        <a href="https://www.believemusic.com/" class="list-cooperation-logo">
                            <img style="height: 100px; width: 200px; padding: 0px 20px 0px 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHzB9Mr2anGZaF2dpn4clJfKkZrV5n8QFlZmO4OMa5c4eXxg4RAZubpqVoMEZALyCrwlk&usqp=CAU">
                        </a>
                        <a href="https://www.sonymusic.com/" class="list-cooperation-logo">
                            <img style="height: 100px; width: 200px; padding: 0px 20px 0px 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjT9UmG4EcRvLIxnERkxikCZ3p6viPSk1froEPbDKCfCPCL49axULG8rBOXBczF3m_evE&usqp=CAU">
                        </a>
                        <a href="https://www.jype.com/" class="list-cooperation-logo">
                            <img style="height: 100px; width: 200px; padding: 0px 20px 0px 20px;" src="https://thuvienhuongdan.com/contents/upload/images/FrankieBlue2494/highlight/2018_04_23-1524468616-jyp-entertainment.png">
                        </a>
                        <a href="https://www.universalmusic.com/" class="list-cooperation-logo-5">
                            <img style="height: 100px; width: 200px; padding: 0px 20px 0px 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXoUOqH494ubN7v3pJaQEvNipz72Wsy6NVFGyVVfF9-88ZdUOyP25wJoiCdJc4oCSz0Lg&usqp=CAU">
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
    </footer>

    
    <a id="back-to-top" style="display: inline;">
        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
          </label> Tắt Quảng Cáo
    </a>
    <script src="./main.js"></script>
</body>


</html>