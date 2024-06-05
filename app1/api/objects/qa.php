<?php
class Qa{
 
    private $conn;
    private $table_name = "qas";
 
    public $qaid;
    public $quest;
    public $answ;
    public $hyper;
    public $active;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
    
        $query = "SELECT
                    `qaid`, `quest`, `answ`, `hyper`, `active`
                FROM
                    " . $this->table_name . " 
                ORDER BY
                    qaid DESC";
    
        $stmt = $this->conn->prepare($query);
        $stmt->execute();    
        return $stmt;
    }

    function read_single(){
    
        $query = "SELECT
                    `qaid`, `quest`, `answ`, `hyper`, `active`
                FROM
                    " . $this->table_name . " 
                WHERE
                    qaid= '".$this->qaid."'";
    
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function create(){
           
        $query = "INSERT INTO  ". $this->table_name ." 
                 (`qaid`, `quest`, `answ`, `hyper`, `active`)
                  VALUES
                 ('".$this->qaid."', '".$this->quest."', '".$this->answ."', '".$this->hyper."', '".$this->active."')";
    
        $stmt = $this->conn->prepare($query);   
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;
    }
 
    function update(){
    
        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    quest='".$this->quest."', answ='".$this->answ."', hyper='".$this->hyper."', active='".$this->active."'
                WHERE
                    qaid='".$this->qaid."'";
    
        $stmt = $this->conn->prepare($query);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function delete(){
        
        $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                    qaid= '".$this->qaid."'";
        
        $stmt = $this->conn->prepare($query);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

	
}