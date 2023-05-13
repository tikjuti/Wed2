<?php
function register($user, $pass)
{
    include('../Adminphp/config.php');
    $sql_register = "SELECT * FROM taikhoan WHERE Username='" . $user . "' AND Password='" . $pass . "'";
    $query_register = mysqli_query($conn, $sql_register);
    $row_register = mysqli_fetch_array($query_register);
    // if(count($row_register)>0){
    return $row_register[0]['MaPQ'];

    // else{
    //     return 0;
    // }
}

function checkUserExists($username)
{
    $mess = false; //Khong ton tai
    $sql = "SELECT * FROM taikhoan WHERE Username = '$username'";
    $conn = new Connnect();
    $result = $conn->select($sql);
    $string = mysqli_fetch_assoc($result);
    if ($string > 0) {
        $mess = true;
    }
    return $mess;
}

function checkEmailExists($email)
{
    $mess = false; //Khong ton tai
    $sql = "SELECT * FROM khachhang WHERE EmailKH = '$email'";
    $conn = new Connnect();
    $result = $conn->select($sql);
    $string = mysqli_fetch_assoc($result);
    if ($string > 0) {
        $mess = true;
    }
    return $mess;
}

function createUser($user, $pass, $name, $phone, $birthday, $email, $address)
{
    $column_acccount = "Username,Password,MaPQ,IsDeleted";
    $sql = "INSERT INTO taikhoan ($column_acccount) VALUES ('$user','$pass','2','0')";
    $conn = new Connnect();
    $id = $conn->last_id($sql);

    $column_user = "TenKh, SDTKH, NgaySinh, EmailKH, DiaChi, MaTK, IsDeleted";
    $sql = "INSERT INTO khachhang ($column_user) VALUES ('$name','$phone','$birthday','$email','$address',$id,'0')";
    $conn = new Connnect();
    $conn->excute($sql);
}
