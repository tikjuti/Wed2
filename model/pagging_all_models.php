<?php
include 'sanpham.php';
$arrayproduct = getAllproducts();
$totalrecords = $arrayproduct->num_rows;
$totalpage = $totalrecords % 4 == 0 ? $totalrecords / 4 : floor($totalrecords / 4) + 1;
echo (json_encode($totalpage, JSON_UNESCAPED_UNICODE));



?>