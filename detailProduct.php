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
    <link rel="stylesheet" href="./assets/css/detailProduct.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <?php include "./base/header.php";?>
    <div class="app">
        <a class="btn-back" href="product.php">Trở Lại Sản Phẩm</a>
        <div class="product-center">
            <div class="img-show">
                <img src="./assets/img/NikeAir.jpg" alt="">
                <div class="img-gallery">
                    <img src="./assets/img/NikeAir.jpg" alt="" class="active">
                    <img src="./assets/img/NikeAir.jpg" alt="">
                    <img src="./assets/img/NikeAir.jpg" alt="">
                    <img src="./assets/img/NikeAir.jpg" alt="">
                    <img src="./assets/img/NikeAir.jpg" alt="">
                </div>
            </div>
            <div class="content">
                <h2>Nike Air Force</h2>
                <p class="info">
                    Nike Air Force được cho là một trong những đôi sneaker vĩ đại nhất mọi thời đại.
                </p>
                <h5 class="price">30đ</h5>

                <div class="btn-controller">
                    <div class="amount-btn">
                        <button type="button" class="btn-amount">
                            <i class="fas fa-minus"></i>
                        </button>
                        <h2>1</h2>
                        <button type="button" class="btn-amount">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <a href="" class="btn-add_to_cart">Thêm Vào Giỏ Hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "./base/footer.php";?>
</body>
</html>