<?php

    //database connection properties e.g name of our database,password for it,etc
//    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "rento";

    $db = new PDO('mysql:host=localhost;dbname='  . $database. ';charset=utf8' ,$user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//check connection



    //connection property
//    $conn = new mysqli($host, $user, $password, $database);
//
//    //check connection
//    if($conn->connect_error){
//        die("Connection failed: " . $conn->connect_error);
//        }
//
//    $conn -> close();

//class DBController
//{
//    // Database Connection Properties
//    protected $host = 'localhost';
//    protected $user = 'root';
//    protected $password = '';
//    protected $database = "rento";
//
//    // connection property
//    public $con = null;
//
//    // call constructor
//    public function __construct()
//    {
//        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
//        if ($this->con->connect_error){
//            echo "Fail " . $this->con->connect_error;
//        }
//
//
//    }
//
//    public function __destruct()
//    {
//        $this->closeConnection();
//    }
//
//    // for mysqli closing connection
//    protected function closeConnection(){
//        if ($this->con != null ){
//            $this->con->close();
//            $this->con = null;
//        }
//    }
//}
