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
            </ul>
            <ul class="nav-bar-list">
                <?php if (isset($_SESSION['login-admin'])) { ?>
                    <li class="nav-bar-item nav-bar-user">
                        <span class="nav-bar-user__name">
                            <?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?>
                        </span>
                        <ul class="nav-bar-user__menu">
                            <li class="nav-bar-user__item">
                                <a href="infoUser.php">Thông tin của tôi</a>
                            </li>

                            <li class="nav-bar-user__item nav-bar-user__item--red">
                                <a href="logout.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                <?php } ?>
            </ul>
        </nav>
        <!--Header Logo-->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="admin.php">
                    <img src="./assets/img/Trung Duy.png" alt="" class="header-logo__img">
                </a>
            </div>
        </div>
    </div>
</header>