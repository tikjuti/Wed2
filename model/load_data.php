<?php
include 'sanpham.php';
$page = $_GET['page'];
$arrayproduct = getAllproduct($page);
$data = '';
foreach ($arrayproduct as $item) {
    $data .= '<div class="card-product" style="width: 25%;" style=" margin: 0rem">';
    $data .= '<a href="index.php?control=sanphamdienthoai&id=' . $item['MaSP'] . '"style="width:100%">';
    $data .= '<div>';
    $data .= '   <img class="card-img-top p-2"
                src="public/image/' . $item['AnhSP'] . '"
        alt="Card image cap">';
    $data .= '</div>';
    $data .= ' </a>';
    $data .= '<div class="card-body">';
    $data .= '<h5 class="card-title"><a  href="index.php?control=sanphamdienthoai&id=' . $item['MaSP'] . '"    ">';
    $data .= $item['TenSP'];
    $data .= '</a></h5>';
    $data .= '<div class="card-text"><span>';
    $data .= $item['ManHinh'];
    $data .= '</span></div>';
    $data .= '<div class="card-text mt-3 mb-2">';
    $data .= '<div class="btn btn-primary btn-memory">';
    $data .= $item['DungLuong'];
    $data .= '</div>';
    $data .= '</div>';
    $data .= '<p class="card-text price-drop mb-0"></p>';
    $data .= '<p class="card-text product">';
    $data .= $item['GiaSP'];
    $data .= '</p>';
    $data .= '<a href="index.php?control=sanphamdienthoai&id=' . $item['MaSP'] . '"';
    $data .= 'class="btn btn-primary d-flex justify-content-center">Mua ngay</a>';
    $data .= '</div>';
    $data .= '</div>';
}
echo $data;
