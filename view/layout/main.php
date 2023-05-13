<?php
require './model/Connect.php';
// if(!isset($_SESSION['giohang']))
// {
//     $_SESSION['giohang']=[];
// }
include("../model/user.php");
if (function_exists("checkuser") == FALSE) {
    function checkuser($user, $pass)
    {
        include("../model/connectdb.php");
        // $conn = connectdb();
        $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE Username='" . $user . "' AND Password='" . $pass . "'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if (count($kq) > 0) return $kq[0]['MaPQ'];
        else return 0;
    }
}
if ((isset($_POST['login'])) && ($_POST['login'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $kq = getuserinfo($user, $pass);
    $role = $kq[0]['MaPQ'];
    if ($role == 1) {
        $_SESSION['MaPQ'] = $role;
        header('location: ../WEDNANGCAO/view/admin/index.php');
    } else {
        $_SESSION['MaPQ'] = $role;
        $_SESSION['iduser'] = $kq[0]['MaTK'];
        $_SESSION['username'] = $kq[0]['Username'];
        header('location: index.php');
    }
}

include("../model/donhang.php");

if (isset($_GET['list'])) {
    // $tam=$_GET['list'];
    switch ($_GET['list']) {
        case 'thoat': {
                unset($_SESSION['MaPQ']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('location: index.php');
                break;
            }
        case 'sanpham': {
                include("link_phone.php");
                break;
            }
        case 'dienthoai': {
                include("mid_phone.php");
                break;
            }

        case 'addcart': {
                if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                    $masp = $_POST['masp'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                        $soluongsp = $_POST['sl'];
                    } else {
                        $soluongsp = 1;
                    }
                    $fg = 0;
                    //kiemtrasp
                    //bị trùng
                    $i = 0;
                    if (isset($_SESSION['giohang'])) {
                        foreach ($_SESSION['giohang'] as $item) {
                            if ($item[1] == $tensp) {
                                $soluongmoi = $soluongsp + $item[3];
                                $_SESSION['giohang'][$i][3] = $soluongmoi;
                                $fg = 1;
                                break;
                            }
                            $i++;
                        }
                    }
                    if ($fg == 0) {
                        $item = array($masp, $tensp, $giasp, $soluongsp);
                        $_SESSION['giohang'][] = $item;
                    }

                    // header('location:index.php?list=giohang');

                }
                include("cart.php");
                break;
            }
        case 'sanphamdienthoai': {
                include("product-phone-0.php");
                break;
            }
        case 'giohang': {
                include("cart.php");
                break;
            }
        case 'delcart': {

                if (isset($_SESSION['giohang'])) {
                    unset($_SESSION['giohang']);
                }
                include("cart.php");
                break;
            }
        case 'delcartproduct': {
                if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
                    //xóa 1 phân phầnt tử
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
                }
                include("cart.php");
                break;
            }
        case 'thanhtoan':
            if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
                // lấy dữ liệu
                $tongdonhang = $_POST['tongdonhang'];
                $hoten = $_POST['hoten'];
                $phone = $_POST['phone'];
                $diachi = $_POST['diachi'];
                $mnv = nhanvien();
                $makh = $_SESSION['makh'];
                $date = $_SESSION['date'];

                $tinhtrang = 0;
                $mahd = taomoidonhang($makh, $mnv, $date, $diachi, $hoten, $phone, $tongdonhang, $tinhtrang);
                $a = $_SESSION['soluong'];
                $b = $_SESSION['sanpham'];
                $c = $_SESSION['thanhtien'];
                $count = count($a);
                $i = 1;
                while ($count > 1) {
                    $ct = cthd($mahd, $b[$i], $a[$i], $c[$i]);
                }
                // tạo đơn hàng//
                // trả về 1 đibw hàng

                // if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                //     foreach($_SESSION['giohang'] as $item){
                //         addtocart($iddh)
                //     }
                // }
                unset($_SESSION['giohang']);
                unset($_SESSION['soluong']);
                unset($_SESSION['sanpham']);
                unset($_SESSION['thanhtien']);
                include("donhangthanhtoan.php");
                break;
            }
            // case 'login':{
            //     include("../model/user.php");
            //     if(function_exists("checkuser")==FALSE){
            //     function checkuser($user,$pass){
            //     include("../model/connectdb.php");
            //     $conn=connectdb();
            //     $stmt = $conn->prepare("SELECT * FROM taikhoan WHERE Username='".$user."' AND Password='".$pass."'");
            //     $stmt->execute();
            //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //     $kq=$stmt->fetchAll();
            //     if(count($kq)>0) return $kq[0]['MaPQ'];
            //     else return 0;
            //     }
            //     }
            //         if((isset($_POST['login']))&&($_POST['login'])){  

            //             $user=$_POST['user'];
            //             $pass=$_POST['pass'];
            //             $kq= getuserinfo($user,$pass);
            //             $role=$kq[0]['MaPQ'];
            //             if($role==1){
            //                 $_SESSION['MaPQ']=$role;
            //                 header('location: http://toidicode.com');
            //             }
            //             else{
            //                 $_SESSION['MaPQ']=$role;
            //                 $_SESSION['iduser']=$kq[0]['MaTK'];
            //                 $_SESSION['username']=$kq[0]['Username'];
            //                 header('location: index.php');
            //                 break;
            //             }
            //         }

            //     break;
            // }
    }
} else {
    if ((isset($_GET['name']))) {
        include("search.php");
    } else {
        $tam = '';
        include("content_mid.php");
    }
}


        // if($tam=='sanpham')
        // {
        //     include("link_phone.php");
        // }
        // else if($tam=='dienthoai')
        // {
        //     include("mid_phone.php");
        // }
        // else if($tam=='addcart')
        // {
        //     if(isset($_POST['themgiohang'])&&($_POST['themgiohang']))
        //     {
        //         $masp=$_POST['masp'];
        //         $tensp=$_POST['tensp'];
        //         $giasp=$_POST['giasp'];
        //         $soluongsp=1;
        //         $item=array($masp,$tensp,$giasp,$soluongsp);
        //         $_SESSION['giohang'][]=$item;
        //         // header('location:index.php?list=giohang');

        //     }
        //     include("cart.php");

        // }
        // else if($tam=='sanphamdienthoai')
        // {
        //     include("product-phone-0.php");
        // }
        // else if($tam=='giohang')
        // {
        //     include("cart.php");
        // }
