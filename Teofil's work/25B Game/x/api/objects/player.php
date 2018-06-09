<?php
class Player{
 
    // database connection and table name
    private $conn;
    private $table_name = "Characters";
 
    // object properties
    public $id;
    public $uid;
    public $level;
    public $stage;
    public $class;
    public $money;
    public $st_points;
    public $experience;
    public $score;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
 
    // select all query
    $query = "SELECT
                *
            FROM
                " . $this->table_name . "
                ORDER BY Score DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}

// used when filling up the update product form
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
    $this->level = $row['level'];
    $this->stage = $row['stage'];
    $this->class = $row['class'];
    $this->money = $row['money'];
    $this->st_points = $row['st_points'];
    $this->experience = $row['experience'];
    $this->score = $row['Score'];
}
}