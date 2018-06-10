<?php
class Items{
 
    private $conn;
    private $table_name = "Stats";
 
    public $id;
    public $uid;
    public $health;
    public $ad;
    public $ap;
    public $ar;
    public $mr;
 
    public function __construct($db){
        $this->conn = $db;
    }
    function readOne(){
 
        // query to read single record
        $query = "SELECT
                    *
                FROM
                    " . $this->table_name . "
                WHERE
                    uid = ?";
     
        // prepare query statement
        $stmt = $this->conn->prepare( $query );
     
        // bind id of product to be updated
        $stmt->bindParam(1, $this->id);
     
        // execute query
        $stmt->execute();
     
        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        // set values to object properties
        $this->id = $row['id'];
        $this->uid = $row['uid'];
        $this->health = $row['health'];
        $this->ad = $row['ad'];
        $this->ap = $row['ap'];
        $this->ar = $row['ar'];
        $this->mr = $row['mr'];
    }
}
