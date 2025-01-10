<?php

include("connection.php");
class action extends Connection
{
    private $conn;
    public function Connect()
    {
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname,
        );
        $this->conn->set_charset('utf8');
    }
    public function __construct()
    {
        $this->Connect();
    }
    public function lastId($tbl,$field)
    {
        $sql = "SELECT userId FROM $tbl where permission='$field' ORDER BY userId DESC LIMIT 1";
        $res = $this->conn->query($sql);
        $row = $res->fetch_array();
        if($row==null) return null;
        else return $row['userId'];
    }
    public function InsertData($tbl, $value)
    {
        // '', '" . $post_title . "','" . $post_des . "','" . $post_img . "','" . $post_date . "','".$post_status."'
        $sql = "INSERT INTO $tbl VALUES($value)";
        $this->conn->query($sql);
    }
    public function selectEmail($tbl,$email)
    {
        $sql = "SELECT * FROM $tbl where email='$email'";
        $res = $this->conn->query($sql);
        if ($res->num_rows ==1) return true;
    }
    public function selectOtp($tbl,$otp,$email)
    {
        $sql = "SELECT *FROM $tbl where $otp=$otp and email='$email'";
        $res = $this->conn->query($sql);
        $row = $res->fetch_array();
        if ($row==null) return false;
        else return $row['email'];
    }
    public function emailOtpdelete($tbl,$email)
    {
        $sql = "Delete FROM $tbl where email='$email'";
        $this->conn->query($sql);
    }
    public function updatePass($tbl,$pass,$email){
        $sql="UPDATE $tbl SET `password`='$pass' WHERE email='$email'";
        $this->conn->query($sql);
    }
}
