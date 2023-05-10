<?php

if ($action == "delete")
    require '../model/Connect.php';
else
    require '../../model/Connect.php';

if (isset($_SESSION['arrPQ'])) {
    $arrPQ = $_SESSION['arrPQ'];
    foreach ($arrPQ as $key => $value) {
        $tmp = preg_split("/\./", $key);
        if ($tmp[0] == 'Sản phẩm') {
            foreach ($value['HanhDong'] as $key2 => $value2) {
                if ($key2 == 'edit' && $value2) {
                    $statusEdit = 1;
                } else
                    if ($key2  == 'delete' && $value2) {
                    $statusDelete = 1;
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

        $so_sanpham_1_trang = 5; //số sản phẩm trong một trang


        // Tính toán phân trang 
        $sql_sanpham = "SELECT COUNT(*) FROM sanpham 
        WHERE TenSP LIKE '%$timkiem%' AND IsDeleted = 0 LIMIT $so_sanpham_1_trang "; //Đếm số sản phẩm

        $result = (new Connnect())->select($sql_sanpham); // mảng sản phẩm
        $each = mysqli_fetch_array($result); // kết quả sản phẩm
        $so_sanpham = $each['COUNT(*)']; // tổng số sản phẩm

        $so_trang = ceil($so_sanpham / $so_sanpham_1_trang); //số phân trang
        $bo_qua = $so_sanpham_1_trang * ($trang - 1); // bỏ qua số sản phẩm đã được phân trang trước đó

        //Hiển thị sản phẩm chưa được phân trang 
        $sql = "SELECT * FROM sanpham 
        WHERE TenSP LIKE '%$timkiem%' AND IsDeleted = 0 LIMIT $so_sanpham_1_trang OFFSET $bo_qua ";

        $result = (new Connnect())->select($sql);
        $each = mysqli_fetch_array($result);

        break;
    case 'create': // combobox loại sản phẩm cho thêm sản phẩm

        $sql = "SELECT * FROM loaisanpham";
        $result = (new Connnect())->select($sql);

        $sql1 = "SELECT * FROM nhacungcap";
        $result1 = (new Connnect())->select($sql1);;
        break;
    case 'store': //Thêm sản phẩm

        $sql = "INSERT INTO sanpham(TenSP, AnhSP, GiaSP, MaLoaiSP,SoLuongSP,ManHinh,Camera,DungLuong,Chip,MaNCC,IsDeleted)
        values ('$ten', '$file_name', '$gia', '$maloai','$soluong',
        '$manhinh','$camera','$dungluong','$chip','$mancc','0')";

        $result = (new Connnect())->select($sql);
        break;
    case 'edit': // Sửa sản phẩm


        $sql2 = "SELECT * FROM loaisanpham";
        $result2 = (new Connnect())->select($sql2);

        // $row = mysqli_fetch_assoc($result1);
        $sql3 = "SELECT * FROM nhacungcap";
        $result3 = (new Connnect())->select($sql3);

        $sql1 = "SELECT sanpham.* , loaisanpham.TenLoaiSP ,nhacungcap.TenNCC  FROM sanpham 
        JOIN loaisanpham on sanpham.MaLoaiSP = loaisanpham.MaLoaiSP
        JOIN nhacungcap on sanpham.MaNCC =  nhacungcap.MaNCC 
        WHERE MaSP = '$masp'";
        $result1 = (new Connnect())->select($sql1);



        break;
    case 'update':
        $sql = "UPDATE sanpham
        SET 
            TenSP = '$ten',
            AnhSP = '$file_name',
            GiaSP = '$gia',
            MaLoaiSP = '$maloai',
            SoLuongSP = '$soluong',
            ManHinh = '$manhinh',
            Camera = '$camera',
            DungLuong = '$dungluong',
            Chip = '$chip',
            MaNCC = '$mancc' 

        WHERE MaSP = '$masp' ";
        (new Connnect())->excute($sql);
        break;
    case 'delete':
        $sql = "update sanpham set IsDeleted = 1
        where MaSP ='$ma'";
        (new Connnect())->excute($sql);
        break;
    case 'search': // tìm kiếm

        $so_sanpham_1_trang = 5; //số sản phẩm trong một trang
        $sql_sanpham = "SELECT COUNT(*) FROM sanpham 
        WHERE TenSP LIKE '%$timkiem%' AND IsDeleted = 0 LIMIT $so_sanpham_1_trang"; //Đếm số sản phẩm

        $result = (new Connnect())->select($sql_sanpham); // mảng sản phẩm
        $each = mysqli_fetch_array($result); // kết quả sản phẩm
        $so_sanpham = $each['COUNT(*)']; // tổng số sản phẩm

        $so_trang = ceil($so_sanpham / $so_sanpham_1_trang); //số phân trang
        $bo_qua = $so_sanpham_1_trang * ($trang - 1); // bỏ qua số sản phẩm đã được phân trang trước đó

        $sql = "SELECT * FROM sanpham 
        WHERE TenSP LIKE '%$timkiem%' AND IsDeleted = 0 LIMIT $so_sanpham_1_trang OFFSET $bo_qua"; //Hiển thị sản phẩm chưa được phân trang 
        $result = (new Connnect())->select($sql);
        break;
    case 'characters':

        $so_sanpham_1_trang = 5; //số sản phẩm trong một trang
        $sql_sanpham = "SELECT COUNT(*) FROM sanpham WHERE  IsDeleted = 0"; //Đếm số sản phẩm

        $result = (new Connnect())->select($sql_sanpham); // mảng sản phẩm

        $each = mysqli_fetch_array($result); // kết quả sản phẩm
        $so_sanpham = $each['COUNT(*)']; // tổng số sản phẩm

        $so_trang = ceil($so_sanpham / $so_sanpham_1_trang); //số phân trang
        $bo_qua = $so_sanpham_1_trang * ($trang - 1); // bỏ qua số sản phẩm đã được phân trang trước đó

        //Sắp xếp kí tự theo thứ tự tăng (giảm) dần
        $sql_tensp = "SELECT * FROM sanpham WHERE IsDeleted = 0 ORDER BY TenSP $kytu  LIMIT $so_sanpham_1_trang OFFSET $bo_qua";
        $result = (new Connnect())->select($sql_tensp);

        break;
    case 'price':

        $so_sanpham_1_trang = 5; //số sản phẩm trong một trang
        $sql_sanpham = "SELECT COUNT(*) FROM sanpham WHERE  IsDeleted = 0"; //Đếm số sản phẩm

        $result = (new Connnect())->select($sql_sanpham); // mảng sản phẩm

        $each = mysqli_fetch_array($result); // kết quả sản phẩm
        $so_sanpham = $each['COUNT(*)']; // tổng số sản phẩm

        $so_trang = ceil($so_sanpham / $so_sanpham_1_trang); //số phân trang
        $bo_qua = $so_sanpham_1_trang * ($trang - 1); // bỏ qua số sản phẩm đã được phân trang trước đó

        //Sắp xếp giá sản phẩm  theo thứ tự tăng(giảm) dần
        $sql_giasp = "SELECT * FROM sanpham WHERE IsDeleted = 0 ORDER BY GiaSP $gia 
            LIMIT $so_sanpham_1_trang OFFSET $bo_qua";

        $result = (new Connnect())->select($sql_giasp);

        break;
    case 'pricerange':

        $so_sanpham_1_trang = 5; //số sản phẩm trong một trang
        $bo_qua = $so_sanpham_1_trang * ($trang - 1); // bỏ qua số sản phẩm đã được phân trang trước đó

        $demsoluong = "SELECT * FROM sanpham 
        WHERE GiaSP >= $min_price AND GiaSP <= $max_price AND IsDeleted = 0";

        $result2 = (new Connnect())->select($demsoluong);

        $sql_loc_gia = "SELECT * FROM sanpham 
        WHERE GiaSP >= $min_price AND GiaSP <= $max_price  LIMIT $so_sanpham_1_trang OFFSET $bo_qua";

        $result = (new Connnect())->select($sql_loc_gia);

        $so_sanpham = mysqli_num_rows($result2);
        $so_trang = ceil($so_sanpham / $so_sanpham_1_trang); //số phân trang

        break;
}
