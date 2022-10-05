<?php
session_start();
require 'db/connect.php';
$category = mysqli_query($conn, "SELECT * FROM category WHERE status = 1");

$product = mysqli_query($conn, "SELECT * FROM sanpham WHERE status = 1 ORDER BY id DESC");
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
    <link rel="stylesheet" href="./assets/css/product.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
</head>

<body>
    <?php include "./base/header.php"; ?>
    <div class="app">
        <div class="app__container">
            <div class="grid">
                <div class="grid-row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category-heading">
                                <i class="category-heading__icon fas fa-list-ul"></i>
                                Danh Mục
                            </h3>
                            <ul class="category-list">
                                <?php foreach ($category as $key => $value) : ?>
                                    <li class="category-item category-item--active">
                                        <a href="" class="category-item__link">
                                            <?php echo $value['name_cate'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <h3 class="category-heading">Khoảng Giá</h3>
                            <ul class="category-price">
                                <li class="category-item_price">
                                    <input type="text" maxlength="13" placeholder="₫ TỪ" class="category-price_input">

                                    <input type="text" maxlength="13" placeholder="₫ ĐẾN" class="category-price_input">
                                </li>
                                <button class="category-price_btn">Tìm Kiếm</button>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__title">Sắp xếp theo</span>
                            <button class="home-filter-btn btn-item">Phổ biến</button>
                            <button class="home-filter-btn btn-item btn-item-primary">Mới nhất</button>
                            <button class="home-filter-btn btn-item">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__cost">Giá</span>
                                <i class="select-input__icon fas fa-angle-down"></i>

                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Từ Thấp đến Cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Từ Cao đến Thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">1</span>
                                /14
                            </div>

                            <div class="home-filter__page-control">
                                <a href="" class="home-filter__page-btn home-filter__page-btn--hide">
                                    <i class="home-filter__page-icon fas fa-angle-left"></i>
                                </a>
                                <a href="" class="home-filter__page-btn">
                                    <i class="home-filter__page-icon fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="grid-row">

                                <!--Product Item-->
                                <?php foreach ($product as $key => $value) : ?>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="">
                                            <img src="assets/img/<?php echo $value['image'] ?>" class="home-product-item__img" alt="<?php echo $value['image'] ?>"></img>
                                            <h4 class="home-product-item__name"><?php echo $value['name'] ?></h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current"><?php echo $value['price'] ?>đ</span>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__origin-name">
                                                    <?php echo $value['seller'] ?>
                                                </span>
                                                <span class="home-product-item__origin-place">
                                                    <?php echo $value['place'] ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">
                                    1
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    2
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    3
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    4
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    5
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    ...
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    14
                                </a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./base/footer.php"; ?>
</body>
<script src="./assets/bootstrap-5.1.1-dist/bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>

</html>