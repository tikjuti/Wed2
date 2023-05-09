<div class="au_main">
    <div class="author_group">
        <div class="form-edit-customer-header">THÔNG TIN TÀI KHOẢN</div>
        <form id="form-edit-customer">
            <input type="hidden" name="matk" value="<?php echo $each['MaTK'] ?>">
            <br>
            Username
            <input class="form-create-account-item2" type="text" name="username" value="<?php echo $each['Username'] ?>">
            <div id="account-username-error">Tên đăng nhập không được để trống</div>
            <br>
            Password
            <input class="form-edit-customer-item3" type="text" name="password" value="<?php echo $each['Password'] ?>">
            <div id="account-password-error">Mật khẩu không được để trống</div>
            <br>
            Quyền
            <select class="form-create-account-item" name="quyen" id="">
                <?php foreach ($result1 as $each1) { ?>
                    <option value="<?php echo $each1['MaPQ'] ?>"><?php echo $each1['Quyen'] ?></option>
                <?php } ?>
            </select>
            <br>
            <button class="btn-update-account">Sửa</button>
        </form>
    </div>
</div>
<script src="../../public/js/account.js"></script>