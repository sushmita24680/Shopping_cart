<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename1;
        public $tablename2; 
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Productdb",
        $tablename1 = "Producttb",
        // $tablename2 ="Descriptiontb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename1 = $tablename1;
    //    $this->tablename2 = $tablename2;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename1
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25)  UNIQUE KEY ,
                             old_price FLOAT,
                             product_price FLOAT,
                             product_image VARCHAR (100),
                             product_overview VARCHAR (150),
                             point_1 VARCHAR (200),
                             point_2 VARCHAR (200) ,
                             point_3 VARCHAR (200) ,
                             product_video VARCHAR (100)
                            );";
                            

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : ". mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename1"; 
        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }

     
    }
    function queryMysql($query)
  {
    $result = $this->con->query($query);
    if (!$result) die($this->con->error);
    return $result;
  }
function getRows($result){
  	$row = $result->fetch_array(MYSQLI_ASSOC);
  	return $row;
  }

     public function getProductData($product_id){
        // $sql = "SELECT * FROM $this->tablename1 WHERE productid=$product_id"; 
        // $result = mysqli_query($this->con, $sql);

        // if(mysqli_num_rows($result) > 0){
        //     return $result;
        // } else return false;
        $res = $this->queryMysql("SELECT * FROM $this->tablename1 WHERE id=$product_id");
        return $this->getRows($res);

     
    }
  
}






