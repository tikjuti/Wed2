<?php
include 'sanpham.php';
$arrayproduct = getAllproducts();
$totalrecords = $arrayproduct->num_rows;
$totalpage = $totalrecords % 8 == 0 ? $totalrecords / 8 : floor($totalrecords / 8) + 1;
echo (json_encode($totalpage, JSON_UNESCAPED_UNICODE));
