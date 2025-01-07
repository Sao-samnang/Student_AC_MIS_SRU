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
    public function lastId($tbl)
    {
        $sql = "SELECT userId FROM $tbl ORDER BY userId DESC LIMIT 1";
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
    public function selectEmail($tbl)
    {
        $sql = "SELECT email FROM $tbl";
        $res = $this->conn->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_array()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
