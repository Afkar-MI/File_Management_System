<?php


class Document
{
    private $con;

    function __construct()
    {
        include_once("../database/DBConnection.php");
        $db = new Database();
        $this->con = $db->connect();
    }


// Add file name
    public function addFileName($file_name,$file_number){
        $pre_stmt = $this->con->prepare("INSERT INTO `file_details` (`file_name`,`file_number`)  VALUES (?,?)");
        $pre_stmt->bind_param("ss",$file_name ,$file_number);
        $result = $pre_stmt->execute() or die($this->con->error);
        if ($result) {
            return "FILE_NAME_ADDED";
        }else{
            return 0;
        }
    }
    public function deleteRecord($table,$pk,$id){
        $pre_stmt = $this->con->prepare("DELETE FROM ".$table." WHERE ".$pk." = ?");
        $pre_stmt->bind_param("i",$id);
        $result = $pre_stmt->execute() or die($this->con->error);
        if ($result) {
            return "DELETED";
        }
        return "It Can be Delete";
    }



}