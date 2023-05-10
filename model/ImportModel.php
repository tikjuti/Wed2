<?php
if ($action == "billstatus" || $action == "addtocart" || $action == "payimport")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Nhập hàng') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                if ($key2 == 'cart' && $value2) {
                    $statusCart = 1;
                } else
                if ($key2  == 'import' && $value2) {
                    $statusImport = 1;
                } else
                if ($key2  == 'create' && $value2) {
                    $statusCreate = 1;
                }
            }
        }
    }
}
switch ($action) {
    case '':
        $sql = "select * from sanpham";
        $result = (new Connnect())->select($sql);
        $sql1 = "select * from nhacungcap";
        $result1 = (new Connnect())->select($sql1);
        break;
    case 'addtocart':
        session_start();
        if (empty($_SESSION['cartimport'][$mancc][$ma])) {
            $sql = "select * from sanpham where MaSP='$ma'";
            $result = (new Connnect())->select($sql);
            $each = mysqli_fetch_array($result);
            $sql1 = "select * from nhacungcap where MaNCC='$mancc'";
            $result1 = (new Connnect())->select($sql1);
            $each1 = mysqli_fetch_array($result1);
            $_SESSION['cartimport'][$mancc][$ma]['MaSP'] = $each['MaSP'];
            $_SESSION['cartimport'][$mancc][$ma]['TenSP'] = $each['TenSP'];
            $_SESSION['cartimport'][$mancc][$ma]['AnhSP'] = $each['AnhSP'];
            $_SESSION['cartimport'][$mancc][$ma]['MaNCC'] = $mancc;
            $_SESSION['cartimport'][$mancc][$ma]['TenNCC'] = $each1['TenNCC'];
            $_SESSION['cartimport'][$mancc][$ma]['GiaSP'] = $each['GiaSP'];
            $_SESSION['cartimport'][$mancc][$ma]['quantity'] = 1;
        } else {
            $_SESSION['cartimport'][$mancc][$ma]['quantity']++;
        }
        break;
    case 'payimport':
        for ($i = 0; $i < count($ma); $i++) {
            $sql = "select * from sanpham where MaSP='$ma[$i]'";
            $result = (new Connnect())->select($sql);
            $each = mysqli_fetch_array($result);
            $new_quantity = $each['SoLuongSP'] + $quantity[$i];
            $sql1 = "update sanpham
            set 
            SoLuongSP = '$new_quantity'
            where MaSP ='$ma[$i]'";
            (new Connnect())->excute($sql1);
        }


        $arrNCC_PN = [];
        $today = date("Y-m-d");
        session_start();
        $manv = $_SESSION['manv'];
        $cart = $_SESSION['cartimport'];
        foreach ($cart as $cart1) {
            foreach ($cart1 as $ma => $each) {
                if (empty($arrNCC_PN[$each['MaNCC']][$each['MaSP']])) {
                    $arrNCC_PN[$each['MaNCC']][$each['MaSP']]['MaNCC'] = $each['MaNCC'];
                    $arrNCC_PN[$each['MaNCC']][$each['MaSP']]['MaSP'] = $each['MaSP'];
                    $arrNCC_PN[$each['MaNCC']][$each['MaSP']]['quantity'] = $each['quantity'];
                    $arrNCC_PN[$each['MaNCC']][$each['MaSP']]['GiaSP'] = $each['GiaSP'];
                }
            }
        }
        foreach ($arrNCC_PN as $each) {
            $tongtien = 0;
            foreach ($each as $key => $each1) {
                $thanhtien = $each1['quantity'] * $each1['GiaSP'];
                $tongtien += $thanhtien;
                $mancc = $each1["MaNCC"];
            }
            $sql2 = "insert into phieunhap(MaNCC, NgayNhap, MaNV, TongTien)
            values ('$mancc', '$today', '$manv', '$tongtien')";
            $maPN = (new Connnect())->last_id($sql2);
            foreach ($each as $key => $each1) {
                $ma = $each1['MaSP'];
                $quantity = $each1['quantity'];
                $thanhtien = $each1['quantity'] * $each1['GiaSP'];
                $sql3 = "insert into ctphieunhap(MaPN, MaSP, SoLuong, TongTien)
                values ('$maPN', '$ma', '$quantity', '$thanhtien')";
                (new Connnect())->excute($sql3);
                unset($_SESSION['cartimport'][$mancc][$ma]);
            }
        }
        break;
    case 'invoices':
        $sql = "select * from phieunhap";
        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'detailinvoices':
        $sql = "select * from ctphieunhap where MaPN = '$ma'";
        $result = (new Connnect())->select($sql);
        break;
}
