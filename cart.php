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
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <?php include "./base/header.php";?>
    <div class="app">
        <div class="content-wrapper">
            <div class="content">
                <h5>Sản Phẩm</h5>
                <h5>Đơn giá</h5>
                <h5>Số lượng</h5>
                <h5>Tổng giá</h5>
                <span></span>
            </div>
            <hr>
        </div>
        <div class="item-wrapper">
            <div class="title">
                <img src="./assets/img/NikeAir.jpg" alt="">
                <div>
                    <h5 class="name">Nike Air Force</h5>
                </div>
            </div>
            <h5 class="price">$30</h5>
            <div class="amount-btn">
                <button type="button" class="btn-amount">
                    <i class="fas fa-minus"></i>
                </button>
                <h2>1</h2>
                <button type="button" class="btn-amount">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <h5 class="total-price">$30</h5>
            <button class="remove-btn" type="button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
        <div class="item-wrapper">
            <div class="title">
                <img src="./assets/img/NikeAir.jpg" alt="">
                <div>
                    <h5 class="name">Nike Air Force</h5>
                </div>
            </div>
            <h5 class="price">$30</h5>
            <div class="amount-btn">
                <button type="button" class="btn-amount">
                    <i class="fas fa-minus"></i>
                </button>
                <h2>1</h2>
                <button type="button" class="btn-amount">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <h5 class="total-price">$30</h5>
            <button class="remove-btn" type="button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
        <hr>
        <div class="link-container">
            <a class="link-btn" href="product.php">Tiếp tục mua sắm</a>
            <button type="button" class="link-btn clear-btn">Xóa tất cả</button>
        </div>
        <div class="total-wrapper">
            <div>
                <article>
                    <p>
                        Chi Phí:
                        <span>$30</span>
                    </p>
                    <p>
                        Phí Giao Hàng:
                        <span>$5</span>
                    </p>
                    <hr>
                    <h4>
                        Tổng:
                        <span>$35</span>
                    </h4>
                </article>
                <a href="" class="btn-pay">Thanh Toán</a>
            </div>
        </div>
    </div>
    <?php include "./base/footer.php";?>

</body>
</html>