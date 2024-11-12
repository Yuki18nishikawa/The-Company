<?php

      class Database
      {
             private $server_name      = "localhost";
             private $username           = "root";
             private $password            = "root";
             private $db_name             = "the_company";
             protected $conn;

             public function __construct()
             {

                    $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
                    // msqli = Represents a connection between PHP and a MySQL database.
                    // $this->conn is now the object the class mysqli
                    // $this->conn holds the connection to the db

                    if($this->conn->connect_error){
                        die("Unable to connect to the database:  " . $this->conn->connect_error);
                    }
             }
      }

?>
