<?php
/**
 * Author Afkar on 7/4/2021
 * Project Department Virtual File
 **/
class Subject
{
    private $con;

    function __construct()
    {
        include_once("../database/DBConnection.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    public function addSubject($subject_code,$subject_name){

        $pre_stmt = $this->con->prepare("INSERT INTO `subject`(`subject_code`, `subject_name`) VALUES (?,?)");
        $pre_stmt->bind_param("ss",$subject_code,$subject_name);
        $result = $pre_stmt->execute() or die ($this->con->error);
        if($result){
            return "SUBJECT_ADDED";
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

    public function deleteRecord($table,$pk,$id){

            $pre_stmt = $this->con->prepare("DELETE FROM ".$table." WHERE ".$pk." = ?");
            $pre_stmt->bind_param("i",$id);
            $result = $pre_stmt->execute() or die($this->con->error);
            if ($result) {
                return "DELETED";
            }
            //return "It Can be Delete";
    }

    public function getSingleRecord($table,$pk,$id){
        $pre_stmt = $this->con->prepare("SELECT * FROM ".$table." WHERE ".$pk."= ? LIMIT 1");
        $pre_stmt->bind_param("i",$id);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    public function update_record($table,$where,$fields){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            // id = '5' AND m_name = 'something'
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            //UPDATE table SET m_name = '' , qty = '' WHERE id = '';
            $sql .= $key . "='".$value."', ";
        }
        $sql = substr($sql, 0,-2);
        $sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
        if(mysqli_query($this->con,$sql)){
            return "UPDATED";
        }
    }

}

/*$opr = new Subject();
echo $opr->addSubject("CS13001");*/
/*
$obj = new Category();
echo $obj->deleteRecord("category","cid",8);*/

/*$obj = new Category();
print_r($obj->getSingleRecord("category","cid",1));*/

/*$opr = new Category();
echo $opr->deleteRecord("category","cid",1);*/

?>