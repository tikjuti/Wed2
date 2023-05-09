<?php
if(isset($_POST['fullname'])&&!empty($_POST['fullname'])){
    updateUser($_SESSION['iduser'],$_POST['fullname'],$_POST['phone'],$_POST['date'],$_POST['email'],$_POST['address']);
}

if(isset($_SESSION['iduser'])){
    $result = getUser($_SESSION['iduser']);
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['MaKH'];
        $user_fullname = $row['TenKH'];
        $user_address = $row['DiaChi'];
        $user_numberphone = $row['SDTKH'];
        $user_date = $row['NgaySinh'];
        $user_email = $row['EmailKH'];
    }
    
}
// var_dump($result);

?>
<form id="update" action="index.php?control=user" method=POST>
    <h2>Thông tin cá nhân</h2>
    <div id="form-update">
        Tên Khách Hàng:
        <br><input type="text" value="<?php echo $user_fullname ?>" name="fullname">
    </div>
    <div id="form-update">
        Số Điện Thoại:
        <br><input type="text" value="<?php echo $user_numberphone ?>" name="phone">
    </div>
    <div id="form-update">
        Ngày Sinh:
        <br> <input type="date" value="<?php echo $user_date?>" name="date">
    </div>
    <div id="form-update">
        Email:
        <br><input type="email" value="<?php echo $user_email?>" name="email">
    </div>
    <div id="form-update">
        Địa Chỉ
        <br><input type="text" value="<?php echo $user_address?>" name="address">
    </div>
    <div id="form-update">
    <br><input type="submit" value="Cập nhật">
    </div>
</form>