<?php

class Connection {
    
    private $mysqli;
    
    public function __construct()
    {
        require '../config/config.php'; 
        $this->mysqli = new mysqli(
                                    $server,
                                    $user,
                                    $psw,
                                    $db
                                );
        if ($this->mysqli->connect_error) {
            die('Nie udane połączenie. Błąd: ' . $this->mysqli->connect_error);
        }
    }

    public function query($sql)
    {
        $result = $this->mysqli->query($sql);
        if ($result == false) {
            die(sprintf("SQL: %s, Błąd: %s", $sql, $this->mysqli->error));
        }
        return $this->lastResult = $result;
    }
}
