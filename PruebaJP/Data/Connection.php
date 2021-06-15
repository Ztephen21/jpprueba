<?php

class Connection
{

    // variables de conexion.
    public $server;
    public $user;
    public $password;
    public $db;

    /* constructor */

    public function __construct()
    {
        if (gethostname() == 'qwerty-yuk') {
            $this->isActive = false;
            $this->server = "192.168.1.1";
            $this->user = "jp";
            $this->password = "12345opl*";
            $this->db = "jpdatabase";
        } else {
            $this->isActive = false;
            $this->server = "127.0.0.1";
            $this->user = "root";
            $this->password = "";
            $this->db = "jpdatabase";
        }
    }

    // metodo de conexion.

    public function getConexion()
    {
        try {
            $dsn  = 'mysql:host=' . $this->server . ';dbname=' . $this->db;
            $conn = new PDO($dsn, $this->user, $this->password, null);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return null;
        }
    }
}
