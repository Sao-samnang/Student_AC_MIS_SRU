<?php

include("connection.php");
class action extends Connection
{
    private $conn;
    public function Connections()
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
        $this->Connections();
    }
    public function lastId()
    {
        $sql = "SELECT userId FROM `tbl_useradmin` ORDER BY userId DESC LIMIT 1";
        $res = $this->conn->query($sql);
        $row = $res->fetch_array();
        return $row[0];
    }
    public function InsertData($tbl,$value){
        // '', '" . $post_title . "','" . $post_des . "','" . $post_img . "','" . $post_date . "','".$post_status."'
        $sql = "INSERT INTO $tbl VALUES($value)";
        $this->conn->query($sql);
    }
}
