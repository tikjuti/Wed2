<?php
session_start();
unset($_SESSION['MaPQ']);
unset($_SESSION['iduser']);
unset($_SESSION['namekh']);
unset($_SESSION['namenv']);
unset($_SESSION['arrTenCN']);
unset($_SESSION['arrPQ']);
header('location: http://localhost/WEDNANGCAO/index.php');
