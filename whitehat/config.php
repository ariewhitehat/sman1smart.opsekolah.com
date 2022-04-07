<?php
class databases
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "kelulusan";
    var $connection;

    function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    function register($username, $password, $nama)
    {
        $insert = mysqli_query($this->connection, "INSERT INTO peserta_didik VALUES ('','$username','$password','$nama')");
        return $insert;
    }

    function signin($username, $password, $remember)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM whitehat WHERE whitehat_email='$username'");
        $data_user = $query->fetch_array();
        if (password_verify($password, $data_user['whitehat_password'])) {
            if ($remember) {
                setcookie('whitehat_email', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('whitehat_name', $data_user['whitehat_name'], time() + (60 * 60 * 24 * 5), '/');
                setcookie('whitehat_level', $data_user['whitehat_level'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['whitehat_email'] = $username;
            $_SESSION['whitehat_name'] = $data_user['whitehat_name'];
            $_SESSION['whitehat_level'] = $data_user['whitehat_level'];
            $_SESSION['is_signin'] = TRUE;
            return TRUE;
        }
    }

    function resignin($username)
    {
        $query = mysqli_query($this->connection, "SELECT * FROM whitehat WHERE whitehat_email='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['whitehat_email'] = $username;
        $_SESSION['whitehat_name'] = $data_user['whitehat_name'];
        $_SESSION['whitehat_level'] = $data_user['whitehat_level'];
        $_SESSION['is_signin'] = TRUE;
    }
}
