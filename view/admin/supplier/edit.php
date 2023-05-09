<div class="au_main">
    <div class="author_group">
        <div class="form-edit-customer-header">THÔNG TIN NHÀ CUNG CẤP</div>
        <form id="form-edit-customer">
            <input type="hidden" name="mancc" value="<?php echo $each['MaNCC'] ?>">
            <br>
            Tên nhà cung cấp
            <input class="form-edit-customer-item1" type="text" name="fullname" value="<?php echo $each['TenNCC'] ?>">
            <div id="supplier-fullname-error">Tên nhà cung cấp không được để trống</div>
            <br>
            Số điện thoại
            <input class="form-edit-supplier-item2" type="text" name="numberphone" value="<?php echo $each['SDT'] ?>">
            <div id="supplier-numberphone-error">Số điện thoại không được để trống</div>
            <br>
            Địa chỉ
            <input class="form-edit-supplier-item3" type="text" name="address" value="<?php echo $each['DiaChi'] ?>">
            <div id="supplier-address-error">Địa chỉ không được để trống</div>
            <br>
            Email
            <input class="form-edit-supplier-item4" type="text" name="email" value="<?php echo $each['Email'] ?>">
            <div id="supplier-email-error">Email không được để trống</div>
            <br>
            <button class="btn-update-supplier">Sửa</button>
        </form>
    </div>
</div>
<script src="../../public/js/supplier.js"></script>