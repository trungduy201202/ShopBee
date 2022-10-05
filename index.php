<?php
    @session_start();
    require 'db/connect.php';
    $sql = "SELECT * FROM `qltk`";
    $rs = mysqli_query($conn, $sql);
    $list_account = array();

    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_array($rs)) {
            $list_account[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">   
    <link rel="stylesheet" href="./assets/bootstrap-5.1.1-dist/bootstrap-5.1.1-dist/css/bootstrap.min.css">
</head>
<body>
    <?php include "./base/header.php";?>
    <div class="app-container">
            <!-- Banner -->
            <div class="home-banner">
                <div class="banner">
                    <div class="banner-left">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="./assets/img/banner-quang-cao-giay1.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./assets/img/banner-quang-cao-giay-2.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="./assets/img/banner-quang-cao-giay3.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    <div class="banner-right">
                        <a href="" class="banner-right__link">
                            <img src="./assets/img/banner-quang-cao-giay4.jpg" alt="" class="banner-right_img">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Featured Search -->
            <div class="featured-search">
                <div class="home-featured-search">
                    <div class="header-featured-search">
                        <div class="featured-search__title">
                            <i class="featured-search__title-icon fas fa-search"></i>
                            <span class="featured-search__title-text">Tìm Kiếm Nổi Bật</span>
                        </div>
                        <div class="featured-search__see-more">
                            <a href="product.php" class="featured-search__see-more-text">Xem Tất Cả></a>
                        </div>
                    </div>
                    <div class="main-featured-search">
                        <div class="row">
                            <div class="col-3">
                                <a href="" class="featured-search__item">
                                    <div class="featured-search__group-img">
                                        <img src="./assets/img/search-noibat1.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat1.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat1.jpg" alt="" class="featured-search__img">
                                    </div>
                                    <div class="featured-search__content red">
                                        <span class="featured-search__content-title">Nike</span>
                                        <span class="featured-search__content-sub-title">225 sản phẩm</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="featured-search__item">
                                    <div class="featured-search__group-img">
                                        <img src="./assets/img/search-noibat2.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat2.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat2.jpg" alt="" class="featured-search__img">
                                    </div>
                                    <div class="featured-search__content blue">
                                        <span class="featured-search__content-title">Adidas</span>
                                        <span class="featured-search__content-sub-title">225 sản phẩm</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="featured-search__item">
                                    <div class="featured-search__group-img">
                                        <img src="./assets/img/search-noibat3.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat3.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat3.jpg" alt="" class="featured-search__img">
                                    </div>
                                    <div class="featured-search__content yellow">
                                        <span class="featured-search__content-title">Yeezy</span>
                                        <span class="featured-search__content-sub-title">225 sản phẩm</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="" class="featured-search__item">
                                    <div class="featured-search__group-img">
                                        <img src="./assets/img/search-noibat4.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat4.jpg" alt="" class="featured-search__img">
                                        <img src="./assets/img/search-noibat4.jpg" alt="" class="featured-search__img">
                                    </div>
                                    <div class="featured-search__content green">
                                        <span class="featured-search__content-title">Balenciaga</span>
                                        <span class="featured-search__content-sub-title">225 sản phẩm</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main container -->
            <div class="main-container">
                <div class="home-main-container">
                    <div class="header-main-container">
                        <div class="header-main-container__title">Gợi Ý Hôm Nay</div>
                    </div>
                    <div class="body-main-container">
                        <div class="main-container-content">
                            <div class="row">
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/a2/2d/e5/1f76f5016484ad87e5e0664d899f9ae6.jpg" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">
                                                    <span class="ad">
                                                        Ad
                                                    </span>
                                                    Túi vô hình cho nam C-string Thong Underwear Briefs Panty Lingerie Black
                                                </span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price">190.000 ₫</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/72/78/52/59d3c9c4d0ef6b711a991ff09547a4ed.png.webp" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">Điện Thoại Samsung Galaxy Note 10 Plus (256GB/12GB) - Hàng Chính Hãng</span>
                                            </div>
                                            <div class="main-container__item-vote">
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="none-vote fas fa-star"></i>
                                                <span class="number">(5)</span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price price-sale">190.000 ₫</span>
                                                <span class="main-container__item-discount">-15%</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/a2/2d/e5/1f76f5016484ad87e5e0664d899f9ae6.jpg" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">Túi vô hình cho nam C-string Thong Underwear Briefs Panty Lingerie Black</span>
                                            </div>
                                            <div class="main-container__item-vote">
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="has-vote fas fa-star"></i>
                                                <i class="none-vote fas fa-star"></i>
                                                <div class="seperate"></div>
                                                <span class="quantity-sold">Đã bán 1000+</span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price">190.000 ₫</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/a2/2d/e5/1f76f5016484ad87e5e0664d899f9ae6.jpg" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">Túi vô hình cho nam C-string Thong Underwear Briefs Panty Lingerie Black</span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price">190.000 ₫</span>
                                            </div>
                                            <div class="badge-price">
                                                <img src="https://salt.tikicdn.com/ts/upload/51/ac/cc/528e80fe3f464f910174e2fdf8887b6f.png" alt="" class="badge-price__img">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/a2/2d/e5/1f76f5016484ad87e5e0664d899f9ae6.jpg" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">Túi vô hình cho nam C-string Thong Underwear Briefs Panty Lingerie Black</span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price">190.000 ₫</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="main-container__item">
                                        <div class="main-container__item-picture">
                                            <img src="https://salt.tikicdn.com/cache/200x200/ts/product/a2/2d/e5/1f76f5016484ad87e5e0664d899f9ae6.jpg" alt="" class="main-container__img">
                                            <img src="https://salt.tikicdn.com/ts/upload/dc/0d/49/ef9dc5d8164bd62b011e54276502b342.png" alt="" class="main-container__img-freeship">
                                        </div>
                                        <div class="main-container__item-info">
                                            <div class="main-container__item-label">
                                                <span class="main-container__item-name">Túi vô hình cho nam C-string Thong Underwear Briefs Panty Lingerie Black</span>
                                            </div>
                                            <div class="main-container__item-cost">
                                                <span class="main-container__item-price">190.000 ₫</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-container__see-more">
                            <a href="product.php" class="see-more">
                                Xem Thêm
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php include "./base/footer.php";?>
</body>
<script src="./assets/bootstrap-5.1.1-dist/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
</html>