<?php
// error_reporting(0);
class Connnect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'wednangcao';

    private function cnt()
    {
        $connect = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->cnt();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }
    public function excute($sql)
    {
        $connect = $this->cnt();
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }
    public function last_id($sql)
    {
        $connect = $this->cnt();
        mysqli_query($connect, $sql);
        $last_id = mysqli_insert_id($connect);
        mysqli_close($connect);
        return $last_id;
    }
}