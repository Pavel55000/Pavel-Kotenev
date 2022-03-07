<?php

class External
{

    private $user_name = "root";
    private $host_name = "localhost";
    private $password = "";
    private $data_base = "register_bd_new";
    private $mysql;

    public function __construct()
    {
        $this->newConnection();
    }

    public function query($sql)
    {
        $sql = htmlspecialchars($sql);
        if (!$sql){
            return null;
        }
        if(!$this->mysql) {
            $this->newConnection();
        }
        return $this->mysql->query($sql);
    }

    private function newConnection()
    {
        if(!$this->mysql) {
            $this->mysql = new mysqli($this->host_name, $this->user_name, $this->password, $this->data_base);
            if (mysqli_connect_errno()) {
                die("Failed to connect to MySQL: " . mysqli_connect_error());
            }
        }
    }

    public function closeConnection()
    {
        if($this->mysql) {
            $this->mysql->close();
        }
    }
}