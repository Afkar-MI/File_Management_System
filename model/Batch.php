<?php

/**
 * Author Afkar on 7/4/2021
 * Project Department Virtual File
 **/

class Batch
{
    private $con;

    function __construct()
    {
        include_once("../database/DBConnection.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    public function addBatch($batch_name){
        $pre_stmt = $this->con->prepare("INSERT INTO `batches`(`batch_name`) VALUES (?)");
        $pre_stmt->bind_param("s",$batch_name);
        $result = $pre_stmt->execute() or die($this->con->error);
        if ($result) {
            return "BATCH_ADDED";
        }else{
            return 0;
        }
    }

    public function getAllRecord($table){
        $pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        $rows = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        return "NO_DATA";
    }
}