<div class="row header-web">
    <div class="col p-2">
        <div class="category">
            <i onclick="showContentLeft()"></i>
            <h3 class="category_heading">
                <span>MOBILEPhone</span>
            </h3>

        </div>
        <div class=" ml-auto iconmenu">
            <button class="menu-btn">
                <i class="fas fa-bars bar"></i>
            </button>
        </div>
    </div>
    <div class="col p-8">
        <div class="input">
            <!-- <input type="text" placeholder="Nhập tên điện thoại cần tìm" id="search_admin">
            <button><i class="fa-solid fa-magnifying-glass"></i></button> -->
            <form class="form-search" method="GET">
                <input type="hidden" name="controller" value="product">
                <input type="hidden" name="action" value="search">
                <input type="search" name="timkiem" placeholder="Tìm kiếm sản phẩm">
                <input type="submit" value="tìm kiếm">
            </form>
        </div>
    </div>
    <div class="col p-2">
        <span class="header-account-name">
            Xin chào <?php echo $_SESSION['namenv'] ?>
        </span>
        <a href="./layout/logout.php">
            <button class="header-account-button">Đăng xuất</button>
        </a>
    </div>
</div>
<script src="../../public/js/responsive_admin.js"></script>