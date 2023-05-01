<?php
// session_start();

if ($action == "delete" || $action == "update")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Khách hàng') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                $tmp2 = preg_split("/\./", $value2);
                if ($tmp2[0] == 'edit' && $tmp2[1]) {
                    $statusEdit = 1;
                } else
                if ($tmp2[0]  == 'delete' && $tmp2[1]) {
                    $statusDelete = 1;
                }
            }
        }
    }
}

switch ($action) {
    case '':
        $sql = "select * from khachhang join taikhoan on khachhang.MaTK = taikhoan.MaTK where IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'edit':
        $sql = "select * from khachhang join taikhoan on khachhang.MaTK = taikhoan.MaTK
        where MaKH ='$ma'";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update khachhang
        set 
            TenKH = '$ten',
            SDTKH = '$sdt',
            NgaySinh = '$ngaysinh',
            EmailKH = '$email',
            DiaChi = '$diachi'
        where MaKH ='$ma'";
        $sql1 = "update taikhoan
        set 
            Username = '$username',
            Password = '$password'
        where MaTK ='$matk'";
        (new Connnect())->excute($sql);
        (new Connnect())->excute($sql1);
        break;
    case 'delete':
        $sql = "update khachhang set IsDeleted = 1
        where MaKH ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
