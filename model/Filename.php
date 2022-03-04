<?php
/**
 * Author Afkar on 7/4/2021
 * Project Department Virtual File
 **/
class Filename
{
    private $con;

    function __construct()
    {
        include_once("database/DBConnection.php");
        $db = new Database();
        $this->con = $db->connect();
    }


    public function getAllRecord($table)
    {
        $pre_stmt = $this->con->prepare("SELECT * FROM " . $table);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        $rows = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }
        return "NO_DATA";
    }
}


