<?php


class dbConnect
{
    private $server_username = "root";
    private $server_password = "";
    private $server_host = "localhost";
    private $database = 'studentmanage';

    protected $conn;

    public function connect() {
        if (!isset($this->conn)) {
            $this->conn = new mysqli($this->server_host,$this->server_username,$this->server_password,$this->database);

            mysqli_set_charset($this->conn, 'utf8');
            if (!$this->conn){
                echo "kết nối thất bại";
                exit();
            }
        }
        return $this->conn;
    }
}