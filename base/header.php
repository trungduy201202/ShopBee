<?php
include "db/connect.php";
?>
<header class="header">
    <div class="grid">
        <!--Header Nav Bar-->
        <nav class="nav-bar">
            <ul class="nav-bar-list">
                <li class="nav-bar-item nav-bar-item__cursor nav-bar-item--hover_qr nav-bar-item--seperate">
                    Tải ứng dụng ShopBee
                    <!--Header QR Code-->
                    <div class="nav-bar_QR">
                        <img src="./assets/img/d91264e165ed6facc6178994d5afae79.png" alt="QR code" class="QR-code">
                        <div class="nav-bar_apps">
                            <a href="" class="QR-link">
                                <img src="./assets/img/f4f5426ce757aea491dce94201560583.png" alt="Google Play" class="app_code">
                            </a>
                            <a href="" class="QR-link">
                                <img src="./assets/img/39f189e19764dab688d3850742f13718.png" alt="App Store" class="app_code">
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-bar-item">
                    <span class="nav-bar-item--nope">Kết nối</span>
                    <a href="https://www.facebook.com/trungduy02" class="navbar-item-link">
                        <i class="navbar-item-link__icon fab fa-facebook"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-bar-list"> 
                <?php if (isset($_SESSION['login-user']) == true) { ?>
                    <li class="nav-bar-item nav-bar-user">
                        <span class="nav-bar-user__name">
                            <?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?>
                        </span>
                        <ul class="nav-bar-user__menu">
                            <li class="nav-bar-user__item">
                                <a href="infoUser.php">Thông tin của tôi</a>
                            </li>

                            <li class="nav-bar-user__item">
                                <a href="changePassword.php">Đổi mật khẩu</a>
                            </li>
                            <li class="nav-bar-user__item nav-bar-user__item--red">
                                <a href="logout.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="nav-bar-item navbar-item-link nav-bar-item--bold nav-bar-item--seperate"><a href="register.php">Đăng Ký</a></li>
                    <li class="nav-bar-item navbar-item-link nav-bar-item--bold"><a href="login.php">Đăng Nhập</a></li>
                <?php } ?>
            </ul>
        </nav>
        <!--Header Logo-->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="index.php">
                    <img src="./assets/img/Trung Duy.png" alt="" class="header-logo__img">
                </a>
            </div>

            <div class="header__search">
                <div class="header__search-input-wrap">
                    <input type="text" class="header__search-input" placeholder="Nhập tên sản phẩm cần tìm kiếm">
                    <!--Header Search History-->
                    <div class="header__search-history">
                        <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                        <ul class="header__search-history-list">
                            <li class="header__search-history-item">
                                <a href="">Sneaker</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Adidas</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Adidas</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Adidas</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Adidas</a>
                            </li>
                            <li class="header__search-history-item">
                                <a href="">Adidas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="header__search-btn">
                    <i class="header__search-icon fas fa-search"></i>
                </button>
            </div>

            <div class="header__cart">
                <div class="header__cart-wrap">
                    <a href="cart.php">
                        <i class="header__cart--icon fas fa-shopping-cart"></i>
                    </a>

                    <!--Header No Cart-->
                    <!--<div class="header__cart-list header__cart-list-none-cart">
                                    <img src="./assets/img/no-carts.png" alt="" class="header__cart-none-cart-img">
                                <span class="header__cart-none-product">
                                    Chưa có sản phẩm
                                </span>
                            </div>-->
                </div>
            </div>
        </div>
    </div>
</header>