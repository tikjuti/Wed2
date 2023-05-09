<?php
require("Connect.php");
function checkuser($user, $pass)
{

    $sql = ("SELECT * FROM taikhoan WHERE Username='" . $user . "' AND Password='" . $pass . "'");
    $query = (new Connnect())->select($sql);
    $array = mysqli_fetch_array($query);
    if (count($array) > 0)
        return $array[0]['MaPQ'];
    else
        return 0;
}
function getuserinfo($user, $pass)
{
    $sql = ("SELECT * FROM taikhoan WHERE Username='" . $user . "' AND Password='" . $pass . "'");
    $query = (new Connnect())->select($sql);
    return $query;
}




?>