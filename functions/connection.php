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



    // Classe gestisce la connessione al database
    class DB {

        // stringa di connessione al database
        protected $conn;
        // variabile che contiene di dati della tabella richiesta
        protected $data = array();
        //variabile che contiene il nome della tabella
        protected $table;

        // Costruttore che prende in input i dati necessari alla connessione
        function __construct(string $servername, string $username, string $password, string $dbname, string $port) {
            // variabile contenente l'oggetto del DB
            $db = new dbObj($servername, $username, $password, $dbname, $port);
            // variabile con la stringa di connessione
            $connString =  $db->getConnString();
            // salvo la variabile nella classe
            $this->conn = $connString;
        }
        
        // Funzione che prende in input il nome di una tabella del DB e ne restisce l'array dei record
        public function getTable(string $table) {
            $this->$table = $table;
            // query di selezione
            $query = "SELECT * FROM public.\"$table\"";
            // estrazione dei record dal DB
            $queryRecords = pg_query($this->conn, $query) 
                or die("error to fetch table data");
            // salvataggio dei record nell'array
            $data = pg_fetch_all($queryRecords);
            // return dell'array dei record
            return $data;
        }

        public function setValue(string $riga, string $colonna) {
            // query di update
            $query = "UPDATE public.\"$this->$table\"
                SET $colonna = 'f'
                WHERE ID = $riga";
            pg_query($this->conn, $query);
            pg_close($conn);
        }
    }

?>