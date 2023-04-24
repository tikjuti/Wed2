<form id="form-edit-customer">
    <input type="hidden" name="ma" value="<?php echo $each['MaKH'] ?>">
    <br>
    <input type="hidden" name="matk" value="<?php echo $each['MaTK'] ?>">
    <br>
    Tên khách hàng
    <input type="text" name="ten" value="<?php echo $each['TenKH'] ?>">
    <br>
    Username
    <input type="text" name="username" value="<?php echo $each['Username'] ?>">
    <br>
    Password
    <input type="text" name="password" value="<?php echo $each['Password'] ?>">
    <br>
    Số điện thoại
    <input type="text" name="sdt" value="<?php echo $each['SDTKH'] ?>">
    <br>
    Ngày sinh
    <input type="date" name="ngaysinh" value="<?php echo $each['NgaySinh'] ?>">
    <br>
    Email
    <input type="text" name="email" value="<?php echo $each['EmailKH'] ?>">
    <br>
    Địa chỉ
    <input type="text" name="diachi" value="<?php echo $each['DiaChi'] ?>">
    <br>
    <button class="btn-edit-customer">Sửa</button>
</form>