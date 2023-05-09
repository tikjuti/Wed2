<?php
include 'Connect.php';
$sql = "SELECT * FROM sanpham,loaisanpham WHERE loaisanpham.MaLoaiSP=sanpham.MaLoaiSP AND MaSP !=0";
if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
    $min_price = $_POST['min_price'];
    $max_price = $_POST['max_price'];
    $sql .= " AND `GiaSP` BETWEEN '$min_price' AND '$max_price'";
}
if (isset($_POST['category']) && $_POST['category'] != "") {
    $sql .= " AND TenLoaiSP IN ('" . implode("','", $_POST['category']) . "')";
}
if (isset($_POST['screen']) && $_POST['screen'] != "") {
    $sql .= " AND ManHinh IN ('" . implode("','", $_POST['screen']) . "')";
}
if (isset($_POST['camera']) && $_POST['camera'] != "") {
    $sql .= " AND Camera IN ('" . implode("','", $_POST['camera']) . "')";
}
if (isset($_POST['memory']) && $_POST['memory'] != "") {
    $sql .= " AND DungLuong IN ('" . implode(',', $_POST['memory']) . "')";
}
if (isset($_POST['chip']) && $_POST['chip'] != "") {
    $sql .= " AND Chip IN ('" . implode(',', $_POST['chip']) . "')";
}

if (isset($_POST['sorting']) && $_POST['sorting'] != "") {
    $sorting = implode("','", $_POST['sorting']);
    if ($sorting == 'newest' || $sorting == '') {
        $sql .= " ORDER BY MaSP DESC";
    } else if ($sorting == 'low') {
        $sql .= " ORDER BY GiaSP ASC";
    } else if ($sorting == 'high') {
        $sql .= " ORDER BY GiaSP DESC";
    }
} else {
    $sql .= " ORDER BY MaSP DESC";
}
$array = (new Connnect())->select($sql);
$totalrecords = $array->num_rows;
$totalpage = $totalrecords % 4 == 0 ? $totalrecords / 4 : floor($totalrecords / 4) + 1;
echo (json_encode($totalpage, JSON_UNESCAPED_UNICODE));

?>