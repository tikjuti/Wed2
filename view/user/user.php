<div id="user" style="display: grid;grid-template-columns: 15% 85%;gap: 10px; padding-top:100px">
    <div id="left">
        <div>
            <i class="fa-solid fa-user"></i>
            <a href="index.php?control=user&action=user"">Thông tin tài khoản</a></div>
        <div>
            <i class=" fa-solid fa-list"></i>
            <a href="index.php?control=user&action=order">Lịch sử mua hàng</a>
        </div>
    </div>
    <div id="content">
        <?php require 'view/user/' . $view . '.php'; ?>
    </div>
</div>