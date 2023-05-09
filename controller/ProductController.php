<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        $trang = 1;
        if (isset($_GET['pagination'])) {
            $trang = $_GET['pagination'];
        }

        $timkiem = '';
        if (isset($_GET['timkiem'])) {
            $timkiem = $_GET['timkiem'];
        }

        require '../../model/ProductModel.php';
        require 'products/index.php';
        break;
    case 'create': // Hiển thị form thêm sản phẩm
        require '../../model/ProductModel.php';
        require 'products/create.php';
        break;
    case 'store': // Hiển thị dữ liệu lên form
        $ten = $_POST['ten'];
        $anh = $_FILES['anh'];
        $folder = '../../public/image/';

        //Cắt chuỗi thành mảng
        $file_extension = explode('.', $anh["name"])[1];

        $file_name =  time() . '.' . $file_extension;
        //Lưu ảnh theo thời gian
        $path_file = $folder . $file_name;

        // Di chuyển file vào thư mục
        move_uploaded_file($anh["tmp_name"], $path_file);
        $gia = $_POST['gia'];

        $maloai = $_POST['maloai'];
        $mancc = $_POST['maNCC'];
        $soluong = $_POST['soLuong'];
        $manhinh = $_POST['manHinh'];
        $camera = $_POST['camera'];
        $dungluong = $_POST['dungLuong'];
        $chip = $_POST['chip'];

        require '../../model/ProductModel.php';
        //require 'products/index.php';

        // header('location: ../../view/admin');
        break;
    case 'edit': // Sửa thông tin sản phẩm
        $masp = $_GET['ma'];
        require '../../model/ProductModel.php';
        require 'products/edit.php';


        // header('location: ../../view/admin');
        break;
    case 'update':
        $masp = $_POST['masp'];
        $ten = $_POST['ten'];
        $photo_new = $_FILES['photo_new'];

        if ($photo_new['size'] > 0) {
            $folder = '../../public/image/';

            //Cắt chuỗi thành mảng
            $file_extension = explode('.', $photo_new["name"])[1];

            $file_name =  time() . '.' . $file_extension;
            //Lưu ảnh theo thời gian
            $path_file = $folder . $file_name;

            // Di chuyển file vào thư mục
            move_uploaded_file($photo_new["tmp_name"], $path_file);
        } else {
            $file_name = $_POST['photo_old'];
        }

        $gia = $_POST['gia'];
        $maloai = $_POST['maloai'];
        $soluong = $_POST['soLuong'];
        $manhinh = $_POST['manHinh'];
        $camera = $_POST['camera'];
        $dungluong = $_POST['dungLuong'];
        $chip = $_POST['chip'];
        $mancc = $_POST['maNCC'];

        require '../../model/ProductModel.php';
        echo "updatesuccess";
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require '../model/ProductModel.php';
        break;
    case 'search':
        // Để không bị lỗi khi không đọc được timkiem trên url 

        $timkiem = '';
        if (isset($_GET['timkiem'])) {
            $timkiem = $_GET['timkiem'];
        }

        // Để không bị lỗi khi không đọc được trang trên url 
        $trang = 1;
        if (isset($_GET['pagination'])) {
            $trang = $_GET['pagination'];
        }
        require '../../model/ProductModel.php';
        require 'products/index.php';
        // header('location: index.php');
        break;
    case 'characters':

        $trang = 1;
        if (isset($_GET['pagination'])) {
            $trang = $_GET['pagination'];
        }

        $kytu =  isset($_GET['kytu']) ? $_GET['kytu'] : '';

        // $gia =  isset($_GET['gia']) ? $_GET['gia'] : '';

        require '../../model/ProductModel.php';
        require 'products/index.php';

        break;
    case 'price':

        $trang = 1;
        if (isset($_GET['pagination'])) {
            $trang = $_GET['pagination'];
        }

        // $kytu =  isset($_GET['kytu']) ? $_GET['kytu'] : '';

        $gia =  isset($_GET['gia']) ? $_GET['gia'] : '';

        require '../../model/ProductModel.php';
        require 'products/index.php';

        break;
    case 'pricerange':

        $trang = 1;
        if (isset($_GET['pagination'])) {
            $trang = $_GET['pagination'];
        }

        $min_price =  isset($_GET['min_price']) ? $_GET['min_price'] : '';
        $max_price =  isset($_GET['max_price']) ? $_GET['max_price'] : '';

        require '../../model/ProductModel.php';
        require 'products/index.php';

        break;
    default:
        echo "Nhập linh tinh gì đấy !";
}
