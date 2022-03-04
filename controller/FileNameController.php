<?php


include_once("../database/DBConnection.php");
include_once("../model/Subject.php");
include_once("../model/Document.php");
include_once("../controller/ManageController.php");

//Add FileName
if (isset($_POST["file_name"])) {
    $obj = new Document();
    $result = $obj->addFileName($_POST["file_name"],$_POST["file_number"]);
    echo $result;
    exit();
}

//Fetch File Name
if (isset($_POST["get_file_name"])) {
    $obj = new Subject();
    $rows = $obj->getAllRecord("file_details");
    foreach ($rows as $row) {
        echo "<option value='".$row["fid"]."'>".$row["file_name"]."</option>";
    }
    exit();
}

//Delete file_name
if (isset($_POST["deleteFile_name"])) {
    $m = new Document();
    $result = $m->deleteRecord("file_details","fid",$_POST["id"]);
    echo $result;
}

//Manage file_name
if (isset($_POST["manageFile_name"])) {
    $m = new ManageController();
    $result = $m->manageRecordWithPagination("file_details",$_POST["pageno"]);
    $rows = $result["rows"];
    $pagination = $result["pagination"];
    if (count($rows) > 0) {
        $n = (($_POST["pageno"] - 1) * 5)+1;
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $row["file_number"]; ?></td>
                <td><?php echo $row["file_name"]; ?></td>
                <td>
                    <a href="#" did="<?php echo $row['fid']; ?>" class="btn btn-danger btn-sm del_filename">Delete</a>
                    <a href="#" eid="<?php echo $row['fid']; ?>" data-toggle="modal" data-target="#update_FileName" class="btn btn-info btn-sm edit_filename">Edit</a>
                </td>
            </tr>
            <?php
            $n++;
        }
        ?>
        <tr><td colspan="5"><?php echo $pagination; ?></td></tr>
        <?php
        exit();
    }
}

//Update File Name
if (isset($_POST["update_FileName"])) {
    $m = new Subject();
    $result = $m->getSingleRecord("file_details","fid",$_POST["id"]);
    echo json_encode($result);
    exit();
}

//Update Record after getting data
if (isset($_POST["fileNameUpdate"])) {
    $m = new Subject();
    $id = $_POST["fid"];
    $name = $_POST["fileNameUpdate"];
    $file_number = $_POST["file_number"];
    $result = $m->update_record("file_details",["fid"=>$id],["file_name"=>$name , "file_number"=>$file_number]);
    echo $result;
}