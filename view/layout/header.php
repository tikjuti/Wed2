<?php
$row = getCategory();
?>
<div id="header" class="fixed-top head">
    <div class="container d-flex align-items-center logo mr-auto">
        <a href="index.php">SGUMOBILEPHONE</a>
        <nav class="nav-menu navbar navbar-light  ">
            <form class=" content-form d-flex  " action="index.php?list=search" method="GET">
                <input class=" form" type="text" placeholder="Search" aria-label="Search" id="txtsearch" value="<?php if (isset($_GET['name'])) {
                    echo ($_GET['name']);
                } ?>" name="name">
                <!-- <input type='submit' class='submit-btn-register' name="search" value="search"> -->
                <button type="" class="search" id="btnsearchheader">
                    <i class="fas fa-search "></i>
                </button>
            </form>
        </nav>
        <div class=" ml-auto iconmenu">
            <i class="fas fa-bars bar"></i>
        </div>
        <nav class="nav-menu navbar ml-auto menu-left">
            <ul class="total-menu">
                <li class=""><a class="menuitem" href="index.php">Trang chủ</a></li>
                <li class="menu-product"><a class="menuitem" href="index.php?control=sanpham">Sản Phẩm</a>
                    <ul class="component p-2">
                        <li class="component-item p-2">
                            <a href="index.php?control=sanpham">
                                <h4>Điện thoại</h4>
                            </a>
                            <ul>
                                <?php
                                foreach ($row as $item) {
                                    ?>
                                    <li>
                                        <a href="index.php?control=dienthoai&id=<?php echo $item['MaLoaiSP'] ?>">
                                            <h5>
                                                <?php echo $item['TenLoaiSP'] ?>
                                            </h5>
                                        </a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a class="menuitem" href="index.php?control=giohang">Giỏ hàng</a></li>
                <?php
                if (isset($_SESSION['namekh']) && ($_SESSION['namekh'] != "")) {
                    echo ' <li><div class="loginbtn menuitem"  style="width:auto;" id="loginbtn-register"><a href="userinfo.php">' . $_SESSION['namekh'] . '</a></div></li>';
                    echo ' <li><div class="loginbtn menuitem"  style="width:auto;" id="loginbtn-register"><a href="index.php?control=thoat"> Thoát </a></div></li>';
                } else {
                    ?>
                    <li>
                        <div class="loginbtn menuitem" style="width:auto;" id="loginbtn-register">Đăng nhập/Đăng ký</div>
                    </li>
                    <?php
                }
                ?>


                <!-- <li>
                    <div class="loginbtn menuitem" style="width:auto;" id="loginbtn-register">Đăng nhập/Đăng ký</div>
                </li> -->

            </ul>
        </nav>
    </div>
</div>
<script script src="public/js/javaa.js">
</script>