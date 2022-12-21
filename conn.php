<?php
    include('config.php');

    class Connection extends configDb
    {
        public $conn;
        protected $servername,$username,$password;
        
        function __construct() 
        {
            $this->conn = new mysqli($this->servername,$this->username,$this->password);
        
            //check connection
            if($this->conn->connect_error)
            {
                die("Connection failed: ".$this->conn->connect_error);
    
            }
            else
            {
                echo "Connected successfully";
            }
            return $this->conn;
        }

        function __destruct()
        {
            $this->servername = NULL;
            $this->username = NULL;
            $this->password = NULL;
            $this->conn =NULL;
        }
    }
?>
