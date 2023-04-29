<?php

if ($action == "delete" || $action == "update")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

switch ($action) {
    case '':
        $sql = "select * from phanquyen where IsDeleted=0";
        $result = (new Connnect())->select($sql);
        break;
    case 'store':
        $sql = "insert into sanpham(TenSP, MaLoaiSP, GiaSP, SoLuongSP, ManHinh, Camera, DungLuong, Chip, AnhSP, MaNCC)
        values ('$ten', '$maloai', '$gia', '$soluong', '$manhinh', '$camera', '$dungluong', '$chip', '$anh', '$mancc')";
        (new Connnect())->excute($sql);
        break;
    case 'edit':
        $sql = "select * from danhmuccn 
        join ctquyencn on danhmuccn.MaCN = ctquyencn.MaCN
        join phanquyen on ctquyencn.MaQuyen = phanquyen.MaPQ
        where MaQuyen ='$ma' and Chon=1";
        $sql1 = "select * from phanquyen where MaPQ ='$ma'";
        $result = (new Connnect())->select($sql);
        $result1 = (new Connnect())->select($sql1);
        $each = mysqli_fetch_array($result1);
        $arr1 = [0, 0, 0];
        $arr2 = [0, 0, 0];
        $arr3 = [0, 0, 0];
        $arr4 = [0, 0, 0];
        $arr5 = [0, 0, 0];
        $arr6 = [0, 0, 0];
        $title = $each['Quyen'];
        $ma = $each['MaPQ'];

        foreach ($result as $each) {
            switch ($each['MaCN']) {
                case 1: {
                        switch ($each['HanhDong']) {
                            case 'create':
                                $arr1[0] = 1;
                                break;
                            case 'edit':
                                $arr1[1] = 1;
                                break;
                            case 'delete':
                                $arr1[2] = 1;
                                break;
                        }
                    }
                    break;
                case 2:
                    switch ($each['HanhDong']) {
                        case 'create':
                            $arr2[0] = 1;
                            break;
                        case 'edit':
                            $arr2[1] = 1;
                            break;
                        case 'delete':
                            $arr2[2] = 1;
                            break;
                    }
                    break;
                case 3:
                    switch ($each['HanhDong']) {
                        case 'create':
                            $arr3[0] = 1;
                            break;
                        case 'edit':
                            $arr3[1] = 1;
                            break;
                        case 'delete':
                            $arr3[2] = 1;
                            break;
                    }
                    break;
                case 4:
                    switch ($each['HanhDong']) {
                        case 'detail':
                            $arr4[0] = 1;
                            break;
                        case 'process':
                            $arr4[1] = 1;
                            break;
                    }
                    break;
                case 5:
                    switch ($each['HanhDong']) {
                        case 'statistics':
                            $arr5[0] = 1;
                            break;
                    }
                    break;
                case 6:
                    switch ($each['HanhDong']) {
                        case 'create':
                            $arr6[0] = 1;
                            break;
                        case 'edit':
                            $arr6[1] = 1;
                            break;
                        case 'delete':
                            $arr6[2] = 1;
                            break;
                    }
                    break;
            }
        }
        break;
    case 'update':
        $sql = "update sanpham
            set 
                TenSP = '$ten',
                AnhSP = '$anh',
                GiaSP = '$gia'
            where MaSP ='$ma'";
        (new Connnect())->excute($sql);
        break;
    case 'delete':
        $sql = "update phanquyen set IsDeleted = 1
            where MaPQ ='$ma'";
        (new Connnect())->excute($sql);
        break;
}
