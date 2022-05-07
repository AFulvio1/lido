<?php

    class dbObj {

        var $servername, $username, $password, $dbname, $port, $conn;

        function __construct(string $servername, string $username, string $password, string $dbname, string $port) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
            $this->port = $port;
        }

        function getConnString() {
            $con = pg_connect("host=".$this->servername." dbname=".$this->dbname." password=".$this->password." user=".$this->username." port=".$this->port."") 
                or die("Connection failed: ".pg_last_error());

            if (pg_last_error()) {
                printf("Connect failed: %s\n", pg_last_error());
                exit();
            }
            else {
                $this->conn = $con;
            }
            return $this->conn;
        }
    }

?>