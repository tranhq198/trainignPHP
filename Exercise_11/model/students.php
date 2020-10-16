<?php

require_once "functions.php";

class students extends functions
{
    public function delete($id, $table)
    {
        $sql = "DELETE FROM $table WHERE  `id` = '$id'";
        $res = $this->conn->query($sql);
        $res == false ?? true;

    }

    public function add ($name, $code, $year_of_birth,$phone, $address)
    {
        $sql = "INSERT INTO students(`name`,`code`,`year_of_birth`,`phone,address`)
                VALUES ('$name','$code','$year_of_birth','$phone','$address')";
        $res = mysqli_query($this->conn, $sql);

        return $res == 1;
    }

    public function edit ($id, $table)
    {

    }

}