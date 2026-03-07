<?php

class Database{

     public $connection;

    public  function __construct()
    
        {
            
                $dns = "mysql:host=localhost;port=3306;dbname=posts;user=root;chaset=utf8mp4";

                $this->connection = new PDO($dns);
        }
    
    public function query($query)
        {


                $statment =  $this->connection->prepare($query);
                $statment->execute();

                return $statment;

                
            
        }
}
