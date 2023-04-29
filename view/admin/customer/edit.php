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
            <br>
            Username
            <input class="form-edit-customer-item2" type="text" name="username" value="<?php echo $each['Username'] ?>">
            <br>
            Password
            <input class="form-edit-customer-item3" type="text" name="password" value="<?php echo $each['Password'] ?>">
            <br>
            Số điện thoại
            <input class="form-edit-customer-item4" type="text" name="sdt" value="<?php echo $each['SDTKH'] ?>">
            <br>
            Ngày sinh
            <input class="form-edit-customer-item5" type="date" name="ngaysinh" value="<?php echo $each['NgaySinh'] ?>">
            <br>
            Email
            <input class="form-edit-customer-item6" type="text" name="email" value="<?php echo $each['EmailKH'] ?>">
            <br>
            Địa chỉ
            <input class="form-edit-customer-item7" type="text" name="diachi" value="<?php echo $each['DiaChi'] ?>">
            <br>
            <button class="btn-edit-customer">Sửa</button>
        </form>
    </div>
</div>
<script src="../../public/js/customer.js"></script>