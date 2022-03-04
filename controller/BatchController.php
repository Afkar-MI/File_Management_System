<?php
include_once("../database/DBConnection.php");
include_once("../model/Batch.php");
include_once("../model/Subject.php");
include_once("../controller/ManageController.php");

//Add Batch
if (isset($_POST["batch_name"])) {
    $obj = new Batch();
    $result = $obj->addBatch($_POST["batch_name"]);
    echo $result;
    exit();
}

//Fetch Batch
if (isset($_POST["getBatch"])) {
    $obj = new Batch();
    $rows = $obj->getAllRecord("batches");
    foreach ($rows as $row) {
        echo "<option value='".$row["bid"]."'>".$row["batch_name"]."</option>";
    }
    exit();
}

//Delete Subject
if (isset($_POST["deleteBatch"])) {
    $m = new Subject();
    $result = $m->deleteRecord("batches","bid",$_POST["id"]);
    echo $result;
}

//Manage Batch
if (isset($_POST["manageBatch"])) {
    $m = new ManageController();
    $result = $m->manageRecordWithPagination("batches",$_POST["pageno"]);
    $rows = $result["rows"];
    $pagination = $result["pagination"];
    if (count($rows) > 0) {
        $n = (($_POST["pageno"] - 1) * 5)+1;
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $n; ?></td>
                <td><?php echo $row["batch_name"]; ?></td>
                <td>
                    <a href="#" did="<?php echo $row['bid']; ?>" class="btn btn-danger btn-sm del_brand">Delete</a>
                    <a href="#" eid="<?php echo $row['bid']; ?>" data-toggle="modal" data-target="#update_batch" class="btn btn-info btn-sm edit_brand">Edit</a>
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


//Update Batch
if (isset($_POST["updateBatch"])) {
    $m = new Subject();
    $result = $m->getSingleRecord("batches","bid",$_POST["id"]);
    echo json_encode($result);
    exit();
}

//Update Record after getting data
if (isset($_POST["batchUpdate"])) {
    $m = new Subject();
    $id = $_POST["bid"];
    $name = $_POST["batchUpdate"];
    $result = $m->update_record("batches",["bid"=>$id],["batch_name"=>$name]);
    echo $result;
}
