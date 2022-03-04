<?php

include_once("../database/DBConnection.php");
include_once("../model/Subject.php");
include_once("../controller/ManageController.php");

//To get Subject
if (isset($_POST["getSubject"])) {
    $obj = new Subject();
    $rows = $obj->getAllRecord("subject");
    foreach ($rows as $row) {
        echo "<option value='".$row["cid"]."'>".$row["subject_name"].$row["subject_code"]."</option>";
    }
    exit();
}

//Add Subject
if (isset($_POST["subject_code"]) AND isset($_POST["subject_name"])) {
    $obj = new Subject();
    $result = $obj->addSubject($_POST["subject_code"],$_POST["subject_name"]);
    echo $result;
    exit();
}

//Delete Subject
if (isset($_POST["deleteSubject"])) {
    $m = new Subject();
    $result = $m->deleteRecord("subject","sid",$_POST["id"]);
    echo $result;
}


//Getting Record for Update Subject
if (isset($_POST["updateSubject"])) {
    $m = new Subject();
    $result = $m->getSingleRecord("subject","sid",$_POST["id"]);
    echo json_encode($result);
    exit();
}

//Update Record after getting data
if (isset($_POST["subjectUpdate"])) {
    $m = new Subject();
    $id = $_POST["sid"];
    $name = $_POST["subjectUpdate"];
    $subject_name =$_POST["subject_name"];
    $result = $m->update_record("subject",["sid"=>$id],["subject_code"=>$name,"subject_name"=>$subject_name]);
    echo $result;
}


//Manage Subject
if (isset($_POST["manageSubject"])) {
    $m = new ManageController();
    $result = $m->manageRecordWithPagination("subject", $_POST["pageno"]);
    $rows = $result["rows"];
    $pagination = $result["pagination"];
    if (count($rows) > 0) {
        $n = (($_POST["pageno"] - 1) * 5) + 1;
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $row["subject_code"]; ?></td>
                <td><?php echo $row["subject_name"]; ?></td>
                <td>
                    <a href="#" did="<?php echo $row['sid']; ?>" class="btn btn-danger btn-sm del_cat">Delete</a>
                    <a href="#" eid="<?php echo $row['sid']; ?>" data-toggle="modal" data-target="#update_subject" class="btn btn-info btn-sm edit_cat">Edit</a>
                </td>
            </tr>
            <?php
            $n++;
        }
        ?>
        <tr>
            <td colspan="5"><?php echo $pagination; ?></td>
        </tr>
        <?php
        exit();

    }
}

