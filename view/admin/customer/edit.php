<div class="au_main">
    <div class="author_group">
        <div class="form-edit-customer-header">THÔNG TIN KHÁCH HÀNG</div>
        <form id="form-edit-customer">
            <input type="hidden" name="ma" value="<?php echo $each['MaKH'] ?>">
            <br>
            <input type="hidden" name="matk" value="<?php echo $each['MaTK'] ?>">
            <br>
            Tên khách hàng
            <input class="form-edit-customer-item1" type="text" name="ten" value="<?php echo $each['TenKH'] ?>">
            <div id="customer-fullname-error">Tên khách hàng không được để trống</div>
            <br>
            Username
            <input class="form-edit-customer-item2" type="text" name="username" value="<?php echo $each['Username'] ?>">
            <div id="customer-username-error">Tên đăng nhập không được để trống</div>
            <br>
            Password
            <input class="form-edit-customer-item3" type="text" name="password" value="<?php echo $each['Password'] ?>">
            <div id="customer-password-error">Mật khẩu không được để trống</div>
            <br>
            Số điện thoại
            <input class="form-edit-customer-item4" type="text" name="sdt" value="<?php echo $each['SDTKH'] ?>">
            <div id="customer-numberphone-error">Số điện thoại không được để trống</div>
            <br>
            Ngày sinh
            <input class="form-edit-customer-item5" type="date" name="ngaysinh" value="<?php echo $each['NgaySinh'] ?>">
            <div id="customer-birthday-error">Ngày sinh không được để trống</div>
            <br>
            Email
            <input class="form-edit-customer-item6" type="text" name="email" value="<?php echo $each['EmailKH'] ?>">
            <div id="customer-email-error">Email không được để trống</div>
            <br>
            Địa chỉ
            <input class="form-edit-customer-item7" type="text" name="diachi" value="<?php echo $each['DiaChi'] ?>">
            <div id="customer-address-error">Địa chỉ không được để trống</div>
            <br>
            <button class="btn-edit-customer">Sửa</button>
        </form>
    </div>
</div>
<script src="../../public/js/customer.js"></script>