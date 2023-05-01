<div class="row">
    <div class="col p-2">
        <div class="category">
            <i onclick="showContentLeft()" class="fa-solid fa-bars header-icon"></i>
            <h3 class="category_heading">
                <span>PhoneShop</span>
            </h3>
        </div>
    </div>
    <div class="col p-8">
        <div class="input">
            <input type="text" placeholder="Nhập tên điện thoại cần tìm" id="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
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