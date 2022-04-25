<?php

    include("connection.php");

    class Table {

        protected $conn;
        protected $data = array();

        function __construct(string $servername, string $username, string $password, string $dbname, string $port) {
            $db = new dbObj($servername, $username, $password, $dbname, $port);
            $connString =  $db->getConnString();
            $this->conn = $connString;
        }
        
        public function getTable(string $table) {
            $query = "SELECT * FROM public.\"$table\"";
            $queryRecords = pg_query($this->conn, $query) 
                or die("error to fetch table data");
            $data = pg_fetch_all($queryRecords);
            return $data;
        }
    }

?>