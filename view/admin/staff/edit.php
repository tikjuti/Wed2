<div class="au_main">
    <div class="author_group">
        <div class="form-edit-customer-header">THÔNG TIN NHÂN VIÊN</div>
        <form id="form-edit-customer">
            <input type="hidden" name="manv" value="<?php echo $each['MaNV'] ?>">
            <input type="hidden" name="matk" value="<?php echo $each['MaTK'] ?>">
            <br>
            Tên nhân viên
            <input class="form-create-staff-item1" type="text" name="fullname" value="<?php echo $each['TenNV'] ?>">
            <div id="staff-fullname-error">Tên nhân viên không được để trống</div>
            <br>
            Số điện thoại
            <input class="form-edit-staff-item2" type="text" name="number" value="<?php echo $each['SDTNV'] ?>">
            <div id="staff-number-error">Số điện thoại không được để trống</div>
            <br>
            Ngày sinh
            <input class="form-create-staff-item3" type="date" name="date" value="<?php echo $each['NgaySinh'] ?>">
            <div id="staff-date-error">Ngày sinh không được để trống</div>
            <br>
            Email
            <input class="form-edit-staff-item4" type="text" name="email" value="<?php echo $each['EmailNV'] ?>">
            <div id="staff-email-error">Email không được để trống</div>
            <br>
            Địa chỉ
            <input class="form-create-staff-item5" type="text" name="address" value="<?php echo $each['DiaChiNV'] ?>">
            <div id="staff-address-error">Địa chỉ không được để trống</div>
            <br>
            Username
            <input class="form-edit-staff-item3" type="text" name="username" value="<?php echo $each['Username'] ?>">
            <div id="staff-username-error">Username không được để trống</div>
            <br>
            Password
            <input class="form-create-staff-item7" type="password" name="password" value="<?php echo $each['Password'] ?>">
            <div id="staff-password-error">Password không được để trống</div>
            <br>
            <button class="btn-update-staff">Sửa</button>
        </form>
    </div>
</div>
<script src="../../public/js/staff.js"></script>