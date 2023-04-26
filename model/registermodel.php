<?php
    function register($user,$pass){
        include('../Adminphp/config.php');
        $sql_register="SELECT * FROM taikhoan WHERE Username='".$user."' AND Password='".$pass."'";
        $query_register=mysqli_query($conn,$sql_register);
        $row_register=mysqli_fetch_array($query_register);
        // if(count($row_register)>0){
            return $row_register[0]['MaPQ'];
        
        // else{
        //     return 0;
        // }
    }

?>