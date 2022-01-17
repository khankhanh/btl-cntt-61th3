<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ . '/../layout/header.php'); ?>
    <title>Admin</title>

</head>
<?php

    $page = 1;
    $limit = 8;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    $total_rows =  $db->countData("select * from cat_chill");
    $skip = $limit * ($page - 1);
    $total_pages = ceil($total_rows / $limit);

    //page prev
    $left = $page - 2;
    
    $right = $page + 2;
    
    $list_page =[];
    for($i = 1; $i <= $total_pages; $i++){
        if($i == 1 || $i == $total_pages || $i == $page || ($left <= $i && $i <= $right )){
            $list_page[] = $i;
        }else if($i == $left - 1 || $i == $right + 1){
            $list_page[] = "...";
        }
    }


    // load sql
    $sql_cat_chill = "select * from cat_chill \n";

    $sql_cat_chill .= "limit $skip , $limit ;";

    $cat_chill = $db->fetchAll($sql_cat_chill);

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
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="./add.php">Thêm cat_chill</a></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col">slug</th>
                                                    <th scope="col">Tiêu Đề</th>
                                                    <th scope="col">Mô Tả</th>
                                                    <th scope="col">Danh Mục</th>
                                                    <th scope="col">Khu Vục</th>
                                                    <th scope="col">Trạng Thái</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cat_chill as $item) : ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $item['id'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['name'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['slug'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['detail'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['description'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['cat_id'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['country_id'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $item['state'] ?>
                                                    </td>
                                                    </td>
                                                    <td>
                                                        <span>
                                                        <a href="./edit.php?id=<?php echo $item['id'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> 
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['id'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                            <i class="fa fa-close color-danger"></i>
                                                        </a>
                                                    </span>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>

                                            </tbody>
                                            
                                        </table>
                                        
                                    </div>
                                    <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <ul class="pagination">
                                                <?php if($page > 1) :?>
                                                    <li class="paginate_button page-item previous" id="DataTables_Table_0_previous"><a href="./index.php?page=<?php echo $page-1 ?>" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <?php endif ?>    
                                                <?php foreach ($list_page as $key => $value) : ?>
                                                    <?php if($value == "...") :?>
                                                        <li class="paginate_button page-item "><a onclick="return void();" href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $value ?></a></li>
                                                    <?php else : ?>
                                                        <li class="paginate_button page-item "><a href="./index.php?page=<?php echo $value ?>" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $value ?></a></li>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                                <?php if($page < $total_pages) :?>
                                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="./index.php?page=<?php echo $page+1 ?>" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                <?php endif ?>
                                                </ul>
                                            </div>
                                    </div>
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