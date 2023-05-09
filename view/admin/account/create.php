<div class="au_main">
    <div class="author_group">
        <div class="form-edit-customer-header">THÊM TÀI KHOẢN</div>
        <form id="form-edit-customer">
            Username
            <input class="form-create-account-item2" type="text" name="username" value="">
            <div id="account-username-error-create">Tên đăng nhập không được để trống</div>
            <br>
            Password
            <input class="form-edit-customer-item3" type="text" name="password" value="">
            <div id="account-password-error-create">Tên đăng nhập không được để trống</div>
            <br>
            Quyền
            <select class="form-create-account-item" name="quyen" id="">
                <?php foreach ($result as $each) { ?>
                    <option value="<?php echo $each['MaPQ'] ?>"><?php echo $each['Quyen'] ?></option>
                <?php } ?>
            </select>
            <br>
            <button class="btn-create-account">Thêm</button>
        </form>
    </div>
</div>
<script src="../../public/js/account.js"></script>