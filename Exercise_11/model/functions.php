

require_once('dbconnect.php');


class functions extends dbConnect
{
    public function _construct()
    {
        parent::connect();
    }

    function insert($username, $password)
    {

        $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";
        $res = mysqli_query($this->conn, $sql);
        return $res == 1;
    }

    function getData($username, $password)
    {
        var_dump($this->conn);
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
        $res = mysqli_query($this->conn, $sql);
        $num_rows = mysqli_num_rows($res);
        return $num_rows == true;
    }
}