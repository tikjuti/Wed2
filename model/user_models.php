<?php
require './Connect.php';
session_start();
// include 'user.php';
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM taikhoan WHERE Username='" . $user . "' AND Password='" . $pass . "'";
    $query = (new Connnect())->select($sql);
    $array = mysqli_fetch_array($query);
    $role = $array['MaPQ'];
    $_SESSION['curentuser'] = $array;

    if ($role == 2) {
        $sql3 = "SELECT * FROM taikhoan join khachhang on taikhoan.MaTK = khachhang.MaTK
        WHERE Username='" . $user . "' AND Password='" . $pass . "'";
        $query3 = (new Connnect())->select($sql3);
        $array1 = mysqli_fetch_array($query3);
    } else {
        $sql3 = "SELECT * FROM taikhoan join nhanvien on taikhoan.MaTK = nhanvien.MaTK
        WHERE Username='" . $user . "' AND Password='" . $pass . "'";
        $query3 = (new Connnect())->select($sql3);
        $array1 = mysqli_fetch_array($query3);
    }
    $arrPQ = [];
    $sql1 = "SELECT * FROM danhmuccn";
    $sql2 = "SELECT * FROM ctquyencn WHERE MaQuyen = '$role'";
    $result = (new Connnect())->select($sql1);
    $result2 = (new Connnect())->select($sql2);
    foreach ($result as $each) {
        $ma_cn = $each['MaCN'];
        $ten_cn = $each['TenCN'] . "." . $each['Icon'];
        foreach ($result2 as $each2) {
            if ($each2['MaCN'] == $ma_cn) {
                if (empty($arrPQ[$ten_cn]))
                    $arrPQ[$ten_cn] = [
                        'MaCN' => $ma_cn,
                        'HanhDong' => []
                    ];
            }
        }
        foreach ($result2 as $each2) {
            if ($each2['MaCN'] == $ma_cn) {
                $hd = $each2['HanhDong'] . "." . $each2['Chon'];
                array_push($arrPQ[$ten_cn]['HanhDong'], $hd);
            }
        }
    }
    $arrTenCN = [];
    foreach ($arrPQ as $key => $value) {
        $flag = 0;
        foreach ($value['HanhDong'] as $key2 => $value2) {
            $tmp2 = preg_split("/\./", $value2);
            if ($tmp2[1]) {
                $flag = 1;
            }
        }
        if ($flag) array_push($arrTenCN, $key);
    }
    $_SESSION['arrTenCN'] = $arrTenCN;
    $_SESSION['arrPQ'] = $arrPQ;
    if ($query->num_rows == 0) {
        echo json_encode(
            array(
                'status' => 0,
                'message' => 'thông tin đăng nhập không thành công',
            )
        );
        exit;
    } else {
        if ($role == 2) {
            $_SESSION['MaPQ'] = $role;
            $_SESSION['iduser'] = $array['MaTK'];
            $_SESSION['namekh'] = $array1['TenKH'];
            echo 'customer';
        } else {
            $_SESSION['MaPQ'] = $role;
            $_SESSION['iduser'] = $array['MaTK'];
            $_SESSION['namenv'] = $array1['TenNV'];
            echo 'success';
        }
    }
}
